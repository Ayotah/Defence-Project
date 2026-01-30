<?php
session_start();
require('../conn/conn.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../register.php");
    exit;
}

/* =======================
   GET & SANITIZE INPUTS
======================= */
$name     = trim($_POST['name'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$email    = trim($_POST['email'] ?? '');
$role     = $_POST['role'] ?? '';
$password = $_POST['password'] ?? '';
$confirm  = $_POST['confirm_password'] ?? '';

/* =======================
   BASIC VALIDATION
======================= */
if ($name === '' || $phone === '' || $email === '' || $role === '' || $password === '') {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

if ($password !== $confirm) {
    die("Passwords do not match.");
}

if (strlen($password) < 6) {
    die("Password must be at least 6 characters.");
}

/* =======================
   CHECK DUPLICATE EMAIL
======================= */
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    die("Email already registered.");
}
$check->close();

/* =======================
   HASH PASSWORD

======================= */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* =======================
   INSERT USER
======================= */
$stmt = $conn->prepare(
    "INSERT INTO user1 (name, phone, email, role, password)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssss", $name, $phone, $email, $role, $hashedPassword);

if (!$stmt->execute()) {
    die("Registration failed. Try again.");
}

$user_id = $stmt->insert_id;
$stmt->close();

/* =======================
   CREATE SESSION
======================= */
$_SESSION['user_id'] = $user_id;
$_SESSION['name']    = $name;
$_SESSION['email']   = $email;
$_SESSION['role']    = $role;

/* =======================
   REDIRECT BY ROLE
======================= */
if ($role === 'farmer') {
    header("Location: ../farmerdashboard.php");
} else {
    header("Location: ../products.php");
}
exit;

?>
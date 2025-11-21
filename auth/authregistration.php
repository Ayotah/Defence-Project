<?php
session_start();

// Include database connection
include '../conn/conn.php';

$name=$email=$phone=$role=$password=$confirm_password ="";
$_nameErr= $_emailErr=  $_phoneErr=$_roleErr=$_passwordErr=$_confirm_passwordErr= "";

// Function to sanitize
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["name"])) {
        $_nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["phone"])) {
        $_phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["email"])) {
        $_emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["role"])) {
        $_roleErr = "Role is required";
    } else {
        $role = test_input($_POST["role"]);
    }

    if (empty($_POST["password"])) {
        $_passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["confirm_password"])) {
        $_confirm_passwordErr = "Confirm Password is required";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
    }


    if ($password !== $confirm_password) {
        $_confirm_passwordErr = "Passwords do not match";
    } 
    else {

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare insert
        $stmt = $conn->prepare("INSERT INTO user2 (name, email, phone, role, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $role, $hashed_password);

        if ($stmt->execute()) {

            if($role === 'farmer'){
                header("Location: ../farmerdashboard.php");
                exit();
            } else {
                header("Location: ../products.php");
                exit();
            }

        } else {
            echo "Error: " . $stmt->error;  
        }

        $conn->close();
    }
}
?>

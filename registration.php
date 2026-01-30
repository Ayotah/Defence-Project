<?php
$name=$email=$phone=$role=$password=$confirm_password ="";
$_nameErr= $_emailErr=  $_phoneErr=$_roleErr=$_passwordErr=$_confirm_passwordErr= "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - AgroConnect</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fb;
    }

    .navbar { background-color: #28a745; }

    .register-card {
      border-radius: 20px;
      padding: 40px;
      background: #fff;
      box-shadow: 0 25px 60px rgba(0,0,0,0.15);
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0); }
    }

    .input-group-text {
      background-color: #e9f7ef;
      border: none;
      color: #28a745;
      font-size: 1.1rem;
    }

    .form-control, .form-select { border-radius: 10px; padding: 12px; }

    .form-control:focus, .form-select:focus {
      border-color: #28a745;
      box-shadow: 0 0 0 0.2rem rgba(40,167,69,0.25);
    }

    .btn-success { border-radius: 30px; padding: 12px; font-weight: 600; }

    footer {
      background-color: #28a745;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">AgroConnect</a>
  </div>
</nav>

<section class="d-flex align-items-center justify-content-center" style="min-height:100vh;">
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-6">

        <div class="register-card">
          <h3 class="text-center fw-bold mb-4">Create Your Account</h3>

          <form id="registerForm" method="POST" action="auth/authregistration.php">

            <!-- Name -->
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" name="name" id="name" placeholder="John Leo" required>
              </div>
              <small class="text-danger" id="nameError"></small>
              <small class="text-danger"><?php echo $_nameErr; ?></small>
            </div>

            <!-- Phone -->
            <div class="mb-3">
              <label class="form-label">Phone Number</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="+237677887818" required>
              </div>
              <small class="text-danger" id="phoneError"></small>
              <small class="text-danger"><?php echo $_phoneErr; ?></small>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="johnleo@gmail.com" required>
              </div>
              <small class="text-danger" id="emailError"></small>
              <small class="text-danger"><?php echo $_emailErr; ?></small>
            </div>

            <!-- Role -->
            <div class="mb-3">
              <label class="form-label">Register As</label>
              <select class="form-select" name="role" id="role" required>
                <option value="">Select role</option>
                <option value="farmer">Farmer</option>
                <option value="buyer">Buyer</option>
              </select>
              <small class="text-danger" id="roleError"></small>
              <small class="text-danger"><?php echo $_roleErr; ?></small>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <small class="text-danger" id="passwordError"></small>
              <small class="text-danger"><?php echo $_passwordErr; ?></small>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
              <label class="form-label">Confirm Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
              </div>
              <small class="text-danger" id="confirmPasswordError"></small>
              <small class="text-danger"><?php echo $_confirm_passwordErr; ?></small>
            </div>

            <button type="submit" class="btn btn-success w-100">Register Account</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<footer>
  <p class="mb-0">© 2025 AgroConnect | Built with ❤️ for Farmers</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Validation -->
<script>
  document.getElementById('registerForm').addEventListener('submit', function(e) {
    let valid = true;

    // Clear previous errors
    document.getElementById('nameError').textContent = "";
    document.getElementById('phoneError').textContent = "";
    document.getElementById('emailError').textContent = "";
    document.getElementById('roleError').textContent = "";
    document.getElementById('passwordError').textContent = "";
    document.getElementById('confirmPasswordError').textContent = "";

    // Name validation
    const name = document.getElementById('name').value.trim();
    if(name === "" || !/^[a-zA-Z\s]+$/.test(name)) {
      document.getElementById('nameError').textContent = "Please enter a valid name.";
      valid = false;
    }

    // Phone validation
    const phone = document.getElementById('phone').value.trim();
    if(phone === "" || !/^\+?\d{7,15}$/.test(phone)) {
      document.getElementById('phoneError').textContent = "Please enter a valid phone number.";
      valid = false;
    }

    // Email validation
    const email = document.getElementById('email').value.trim();
    if(email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      document.getElementById('emailError').textContent = "Please enter a valid email.";
      valid = false;
    }

    // Role validation
    const role = document.getElementById('role').value;
    if(role === "") {
      document.getElementById('roleError').textContent = "Please select a role.";
      valid = false;
    }

    // Password validation
    const password = document.getElementById('password').value;
    if(password.length < 6) {
      document.getElementById('passwordError').textContent = "Password must be at least 6 characters.";
      valid = false;
    }

    // Confirm password
    const confirm_password = document.getElementById('confirm_password').value;
    if(password !== confirm_password) {
      document.getElementById('confirmPasswordError').textContent = "Passwords do not match.";
      valid = false;
    }

    if(!valid) e.preventDefault();
  });
</script>

</body>
</html>

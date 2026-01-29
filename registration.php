<?php
$name=$email=$phone=$role=$password=$confirm_password ="";
$_nameErr= $_emailErr=  $_phoneErr=$_roleErr=$_passwordErr=$_confirm_passwordErr= "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - AgroConnect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">Home</a>
    </div>
  </nav>

  <section class="register-section py-5 mt-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-4">Register as a Farmer or Buyer</h2>
      <form class="card p-4 mx-auto shadow" style="max-width: 600px;" method="POST" action="auth/authregistration.php" id="form">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="John Leo" required>
          <span class="text-danger"><?php echo $_nameErr;?></span>
        </div>
         <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="+237677887818" required>
          <span class="text-danger"><?php echo $_phoneErr;?></span>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="johnleo@gmail.com" required>
          <span class="text-danger"><?php echo $_emailErr;?></span>
        </div>
        <div class="mb-3">
          <label for="role" class="form-label">Role</label>
          <select class="form-select" id="role" name="role"  required>
            <span class="text-danger"><?php echo $_roleErr;?></span>
            <option value="">Select</option>
            <option value="farmer">Farmer</option>

            <option value="buyer">Buyer</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          <span class="text-danger"><?php echo $_passwordErr;?></span>
        </div>
          <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
          <span class="text-danger"><?php echo $_confirm_passwordErr;?></span>
        </div>
        <button type="submit" class="btn btn-success w-100">Register</button>
      </form>
    </div>
  </section>

  <footer class="bg-success text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 AgroConnect | Built with Ayo❤️ for Farmers</p>
  </footer>
<script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

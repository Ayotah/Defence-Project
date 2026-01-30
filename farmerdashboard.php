<?php
require('../conn/conn.php');
session_start();

/* =======================
   PROTECT PAGE
======================= */
if (!isset($_SESSION['user_id'])) {
    header("Location: ../registration.php");
    exit;
}

/* =======================
   ALLOW FARMERS ONLY
======================= */
if ($_SESSION['role'] !== 'farmer') {
    header("Location: ../products.php");
    exit;
}

/* =======================
   SESSION DATA
======================= */
$name      = htmlspecialchars($_SESSION['name']);
$farmer_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer Dashboard - AgroConnect</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fb; }
    .navbar { background-color: #28a745; }
    .navbar-brand { font-weight: 700; color: white !important; }
    .nav-link { color: white !important; margin-left: 20px; }
    .nav-link:hover { text-decoration: underline; }

    .dashboard-header { padding: 100px 20px 40px; text-align: center; }
    .dashboard-header h2 { font-weight: 700; margin-bottom: 10px; }
    .dashboard-header p { font-size: 1.1rem; color: #555; }

    .product-form { max-width: 700px; margin: 0 auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    .product-form button { background-color: #28a745; color: white; border: none; border-radius: 10px; padding: 12px 20px; font-weight: 600; transition: 0.3s; }
    .product-form button:hover { background-color: #1e7e34; }

    footer { background-color: #28a745; color: white; text-align: center; padding: 20px 0; margin-top: 60px; font-size: 0.9rem; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">AgroConnect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<!-- Dashboard Header -->
<section class="dashboard-header">
  <div class="container">
    <h2>Welcome, <?php echo $name; ?></h2>
    <p>Add your produce to start selling directly to buyers.</p>
  </div>
</section>

<!-- Add Product Form -->
<section class="product-section">
  <div class="container">
    <form class="product-form" action="products.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productName" name="name" placeholder="e.g. Tomatoes" required>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="e.g. 15" step="0.01" required>
      </div>
      <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" class="form-control" id="unit" name="unit" placeholder="e.g. kg / bag" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
      </div>
      <button type="submit" class="btn w-100">Add Product</button>
    </form>
  </div>
</section>

<footer>
  <p>© 2025 AgroConnect | Built with Ayo❤️ for Farmers</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

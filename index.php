<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgroConnect - Connecting Farmers and Buyers</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fb;
    }

    /* Navbar */
    .navbar {
      background-color: #28a745; /* green theme */
    }
    .navbar-brand {
      font-weight: 700;
      color: white !important;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
    }
    .navbar-brand img {
      width: 40px;
      margin-right: 10px;
    }
    .nav-link {
      color: white !important;
      margin-left: 20px;
      font-weight: 500;
    }
    .nav-link:hover {
      text-decoration: underline;
    }

    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 120px 20px;
      position: relative;
    }
    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 15px;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }
    .hero .btn {
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 30px;
      transition: 0.3s;
    }
    .hero .btn:hover {
      background-color: #1e7e34;
      color: white;
    }

    /* Footer */
    footer {
      background-color: #28a745;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <!-- Logo (replace with your own later) -->
        <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Logo">
        AgroConnect
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./products.html">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="./registration.html">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="./contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero d-flex align-items-center">
    <div class="container hero-content">
      <h1>Connecting Farmers and Buyers Directly</h1>
      <p>Buy fresh produce straight from the source and support local agriculture.</p>
      <a href="./products.html" class="btn btn-light btn-lg mb-4">Browse Products</a>
      <a href="./registration.html" class="btn btn-outline-light btn-lg ms-3">Register Now</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 AgroConnect | Built with Ayo❤️ for Farmers</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


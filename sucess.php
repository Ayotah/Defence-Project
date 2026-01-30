<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Sent - AgroConnect</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fb;
    }

    .navbar {
      background-color: #28a745;
    }
    .navbar-brand {
      font-weight: 700;
      color: white !important;
    }
    .nav-link {
      color: white !important;
      margin-left: 20px;
    }
    .nav-link:hover {
      text-decoration: underline;
    }

    .success-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 50px 20px;
    }

    .success-card {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .success-card h2 {
      font-weight: 700;
      margin-bottom: 20px;
      color: #28a745;
    }

    .success-card p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .btn-home {
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 600;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn-home:hover {
      background-color: #1e7e34;
      color: white;
    }

    footer {
      background-color: #28a745;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">AgroConnect</a>
    </div>
  </nav>

  <!-- Success Message -->
  <section class="success-section">
    <div class="success-card">
      <h2>Thank You!</h2>
      <p>Your message has been successfully sent. We will get back to you shortly.</p>
      <a href="index.php" class="btn-home">Back to Home</a>
    </div>
  </section>

  <footer>
    <p>© 2025 AgroConnect | Built with ❤️ for Farmers</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

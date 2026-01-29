<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgroConnect – Connecting Farmers & Buyers</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- Bootstrap Icons -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    rel="stylesheet"
  />

  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet"
  />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fb;
    }

    /* ================= NAVBAR ================= */
    .navbar {
      background-color: #28a745;
      padding: 15px 0;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
    }

    /* ================= HERO ================= */
    .hero {
      padding: 120px 0 80px;
      background-color: #ffffff;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.1rem;
      margin: 20px 0;
      color: #555;
    }

    .hero img {
      max-width: 100%;
      border-radius: 20px;
      animation: float 6s ease-in-out infinite;
    }

    /* ================= WHY US ================= */
    .why-us {
      padding: 80px 0;
      background-color: #f1f7f3;
    }

    .why-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px 25px;
      text-align: center;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
      height: 100%;
      animation: float 5s ease-in-out infinite;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .col-md-4:nth-child(1) .why-card { animation-delay: 0s; }
    .col-md-4:nth-child(2) .why-card { animation-delay: 1s; }
    .col-md-4:nth-child(3) .why-card { animation-delay: 2s; }

    .why-card:hover {
      transform: translateY(-18px) scale(1.03);
      box-shadow: 0 25px 60px rgba(40, 167, 69, 0.25);
    }

    .why-icon {
      width: 70px;
      height: 70px;
      background-color: #28a745;
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      margin: 0 auto 20px;
    }

    .why-card h5 {
      font-weight: 600;
      margin-bottom: 15px;
    }

    .why-card p {
      color: #666;
      font-size: 0.95rem;
    }

    /* ================= FLOAT KEYFRAMES ================= */
    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-12px); }
      100% { transform: translateY(0); }
    }

    /* ================= FOOTER ================= */
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

  <!-- ================= NAVBAR ================= -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">AgroConnect</a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">Products</a></li> -->
          <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ================= HERO ================= -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Connecting Farmers and Buyers Directly</h1>
          <p>
            AgroConnect empowers farmers by giving them direct access to buyers,
            ensuring better prices and fresher produce.
          </p>
          <a href="#" class="btn btn-success btn-lg">Get Started</a>
        </div>

        <div class="col-md-6 text-center">
          <img
            src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae"
            alt="Agriculture"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- ================= WHY CHOOSE US ================= -->
  <section class="why-us">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Why Choose AgroConnect?</h2>
        <p class="text-muted">
          A smarter way to connect agriculture with technology
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="why-card">
            <div class="why-icon">
              <i class="bi bi-people-fill"></i>
            </div>
            <h5>Direct Connection</h5>
            <p>
              Farmers and buyers interact directly without unnecessary middlemen.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-icon">
              <i class="bi bi-cash-stack"></i>
            </div>
            <h5>Fair Pricing</h5>
            <p>
              Transparent pricing that benefits both farmers and buyers.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="why-card">
            <div class="why-icon">
              <i class="bi bi-basket-fill"></i>
            </div>
            <h5>Fresh Produce</h5>
            <p>
              Get fresh agricultural products straight from the farm.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer>
    <p>© 2025 AgroConnect | Built with ❤️ by Ayo</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

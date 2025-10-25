<?php
header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noodel Nest | Smart Shop Management Syatem</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <style>
      body {
        font-family: "Segoe UI", Arial, sans-serif;
        background: #f9fafb;
        color: #222;
      }

      /* Navbar */
      .navbar {
        background: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      }

      .navbar-brand {
        font-weight: 700;
        color: #5f5f65 !important;
      }

      /* Hero Section */

      .pho {
        border-radius: 50%;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
      }

      .pho:hover {
        transform: scale(1.1);
      }

      .hero {
        padding: 100px 0;
        background: linear-gradient(120deg, #6366f1 0%, #818cf8 100%);
        color: #fff;
        text-align: center;
      }

      .hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
      }

      .hero p {
        font-size: 1.1rem;
        margin-bottom: 25px;
      }

      .hero .btn-primary {
        background: #fff;
        color: #4f46e5;
        font-weight: 600;
        border-radius: 25px;
        padding: 10px 28px;
        transition: 0.3s;
      }

      .hero .btn-primary:hover {
        background: #f1f1f1;
        color: #3730a3;
      }

      /* Features Section */
      .features {
        padding: 80px 0;
      }

      .feature-box {
        background: #fff;
        padding: 30px 20px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
        height: 100%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
      }

      .card {
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 150px;
        height: auto;
        margin-bottom: 10px;

        margin-bottom: 25px;
      }
      /* icon */
      .social-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -40px;
        margin-bottom: 25px;
      }

      .social {
        display: flex;
        align-items: center;
        gap: 15px;
      }

      .social-text {
        font-size: 18px;
        font-weight: 500;
        color: #333;
      }

      /* Stats Section */
      .stats {
        background: #eef2ff;
        padding: 60px 0;
      }

      .stat-box {
        text-align: center;
        padding: 20px;
      }

      .stat-box h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #111;
      }

      .stat-box p {
        color: #555;
        margin-top: 5px;
      }

      /* Footer */
      footer {
        background: #111827;
        color: #9ca3af;
        padding: 40px 0;
      }

      footer a {
        color: #a5b4fc;
        text-decoration: none;
      }

      footer a:hover {
        color: #c7d2fe;
      }

      .map {
        margin-top: 30px;
      }

      .phone-link {
        color: #000;
        text-decoration: none;
        font-size: 18px;
      }

      .phone-link i {
        margin-right: 8px;
      }

      .email-link {
        color: #0d0d0d;
        text-decoration: none;
        font-size: 18px;
      }

      .email-link i {
        margin-right: 8px;
      }
      .feature-box {
        margin-bottom: 25px;
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <img
          src="images/1 (26).jpg"
          alt="photo"
          width="80"
          height="80"
          class="pho"
        />
        <a class="navbar-brand" href="#">Noodle Nest</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.html">Review</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <h1>Trust and Check My Products, Build Qualtity Freedom</h1>
        <p>
          မြန်မာနိုင်ငံ အနံ့ အိမ်ရောက်ငွေချေစနစ်ဖြင့် လက်လီလက်ကား ပို့
          ဆောင်ပေးနေပါပီ။ pay by COD
        </p>
        <a href="#" class="btn btn-primary">Get Started</a>
      </div>
      <div class="map-container text-center mt-4">
        <div class="location text-center mt-3">
          <i class="fa-solid fa-location-dot" style="color: #ff4d4d"></i>
          <span> No. 1217, Zay Street,Thakata Yangon, Myanmar</span>
        </div>

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.930262627982!2d96.15610901429448!3d16.84093902322048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec95c4f3a3ff%3A0x742e74c5e2e8a0f2!2sYangon!5e0!3m2!1sen!2smm!4v1696154467490!5m2!1sen!2smm"
          width="100%"
          height="350"
          style="border: 0; border-radius: 12px"
          allowfullscreen=""
          loading="lazy"
          class="map"
        >
        </iframe>
      </div>
    </section>
    <!-- features -->

    <section class="features">
      <div class="social-container">
        <div class="social">
          <a href="https://www.facebook.com/share/19NBZSdH8E/" target="_blank">
            <i class="fab fa-facebook fa-2x" style="color: #1877f2"></i>
          </a>

          <span class="social-text">Follow us on Facebook & TikTok</span>

          <a
            href="https://www.tiktok.com/@noodlenest2024?_t=ZS-90jqxXoRVNU&_r=1"
            target="_blank"
          >
            <i class="fab fa-tiktok fa-2x" style="color: black"></i>
          </a>
        </div>
      </div>
     

      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">
            All Noodle In Stock Now ! Order From Noodle Nest
          </h2>
          <p class="text-muted">
            Make your order, Clink Phone or Email , and getting in one place.
          </p>
          <div>
            <a href="tel:+959254921890" class="phone-link">
              <i class="fa fa-phone"></i> -> +95 9254321890
            </a>
          </div>
          <div>
            <a href="mailto:noodlenest8597@gmail.com" class="email-link">
              <i class="fa fa-envelope"></i> ->noodlenest8597@gmail.com
            </a>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php?id=1"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (18).jpg" alt="photo" class="card" />
                <h5>Ultra | Vacalno Chicken</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php?id=2"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (1).jpg" alt="photo" class="card" />
                <h5>Shin Shin</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img
                  src="images/1 (1).png"
                  alt="photo"
                  class="card"
                  style="width: 200px"
                />
                <h5>XOXO</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (4).png" alt="photo" class="card" />
                <h5>Ultra | Mala XIang Guo</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (9).png" alt="photo" class="card" />
                <h5>Wah-Lah | Big Size</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (19).jpg" alt="photo" class="card" />
                <h5>Ultra | BBQ</h5>
              </a>
            </div>
          </div>
          <hr style="margin: 30px 0" />
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (21).jpg" alt="photo" class="card" />
                <h5>Ultra | Chili Chicken</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (9).jpg" alt="photo" class="card" />
                <h5>အဲမီး | ရှမ်း ကော်ရည်</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (11).jpg" alt="photo" class="card" />
                <h5>ယိုးဒယား | ကြာပြာ</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (12).jpg" alt="photo" class="card" />
                <h5>Jjang | Korean Kimchi noodle</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (14).jpg" alt="photo" class="card" />
                <h5>NomNom | Seafood Flavour</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (15).jpg" alt="photo" class="card" />
                <h5>NomNom | Chicken Kyay Oh</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img
                  src="images/1 (16).jpg"
                  alt="photo"
                  class="card"
                  style="width: 100px"
                />
                <h5>NomNom | Bean Paste Noodle</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img
                  src="images/1 (17).jpg"
                  alt="photo"
                  class="card"
                  style="width: 180px; height: 100px"
                />
                <h5>NomNom | Spicy Noodle</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (28).jpg" alt="photo" class="card" />
                <h5>Shin Shin | Ah Htaung Flavoured</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (2).jpg" alt="photo" class="card" />
                <h5>Shin Shin | Original Flavoured</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (23).jpg" alt="photo" class="card" />
                <h5>Yum Yum | Vegetable Flavoured</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (7).jpg" alt="photo" class="card" />
                <h5>အဲမီး | မြီးရှည်</h5>
              </a>
            </div>
          </div>
        </div>
        <hr />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img
                  src="images/1 (2).png"
                  alt="photo"
                  class="card"
                  style="height: 120px; width: 150px"
                />
                <h5>NomNom | Mala Xiang Guo</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (20).jpg" alt="photo" class="card" />
                <h5>ယိုးဒယား | မျက်လုံး</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (22).jpg" alt="photo" class="card" />
                <h5>Jumbo | မျက်လုံး</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (24).jpg" alt="photo" class="card" />
                <h5>Yum Yum | Sour Soup Shrimp</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (25).jpg" alt="photo" class="card" />
                <h5>Yum Yum | Xcite</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (13).jpg" alt="photo" class="card" />
                <h5>Jjang | Sour Soup</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (5).jpg" alt="photo" class="card" />
                <h5>အဲမီး | ဆီချက်ခေါက်ဆွဲ</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img src="images/1 (5).png" alt="photo" class="card" />
                <h5>Yum Yum | Chicken Flavour Instant Flat Noodle</h5>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <a
                href="prizing.php"
                style="text-decoration: none; color: inherit"
              >
                <img
                  src="images/1 (3).png"
                  alt="photo"
                  class="card"
                  style="height: 130px"
                />
                <h5>NomNom | Spicy Noodle</h5>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-wallet"></i>
              <h5></h5>
              <p>Quickly record your expenses and see where your money goes.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-wallet"></i>
              <h5></h5>
              <p>Quickly record your expenses and see where your money goes.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-wallet"></i>
              <h5></h5>
              <p>Quickly record your expenses and see where your money goes.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
        </div>
        <hr style="margin: 30px 0" />
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-wallet"></i>
              <h5></h5>
              <p>Quickly record your expenses and see where your money goes.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box text-center">
              <i class="fa-solid fa-chart-pie"></i>
              <h5></h5>
              <p>Visualize your spending with detailed charts and reports.</p>
            </div>
          </div>
        </div>
      </div>
      
    </section>

    <!-- Stats -->
    <section class="stats">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-3 col-6 stat-box">
            <h3>$2,500</h3>
            <p>Total Balance</p>
          </div>
          <div class="col-md-3 col-6 stat-box">
            <h3>$1,200</h3>
            <p>This Month</p>
          </div>
          <div class="col-md-3 col-6 stat-box">
            <h3>5</h3>
            <p>Categories</p>
          </div>
          <div class="col-md-3 col-6 stat-box">
            <h3>$800</h3>
            <p>Budget Left</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p class="mb-1">© Since 2024 Noodel Nest. All rights reserved.</p>
        <p>
          <a href="#">Privacy Policy</a> |
          <a href="#">Terms of Service</a>
        </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!-- kontak.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Anemia Care</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    :root {
  --primary-color: #e91e63;
}
    .hero-section {
      background: linear-gradient(90deg, #e91e63, #4caf50);
      color: white;
      padding: 115px 0;
      text-align: center;
    }
    .hero-section i {
      font-size: 60px;
      margin-bottom: 15px;
    }
    .content-card {
      margin-top: -40px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 30px;
    }
    .contact-info h5 {
      color: #e91e63;
      margin-bottom: 10px;
    }
    .contact-info p {
      margin: 0;
    }
.navbar-brand {
  font-size: 1.5rem;
}
.text-primary {
  color: var(--primary-color) !important;
}

.nav-link {
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
}

.nav-link:hover,
.nav-link.active {
  color: var(--primary-color) !important;
}

.nav-link.active::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 30px;
  height: 2px;
  background: var(--primary-color);
  border-radius: 1px;
}
footer {
  margin-top: 3rem;
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top"
    >
      <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="index.html">
          <i class="fas fa-heartbeat me-2"></i>Anemia Care
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penyebab.php">Penyebab</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tanda-gejala.php">Tanda & Gejala</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="komplikasi.php">Komplikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pencegahan.php">Pencegahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cara-mengatasi.php">Cara Mengatasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="informasi-kontak.php">Informasi kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kuisoner.php"> Kuisoner</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <i class="fas fa-envelope"></i>
    <h1>Kontak Kami</h1>
    <p>Hubungi kami untuk informasi lebih lanjut mengenai Anemia Care</p>
  </div>
</section>

<!-- Content Card -->
<div class="container">
  <div class="content-card">
    <h3 class="mb-4"><i class="fas fa-phone text-danger"></i> Informasi Kontak</h3>
    <div class="row">
      <div class="col-md-6 contact-info">
        <h5><i class="fas fa-map-marker-alt"></i> Alamat</h5>
        <p>Jl. Kesehatan No. 123, Jakarta</p>
      </div>
      <div class="col-md-6 contact-info">
        <h5><i class="fas fa-phone"></i> Telepon</h5>
        <p>(021) 123-4567</p>
      </div>
      <div class="col-md-6 contact-info mt-4">
        <h5><i class="fas fa-envelope"></i> Email</h5>
        <p>info@anemiacare.com</p>
      </div>
      <div class="col-md-6 contact-info mt-4">
        <h5><i class="fas fa-globe"></i> Website</h5>
        <p>www.anemiacare.com</p>
      </div>
    </div>
  </div>
</div>
 <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="mb-0">
              &copy; 2025 Anemia Care. Informasi kesehatan untuk ibu hamil.
            </p>
          </div>
          <div class="col-md-4 text-md-end">
            <small class="text-muted"
              >Selalu konsultasikan dengan tenaga kesehatan</small
            >
          </div>
        </div>
      </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

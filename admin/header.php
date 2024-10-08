<!DOCTYPE html>
<html>

<head>
  <title>Sistem Informasi Laundry </title>
  <link  rel="stylesheet" href="../assets/css/bootstrap.css">
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="../assets/font/bootstrap-icons.min.css">
  
</head>

<body>

  <body style="background: #f0f0f0">
    <!-- Cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
      header("location:../index.php?pesan=belum_login");
    }
    ?>

    <!-- Menu navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php">LAUNDRY SMKN7BE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="background-color: #0000;"><i class="bi bi-house-fill"></i>Dashboard </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pelanggan.php"><i class="bi bi-person-fill"></i>Pelanggan </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi.php"><i class="bi bi-shuffle"></i>Transaksi </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan.php"><i class="bi bi-card-list"></i>Laporan </a>
            </li>
            <li class="nav-item nav-dark bg-dark dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-wrench-adjustable"></i>
                Pengaturan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="harga.php"><i class="bi bi-currency-dollar"></i>pengaturan harga</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="ganti_password.php"><i class="bi bi-lock-fill"></i>ganti password</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i>Log-Out </a>
            </li>
          </ul>
          <span class="navbar-text">
              <h5>Halo, <?php echo $_SESSION['username']; ?>!</h5>
           </span>
        </div>
      </div>
    </nav>
    <!-- akhir menu navigasi -->
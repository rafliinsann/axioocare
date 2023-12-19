<?php 

    session_start();
    require "connect.php";
    if (isset($_SESSION['status'])== "") {
        header('location:/');
    }

    $i = 0;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Axioo Care</title>

    <!-- Css -->
    <link rel="stylesheet" href="assest/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg warna1 navbar1" style="height: 67px;">
        <div class="container-fluid">
          <a class="navbar-brand text-white judul-navbar ms-3" href="/dokter">AxiooCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/dokter">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/about"><u>About</u></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/contact">Contact</a>
              </li>
            </ul>
            <div class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-1">
                  <a class="nav-link text-white" href="#"><img src="assest/img/avatar.png" alt="avatar"></a>
                </li>
                <li class="nav-item me-4">
                <div class="dropdown">
                <button class="nav-link text-white dropdown-toggle" style="margin-top: 15px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">Hi, <?php echo $_SESSION['nama_dokter'] ?>!</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/edit">Edit Profil</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <!-- Navbar End -->

    <!-- Page 1 Start -->

    <div class="container">
      <div class="groundimg1 d-flex align-items-center">
        <h1 class="col-md-6 offset-md-3 judul-navbar text-center" >Kami mengubah cara Anda pergi ke dokter.</h1>
      </div>
    </div>

    <div class="container">
      <h3 class="judul-navbar text-center margin-top" >Berdiri sejak November 2023 untuk memenuhi kebutuhan masyarakat terkait telekonsultasi, Axioo Care berkomitmen untuk melayani dan hadir lebih dekat dengan pasien.</h3>
    </div>

    <!-- Page 1 End -->

    <!-- Page 2 Start -->
    <!-- 1 Start -->
    <div class="container margin-top">
      <div class="row center">
        <div class="col"><img src="/assest/img/bg1.png" alt="" class="rounded-4" ></div>
        <div class="col"><h3 class="judul-navbar" >Hadir dengan sebuah <u class="text-info" >platform</u> layanan telekonsultasi yang terjangkau dan handal untuk Anda.</h3></div>
      </div>
    </div>
    <!-- 1 End -->
    <!-- 2 Start -->
    <div class="container margin-top">
      <div class="row center">
        <div class="col"><h3 class="judul-navbar"><u class="text-info" >Berkomitmen</u> untuk memenuhi kebutuhan pasien yang membutuhkan konsultasi secara aman, cepat dan terpercaya.</h3></div>
        <div class="col"><img src="/assest/img/bg2.png" alt="" class="rounded-4" ></div>
      </div>
    </div>
    <!-- 2 End -->
    <!-- 3 Start -->
    <div class="container margin-top">
      <div class="row center">
        <div class="col"><img src="/assest/img/bg3.png" alt="" class="rounded-4" ></div>
        <div class="col"><h3 class="judul-navbar" >Telah <u class="text-info">bekerjasama</u> dengan berbagai fasilitas kesehatan sehingga Aman bagi Anda untuk melakukan telekonsultasi.</h3></div>
      </div>
    </div>
    <!-- 3 End -->

    <!-- Page 2 End -->

    <!-- Footer Start -->

    <div class="page2">
      <div class="row footer-bg">
        <div class="col m-5 text-white">
          <h4 class="subtitle">Axioo Care</h4>
          <p class="mt-4">axioocare@gmail.com</p>
          <p>0878-0265-1554</p>
          <p>Jl. Bojong Mekar, Nomor 102a, Kecamatan Cibeunying Kaler Kelurahan Cigadung</p>
        </div>
        <div class="col m-5 text-white">
          <h4 class="subtitle">Explore</h4>
          <p class="mt-4">Home</p>
          <p>About</p>
          <p>Services</p>
          <p>Contact</p>
        </div>
        <div class="col m-5 text-white">
          <h4 class="subtitle">Supported By</h4>
          <img class="mt-4" src="assest/img/axioo.png" alt="">
        </div>
    </div>

    <!-- Footer End --> 

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
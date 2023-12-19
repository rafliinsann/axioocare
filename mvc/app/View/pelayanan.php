<?php 

    session_start();
    require "connect.php";
    if (isset($_SESSION['status'])== "") {
        header('location:/');
    }

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
          <a class="navbar-brand text-white judul-navbar ms-3" href="/index">AxiooCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/tentang">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#"><u>Services</u></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/kontak">Contact</a>
              </li>
            </ul>
            <div class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-1">
                  <a class="nav-link text-white" href="#"><img src="assest/img/avatar.png" alt="avatar"></a>
                </li>
                <li class="nav-item me-4">
                <div class="dropdown">
                <button class="nav-link text-white dropdown-toggle" style="margin-top: 15px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">Hi, <?php echo $_SESSION['nama'] ?>!</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <!-- Navbar End -->

    <!-- Home Start -->

    <div style="margin-top: 57px;">
    <p class="text-center jargon">SECURE YOUR HEALTH</p>
    <h1 class="judul-navbar text-center" >Meet Our Best Doctors</h1>
    <div class="container text-center mt-4">
      <div class="row align-items-start">
        <div class="col">
          <img src="assest/img/doktor1.png" alt="">
        </div>
        <div class="col">
          <img src="assest/img/doktor2.png" alt="">
        </div>
        <div class="col">
          <img src="assest/img/doktor3.png" alt="">
        </div>
        <div class="col">
          <img src="assest/img/doktor4.png" alt="">
        </div>
      </div>
    </div>
    <div class="container text-center mt-4">
      <div class="row align-items-center">
        <div class="col">
          <p class="nama-dokter">Dr. Jhon Mayer</p>
          <p style="margin-top: -20px;">Dokter Umum</p>
          <button type="submit" class="warna2 btn-order">Order Now</button>
        </div>
        <div class="col">
          <p class="nama-dokter">Dr. Lionel Mark</p>
          <p style="margin-top: -20px;">Spesialis Bedah</p>
          <button class="warna2 btn-order" >Order Now</button>
        </div>
        <div class="col">
          <p class="nama-dokter">Dr. Ronaldinho</p>
          <p style="margin-top: -20px;">Psikiater</p>
          <button class="warna2 btn-order" >Order Now</button>
        </div>
        <div class="col">
          <p class="nama-dokter">Dr. Susi Japati</p>
          <p style="margin-top: -20px;">Spesialis Anak</p>
          <button class="warna2 btn-order" >Order Now</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Home End -->

    <!-- Sesuai Spesialis Start -->

    <div style="margin-top: 77px;" class="container" >
      <h4 class="subtitle">Cari Sesuai Spesialis</h4>
      <div class="row">
        <div class="col mt-5"><img src="/assest/img/Ellipse 1.jpg" alt=""></div>
        <div class="col mt-5"><img src="/assest/img/Ellipse 2.jpg" alt=""></div>
        <div class="col mt-5"><img src="/assest/img/Ellipse 4.jpg" alt=""></div>
        <div class="col mt-5"><img src="/assest/img/Ellipse 5.jpg" alt=""></div>
        <div class="col mt-5"></div>
        <div class="col mt-5"></div>
      </div>
      <div class="row align-items-center">
        <div class="col"><p>Dokter Umum</p></div>
        <div class="col"><p>Spesialis Anak</p></div>
        <div class="col"><p class="p-2 ms-1">Ahli Bedah</p></div>
        <div class="col"><p class="p-3">Psikiater</p></div>
        <div class="col"></div>
        <div class="col"></div>
      </div>
    </div>

    <!-- Sesuai Spesialis End -->

    <!-- Tutor Start -->
    <div class="container" style="margin-top: 77px;" >
    <h4 class="judul-navbar">Cara Menghubungi Dokter Online</h4>
    <p class="p-p2" >Konsultasi dengan dokter AxiooCare secara online bisa dilakukan dengan cepat. Hanya dengan tiga langkah mudah kamu bisa terhubung dengan dokter yang kamu butuhkan, bisa kamu hubungi 24 jam.</p>
    <ol >
      <h4 class="container">
        <li class="judul-navbar">Langkah Pertama:</li>
      </h4>
      <p class="p-p2 container">Pilih dari dokter-dokter terbaik yang tersedia, dan kirim permintaan untuk berbicara sesuai dengan kebutuhan atau keluhan kesehatanmu.</p>
      <h4 class="container">
        <li class="judul-navbar">Langkah Kedua:</li>
      </h4>
      <p class="p-p2 container">Tunggu dokter. Dokter akan menyetujui permintaan kamu (biasanya dalam satu menit).</p>
      <h4 class="container">
        <li class="judul-navbar">Langkah Terakhir:</li>
      </h4>
      <p class="p-p2 container">Bicara dengan dokter. Saat kamu telah terhubung dengan dokter, silahkan jelaskan kondisi kamu dengan tenang dan jelas dengan tanya dokter AxiooCare.</p>
    </ol>
    </div>

    <!-- Tutor End -->

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
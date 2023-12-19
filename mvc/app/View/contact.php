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
                <a class="nav-link text-white" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><u>Contact</u></a>
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

    <!-- Contact Start -->

    <div class="container margin-top">
        <div class="row align-items-start">
            <div class="col">
                <h1 class="judul-navbar" style="font-size: 75px;" >Contact Us</h1>
                <p class="judul-navbar">Please feel free to contact us and we will get back to you as soon as we can.</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="email">
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>  
            </div>
            <div class="col-md-4 ms-auto text-start">
                <h4 class="judul-navbar mb-3" >Visit Us</h4>
                <p class="paragraf-home">Jl. Bojong Mekar, Nomor 102a, Kecamatan Cibeunying Kaler Kelurahan Cigadung</p>
                <h4 class="judul-navbar mb-3" >Talk To Us</h4>
                <p class="paragraf-home">axioocare@gmail.com</p>
                <p class="paragraf-home">0878-0265-1554</p>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
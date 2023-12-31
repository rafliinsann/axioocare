<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <!-- Css -->
    <link rel="stylesheet" href="assest/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
  </head>
  <body class="warna1">
        <div class="mt-5 container">
            <h1 class="judul-navbar text-center" >Axioo Care</h1>
            <div class="row justify-content-center">
                <div class="col-md-5 white rounded p-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <form action="prosesLogin.php" method="POST">
                        <div class="mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control border-info" placeholder="Masukkan Username..." autocomplete="off" required>
                        </div>
                        <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control border-info" placeholder="Masukkan Password..." required>
                        </div>
                        <div class="text-center">
                        <input type="submit" class="btn bg-info bg-opacity-10 border border-info m-1" name="submit" value="Login">
                        </div>
                        <p class="text-body-white text-center">Tidak punya akun?<a href="register" class="text-reset"><u>Daftar</u></a></p>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assest/css/style.css">
</head>
<body class="warna1">
<div class="container mt-5">
    <h1 class="judul-navbar text-center mb-3">Welcome To Axioo Care!</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-2">
          <div class="card-body">
            <form action="prosesDaftar.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" class="form-control border-info" autocomplete="off" name="nama" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control border-info" autocomplete="off" name="email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nomor Hp:</label>
                <input id="isian-telpon" type="tel" class="form-control border-info" autocomplete="off" name="nomorHp" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control border-info" autocomplete="off" name="ttl" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Username:</label>
                <input type="text" class="form-control border-info" autocomplete="off" name="username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control border-info" autocomplete="off" name="password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn bg-info bg-opacity-10 border border-info m-1">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
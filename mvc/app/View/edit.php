<?php 

session_start();
require "connect.php";
if (isset($_SESSION['status'])== "") {
    header('location:/');
}

$i = 0;


$query = mysqli_query($connect, "SELECT * FROM akun_dokter");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Profile</title>
</head>
<body>

  <div class="container my-5">
    <form action="prosesEdit.php" method="POST">
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Jam Buka:</label>
          <input type="time" class="form-control" name="jam_buka" value="<?php echo $data['jam_buka']?>" >
        </div>
        <div class="col-md-6">
          <label class="form-label">Jam Tutup:</label>
          <input type="time" class="form-control" name="harga_tutup" value="<?php echo $data['jam_tutup']?>">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga:</label>
        <input type="text" class="form-control" name="harga_jasa" value="<?php echo $data['harga_jasa']?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="text" class="form-control" name="email_dokter" value="<?php echo $data['email_dokter']?>">
      </div>
        <button class="btn btn-danger"><a href="/dokter">Cancel</a></button>
        <input type="submit" name="submit" value="Edit">
      </form>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

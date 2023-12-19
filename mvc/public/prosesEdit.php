<?php 


    session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'axioocare');
    
    $id = $_POST['id'];
    $email_dokter = $_POST['email_dokter'];
    $jam_buka = $_POST['jam_buka'];
    $jam_tutup = $_POST['jam_tutup'];
    $harga_jasa = $_POST['harga_jasa'];

    $query = "UPDATE 'akun_dokter' SET id='$id', jam_buka='$jam_buka', jam_tutup='$jam_tutup', harga_jasa='$harga_jasa', email_dokter='$email_dokter' WHERE id='$id' ";

    $result = mysqli_query($connect, $query);

    
    header('location/dokter');

?>
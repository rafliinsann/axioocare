<?php 

    session_start();
    include "connect.php";
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomorHp = $_POST['nomorHp'];
    $ttl = $_POST['ttl'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = "INSERT INTO akun (nama, email, nomorHp, ttl, username, password) VALUES ('$nama', '$email', '$nomorHp', '$ttl', '$username', '$password')";
    
    $result = mysqli_query($connect, $query);
    
    header('location:/login');

?>
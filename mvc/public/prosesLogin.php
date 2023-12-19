<?php 

    session_start();
    // require "connect.php";



    

    function login($username, $password){
        $connect = mysqli_connect('localhost', 'root', '', 'axioocare'); 
        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM akun WHERE username='$username' and password='$password'";
        $query_admin = "SELECT * FROM akun_dokter WHERE username='$username' and password='$password'";
        $data = mysqli_query($connect, $query);
        $cek = mysqli_num_rows($data);    
        if($cek == 0){
            $data2 = mysqli_query($connect, $query_admin);
            $cek2 = mysqli_num_rows($data2);
    
            if($cek2 > 0){
                return $data2->fetch_assoc();
            }
        }
        return $data->fetch_assoc();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $connect = mysqli_connect('localhost', 'root', '', 'axioocare'); 
        $query_admin = "SELECT * FROM akun_dokter WHERE username='$username' and password='$password'";
        $query = "SELECT * FROM akun WHERE username='$username' and password='$password'";
    

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_data = login($username, $password);
    }
    if($user_data){

        $_SESSION['user_data'] = $user_data;

        if($user_data['user_level'] == 1){
            $query_admin = "SELECT * FROM akun_dokter WHERE username='$username' and password='$password'";
            $data2 = mysqli_query($connect, $query_admin);
            $cek2 = mysqli_num_rows($data2);
            $hasil = mysqli_fetch_array($data2) ;
            $_SESSION['nama_dokter'] = $hasil['nama_dokter'];
            $_SESSION['status'] = "login";
            header('location:/dokter');
        }else{
            $query = "SELECT * FROM akun WHERE username='$username' and password='$password'";
            $data = mysqli_query($connect, $query);
            $cek = mysqli_num_rows($data);
            $hasil = mysqli_fetch_array($data) ;
            $_SESSION['nama'] = $hasil['nama'];
            $_SESSION['status'] = "login";
            header('location:/index');
        }
    }else{
            header('location:/login');
        }
?>  
<?php
session_start();
include 'connect.php';

$username = $_POST ['username'];
$password = $_POST ['password'];
$email = $_POST ['email'];

$login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password' and email='$email'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['role']=="admin"){
        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman daashboard admin
        header("location:../Admin/adminpage.php");

    // cek jika user login sebagai user
    }else if($data['role']=="user"){
        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        // alihkan ke halaman daashboard user
        header("location:user/landing.php");

    }
}else{
    // header("login failed");
}
?>
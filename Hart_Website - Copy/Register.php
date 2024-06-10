<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="Regispage.css">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>
    <body>
       
    <div class="wrapper">
        <form action="Register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="email" name="email" required>
                <i class='bx bxs-envelope' ></i>
            </div>                
                    
                <button type="submit" class="btn" name="submit">Sign Up</button>

            <div class="register-link">
                <p>Already have an account? <a href="Loginform.php">Login</a></p>
            </div>

        </form>
    </div>

<?php


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $email = $_POST['email'];
    $role = 'user';

    include_once("connect.php");

    $result = mysqli_query($mysqli,"INSERT INTO user (username, email, Password, role)
    VALUES('$username', '$email', '$password', '$role')");

    if ($result) {
        echo "Data berhasil ditambahkan ke tabel user";
    } else {
        echo "Gagal menambahkan data ke tabel user: " . mysqli_error($mysqli);
    }

    header("location:Loginform.php");
}
?>

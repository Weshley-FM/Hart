<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="regispage.css">
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
            <div class="input-select">
                    <select name="role" id="role" required>
                            <option disable selected > Role </option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>                        
                    </select>
                </div>
                    
                
                <button type="submit" class="btn" name="submit">Add</button>

        </form>
    </div>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $grade = $_POST['grade'];
    echo($password);

    include_once("koneksi.php");

    $result = mysqli_query($mysqli,"INSERT INTO user (username,email,Password,role,grade)
    VALUES('$username','$email','$password','$role','$grade')");

    header("location:adminuser.php");
}
?>
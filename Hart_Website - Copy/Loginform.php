<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="Loginpage.css">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>
    <body>
       
    <div class="wrapper">
        <form action="Loginphp.php" method="post">
            <h1>Login</h1>
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
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <a href="Loginphp.php"><button type="submit" class="btn">Login</button></a>

            <div class="register-link">
                <p>Don't have an account? <a href="Register.php">Register</a></p>
            </div>

        </form>
    </div>


    
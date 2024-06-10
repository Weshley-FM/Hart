<?php
include 'connect.php';

// Handle subscription purchase
if (isset($_POST['buy_subscription'])) {
    // Ensure both email and username are provided
    if(isset($_POST['email']) && isset($_POST['username'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $subscription_plan = $_POST['subscription_plan'];

        // Check if user with provided email and username exists in the database
        $query = "SELECT * FROM user WHERE email='$email' AND username='$username'";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) > 0) {
            // Update user's subscription plan
            $query = "UPDATE user SET plan='$subscription_plan' WHERE email='$email' AND username='$username'";
            $update_result = mysqli_query($mysqli, $query);

            if ($update_result) {
                echo "Subscription plan purchased successfully.";
                header("Location:courses/sublearn.php");
                exit();
            } else {
                echo "An error occurred: " . mysqli_error($mysqli);
            }
        } else {
            echo "User not found.";
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Admin) Update User</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styless.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="title">Update User</h1>
        </header>
        <section class="form">
            <form method="POST" action="">
                <!-- Input field for user email -->
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>

                <!-- Input field for username -->
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br>

                <!-- New section for subscription plan -->
                <label for="subscription_plan">Subscription Plan:</label><br>
                <select id="subscription_plan" name="subscription_plan">
                    <option value="Basic">Basic</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                </select><br>

                <!-- Submit button for purchasing subscription -->
                <input type="submit" name="buy_subscription" value="Buy Subscription" class="button">
            </form>
        </section>
    </div>
</body>

</html>

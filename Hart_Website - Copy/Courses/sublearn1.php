<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Watch Page</title>
    <link rel="stylesheet" href="sublear.css">
</head>
<body>
<nav>
        <h2>H<SPAN>ART</SPAN></h2>
        <div class="navigation">
            <ul>
                <li><a href="../User/Landing.html">Home</a></li>
                <li><a href="../courses/Courses1.html">Courses</a></li>
                <li><a href="../User/about.php">Service</a></li>
                <li><a href="login.php" class="logout">Logout</a></li>
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class="title-section">
                <h1>Sample Video Title</h1>
                <div class="title-line"></div>
                <p class="short-description">This is a short description of the video, giving a brief overview of its content.</p>
            </div>
            <div class="video-container">
            <?php
            include "../Connect.php";

            // Fetch the video URL from the database
            $id_articl = 12; // You can change this to fetch dynamically based on your application logic
            $sql = "SELECT ytlink FROM subject WHERE id_article = $id_articl";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $video_src = $row['ytlink'];
                echo '<iframe src="' . htmlspecialchars($video_src) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
            } else {
                echo '<p>Video not available.</p>';
            }

            $mysqli->close();
        ?>
            </div>
            <div class="description">
                <?php
                    $video_description = "This is a sample video description. Here, you can provide details about the video, such as its content, creators, and other relevant information.";
                    echo "<p>$video_description</p>";
                ?>
            </div>
            <a href="Courses1.html" class="logout">Back</a>
            <a href="sublearndesc.php" class="logout">Next</a>
        </div>
    <div class="cori">
        <p>Copyright ©2024 All rights reserved | This template is made by Me</p>
    </div>
</body>
</html>

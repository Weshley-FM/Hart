<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="admin.css">
    <script src="main.js"></script>
</head>

<body>
        <nav>
        <img src="" alt="">
        <div class="navigation">
            <ul>
                <li><a href="#">User</a></li>
                <li><a href="artik.php">Subject</a></li>
                <li><a href="subject.php">Subcription</a></li>
                <li><a href="#"></a></li>
                <li><a href="../lnr/loginform.php">Logout</a></li>
            </ul>
        </div>
        </nav>
    <section class="user">
        <h1 class="heading">User Data</h1>
        <br>
        <br>
        <!-- <a href="adminadd.php" class="btn">Add User</a> -->
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>No.</th>
                <th>Id User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>role</th>
                <th>Action Delete</th>
                <th>Action Update</th>
            </tr>
            <?php
            include 'koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error($mysqli));
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['id_user']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['role']; ?></td>
                    <td><a href="adminuserdelete.php? id=<?= $data["id_user"]; ?>"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" class="btn-none">DELETE</a> </td>
                    <td><a href="adminuserupdate.php?id=<?php echo $data['id_user']; ?>" class="btn-none">Update</a> </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    </section>
</body>

</html>
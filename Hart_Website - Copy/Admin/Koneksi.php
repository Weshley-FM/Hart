<?php
$databaseHost = "localhost";
$databaseName = "home_ed";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// 2


function hpengguna($id)
{
    global $mysqli;

    mysqli_query($mysqli, "DELETE FROM user where id_user = $id");

    return mysqli_affected_rows($mysqli);
}

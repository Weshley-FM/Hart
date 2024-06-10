<?php
include_once 'koneksi.php';

// $id = $_GET['id'];


if (isset($_GET['id'])) {
    $id_subscription = $_GET['id'];

    $query = "DELETE FROM subject WHERE id_article='$id_subscription'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: artik.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: subject.php");
    exit;
}
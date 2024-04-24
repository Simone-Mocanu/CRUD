<?php

if (is_numeric($_GET['id'])) {
    include 'connect.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM studenti WHERE id='$id'";

    mysqli_query($con, $sql);

    header('Location: index.php');

}

die('ID-ul este invalid.');


<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultate";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    echo "Conectarea la baza de date a esuat!";
}
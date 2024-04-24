<?php
include 'connect.php';

if (empty($_POST)) {
    if (!$_GET['id']) {
        die('Studentul nu este valid.');
    }

}



?>
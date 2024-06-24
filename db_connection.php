<?php

$host = 'mysql';
$user = 'RABIN';
$password = 'root';
$db = 'TOUR';
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "connection error --> " . mysqli_connect_error();
}

?>

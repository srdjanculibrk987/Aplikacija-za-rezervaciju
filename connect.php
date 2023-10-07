<?php

$server = "localhost";
$username = "culi87";
$password = "Maestro87";
$database = "reservationapp";


$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Neuspela konekcija : " . $conn->connect_error);
}

$conn->set_charset("utf8");

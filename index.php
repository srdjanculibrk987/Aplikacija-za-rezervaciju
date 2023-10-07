<?php
session_start();

require_once "connect.php";
$ime = "";
$datum = "";
$vreme = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST["ime"];
    $datum = $_POST["datum"];
    $vreme = $_POST["vreme"];
}

?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1><?= $ime ?></h1>
    <p>Uspešno ste rezervisali sto. Datum vaše rezeracije je <?= $datum ?> u <?= $vreme ?> h.</p>
</body>

</html>
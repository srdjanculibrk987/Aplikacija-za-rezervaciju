<?php
session_start();

require_once "connect.php";
require_once "validation.php";

$imeError = "";
$emailError = "";
$mobileError = "";
$dateError = "";
$timeError = "";
$ime = "";
$email = "";
$mobile = "";
$datum = "";
$vreme = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $conn->real_escape_string($_POST["ime"]);
    $email = $_POST["email"];
    $mobile = $_POST["tel"];
    $datum = $_POST["datum"];
    $vreme = $_POST["vreme"];
    $odrasli = $_POST["odrasli"];
    $deca = $_POST["deca"];

    $imeError = nameValidation($ime);
    $emailError = emailValidation($email);
    $mobileError = numberValidation($mobile);
    $dateError = dateValidation($datum);
    $timeError = timeValidation($vreme, $datum);

    if ($imeError == '' && $emailError == '' && $mobileError == '' && $dateError == '' && $timeError == '') {
        $q = "INSERT INTO users(ime,email,telefon,datum,vreme,odrasli,deca) 
        VALUE('$ime','$email','$mobile','$datum','$vreme','$odrasli','$deca')";

        if ($conn->query($q)) {
            header("Location:index.php");
        } else {
            header("Location:error.php");
        }
    }
}


require "form.view.php";
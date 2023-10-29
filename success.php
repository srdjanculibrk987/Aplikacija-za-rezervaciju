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

require "views/index.view.php";

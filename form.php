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




?>


<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>Rezervacija stolova</h1>
    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="ime" class="form-label">Ime i prezime</label>
            <input type="text" name="ime" class="form-control" id="ime" value="<?= $ime; ?>" required>
            <span class="error">* <?php echo $imeError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="emailime" value="<?= $email; ?>" required>
            <span class="error">* <?php echo $emailError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Broj telefona</label>
            <input type="number" name="tel" class="form-control" id="tel" value="<?= $mobile; ?>" required>
            <span class="error">* <?php echo $mobileError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="datum" class="form-label">Datum rezervacije</label>
            <input type="date" name="datum" class="form-control" id="datum" required>
            <span class="error">* <?php echo $dateError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="vreme" class="form-label">Vreme rezervacije</label>
            <input type="time" name="vreme" class="form-control" id="vreme" required>
            <span class="error">* <?php echo $timeError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="odrasli" class="form-label">Broj odraslih</label>
            <select name="odrasli" class="form-control" id="odrasli">
                <option value="">Izaberi jednu opciju</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deca" class="form-label">Broj dece</label>
            <select name="deca" class="form-control" id="deca">
                <option value="">Izaberi jednu opciju</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Rezervišite sto</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
<?php


function nameValidation($user) {
    if (empty($user)) {
        return "Polje ne sme biti prazno";
    } elseif (!preg_match("/^([a-zA-Z' ]+)$/", $user)) {
        return 'Napiši validno ime i prezime.';
    } else {
        return '';
    }
}

function emailValidation($user) {

    if (empty($user)) {
        return "Polje ne sme biti prazno";
    } elseif (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
        return "Email adresa mora biti validna";
    } else {
        return "";
    }
}

function numberValidation($user) {
    $cleanNumber = preg_replace("/[^0-9+]/", "", $user);

    if (!preg_match("/^(06|\+3816)[1-9][0-9]{6,7}$/", $cleanNumber)) {
        return "Broj mora biti u validnom formatu";
    } else {
        return "";
    }
}

function dateValidation($date) {
    date_default_timezone_set("Europe/Belgrade");
    $currentDate = date('Y-m-d');
    if ($date <= $currentDate) {
        return "Izabrani datum nije moguće odabrati";
    } else {
        return "";
    }
}

function timeValidation($time, $date) {
    $currentTime = date('h:i:s');
    if ($time <= $currentTime && dateValidation($date) != "") {
        return "Izabrano vreme nije moguće odabrati";
    } else {
        return "";
    }
}

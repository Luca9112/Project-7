<?php
session_start();

include_once 'dbh.inc.php';
include_once 'functions.inc.php';

if (!isset($_SESSION['userid'])) {
    header("location: ../login.php?error=NotLoggedIn");
    exit();
}

$reservering = $_GET['reservering'];

$row = reserveringOphalen($conn, $userid);

$naam = $row['naam'];
$date = $row['date'];
$email = $row['email'];
$telefoon = $row['telefoon'];
$coordinaten = $row['coordinaten'];

if (!isset($_POST['submit-reservering-wijzigen'])) {
    header("location: ../BonTemps/reservering-wijzigen.php?reservering=$reservering&error=FormNotSend");
    exit();
}

if (!isset($_POST['newName'])) {
    $newName = $naam;
} else {
    $newName = $_POST['newName'];
}

if (!isset($_POST['newEmail'])) {
    $newEmail = $emial;
} else {
    $newEmail = $_POST['newEmail'];
}

if (!isset($_POST['newTelNum'])) {
    $newTelNum = $telefoon;
} else {
    $newTelNum = $_POST['newTelNum'];
}


if (invalidPhoneNumber($newTelNum) !== false) {
    header("location: ../BonTemps/reservering-wijzigen.php?reservering=$reservering&error=invalidPhoneNumber");
    exit();
}
if (invalidEmail($newEmail) !== false) {
    header("location: ../BonTemps/reservering-wijzigen.php?reservering=$reservering&error=invalidemail");
    exit();
}
if (emailIsSame($newEmail, $email)) {
    reserveringWijzigen($conn, $reservering, $newName, $newAdres, $newEmail, $newTelNum);
    exit();
} else {
        reserveringWijzigen($conn, $reservering, $newName, $newDate, $newEmail, $newTelNum);
        exit();
    }

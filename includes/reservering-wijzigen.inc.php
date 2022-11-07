<?php
session_start();

include_once 'dbh.inc.php';
include_once 'functions.inc.php';

if (!isset($_SESSION['userid'])) {
    header("location: ../login.php?error=NotLoggedIn");
    exit();
}

$reservering = $_GET['reservering'];

if (!isset($_GET['filter'])) {
    $data = reserveringenOphalen($conn, $_SESSION['userid']);
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
        }
    }
}

$naam = $row['naam'];
$date = $row['datum'];
$email = $row['email'];
$telefoon = $row['telefoonnummer'];

if (!isset($_POST['submit-reservering-wijzigen'])) {
    header("location: ../reservering-wijzigen.php?reservering=$reservering&error=FormNotSend");
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
    $newTelNum = $telefoonnummer;
} else {
    $newTelNum = $_POST['newTelNum'];
}
if (!isset($_POST['newDate'])) {
    $newDate = $date;
}else{ $newDate = $_POST['newDate'];
}
        reserveringWijzigen($conn, $reservering, $newName, $newDate, $newEmail, $newTelNum);
        exit();
    

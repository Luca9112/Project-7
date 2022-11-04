<?php
session_start();

$reservering = $_GET['reservering'];

if (!isset($_POST['submit-reservering-verwijder'])) {
    header("location: ../BonTemps/reserveren-overzicht.php?reservering=$reservering&error=formNotSend");
    exit();
} else {
    if (!isset($_SESSION['userid'])) {
        header("location: ../login.php?error=notLoggedIn");
        exit();
    } else {
        include 'functions.inc.php';
        include 'dbh.inc.php';

        $reservering = $_GET['reservering'];

        reserveringVerwijder($conn, $reservering);
        exit();
    }
}
?>
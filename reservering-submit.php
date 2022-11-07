<?php 
session_start();
  if (isset($_POST["reserveren"])) {

    $userid = $_SESSION['userid'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phonenumber"];
    $date = $_POST["date"];


    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    reserveringToevoegen($conn, $date, $name, $email, $phoneNumber, $userid);
     
  } else {
    header("location: reserveren-form.php?error=erisietsfoutgegaan");
    exit();
  }
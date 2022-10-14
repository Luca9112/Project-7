<?php 
  if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phonenumber"];
    $date = $_POST["date"];


    require_once '../includes/dbh.inc.php';
    require_once '../includes/functions.inc.php';

    reserveringToevoegen($conn, $date, $name, $email, $phoneNumber);
     
  } else {
    header("location: reserveren-form.php?error=kkrding");
    exit();
  }
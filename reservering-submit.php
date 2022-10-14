<?php 
  if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phonenumber"];
    $date = $_POST["date"];


    require_once 'dbh.php';
    require_once 'functions.php';

    reserveringToevoegen($conn, $date, $name, $email, $phoneNumber);
     
  } else {
    header("location: reserveren-form.php?error=erisietsfoutgegaan");
    exit();
  }
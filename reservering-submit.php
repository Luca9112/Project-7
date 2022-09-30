<?php
    include 'functions.php';
    include 'dbh.php';
    include 'reserveren.php';
    ?>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo '<div class="ErrorMessage">Vul alle velden in!</div>';
        } else if ($_GET["error"] == "invalidPhoneNumber") {
            echo '<div class="ErrorMessage">Kies een bestaand nummer!</div>';
        } else if ($_GET["error"] == "invalidemail") {
            echo '<div class="ErrorMessage">Kies een bestaande email!</div>';
        } else if ($_GET["error"] == "invaliduid") {
            echo '<div class="ErrorMessage">Er is iets fout gegaan, probeer het opnieuw...</div>';
        } else if ($_GET["error"] == "emailtaken") {
            echo '<div class="ErrorMessage">Email is al in gebruik</div>';
        } else if ($_GET["error"] == "stmtfailed") {
            echo '<div class="ErrorMessage">Er is iets fout gegaan!</div>';
        }
    

  }
  if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phonenumber"];
    $date = $_POST["date"];


    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $email, $phoneNumber, $date) !== false) {
        header("location: ../reserveren-form.php?error=emptyinput");
        exit();
    }
    if (invalidPhoneNumber($phoneNumber) !== false) {
        header("location: ../reserveren-form.php?error=invalidPhoneNumber");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../reserveren-form.php?error=invalidemail");
        exit();
    }
    if (emailExists($conn, $email) !== false) {
        header("location: ../reserveren-form.php?error=emailtaken");
        exit();
    }
    kkr($conn, $name, $email, $phoneNumber, $date);
  }
?>
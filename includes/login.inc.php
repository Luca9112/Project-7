<?php 

if(isset($_POST["submit"])) { 

    $username = $_POST["email"]; 
    $pwd = $_POST["pwd"]; 

    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php'; 

    if (emptyInputLogin($username, $pwd) !== false){ 
        header("location: ../BonTemps/login.php?error=emptyinput"); 
        exit(); 
    }

    LoginUser($conn,$username, $pwd);
}
    else { 
        header("location: ../BonTemps/login.php");
        exit(); 
    }
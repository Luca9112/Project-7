<?php 

if(isset($_POST["submit"])) { 

    $userid = $_POST["userid"];  

    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php';
    
    
    deleteuser($conn,  $usersId); 
    header("location: ../BonTemps/index.php"); 
    exit(); 


}
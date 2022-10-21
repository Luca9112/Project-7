<?php
session_start();
    if(isset($_POST["submit"])) { 

    $voorgerecht = $_POST["voorgerecht"];
    $hoofdgerecht = $_POST["hoofdgerecht"];
    $nagerecht = $_POST["nagerecht"];
    $borrelhapjes = $_POST["borrelhapjes"];
    $dranken = $_POST["dranken"];
    
    require_once '../includes/dbh.inc.php';
    require_once '../includes/functions.inc.php';

    MenuAanmaken($conn, $voorgerecht, $hoofdgerecht, $nagerecht, $borrelhapjes, $dranken);
} else {
    header("location: ../Bontemps/Menu.php?error=erisietsfoutgegaan");
    exit();
}
?>
<?php

// $serverName = "sql102.epizy.com";
// $dBUsername = "epiz_31718960";
// $dBPassword = "4TWwDjKrcw";
// $dBName = "epiz_31718960_project6";

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "bontemps";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connectie gefaaled: " . mysqli_connect_error());
}
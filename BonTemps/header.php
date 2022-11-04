<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">Bon Temps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">

<?php 
    if (isset($_SESSION["useruid"])){
                echo "<li class='nav-item'><a class='nav-link' href='reserveren-overzicht.php'>zak </a></li>"; 
                echo "<li class='nav-item'><a class='nav-link' href='profile.php'>profiel</a></li>" ;
                echo "<li class='nav-item'><a class='nav-link' href='../includes/logout.inc.php'>Log uit</a></li>";  
} 
    else{ 
        echo "<li class='nav-item'><a class='nav-link' href='signup.php'>account aanmaken </a></li>";
        echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log in</a></li>"; 


}


        ?>
            </ul>
        </div>
    </div>
</nav>





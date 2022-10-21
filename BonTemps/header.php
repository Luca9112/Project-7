<?php
    session_start(); 
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/styles.css">
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
<?php 
    	session_start(); 
?> 

<!doctype html> 
<html lang="en" dir="ltr"> 
    <body> 
        <nav> 
            <div> 
                <ul> 
                    <li> <a href="index.php">home</a></li>
                    <li> <a href="reserveren.php">reserveren</a></li> 
                    <li> <a href="menu.php">Menu's bekijken</a></li> 
                    <?php
                      if (isset($_SESSION["useruid"])){ 
                        echo "<li> <a href='profile.php'>profiel</a></li>"; 
                        echo "<li> <a href='includes/logout.inc.php'>Log uit</a></li> "; 
                      }  
                      else { 
                        echo "<li> <a href='signup.php'>Account aanmaken </a></li>";  
                        echo "<li> <a href='login.php'>Log in </a></li>"; 

                      }
                    ?>
                </ul> 
            </div>
        </nav>
<?php 
    include_once 'header.php';
?> 

    <section class="signup-form"> 
        <h2> Log in </h2> 
        <form action="includes/login.inc.php" method="post"> <br>
         <input type="text" name="email" placeholder="E-mail..."><br> 
         <input type="password" name="pwd" placeholder="Wachtwoord..."> <br>
        <button type="submit" name="submit">log in  </button>         
        </form> 

        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput")
        {
            echo "<p>niet alle velden zijn ingevuld!</P>"; 
        }
        else if ($_GET["error"] == "wronglogin" ) { 
            echo "<p>email en wachtwoord zijn incorect!</P>";
        }
    } 
?>
    </section>

    


    



            
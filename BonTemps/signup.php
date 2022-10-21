<?php 
    include_once 'header.php'; 
?> 
</br> 
</br> 
</br> 
    <section class="signup-form"> 
        <h2> Sign up</h2> 
        <form action="../includes/signup.inc.php" method="post"> <br>
         <input type="text" name="name" placeholder="Voornaam & achternaam..."> <br> 
         <input type="text" name="email" placeholder="E-mail..."><br>
         <input type="text" name="uid" placeholder="telefoon nummer..."> <br> 
         <input type="password" name="pwd" placeholder="Wachtwoord..."> <br>
         <input type="password" name="pwdrepeat" placeholder="Wachtwoord herhalen..."> <br>
        <button type="submit" name="submit">Sign up </button>         
        </form> 

        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput")
        {
            echo "<p>niet alle velden zijn ingevuld!</P>"; 
        }
        else if ($_GET["error"] == "invaliduid" ) { 
            echo "<p>telefoon nummer incorect!</P>";
        }
        else if ($_GET["error"] == "invalidemail" ) { 
            echo "<p>email incorect!</p>";
        }
        else if ($_GET["error"] == "stmtfailed" ) { 
            echo "<p>iets ging fout, probeer het opnieuw!</P>";
        }
        else if ($_GET["error"] == "passworddontmatch" ) { 
            echo "<p>Wachtwoord niet hetzelfde!</p>";
        }
        else if ($_GET["error"] == "usernametaken" ) { 
            echo "<p>telefoon nummer al ingerbuik!</p>";
        }
        else if ($_GET["error"] == "none" ) { 
            echo "<p>account is aangemaakt!</p>";
        }
    }
?>
    </section>

    





            
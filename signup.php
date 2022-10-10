<?php 
    include_once 'header.php'; 
?> 

    <section class="signup-form"> 
        <h2> Sign up</h2> 
        <form action="includes/signup.inc.php" method="post"> <br>
         <input type="text" name="name" placeholder="Voornaam & achternaam..."> <br> 
         <input type="text" name="email" placeholder="E-mail..."><br>
         <input type="text" name="uid" placeholder="gebruikersnaam..."> <br> 
         <input type="password" name="pwd" placeholder="Wachtwoord..."> <br>
         <input type="password" name="pwdrepeat" placeholder="Wachtwoord herhalen..."> <br>
        <button type="submit" name="submit">Sign up </button>         
        </form> 
    </section>

    


    



            
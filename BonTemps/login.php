<head> 
<link rel="stylesheet" href="css/Login.css">
</head> 
<?php 
    include_once 'header.php';
?> 
<div class="wrapper fadeInDown"> 
    <div id="formContent">
        <h2> Log in </h2> 
        <form action="../includes/login.inc.php" method="post"> <br>
         <input type="text" class="fadeIn second"  name="email" placeholder="E-mail..."><br> 
         <input type="password" class="fadeIn third" name="pwd" placeholder="Wachtwoord..."> <br>
        <button type="submit" class="fadeIn fourth"name="submit">log in  </button>         
        </form> 

        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput"){
            echo "<p>niet alle velden zijn ingevuld!</p>"; 
        }
        else if ($_GET["error"] == "wronglogin" ) { 
            echo "<p>email en wachtwoord zijn incorect!</php>";
        }
    } 
?>
   </div> 
</div> 

    


    



            
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/styles.login.css">
</head> 

<?php 
    include_once 'header.php';
?> 

    <div class="wrapper fadeInDown"> 
    <div id="formContent">


        <h2> Log in </h2> 

        
        <form action="../includes/login.inc.php" method="post">
         <input type="text" class="fadeIn third" name="email" placeholder="E-mail..."><br> 
         <input type="password" class="fadeIn third"  name="pwd" placeholder="Wachtwoord..."> <br>
        <button type="submit" class="fadeIn fourth" name="submit">log in  </button>         
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

    
    </div> 
 </div>   
   


    



            
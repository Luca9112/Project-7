<head> 
<link rel="stylesheet" href="css/login.css">
</head> 
<?php 
    include '../includes/dbh.inc.php'; 
    include '../includes/functions.inc.php';
    include_once 'header.php';
?>




 
<body> 
  <?php 
  if(!isset($_GET['filter'])) { 
    $data = userophalen($conn, $_SESSION['userid']);
    if ($data->num_rows > 0) { 
      while ($row = $data->fetch_assoc()) { 
   ?>  
   <div class="wrapper fadeInDown"> 
    <div id="formContent">
         
  
     <button type="submit" onclick="location='profiel-verwijderen.inc.php'" classs="fadeIn fourth" name="submit"> weet je zeker dat je je profiel wilt verwijderen?  </button>    
        
         


   <?php   
      }
    } 

  }
  ?>
  </body>
<script> 
<?php include 'footer.php'; ?> 







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
        <h2> profiel </h2> 
        <input type="text" class="fadeIn second" hidden  name="name" value="<?php echo $row["usersId"]; ?> "><br> 
         <input type="text" class="fadeIn second" readonly  name="name" value="<?php echo $row["usersName"]; ?> "><br> 
         <input type="text" class="fadeIn third" readonly name="email" value="<?php echo $row["usersEmail"]; ?> "> <br>
         <input type="text" class="fadeIn fourth" readonly name="uid" value="<?php echo $row["usersUid"]; ?>"> <br>
         <form action="" method="post"> <br>      
         <button type="submit"  classs="fadeIn fourth" name="submit" > account verwijderen </button> 
  

        
         


   <?php   
      }
    } 

  }
  ?>
  </body>
<script> 
<?php include 'footer.php'; ?> 







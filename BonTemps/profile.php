
<?php 
    include '../includes/dbh.inc.php'; 
    include '../includes/functions.inc.php';
    include_once 'header.php';
?>

<table id="example" class="display" style="width:100%"> 
  <thead> 
  <tr> 
    <th>naam</th>
    <th>email</th>
    <th>telefoonnummer</th> 
</tr> 
<thead> 
<tbody> 
  <?php 
  if(!isset($_GET['filter'])) { 
    $data = userophalen($conn, $_SESSION['userid']);
    if ($data->num_rows > 0) { 
      while ($row = $data->fetch_assoc()) { 
   ?>  
        <tr> 
          <td> <?php echo $row["usersName"]; ?> </td> 
          <td> <?php echo $row["usersEmail"]; ?> </td> 
          <td> <?php echo $row["usersUid"]; ?> </td>  

   <?php   
      }
    } 

  }
  ?>
  </tbody> 
</table> 
<script> 
$(document).ready(function() { 
  $('#example') .DataTable(); 

}); 
</script> 
<?php include 'footer.php'; ?> 







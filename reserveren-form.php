<!DOCTYPE html>
<html>
  <head>
    <?php
        include_once 'header.php';
    include 'includes/functions.inc.php';
    include 'includes/dbh.inc.php';
    ?>
    </br> 
</br> 
</br> 
    <title>resrerveren</title>
    <link href="css/reserveren.css" rel="stylesheet">
  </head>
  <body>   
    <h1>Reserveren</h1>
    <form action="reservering-submit.php" id="resForm" method="post" target="_self">
      <label for="naam">Naam</label>
      <input type="text" required name="name" value=""/>

      <label for="email">Email</label>
      <input type="email" required name="email" value=""/>

      <label for="telefoonnummer">Telefoonnummer</label>
      <input type="number" required name="phonenumber" value=""/>
      <?php
      $mindate = date("Y-m-d");
      ?>

      <label>Datum</label>
      <input type="date" required id="date" name="date"
             min="<?=$mindate?>"/>

      <input type="submit" value="reserveren" name="reserveren"/>
    </form>
  </body>
</html>

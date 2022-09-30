<!DOCTYPE html>
<html>
  <head>
    <?php
    include 'functions.php';
    include 'dbh.php';
    ?>
    <title>resrerveren</title>
    <link href="reserveren.css" rel="stylesheet">
    </script>
  </head>
  <body>   
    <h1>Reserveren</h1>
    <form id="resForm" method="post" target="_self">
      <label for="naam">Naam</label>
      <input type="text" required name="name" value=""/>

      <label for="email">Email</label>
      <input type="email" required name="email" value=""/>

      <label for="telefoonnummer">Telefoonnummer</label>
      <input type="text" required name="tel" value=""/>
      <?php
      $mindate = date("Y-m-d");
      ?>

      <label>Datum</label>
      <input type="date" required id="datum" name="date"
             min="<?=$mindate?>">

      <input type="submit" value="Reserveren"/>
    </form>
  </body>
</html>

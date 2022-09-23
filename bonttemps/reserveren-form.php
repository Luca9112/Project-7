<!DOCTYPE html>
<html>
  <head>
    <title>resrerveren</title>
    <link href="reserveren.css" rel="stylesheet">
    </script>
  </head>
  <body>
    <?php
    
    if (isset($_POST["date"])) {
      require "reserveren.php";
      if ($_RSV->save(
        $_POST["date"], $_POST["name"],
        $_POST["email"], $_POST["tel"])) {
        echo "<div class='ok'>Gereserveerd.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

   
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


      <input type="submit" value="Submit"/>
    </form>
  </body>
</html>

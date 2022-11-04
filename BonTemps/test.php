<?php
    include_once 'header.php';
?>
<!DOCTYPE>
<html>
<head>
<link href="css/Menu.css" rel="stylesheet">
    <title></title>
</head>

<title>Menu aanmaken</title>

<body>
  <body>   

  <h1>Menu aanmaken</h1>
    <form action="../includes/Menu-aanmaken.inc.php" id="resForm" method="POST">

      <label for="naam">Voorgerecht</label>
      <input type="text" required name="voorgerecht" value=""/>
        <br>
      <label for="naam">Hoofdgerecht</label>
      <input type="text" required name="hoofdgerecht" value=""/>
      <br>
      <label for="telefoonnummer">Nagerecht</label>
      <input type="text" required name="nagerecht" value=""/>
      <br>
      <label for="naam">Borrelhapjes</label>
      <input type="text" required name="borrelhapjes" value=""/>
      <br>
      <label for="naam">Dranken</label>
      <input type="text" required name="dranken" value=""/>
      <br>
      <input type="submit" value="submit" name="submit"/>

    </form>



    <h1>Reserveren</h1>
    <form action="reservering-submit.php" id="resForm" method="post" target="_self">
      <label for="naam">Naam</label>
      <input type="text" required name="name" value=""/>

      <label for="email">Email</label>
      <input type="email" required name="email" value=""/>

      <label for="telefoonnummer">Telefoonnummer</label>
      <input type="text" required name="phonenumber" value=""/>
      <?php
      $mindate = date("Y-m-d");
      ?>

      <label>Datum</label>
      <input type="date" required id="date" name="date"
             min="<?=$mindate?>"/>

      <input type="submit" value="submit" name="submit"/>
    </form>
  </body>
</html>

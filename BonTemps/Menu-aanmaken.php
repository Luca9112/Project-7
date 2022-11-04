<?php
    include_once 'header.php';
?>
<!DOCTYPE>
<html>
<head>
<link href="css/Menu.css" rel="stylesheet">
    <title></title>
</head>

<body>


</br> 
</br> 
</br> 



<title>Menu aanmaken</title>

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
</body>

</html>
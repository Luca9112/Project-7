<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';
$reservering = $_GET['reservering'];
?>
<h1>Reservering verwijderen</h1>
    <form action="includes/reservering-verwijderen.inc.php?reservering=<?= $reservering ?>" method="post">
        <button type="submit" name="submit-reservering-verwijder" value="submit-reservering-verwijder">Verwijder</button>
        <a href="reserveren-form.php" class="btn btn-secondary">Annuleren</a>
    </form>

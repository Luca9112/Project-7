<?php
include_once 'header.php';
include 'includes/functions.inc.php';
include 'includes/dbh.inc.php';

$reservering = $_GET['reservering'];

if (!isset($_GET['filter'])) {
    $data = reserveringenOphalen($conn, $_SESSION['userid']);
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc())
?>

<section class="reservering-wijzigen">
    <h2>nieuwe reservering</h2>
    <form action="../includes/reservering-wijzigen.inc.php?reservering=<?php echo $_GET['reservering']; ?>" method="post">
        <label for="newName">Naam: </label><br>
        <input type="text" name="newName" placeholder="Naam" value="<?php echo $row['naam']; ?>"><br>
        <label for="newAdres">Adres: </label><br>
        <input type="text" name="newDatum" placeholder="Datum" value="<?php echo $row['datum']; ?>"><br>
        <label for="newEmail">E-mailadres: </label><br>
        <input type="text" name="newEmail" placeholder="E-mailadres" value="<?php echo $row['email']; ?>"><br>
        <label for="newTelNum">Mobiel telefoonnummer: </label><br>
        <input type="text" name="newTelNum" placeholder="Telefoonnummer" value="<?php echo $row['telefoon']; ?>"><br>
        <button type="submit" name="submit-reservering-wijzigen" value="submit-reservering-wijzigen" >Bewaren</button>
        <a href="reserveren-overzicht.php" class="btn btn-primary">Annuleren</a>
    </form>

    <?php
    }
}
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "FormNotSend") {
            echo '<div class="ErrorMessage">Form niet verstuurd!</div>';
        } else if ($_GET["error"] == "invalidPhoneNumber") {
            echo '<div class="ErrorMessage">Voer een geldig telefoonnummer in!</div>';
        } else if ($_GET["error"] == "invalidEmail") {
            echo '<div class="ErrorMessage">Voer een geldige email in!</div>';
        } else if ($_GET["error"] == "adresCheck") {
            echo '<div class="ErrorMessage">Voer een geldige datum in!</div>';
        } else if ($_GET["error"] == "emailTaken") {
            echo '<div class="ErrorMessage">Voer een geldige email in!</div>';
        } else if ($_GET["error"] == "stmtfailed") {
            echo '<div class="ErrorMessage">Er is iets fout gegaan!</div>';
        }
    }
    ?>
</section>

<?php
include_once 'footer.php';
?>
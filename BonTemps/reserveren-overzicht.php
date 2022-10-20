<html>
    <?php
        include '../includes/dbh.inc.php';
        include '../includes/functions.inc.php';
        include_once 'header.php';
        ?>
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Telefoon</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!isset($_GET['filter'])) {
            $data = reserveringenOphalen($conn, $_SESSION['userid']);
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
        ?>
                    <tr>
                        <td><?php echo $row["datum"]; ?></td>
                        <td><?php echo $row["naam"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["telefoonnummer"]; ?></td>
                        
                    </tr>
        <?php
                }
            }
        }
        ?>
    </tbody>
</table>
</html>
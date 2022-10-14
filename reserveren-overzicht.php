<html>
    <?php
        include 'includes/dbh.inc.php';
        include 'includes/functions.inc.php';
        ?>
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
        $_SESSION['usersid'] = 4;
        if (!isset($_GET['filter'])) {
            $data = reserveringenOphalen($conn, $_SESSION['usersId']);
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
        ?>
                    <tr>
                        <td><?php echo $row["datum"]; ?></td>
                        <td><?php echo $row["naam"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["telefoon"]; ?></td>
                        
                    </tr>
        <?php
                }
            }
        }
        ?>
    </tbody>
</table>
</html>
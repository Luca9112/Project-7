<?php
    include 'includes/dbh.inc.php';
    include 'includes/functions.inc.php';
    include_once 'header.php';
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Datum</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Tijd</th>
            <th>Telefoon</th>
            <th>wijzigen</th>
            <th>verwijderen</th>
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
                        <td><?php echo $row["tijd"]; ?></td>
                        <td><?php echo $row["telefoonnummer"]; ?></td>
                        <td><a href="reservering-wijzigen.php?reservering=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="gray" class="bi bi-gear-fill" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg></a></td>
                            <td><a href="reservering-verwijderen.php?reservering=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" color="red" width="30" height="30" fill="red" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a></td> 
                    </tr>
        <?php
                }
            }
        }
        ?>
    </tbody>
</table>
<script> 
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php include 'footer.php'; ?>
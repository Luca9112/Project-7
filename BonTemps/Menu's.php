<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<,<, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
 <h1>Menu's</h1>
<br>

<table class="table">
    <thead>
        <tr>
            <th>Voorgerecht</th>
            <th>Hoofdgerecht</th>
            <th>Nagerecht</th>
            <th>Borrelhapjes</th>
            <th>Dranken</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Database connection
        $serverName = "localhost";
        $dBUsername = "root";
        $dBPassword = "";
        $dBName = "bontemps";

        $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

        if (!$conn) {
            die("Connectie gefaaled: " . mysqli_connect_error());
}

        $sql = "SELECT * FROM menu";
        $result = $connection->query($sql);
        

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        // pak data van elke row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Voorgerecht"] . "</td>
                <td>" . $row["Hoofdgerecht"] . "</td>
                <td>" . $row["Nagerecht"] . "</td>
                <td>" . $row["Borrelhapjes"] . "</td>
                <td>" . $row["Dranken"] . "</td>
                <td>
                <a class='btn-primary btn-sm' href='update'>Update</a>
                <a class='btn-primary btn-sm' href='delete'>Delete</a>
            </td>
        </tr>";
        }


        
        ?>
    <tbody>
</table>

</body>
</html>
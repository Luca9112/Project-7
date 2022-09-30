<?php
include 'dbh.php';
?>
<?php
class Reservation {
  
  function kkr($conn, $name, $email, $phoneNumber,$date)
{
    $sql = "INSERT INTO reserveringen (datum, naam, email, telefoonnummer) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../reserveren-form.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phoneNumber,$date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    $emailExists = emailExists($conn, $email);

    $_SESSION['userid'] = $emailExists["id"];
    $_SESSION['naam'] = $emailExists["naam"];
    $_SESSION['email'] = $emailExists["email"];
    $_SESSION['telefoon'] = $emailExists["telefoon"];
}

 
  function getDay ($day="") {
    
    if ($day=="") { $day = date("Y-m-d"); }

  }
}

$_RSV = new Reservation();

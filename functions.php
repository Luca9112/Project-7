<?php



function reserveringToevoegen($conn, $date, $name, $email, $phoneNumber) {
  $sql = "INSERT INTO reserveringen (datum, naam, email, telefoonnummer) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: reserveren-form.php?error=stmtfailed");
      exit();
  }
  
  mysqli_stmt_bind_param($stmt, "ssss", $date, $name, $email, $phoneNumber);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  session_start();
  header("location: reserveren-form.php?error=restaurantToegevoegd");
  exit();
}


 
  function getDay ($day="") {
    
    if ($day=="") { $day = date("Y-m-d"); }

  }
  function reserveringenOphalen($conn, $userid) {
    $sql = "SELECT * FROM reserveringen WHERE usersid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: reserveren-form.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    $data = $resultData->fetch_assoc();
    return $data;
  }
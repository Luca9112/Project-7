<?php 
function reserveringToevoegen($conn, $date, $name, $email, $time, $phoneNumber, $userid) {
  $sql = "INSERT INTO reserveringen (userid, datum, naam, email, tijd, telefoonnummer) VALUES (?, ?, ?, ?, ?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../BonTemps/reserveren-form.php?error=stmtfailed");
      exit();
  }
  
  mysqli_stmt_bind_param($stmt, "isssss", $userid, $date, $name, $email, $time, $phoneNumber);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  session_start();
  header("location: ../BonTemps/reserveren-form.php?error=reserveringToegevoegd");
  exit();
}



 
  function getDay ($day="") {
    
    if ($day=="") { $day = date("d-m-Y"); }

  }
  function reserveringenOphalen($conn, $userid) {
    $sql = "SELECT * FROM reserveringen WHERE userid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../BonTemps/reserveren-form.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    return $resultData;
    mysqli_stmt_close($stmt);
  }
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) { 
    $result; 
    if (empty($name) || empty($email) || empty($username) || empty($pwd)|| empty($pwdRepeat)){
        $result = true; 
    }

else { 
    $result = false; 
}
    return $result;
}
function invalidUid($username) { 
    $result; 
    if (!preg_match("/^[0-9]/", $username)) {
        $result = true; 
    }


else { 
    $result = false; 
}
    return $result;
}
function invalidEmail($email) { 
    $result; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $result = true; 
    }

else { 
     $result = false; 
}
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) { 
    $result; 
    if ( $pwd !== $pwdRepeat) { 
        $result = true; 
    }

else { 
    $result = false; 
}
    return $result;
}
function uidExists($conn, $email) { 
    $sql = "SELECT * FROM users WHERE usersEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn);   
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("location: ../Bontemps/signup.php?error=stmtfailed"); 

        header("location: ../BonTemps/signup.php?error=stmtfailed"); 

        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email); 
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt); 

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; 
    }
    else { 
        $result = false; 
        return $result; 
    }

    mysqli_stmt_close($stmt); 
}

function createUser($conn, $name, $email, $username, $pwd) { 
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);   
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("location: ../Bontemps/signup.php?error=stmtfailed"); 

        header("location: ../BonTemps/signup.php?error=stmtfailed"); 

        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); 

    mysqli_stmt_bind_param($stmt, "ssss",  $name, $email, $username,   $hashedPwd); 
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt); 



    header("location: ../Bontemps/login.php?error=none"); 


    header("location: ../BonTemps/login.php?error=none"); 

    exit();
}

function emptyInputLogin($username, $pwd) { 
    $result; 
    if (empty($username) || empty($pwd)){
        $result = true; 
    }

else { 
    $result = false; 
}
    return $result;
}




function LoginUser($conn, $username, $pwd ) { 
    $uidExists = uidExists($conn, $username, $email); 



        header("location: ../Bontemps/login.php?error=wronglogin");

        header("location: ../BonTemps/login.php?error=wronglogin");

        exit(); 
    }

    $pwdHashed = $uidExists["usersPwd"];
    
    $checkPwd = password_verify($pwd, $pwdHashed); 

    if($checkPwd === false) { 

        header("location: ../Bontemps/login.php?error=wronglogin");

        header("location: ../BonTemps/login.php?error=wronglogin");
        
        exit(); 
    }

    else if ($checkPwd === true){ 
        session_start(); 
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../BonTemps/index.php");
        exit(); 
    }
}


function reserveringVerwijder($conn, $reservering) {
    $sql = "DELETE FROM reserveringen WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../BonTemps/reserveren-overzicht.php?reservering=$reservering&error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $reservering);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../BonTemps/reserveren-overzicht.php?error=verwijderd");
    exit();
}

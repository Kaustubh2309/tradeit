<?php

if (isset($_POST['login'])) {
  require 'config.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['u_pwd'];

  if (empty($mailuid) || empty($password)) {
    header("Location: ../#?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE user_name=? OR user_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=emptyfields");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($result = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $result['user_pwd']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=wronguser");
          exit();
        }
        else if ($pwdCheck == true) {
           session_start();
           $_SESSION['userId'] = $result['sr_id'];
           $_SESSION['userUid'] = $result['user_name'];
           header("Location: ../index.php?login=success");
           exit();
         }
        }
      else{
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}
 ?>

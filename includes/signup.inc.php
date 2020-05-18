<?php

require 'config.php';

$username = "";
$email = "";
$errors = array();

if (isset($_POST['register'])) {
  $username = mysql_real_escape_string($_POST['uid']);
  $email = mysql_real_escape_string($_POST['u_email']);
  $password = mysql_real_escape_string($_POST['u_pwd']);

  if (empty($username) || empty($email)) {
    array_push($errors,"usernamerequired");
    header("Location: ../form.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../form.php?error=invalidmailid=");
    exit();
  }
  if(strlen($_POST["password"]) <= '8'){
    $passwordErr = "Your Password Must Contain At Least 8 Characters!";
  }
  else if(!preg_match("#[0-9]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 Number!";
  }
  else if(!preg_match("#[A-Z]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
  }
  else if(!preg_match("#[a-z]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
  }
  else{
    $sql = "SELECT user_name FROM users WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      array_push($errors,"sqlerror");
      header("Location: ../form.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        array_push($errors,"usernamealreadyexist");
        header("Location: ../form.php?error=usernamealreadyexist".$email);
        exit();
      }
    }
  }

  if (empty($email)) {
    array_push($errors,"emailrequired");
    header("Location: ../form.php?error=emailrequired");
    exit();
  }
  else{
    $sql = "SELECT user_email FROM users WHERE user_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      array_push($errors,"sqlerror");
      header("Location: ../form.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck1 = mysqli_stmt_num_rows($stmt);
      if ($resultCheck1 > 0) {
        array_push($errors,"emailalreadyexist");
        header("Location: ../form.php?error=emailalreadyexist".$username);
        exit();
      }
    }
  }

  if (empty($password)) {
    array_push($errors,"passwordrequired");
    header("Location: ../form.php?error=passwordrequired".$email);
    exit();
  }

  if(count($errors) == 0){
    $sql = "INSERT INTO users (user_name, user_email, user_pwd) VALUES( ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      array_push($errors,"sqlerror");
      header("Location: ../form.php?error=sqlerror");
      exit();
    }
    else {
      $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_pwd);
      mysqli_stmt_execute($stmt);
      header("Location: ../form.php?signup=success");
      exit();
    }
  }


  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../form.php");
  exit();
}
?>

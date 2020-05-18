<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/form.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>

<!-- ======== FORM ========= -->
    <div class="hero">
      <div class="form-box">
          <span id="close" class="close">&times;</span>
          <div class="button-box">
            <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="login()">Log In</button>
              <button type="button" class="toggle-btn" onclick="register()">Register</button>
          </div>
          <div class="social-icons">
            <i class="fab fa-google" style="color:#cb503f"></i>
            <i class="fab fa-facebook-square" style="color:#3b5998"></i>
          </div>
          <form id="login" class="input-group" action="includes/login.inc.php" method="post">
            <input type="text" class="input-field" name="mailuid" required placeholder="USERNAME/EMAIL">
            <input type="password" class="input-field" name="u_pwd" required placeholder="PASSWORD">
            <span id="log">Not a Member Yet? Sign up</span><a id="check_boxlogin" onclick="register()"><i class="fas fa-arrow-right"></i></a>
            <button type="submit" id="submit_btn" name="login" class="submit-btn">Log In</button>
          </form>
          <form id="register" class="input-group" action="includes/signup.inc.php" method="post">
            <input type="text" class="input-field" name="uid" placeholder="USERNAME">
            <input type="email" class="input-field" name="u_email" placeholder="EMAIL-ID">
            <input type="password" class="input-field" name="u_pwd" placeholder="PASSWORD">
            <a id="check_boxreg" onclick="login()"><i class="fas fa-arrow-left"></i></a><span id="reg">Already a member? Sign In</span>
            <button type="submit" class="submit-btn" name="register">Register</button>
          </form>
      </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
        }
        function login() {
          x.style.left = "50px";
          y.style.left = "450px";
          z.style.left = "0px";
        }

    </script>
<!-- ======== FORM ========= -->

  </body>
</html>





<!-- action="includes/login.inc.php" -->





<!-- ======== FORM ========= -->

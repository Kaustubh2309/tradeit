<!-- navigation -->
<header>
  <div class="navigation">
  <img class="logo" src="images/logo.svg" draggable="false" alt="logo">
  <navu>
    <ul class="navlinks">
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="equity.php">Equity</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="#">Analysis</a></li>
    </ul>
  </navu>
    <button class="login modal-trigger" href="#demo-modal">lOGIN</button>
</div>
<!-- Modal -->
<!-- Modal Structure -->
<form id="login" action="includes/login.inc.php" method="post">
  <div class="form-group">
<div id="demo-modal" class="modal">
<div class="section"></div>
<main>
<center>

<div class="room">

  <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; height: 80%; width: 80%; padding: 20px; border: none; border-radius: 20px; ">
    <h2 class="text" style="color:#077490">Login</h2>
    <form class="col s12" method="post">
      <div class='row'>
        <div class='col s12'>
        </div>
      </div>

      <div class='row'>
        <div class='input-field col s12'>
          <input name="mailuid" type="email" class="form-control" placeholder="Enter email">
        </div>
      </div>

      <div class='row'>
        <div class='input-field col s12'>
          <input name="u_pwd" type="password" class="form-control" placeholder="Password">
        </div>
      </div>
      </br>
        <div class='text-center'>
          <input class="btn btn-primary" type='submit' name="login" value="Login" style="margin-bottom: 40px;"/>
        </div>
      <a class='acc' href="#">Create account</a>
      <a class='acc' href='#'>Forgot Password?</a>
    </form>
  </div>
</div>
</center>
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</div>
</form>
</div>
<script>
$(document).ready(function(){
$('.modal').modal();
})
</script>
    <!-- modal -->
    <!-- navigation -->

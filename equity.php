<!DOCTYPE html>
<?php include("includes/header.php") ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon96.png">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/stock.js"></script>
    <title></title>
  </head>
  <body>
  <!-- navigation -->
    <header>
      <div class="navigation">
      <img class="logo" src="images/logo.svg" draggable="false" alt="logo">
      <navu>
        <ul class="navlinks">
          <li><a href="index.php">Home</a></li>
          <li><a href="equity.php" class="active">Equity</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="#">Analysis</a></li>
        </ul>
      </navu>
      <a class="cta" href="#">
        <button class="login">lOGIN</button>
      </a>
    </div>
    </header>
  <!-- navigation -->
  <section class="equity">
<div class="room">
  <table class="striped">
      <thead>
        <tr>
           <th>Company Name</th>
           <th>Open Price (₹)</th>
           <th>Current Price (₹)</th>
           <th>High Price (₹)</th>
           <th>Low Price (₹)</th>
           <th>Previous Close (₹)</th>
        </tr>
      </thead>
      <tbody id="companydata">

      </tbody>
  </table>
</div>
</div>
</section>
<?php include("includes/footer.php") ?>

</body>
</html>

<!DOCTYPE html>
<?php include("includes/header.php") ?>
<html lang="en" dir="ltr">
  <body>
  <!-- navigation -->
    <header>
      <div class="navigation">
      <img class="logo" src="images/logo.svg" draggable="false" alt="logo">
      <navu>
        <ul class="navlinks">
          <li><a href="index.php">Home</a></li>
          <li><a href="equity.php">Equity</a></li>
          <li><a href="portfolio.php" class="active">Portfolio</a></li>
          <li><a href="#">Analysis</a></li>
        </ul>
      </navu>
      <a class="cta" href="#">
        <button class="login">lOGIN</button>
      </a>
    </div>
    </header>
  <!-- navigation -->

  <section id="showcase">
    <div class="room">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NASDAQ-AAPL/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technical Analysis for AAPL</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
        {
              "interval": "1m",
              "width": 1000,
              "isTransparent": false,
              "height": 650,
              "symbol": "NSE:ITC",
              "showIntervalTabs": true,
              "locale": "in",
              "colorTheme": "dark"
        }
      </script>
</div>
<!-- TradingView Widget END -->


    </div>

  </section>

<?php include("includes/footer.php") ?>
    </body>
    </html>

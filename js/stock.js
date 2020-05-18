$(document).ready(function() {

  var cmp = ["AXISBANK","BAJAJ-AUTO","BAJAJCON","BAJAJELEC","BAJFINANCE","BAJAJFINSV","BAJAJHLDNG",
            "BANKINDIA","BAYERCROP","BERGEPAINT","BPCL","BIRLACORPN","BOSCHLTD","BRITANNIA","CRISIL","CANBK",
            "CASTROLIND","TCS","ACC","3MINDIA","AIAENG","AUBANK","AARTIIND","ABBOTINDIA","ADANIPOWER","ASHOKLEY",
            "ASHOKA","ASIANPAINT","ATUL","DMART","BANKBARODA","MAHABANK","BHARATFORG","BPCL","BLUEDART"];

  for(var i=0; i<=cmp.length-1; i++){
    doAjax(cmp[i]);
  }

  function doAjax(param) {
    $.ajax({
      url: "https://finnhub.io/api/v1/quote?symbol="+param+".NS&token=bq9cdifrh5rc96c0o700",
      dataType: 'json',
      success: function(data) {
        var tablehtml = '';

        console.log(data["o"]);

        tablehtml +=
        '<tr><td>'
        + [param]
        + '</td><td>'
        + data["o"]
        + '</td><td>'
        + data["c"]
        + '</td><td>'
        + data["h"]
        + '</td><td>'
        + data["l"]
        + '</td><td>'
        + data["pc"]
        + '</tr>';

        $('#companydata').append(tablehtml);
      }
    });
   }
});

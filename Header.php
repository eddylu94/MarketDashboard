<link rel="stylesheet" type="text/css" href="header.css">

<?php include 'statRecorder.php';?>

<div id="topBar">
    <div style="float: right;">
        <p style="display: table-cell; vertical-align: top; padding-top: 5px; padding-right: 10px;">
            <span id="clock_date"></span><span id="clock_time" style="margin-left: 20px;"></span>
        </p>
        <script src="clock.js"></script>
    </div>
    <div id="tickerDiv" style="float: left;">
        <p id="ticker" style="display: table-cell; vertical-align: top; padding-top: 5px; padding-left: 10px;">
            <span style="color: #FFFFFF; padding-right: 5px;"><b>DOW</b></span>18,120.25<span style="color: #00CC00; padding-left: 5px; padding-right: 20px;">+70.08 (0.39%)</span>
            <span style="color: #FFFFFF; padding-right: 5px;"><b>NASDAQ</b></span>5,163.18<span style="color: #00CC00; padding-left: 5px; padding-right: 20px;"">+64.24 (1.26%)</span>
            <span style="color: #FFFFFF; padding-right: 5px;"><b>S&P 500</b></span>2,124.29<span style="color: #00CC00; padding-left: 5px; padding-right: 20px;"">+16.89 (0.80%)</span>
        </p>
        <script src="clock.js"></script>
    </div>
</div>

<div id="topBar_placeholder">&nbsp;</div>
        
<div id="navMenu">
  <ul>
      <li><a href="Index.php"><img src="dashboard_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Dashboard</a></li>
      <li><a href="Companies.php"><img src="companies_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Companies</a></li>
      <li><a href="Policy.php"><img src="policy_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Policy</a></li>
      <li><a href="About.php"><img src="about_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> About</a></li>
  </ul>
</div>

<div id="navMenu_placeholder">&nbsp;</div>
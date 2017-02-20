<link rel="stylesheet" type="text/css" href="header.css">

<?php //include 'statRecorder.php';?>

<div id="topBar">
    <div style="float: right;">
        <p style="display: table-cell; vertical-align: top; padding-top: 5px; padding-right: 10px;">
            <span id="clock_date"></span><span id="clock_time" style="margin-left: 20px;"></span>
        </p>
        <script src="clock.js"></script>
    </div>
    <div id="tickerDiv" style="float: left;">
        <p id="ticker" style="display: table-cell; vertical-align: top; padding-top: 5px; padding-left: 10px;">
            
            <span style="padding-right: 5px;"><b>DOW</b></span>
            <span id="DJI_last"></span>
            <span id="DJI_changeInfo" style="padding-left: 5px; padding-right: 20px;">
                <span id="DJI_change"></span>
                <span id="DJI_changePercent"></span>
            </span>

            <span style="padding-right: 5px;">
                <b>NASDAQ</b>
            </span>
            <span id="IXIC_last"></span>
            <span id="IXIC_changeInfo" style="padding-left: 5px; padding-right: 20px;">
                <span id="IXIC_change"></span>
                <span id="IXIC_changePercent"></span>
            </span>

            <span style="padding-right: 5px;">
                <b>S&P 500</b>
            </span>
            <span id="INX_last"></span>
            <span id="INX_changeInfo" style="padding-left: 5px; padding-right: 20px;">
                <span id="INX_change"></span>
                <span id="INX_changePercent"></span>
            </span>
            
        </p>
        <script src="clock.js"></script>
        <script src="ticker.js"></script>
    </div>
</div>

<div id="topBar_placeholder">&nbsp;</div>
        
<div id="navMenu">
  <ul id="navMenu_ul">
      <li><a href="Index.php"><img src="dashboard_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Dashboard</a></li>
      <li><a href="Companies.php"><img src="companies_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Companies</a></li>
      <li><a href="Policy.php"><img src="policy_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> Policy</a></li>
      <li><a href="About.php"><img src="about_icon.png" style="height: 25px; width: 25px; vertical-align: middle;" /> About</a></li>
  </ul>
</div>

<div id="navMenu_placeholder">&nbsp;</div>
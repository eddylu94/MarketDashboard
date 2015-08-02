<title>Eddy Lu - Finance</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<style>
    
ul {
    list-style-type: none;
    color: #FFFFFF;
    font-family: Calibri;
    font-size: 120%;    
    padding: 10px;
    margin: 0px;
    margin-top: 20px;
}
    
ul li {
    margin-bottom: 15px;
}
    
ul li a {
    color: #FFFFFF;
    text-decoration: none;      
}
    
ul li:hover {
    background-color: #808080;
    color: #FFFFFF;
}   
     
</style>


<html>

<?php //include 'statRecorder.php';?>

<body bgcolor = #FFFFFF style="font-family: Calibri; margin:0; height:100%;">

<center>

<div id="topBar" style="width: 100%; height: 30px; position: fixed; background-color: #191919; top: 0; color: #FFFFFF; opacity: 1">
    
    <div id="dateDiv" style="float: right;">

        <p id="date" style="display: table-cell; vertical-align: top; padding-top: 5px;"><b></b></p>

        <script src="clock.js"></script>

    </div>

    <div id="tickerDiv" style="float: left;">

        <p id="ticker" style="display: table-cell; vertical-align: top; padding-top: 5px;">
            &nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"><b>DOW</b></font>&nbsp;&nbsp; 18,120.25 &nbsp;&nbsp;<font color="#00CC00">+70.08 (0.39%)</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"><b>NASDAQ</b></font>&nbsp;&nbsp; 5,163.18 &nbsp;&nbsp;<font color="#00CC00">+64.24 (1.26%)</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"><b>S&P 500</b></font>&nbsp;&nbsp; 2,124.29 &nbsp;&nbsp;<font color="#00CC00">+16.89 (0.80%)</font>
        </p>

        <script src="clock.js"></script>

    </div>

</div>

<div id="navMenu" style="float: left; width: 160px; height: 100%; margin-top: 30px; background-color: #333333; text-align: left; padding: 0; border-bottom-right-radius: 30px;">

<ul>
    <li><a href="Index.php"><img src="dashboard_icon.png" style="height: 25px; width: 25px; vertical-align: middle;"> &nbsp;Dashboard</li></a>
    <li><a href="Companies.php"><img src="companies_icon.png" style="height: 25px; width: 25px; vertical-align: middle;"> &nbsp;Companies</li></a>
    <li><a href="Policy.php"><img src="policy_icon.png" style="height: 25px; width: 25px; vertical-align: middle;"> &nbsp;Policy</li></a>
    <li><a href="About.php"><img src="about_icon.png" style="height: 25px; width: 25px; vertical-align: middle;"> &nbsp;About</li></a>
</ul>

</div>

<div id="container" style="float: left; width: 1140px; height: 810px; background-color: #FFFFFF; padding: 0px; text-align: left; margin: 0 auto; margin-top: 50px; margin-left: 15px;
     font-family: Calibri;">

        <?php //box-shadow: 0px 0px 100px rgba(0,0,0,1);?>
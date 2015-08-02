<title>Eddy Lu - Finance</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<style>

a {
    color: #000000;        
    text-decoration: none;
}

h3 {
    color: #333333;
} 

#leftDiv {
    float: left;
}
    
#rightDiv {
    float: right;
}
    
#div1 {
    border-radius: 0px;
    background: #FFFFFF;
    width: 270px;
    height: 90px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}
    
#div2 {
    border-radius: 0px;
    background: #FFFFFF;
    width:270px;
    height: 350px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}
    
#div3 {
    border-radius: 0px;
    background: #FFFFFF;
    width:270px;
    height: 310px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}
    
#div4 {
    border-radius: 0px;
    background: #FFFFFF;
    width: 810px;
    height: 465px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}

#div5 {
    float: left;
    border-radius: 0px;
    background: #FFFFFF;
    width: 440px;
    height: 310px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}

#div6 {
    float: right;
    border-radius: 0px;
    background: #FFFFFF;
    width: 340px;
    height: 310px;
    padding: 5px 10px 5px 10px;
    margin: 0px 5px 10px 5px;
}
     
</style>


<html>

<?php include 'statRecorder.php';?>

<body bgcolor = #333333 style="font-family: Calibri; margin:0; height:100%;">

<center>

<div id="topBar" style="width: 100%; height: 30px; position: fixed; background-color: #191919; top: 0; color: #FFFFFF; opacity: .85">
    
    <div id="dateDiv" style="float: right;">

        <p id="date" style="display: table-cell; vertical-align: top; padding-top: 5px;"><b></b></p>

        <script src="clock.js"></script>

    </div>

    <div id="tickerDiv" style="float: left;">

        <p id="ticker" style="display: table-cell; vertical-align: top; padding-top: 5px;">
            &nbsp;&nbsp;&nbsp;&nbsp;<b>DOW</b>&nbsp;&nbsp; 18,120.25 &nbsp;&nbsp;<font color="green">+70.08 (0.39%)</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NASDAQ</b>&nbsp;&nbsp; 5,163.18 &nbsp;&nbsp;<font color="green">+64.24 (1.26%)</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>S&P 500</b>&nbsp;&nbsp; 2,124.29 &nbsp;&nbsp;<font color="green">+16.89 (0.80%)</font>
        </p>

        <script src="clock.js"></script>

    </div>

</div>


<div id="container" style="width:1140px; height: 820px; background-color: #191919; padding: 0px; text-align: left; margin: 0 auto; margin-top: 50px;
     box-shadow: 0px 0px 100px rgba(0,0,0,1);">

<div id="leftDiv">

<div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:290px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
<div id="div1">
   
<h3>Symbol Lookup</h3>

<input type="text" id="symbol_input" value="ex. MSFT">

&nbsp;&nbsp;<button onclick="submitSymbol()" style="background-color: #333333; color: #FFFFFF; border: 0;">Submit</button>

<script>
function submitSymbol() {
    var symbolInput = document.getElementById("symbol_input").value;
    document.getElementById("symbol_output").innerHTML = symbolInput;
}
</script>

</div>

<div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:290px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
<div id="div2">

<h3>Trending Keywords for Gains <font color="green">&#9650</font></h3>

<table style="padding-left: 5px;">
    <tr>
        <td style="width: 10px; padding-right: 5px;">
            1.<br>
            2.<br>
            3.<br>
            4.<br>
            5.<br>
        </td>
        <td style="width: 100px;">
            <i>CEO</i><br>
            <i>raise</i><br>
            <i>assist</i><br>
            <i>ramped</i><br>
            <i>develop</i><br>
        </td>
        <td style="width: 10px; padding-left: 10px; padding-right: 5px;">
            6.<br>
            7.<br>
            8.<br>
            9.<br>
            10.<br>
        </td>
        <td style="width: 100px;">
            <i>donates</i><br>
            <i>greater</i><br>
            <i>expectation</i><br>
            <i>call</i><br>
            <i>Android</i><br>
        </td>
    </tr>
</table>

<h3>Trending Keywords for Losses <font color="red">&#9660</font></h3>

<table style="padding-left: 5px;">
    <tr>
        <td style="width: 10px; padding-right: 5px;">
            1.<br>
            2.<br>
            3.<br>
            4.<br>
            5.<br>
        </td>
        <td style="width: 100px;">
            <i>unprepared</i><br>
            <i>divert</i><br>
            <i>public</i><br>
            <i>news</i><br>
            <i>legal</i><br>
        </td>
        <td style="width: 10px; padding-left: 10px; padding-right: 5px;">
            6.<br>
            7.<br>
            8.<br>
            9.<br>
            10.<br>
        </td>
        <td style="width: 100px;">
            <i>resigns</i><br>
            <i>prepare</i><br>
            <i>malfunction</i><br>
            <i>reconfigure</i><br>
            <i>step</i><br>
        </td>
    </tr>
</table>

</div>

<div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:290px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
<div id="div3">

<h3>About</h3>

This application is intended to display trending social media keywords that occur when companies experience significant changes in share price.
<br><br>
Financial information from Yahoo
<br><br>
Twitter statuses from Twitter REST API
<br><br>
more information at:
    <br><a href="http://www.eddylu.com/Projects.php"><b>eddylu.com/Projects.php</b></a>
<br><br>

</div>

</div>

<div id="rightDiv">

    <div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:830px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
    <div id="div4">

    <h3>Chart</h3>

    <center>
    <img src="http://chart.finance.yahoo.com/z?s=MSFT&t=6m&q=l&l=on&z=l&"/>
    </center>

    </div>

    <div id="rightSubDiv">

        <div id="rightSubDivLEFT" style="float: left;">
            <div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:460px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
            <div id="div5">

            <h3>Trending Keywords</h3>

            <center>
            <img src="wordCloud.jpg" width="450" height="230">
            </center>

            </div>
        </div>

        <div id="rightSubDivRIGHT" style="float: right;">
            <div id="orangeLine" style="background-image: url(MenuReversed.JPG);width:360px; margin:0px 5px 0px 5px; height:5px;text-align:center;"></div>
            <div id="div6">

            <h3>Latest Tweets &nbsp;<img src="twitterLogo.png" width="25" height="20"></h3> 

            Tweet goes here when I figure out how to link Twitter API
            <br><br><br><br>
            Tweet goes here when I figure out how to link Twitter API
            <br><br><br><br>
            Tweet goes here when I figure out how to link Twitter API

            </div>
        </div>

    </div>

</div>

</div>

</center>

<center>
    
<br><br>
<font color="white">This page is under construction - last updated July 16, 2015
    <br><br>&copy; 2014-2015 Eddy Lu</font></center>
<br>

<a href="http://www.eddylu.com/">
<div style="position: fixed; bottom: 30; left: 0; width: 60px; height: 60px; background-color: #191919;
        border-top-left-radius: 0px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 0px;">
    <img id="logo" src="favicon.png" style="bottom: 30px; width: 60px; height: 60px; opacity: .5;
        border-top-left-radius: 0px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 0px;">
</div>
</a>

<script>
    document.getElementById("logo").onmouseover = function() {
        document.getElementById("logo").style.opacity = .8;   
    }
    document.getElementById("logo").onmouseout = function() {
        document.getElementById("logo").style.opacity = .35;   
    }
</script>
    
</body>

</html>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu - Stock Market Analyzer</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
        	#tile {
				background: #FFFFFF;
				padding: 0px;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
			}

            #tile_rendered {
                display: none;
                background: #FFFFFF;
				padding: 0px;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
            }

            #symbol_input {
				vertical-align: middle;
				padding-left: 10px;
				height: 50px;
				width: 1080px;
                font-size: 15px;
                border: none;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
			}

			#symbol_button {
				vertical-align: middle;
				width: 50px;
				height: 50px;
				background-color: #A8A8A8;
				color: #FFFFFF;
				border: 0;
				font-size: 30px;
				font-weight: bold;
				cursor: pointer;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
            }

            #companySummary_listings tr td {
                padding-bottom: 10px;
                padding-right: 30px;
            }
        </style>
    </head>
    <body>
        <?php include 'Header.php';?>

        <div id="container">
        
            <!--div1-->
            <div id="tile" style="display: table; width: 1130px; height: 50px;">
                <input type="text" id="symbol_input" placeholder="Search symbol (ex. MSFT)" autofocus="true" onkeydown="textInputSubmit()">
                    <button id="symbol_button" onclick="submitSymbol()">&#9906;</button>
                </input>
            </div>

            <div style="display: flex; flex-direction: row;">

            <!--div2-->
            <div id="tile" style="width: 700px;">
                <div id="companyChart"></div>
            </div>

            <!--div3-->
            <div id="tile_rendered" style="width: 375px; height: 315px; margin-left: 15px; padding: 0px 20px 0px 20px;">
                <div id="companySummary">
                    <h2 id="companySummary_header" style="margin-bottom: 0px;"></h2>
                    <h3 id="companySummary_subheader" style="margin-top: 5px;">
                        <span id="companySummary_lastTradePriceOnly" style="font-size: 30px;"></span>
                        <span id="companySummary_change" style="font-size: 20px; margin-left: 10px;"></span>
                        <span id="companySummary_changeInPercent" style="font-size: 20px; margin-left: 5px;"></span>
                    </h3>
                    <table id="companySummary_listings">
                        <tr><td>Previous Close</td><td><span id="companySummary_previousClose" style="font-weight: bold;"></span></td></tr>
                        <tr><td>Open</td><td><span id="companySummary_open" style="font-weight: bold;"></span></td></tr>
                        <tr><td>Day Range</td><td><span id="companySummary_dayRange" style="font-weight: bold;"></span></td></tr>
                        <tr><td>52-Week Range</td><td><span id="companySummary_yearRange" style="font-weight: bold;"></span></td></tr>
                        <tr><td>Volume</td><td><span id="companySummary_volume" style="font-weight: bold;"></span></td></tr>
                        <tr><td>Average Volume</td><td><span id="companySummary_averageDailyVolume" style="font-weight: bold;"></span></td></tr>
                    </table>
                </div>
            </div>

            </div>

            <script src="company.js"></script>

            <?php include 'Footer.php';?>

        </div>
        
    </body>
</html>
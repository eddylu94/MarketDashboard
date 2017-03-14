<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu - Stock Market Analyzer</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
        	#tile1 {
				background: #FFFFFF;
				padding: 0px;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
			}

            #tile2 {
				display: none;
                background: #FFFFFF;
				padding: 0px;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                width: 700px;
			}

            #tile3 {
                display: none;
				background: #FFFFFF;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                width: 375px;
                height: 315px;
                margin-left: 15px;
                padding: 0px 20px 0px 20px;
			}

            #tile4 {
                display: none;
				background: #FFFFFF;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                padding: 20px 30px 20px 30px;
			}

            #tile5 {
                display: none;
				background: #FFFFFF;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                padding: 20px 30px 20px 30px;
			}

            #tile6 {
                display: none;
				background: #FFFFFF;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                padding: 20px 30px 20px 30px;
            }

            #tile7 {
                display: none;
				background: #FFFFFF;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
                padding: 20px 30px 20px 30px;
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

            #percentChanges_table {
                width: 1080px;
            }

            #tooltip {
                position: relative;
                display: inline-block;
            }

            #tooltiptext {
                visibility: hidden;
                width: 120px;
                background-color: #333333;
                color: #fff;
                text-align: center;
                padding: 5px 0;
                border-radius: 6px;
            
                position: absolute;
                z-index: 1;

                font-weight: normal;
            }

            #tooltip:hover #tooltiptext {
                visibility: visible;
            }

            #significantChangesGainers_ul {
                list-style: none;
                padding-left: 0px;
                columns: 2;
                -webkit-columns: 2;
                -moz-columns: 2;
            }

            #significantChangesLosers_ul {
                list-style: none;
                padding-left: 0px;
                columns: 2;
                -webkit-columns: 2;
                -moz-columns: 2;
            }

            #pastWeek_table {
                width: 1080px;
            }
        </style>
    </head>
    <body>
        <?php include 'Header.php';?>

        <div id="container">
        
            <!--div1-->
            <div id="tile1" style="display: table; width: 1130px; height: 50px;">
                <input type="text" id="symbol_input" placeholder="Search symbol (ex. MSFT)" autofocus="true" onkeydown="textInputSubmit()">
                    <button id="symbol_button" onclick="submitSymbol()">&#9906;</button>
                </input>
            </div>

            <div style="display: flex; flex-direction: row;">

                <!--div2-->
                <div id="tile2">
                    <div id="companyChart"></div>
                </div>

                <!--div3-->
                <div id="tile3">
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

            <!--div4-->
            <div id="tile4">
                <h3>52-Week Percent Changes</h3>
                <span id="stdev"></span>

                <br /><br />

                <table id="percentChanges_table"></table>
            </div>

            <!--div5-->
            <div id="tile5">
                <div id="significantChanges" style="display: flex; flex-direction: row;">
                    <div id="significantChangesGainers_div" style="width: 540px;">
                        <h3>Significant Gain Dates <span style="color: #A0A0A0">&#9650;</span></h3>
                        <div id="significantChangesGainers">
                            <ul id="significantChangesGainers_ul"></ul>
                        </div>
                    </div>
                    <div id="significantChangesLosers_div" style="width: 540px;">
                        <h3>Significant Loss Dates <span style="color: #A0A0A0">&#9660;</span></h3>
                        <div id="significantChangesLosers">
                            <ul id="significantChangesLosers_ul"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--div6-->
            <div id="tile6">
                <h3 id="tile_h3">Past Week</h3>
                <table id="pastWeek_table"></table>
            </div>     

            <script src="company.js"></script>

            <?php include 'Footer.php';?>

        </div>
        
    </body>
</html>
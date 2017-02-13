<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu - Stock Market Analyzer</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <style>
            a.newsLink {
                color: #333333;
                font-weight: bold;
            }

            #leftDiv {
                float: left;
            }
    
            #rightDiv {
                margin-left: 15px;
				float: left;
            }

			#tile {
				background: #FFFFFF;
				padding: 15px;
				margin: 0px 0px 15px 0px;
				box-shadow: 0px 0px 5px #CCCCCC;
			}

			#tile_h3 {
				margin-top: 0px;
				margin-bottom: 10px;
			}

			#symbol_input {
				vertical-align: middle;
				padding-left: 10px;
				height: 30px;
				width: 220px;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
			}

			#symbol_button {
				vertical-align: middle;
				width: 30px;
				height: 30px;
				background-color: #A8A8A8;
				color: #FFFFFF;
				border: 0;
				font-size: 20px;
				font-weight: bold;
				cursor: pointer;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
			}

            #gainersLosers_table {
                border: none;
            }

			#newsHighlight {
				margin-bottom: 20px;
			}

            .button:hover {
                background-color:#333333;
            }

			#latestNews_table {
				margin: 0px;
				padding: 0px;
			}

			#latestNews_table tr, td {
				margin: 0px;
				padding: 0px;
			}
        </style>
    </head>
    <body>
        <?php include 'Header.php';?>

        <div id="container">

            <div id="leftDiv">
                
				<!--div1-->
				<div id="tile" style="display: table; width: 250px; height: 30px; box-shadow: 0px 0px 5px #CCCCCC;">
					<input type="text" id="symbol_input" placeholder="Search symbol (ex. MSFT)" autofocus="true" onkeydown="textInputSubmit()">
						<button id="symbol_button" onclick="submitSymbol()">&#9906;</button>
						<script>
							function submitSymbol() {
								var symbolInput = document.getElementById("symbol_input").value.toUpperCase();

								window.location.href = "Companies.php" + "?symbol=" + symbolInput;
							}

							function textInputSubmit() {
								if (event.keyCode === 13) {
									submitSymbol();
								}
							}
						</script>
					</input>
				</div>
					
                <?php include 'gainersLosersAPI.php';?>
                <script src="gainersLosers.js"></script>

				<!--div2-->
				<div id="tile" style="width: 250px; height: 150px;">
					<h3 id="tile_h3">Top Gainers <span style="color: #A0A0A0">&#9650;</span></h3>
                    <div id="gainers_div" style="color: #333333;">
                        <table id="gainers_table"></table>
                    </div>
                </div>
                    
				<!--div3-->
                <div id="tile" style="width: 250px; height: 150px;">
                    <h3 id="tile_h3">Top Losers <span style="color: #A0A0A0">&#9660;</span></h3>
                    <div id="losers_div" style="color: #333333;">
                        <table id="losers_table"></table>
                    </div>
                </div>

				<!--div4-->
                <div id="tile" style="width: 250px; height:500px;">
                    <a class="twitter-timeline" data-width="300" data-height="450" data-dnt="true" data-theme="light" data-link-color="#FAB81E" href="https://twitter.com/NYSE">Tweets by NYSE</a>
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

            </div>

            <div id="rightDiv">

				<!--div5-->
                <div id="tile" style="width: 800px; height: 420px;">
                    <img id="industryChart" src="http://chart.finance.yahoo.com/z?s=^dji&t=6m&q=l&l=on&z=l&" style="margin-bottom: 10px;" />
                    <br />
                    <div style="text-align: center; width: 100%;">
                        <button onclick="updateIndustry_dow()" style="background-color: #C0C0C0; color: #FFFFFF; font-size: 19px; border: 0; cursor: hand;">DOW</button>
                        <button onclick="updateIndustry_nasdaq()" style="background-color: #C0C0C0; color: #FFFFFF; font-size: 19px; border: 0; cursor: hand;">NASDAQ</button>
                        <button onclick="updateIndustry_snp()" style="background-color: #C0C0C0; color: #FFFFFF; font-size: 19px; border: 0; cursor: hand;">S&P 500</button>
                        <script>
                            function updateIndustry_dow() {
                                document.getElementById("industryChart").src = "http://chart.finance.yahoo.com/z?s=^dji&t=6m&q=l&l=on&z=l&";
                            }
                            function updateIndustry_nasdaq() {
                                document.getElementById("industryChart").src = "http://chart.finance.yahoo.com/z?s=^ixic&t=6m&q=l&l=on&z=l&";
                            }
                            function updateIndustry_snp() {
                                document.getElementById("industryChart").src = "http://chart.finance.yahoo.com/z?s=^gspc&t=6m&q=l&l=on&z=l&";
                            }
                        </script>
                    </div>
                </div>
                
				<!--div6-->
				<div id="tile" style="width: 800px; height: 500px;">
					<h3 id="tile_h3">Latest News</h3>
					<?php include 'latestNewsAPI.php';?>
					<script src="latestNews.js"></script>
					<table id="latestNews_table"></table>
					<span style="color: #686868;">Powered by NewsAPI</span>
				</div>
                
            </div>

            <?php include 'Footer.php';?>
        
        </div>
            
    </body>
</html>
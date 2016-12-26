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
				box-sizing:
				border-box;
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

			#trending_ol li {
				width: 120px;
				margin-bottom: 5px;
			}
    
			#newsHighlight {
				margin-bottom: 20px;
			}

            .button:hover {
                background-color:#333333;
            }
            
            #trendingTable a {
              color: #333333;        
              text-decoration: none;
              margin: 0;
              padding: 0;
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
					<input type="text" id="symbol_input" placeholder="Search symbol (ex. MSFT)" autofocus="true">
						<button id="symbol_button" onclick="submitSymbol()">&#9906;</button>
						<script>
							function submitSymbol() {
								var symbolInput = document.getElementById("symbol_input").value;
								console.log(symbolInput);
							}
						</script>
					</input>
				</div>
					
				<!--div2-->
				<div id="tile" style="width: 250px; height: 150px;">
					<h3 id="tile_h3">Trending for Gains <span style="color: #A0A0A0">&#9650;</span></h3>
                    <table id="trendingTable">
                        <tr>
                            <td>
                                <ol id="trending_ol" style="margin: 0; padding: 0; list-style-position:inside">
                                    <li><a href="https://twitter.com/search?q=CEO&src=typd&lang=en" target="_blank">CEO</a></li>
                                    <li><a href="https://twitter.com/search?q=raise&src=typd&lang=en" target="_blank">raise</a></li>
                                    <li><a href="https://twitter.com/search?q=assist&src=typd&lang=en" target="_blank">assist</a></li>
                                    <li><a href="https://twitter.com/search?q=ramped&src=typd&lang=en" target="_blank">ramped</a></li>
                                    <li><a href="https://twitter.com/search?q=develop&src=typd&lang=en" target="_blank">develop</a></li>
                                </ol>
                            </td>
                            <td>
                                <ol id="trending_ol" start="6" style="margin: 0; padding: 0; list-style-position:inside">
                                    <li><a href="https://twitter.com/search?q=donates&src=typd&lang=en" target="_blank">donates</a></li>
                                    <li><a href="https://twitter.com/search?q=greater&src=typd&lang=en" target="_blank">greater</a></li>
                                    <li><a href="https://twitter.com/search?q=expectation&src=typd&lang=en" target="_blank">expectation</a></li>
                                    <li><a href="https://twitter.com/search?q=call&src=typd&lang=en" target="_blank">call</a></li>
                                    <li><a href="https://twitter.com/search?q=Android&src=typd&lang=en" target="_blank">Android</a></li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>
                    
				<!--div3-->
                <div id="tile" style="width: 250px; height: 150px;">
                    <h3 id="tile_h3">Trending for Losses <span style="color: #A0A0A0">&#9660;</span></h3>
                    <table id="trendingTable" style="margin: 0; padding: 0;">
                        <tr>
                            <td>
                                <ol id="trending_ol" style="margin: 0; padding: 0; list-style-position:inside">
                                    <li><a href="https://twitter.com/search?q=unprepared&src=typd&lang=en" target="_blank">unprepared</a></li>
                                    <li><a href="https://twitter.com/search?q=divert&src=typd&lang=en" target="_blank">divert</a></li>
                                    <li><a href="https://twitter.com/search?q=public&src=typd&lang=en" target="_blank">public</a></li>
                                    <li><a href="https://twitter.com/search?q=news&src=typd&lang=en" target="_blank">news</a></li>
                                    <li><a href="https://twitter.com/search?q=legal&src=typd&lang=en" target="_blank">legal</a></li>
                                </ol>
                            </td>
                            <td>
                                <ol id="trending_ol" start="6" style="margin: 0; padding: 0; list-style-position:inside">
                                    <li><a href="https://twitter.com/search?q=resigns&src=typd&lang=en" target="_blank">resigns</a></li>
                                    <li><a href="https://twitter.com/search?q=prepare&src=typd&lang=en" target="_blank">prepare</a></li>
                                    <li><a href="https://twitter.com/search?q=malfunction&src=typd&lang=en" target="_blank">malfunction</a></li>
                                    <li><a href="https://twitter.com/search?q=reconfigure&src=typd&lang=en" target="_blank">reconfigure</a></li>
                                    <li><a href="https://twitter.com/search?q=step&src=typd&lang=en" target="_blank">step</a></li>
                                </ol>
                            </td>
                        </tr>
                    </table>
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
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

            #tile {
                margin-bottom: 20px;
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
                width: 250px;
                height: 290px;
                padding: 5px 10px 5px 10px;
                margin: 0px 5px 10px 5px;
            }
    
            #div2 {
                border-radius: 0px;
                background: #FFFFFF;
                width:250px;
                height: 300px;
                padding: 5px 10px 5px 10px;
                margin: 0px 5px 10px 5px;
            }
    
            #div3 {
                border-radius: 0px;
                background: #FFFFFF;
                width:250px;
                height: 150px;
                padding: 5px 10px 5px 10px;
                margin: 0px 5px 10px 5px;
            }
    
            #div4 {
                border-radius: 0px;
                background: #FFFFFF;
                width: 810px;
                height: 450px;
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
    
            .button:hover {
                background-color:#333333;
            }
            
            #trendingTable a {
              color: #333333;        
              text-decoration: none;
              margin: 0;
              padding: 0;
            }
        </style>
    </head>
    <body>
        <?php include 'Header.php';?>

        <div id="container">

            <div id="leftDiv">

                <div id="div1">
                    <h3>Latest News</h3>
                    <div id="tile">
                        <p>U.S. Stocks Drop, Weighed Down by Apple, Microsoft <a class="newsLink" href="http://us.rd.yahoo.com/finance/external/wsj/rss/SIG=12v1r458o/*http://www.wsj.com/articles/u-s-stock-futures-drop-weighed-down-by-apple-microsoft-1437567898?ru=yahoo?mod=yahoo_itp" target="_blank">WSJ</a></p>
                        <p>Asian stocks dented by weak US lead, data deluge <a class="newsLink" href="http://us.rd.yahoo.com/finance/external/cnbc/rss/SIG=112g7af9u/*http://www.cnbc.com/id/102856359?__source=yahoo%7cfinance%7cheadline%7cheadline%7cstory&par=yahoo&doc=102856359" target="_blank">Yahoo!</a></p>
                        <p>Tokyo stocks open 0.50% higher <a class="newsLink" href="http://us.rd.yahoo.com/finance/news/rss/story/*http://sg.finance.yahoo.com/news/tokyo-stocks-open-0-50-001551717.html" target="_blank">Yahoo!</a></p>
                        <p>Brace yourself! Thursday is earnings palooza <a class="newsLink" href="http://us.rd.yahoo.com/finance/external/cnbc/rss/SIG=112kiuhmm/*http://www.cnbc.com/id/102855660?__source=yahoo%7cfinance%7cheadline%7cheadline%7cstory&par=yahoo&doc=102855660" target="_blank">CNBC</a></p>
                        <p>Pacific Rim free trade talks fall short of deal <a class="newsLink" href="https://ca.finance.yahoo.com/news/india-seeks-extra-4-billion-072130901.html" target="_blank">Yahoo!</a></p>
                    </div>
                </div>
                
                <div id="div2">
                    <h3>Trending for Gains <span style="color: #A0A0A0">&#9650;</span></h3>
                    <div id="tile">
                        <table id="trendingTable">
                            <tr>
                                <td>
                                    <ol style="margin: 0; padding: 0; list-style-position:inside">
                                        <li><a href="https://twitter.com/search?q=CEO&src=typd&lang=en" target="_blank">CEO</a></li>
                                        <li><a href="https://twitter.com/search?q=raise&src=typd&lang=en" target="_blank">raise</a></li>
                                        <li><a href="https://twitter.com/search?q=assist&src=typd&lang=en" target="_blank">assist</a></li>
                                        <li><a href="https://twitter.com/search?q=ramped&src=typd&lang=en" target="_blank">ramped</a></li>
                                        <li><a href="https://twitter.com/search?q=develop&src=typd&lang=en" target="_blank">develop</a></li>
                                    </ol>
                                </td>
                                <td>
                                    <ol start="6" style="margin: 0; padding: 0; list-style-position:inside">
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
                    
                    <div id="tile">
                        <h3>Trending for Losses <span style="color: #A0A0A0">&#9660;</span></h3>
                        <table id="trendingTable" style="margin: 0; padding: 0;">
                            <tr>
                                <td>
                                    <ol style="margin: 0; padding: 0; list-style-position:inside">
                                        <li><a href="https://twitter.com/search?q=unprepared&src=typd&lang=en" target="_blank">unprepared</a></li>
                                        <li><a href="https://twitter.com/search?q=divert&src=typd&lang=en" target="_blank">divert</a></li>
                                        <li><a href="https://twitter.com/search?q=public&src=typd&lang=en" target="_blank">public</a></li>
                                        <li><a href="https://twitter.com/search?q=news&src=typd&lang=en" target="_blank">news</a></li>
                                        <li><a href="https://twitter.com/search?q=legal&src=typd&lang=en" target="_blank">legal</a></li>
                                    </ol>
                                </td>
                                <td>
                                    <ol start="6" style="margin: 0; padding: 0; list-style-position:inside">
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
                </div>

                <div id="div3">
                    <h3>About</h3>
                    <div id="tile">
                        This application is intended to display trending social media keywords that occur when companies experience significant changes in share price.
                    </div>
                </div>

            </div>

            <div id="rightDiv">

                <div id="div4">
                    <h3>Chart</h3>
                    <div id="tile">
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
                </div>

                <div id="rightSubDiv">
                    
                    <div id="rightSubDivLEFT" style="float: left;">
                        
                        <div id="div5">
                            <h3>Trending Keywords</h3>
                            <div id="tile">
                                <img src="wordCloud.jpg" width="450" height="250">
                            </div>
                        </div>
                    
                    </div>
                    
                    <div id="rightSubDivRIGHT" style="float: right;">
                        
                        <div id="div6">
                            <div id="tile">
                                <a class="twitter-timeline" href="https://twitter.com/Microsoft" data-widget-id="627696253996929024">Tweets by @Microsoft</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                        </div>
                    
                    </div>
                
                </div>

            </div>

            <?php include 'Footer.php';?>
        
        </div>
            
    </body>
</html>
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

            <!--div2-->
            <div id="tile" style="display: table; width: 830px;">
                <div id="companyChart"></div>
            </div>

            <script src="company.js"></script>

            <?php include 'Footer.php';?>

        </div>
        
    </body>
</html>
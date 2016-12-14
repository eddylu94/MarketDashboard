<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eddy Lu - Stock Market Analyzer</title>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    </head>
    <body>
        <?php include 'Header.php';?>

        <div id="container">
        
            <input type="text" id="symbol_input" value="ex. MSFT">
                <button onclick="submitSymbol()" style="background-color: #333333; color: #FFFFFF; border: 0;">Submit</button>
                <script>
                    function submitSymbol() {
                        var symbolInput = document.getElementById("symbol_input").value;
                        document.getElementById("symbol_output").innerHTML = symbolInput;
                    }
                </script>
            </input>

            <?php include 'Footer.php';?>

        </div>
        
    </body>
</html>
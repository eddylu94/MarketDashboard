<?php include 'Header.php'?>

<input type="text" id="symbol_input" value="ex. MSFT">

    &nbsp;&nbsp;<button onclick="submitSymbol()" style="background-color: #333333; color: #FFFFFF; border: 0;">Submit</button>

    <script>
    function submitSymbol() {
        var symbolInput = document.getElementById("symbol_input").value;
        document.getElementById("symbol_output").innerHTML = symbolInput;
    }
    </script>

<?php include 'Footer.php'?>
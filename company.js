function submitSymbol() {
    var symbolInput = document.getElementById("symbol_input").value.toUpperCase();

    window.location.href = "Companies.php" + "?symbol=" + symbolInput;
}

function textInputSubmit() {
    if (event.keyCode === 13) {
        submitSymbol();
    }
}

var query = window.location.search.substring(1);

if (query.indexOf("symbol=") >= 0) {
    query = query.substring(query.indexOf("symbol=") + 7);

    var chart = document.createElement("img");
    chart.src = "http://chart.finance.yahoo.com/z?s=" + query + "&t=6m&q=l&l=on&z=l&";
    chart.style.width = "100%";

    var companyChart = document.getElementById("companyChart");
    companyChart.appendChild(chart);
}

console.log(query);
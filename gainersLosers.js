var getGainersLosers = function (isGainer) {
    var gainerLoser = isGainer ? "gainers" : "losers";

    $.ajax({
        url: gainersLosersAPI(gainerLoser),
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i < 5; i++) {
                var quote = data.response.quotes.quote[i];
                //var quote = {
                //    symbol: "MSFT",
                //    last: "449.8600",
                //    chg: "25.3600",
                //    pchg: "5.9741 %",
                //}

                var symbol = quote.symbol;
                var change = quote.chg;
                var percentChange = quote.pchg;
                var last = quote.last;

                createGainerLoserListing(gainerLoser, symbol, last, change, percentChange);
            }
        },
        error: function (data) {
            var gainersLosersDiv = document.getElementById(gainerLoser + "_div");
            gainersLosersDiv.innerHTML = "Market is currently closed.<br /><br />Market is open Monday through Friday 9:30 am to 4:00 pm EST.";
        }
    });
};

var createGainerLoserListing = function (gainerLoser, symbol, last, change, percentChange) {

    var gainersLosersTable = document.getElementById(gainerLoser + "_table");
    gainersLosersTable.style.borderCollapse = "collapse";

    var gainersLosersTable_rowIndex = gainersLosersTable.rows.length;

    var newRow = gainersLosersTable.insertRow(gainersLosersTable_rowIndex = gainersLosersTable.rows.length);

    var newCell_symbol = newRow.insertCell(0);
    newCell_symbol.style.fontWeight = "bold";
    newCell_symbol.style.color = "#333333";
    newCell_symbol.style.paddingBottom = "5px";
    newCell_symbol.innerHTML = symbol;

    var trimValue = function (value, decimals) {
        if (value.indexOf(".") >= 0 && value.length - value.indexOf(".") > decimals + 1) {
            value = value.substring(0, value.indexOf(".") + decimals + 1);
        }
        return value;
    };

    var newCell_last = newRow.insertCell(1);
    newCell_last.style.color = "#333333";
    newCell_last.style.paddingLeft = "10px"
    newCell_last.style.paddingBottom = "5px";
    newCell_last.innerHTML = trimValue(last, 2);

    var sign;
    var color;
    if (gainerLoser === "gainers") {
        sign = '+';
        color = "#33CC33";
    }
    else if (gainerLoser === "losers") {
        sign = '-';
        color = "#FF0000";
    }

    var newCell_change = newRow.insertCell(2);
    newCell_change.style.color = color;
    newCell_change.style.paddingLeft = "10px"
    newCell_change.style.paddingBottom = "5px";
    newCell_change.innerHTML = gainerLoser === "gainers" ? sign + trimValue(change, 2) : trimValue(change, 2);

    var newCell_percentChange = newRow.insertCell(3);
    newCell_percentChange.style.color = color;
    newCell_percentChange.style.paddingLeft = "10px"
    newCell_percentChange.style.paddingBottom = "5px";
    newCell_percentChange.innerHTML = "(" + sign + trimValue(percentChange.replace(" %", ""), 2) + "%)";
};

getGainersLosers(true);
getGainersLosers(false);
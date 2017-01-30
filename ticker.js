var getTickerJSON = function (urlParam, id) {
    url = "http://finance.google.com/finance/info?client=ig&q=" + urlParam + "&callback=?";
    $.getJSON(url, function (data) {
        document.getElementById(id + "_last").innerHTML = data[0].l;
        document.getElementById(id + "_change").innerHTML = data[0].c;
        var cpSign = data[0].c.indexOf("+") === 0 ? '+' : '';
        document.getElementById(id + "_changePercent").innerHTML = "(" + cpSign + data[0].cp + "%)";
        if (data[0].c.charAt(0) == '+') {
            document.getElementById(id + "_changeInfo").style.color = "#00FF00";
        }
        else if (data[0].c.charAt(0) == '-') {
            document.getElementById(id + "_changeInfo").style.color = "#FF0000";
        }
    });
}

getTickerJSON("INDEXDJX:.DJI", "DJI");
getTickerJSON("INDEXNASDAQ:.IXIC", "IXIC");
getTickerJSON("INDEXSP:.INX", "INX");
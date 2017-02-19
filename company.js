function submitSymbol() {
    var symbolInput = document.getElementById("symbol_input").value.toUpperCase();

    window.location.href = "Companies.php" + "?symbol=" + symbolInput;
}

function textInputSubmit() {
    if (event.keyCode === 13) {
        submitSymbol();
    }
}

var getChart = function (query) {
    var chart = document.createElement("img");
    chart.src = "http://chart.finance.yahoo.com/z?s=" + query + "&t=6m&q=l&l=on&z=l";
    chart.style.width = "100%";
    chart.style.filter = "grayscale(100%)";

    var companyChart = document.getElementById("companyChart");
    companyChart.appendChild(chart);
}

hasSymbol = false;

var query = window.location.search.substring(1);
if (query.indexOf("symbol=") >= 0) {
    query = query.substring(query.indexOf("symbol=") + 7);
    if (query.length > 0) {
        hasSymbol = true;
    }
}

var getCompanySummary = function (urlParam) {
    url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22" + urlParam + "%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
    $.getJSON(url, function (data) {
        var results = data.query.results.quote;

        var name = results.Name;
        var symbol = results.Symbol;
        var lastTradePriceOnly = results.LastTradePriceOnly;
        var change = results.Change;
        var changeinPercent = results.ChangeinPercent;
        var previousClose = results.PreviousClose;
        var open = results.Open;
        var bid = results.Bid;
        var ask = results.Ask;
        var dayRange = results.DaysRange;
        var yearRange = results.YearRange;
        var volume = results.Volume;
        var averageDailyVolume = results.AverageDailyVolume;

        document.getElementById("companySummary_header").innerHTML = name + " (" + symbol + ")";
        document.getElementById("companySummary_lastTradePriceOnly").innerHTML = lastTradePriceOnly;
        document.getElementById("companySummary_change").innerHTML = change;
        document.getElementById("companySummary_changeInPercent").innerHTML = "(" + changeinPercent + ")";
        document.getElementById("companySummary_previousClose").innerHTML = previousClose;
        document.getElementById("companySummary_open").innerHTML = open;
        document.getElementById("companySummary_dayRange").innerHTML = dayRange;
        document.getElementById("companySummary_yearRange").innerHTML = yearRange;
        document.getElementById("companySummary_volume").innerHTML = volume;
        document.getElementById("companySummary_averageDailyVolume").innerHTML = averageDailyVolume;
        
        if (change.charAt(0) === '+') {
            document.getElementById("companySummary_change").style.color = "#33CC33";
            document.getElementById("companySummary_changeInPercent").style.color = "#33CC33";
        }
        else if (change.charAt(0) === '-') {
            document.getElementById("companySummary_change").style.color = "#FF0000";
            document.getElementById("companySummary_changeInPercent").style.color = "#FF0000";
        }

        if (name.length > 25) {
            var companySummary_listings = document.getElementById("companySummary_listings");
            for (var i = 0; i < companySummary_listings.rows.length; i++) {
                for (var j = 0; j < companySummary_listings.rows[i].cells.length; j++) {
                    companySummary_listings.rows[i].cells[j].style.paddingBottom = "5px";
                }
            }
        }
    });
}

if (hasSymbol) {
    document.getElementById("tile2").style.display = "block";
    document.getElementById("tile3").style.display = "block";
    document.getElementById("tile4").style.display = "block";
    getChart(query);
    getCompanySummary(query);
}

var getDateAndPercentChanges = function (dateAndClose) {
    dateAndPercentChanges = [];
    for (var i = 1; i < dateAndClose.length; i++) {
        var currentPrice = dateAndClose[i].close;
        var previousPrice = dateAndClose[i - 1].close;
        var percentChange = (currentPrice - previousPrice) / previousPrice * 100;
        dateAndPercentChanges.push({
            date: dateAndClose[i].date,
            percentChange: percentChange
        })
    }
    return dateAndPercentChanges;
}

var getCompanyData = function (urlParam) {
    url = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.historicaldata%20where%20symbol%20%3D%20%22msft%22%20and%20startDate%20%3D%20%222016-02-17%22%20and%20endDate%20%3D%20%222017-02-17%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
    $.getJSON(url, function (data) {
        var quote = data.query.results.quote;
        var dateAndClose = quote.map(
            function (quote) {
                return {
                    date: quote.Date,
                    close: parseFloat(quote.Close)
                };
            }
        );
        var dateAndPercentChanges = getDateAndPercentChanges(dateAndClose);

        var percentChanges = dateAndPercentChanges.map(
            function (dateAndPercentChanges) {
                return dateAndPercentChanges.percentChange;
            }
        );
        
        var getMean = function (values) {
            var sum = 0;
            for (var i = 0; i < values.length; i++) {
                sum += values[i];
            }
            return sum / values.length;
        }

        var getStandardDeviation = function (values) {
            var mean = getMean(values);
            var sum = 0;
            for (var i = 0; i < values.length; i++) {
                sum += Math.exp(values[i] - mean, 2);
            }
            return Math.sqrt(sum / values.length);
        }

        var mean = getMean(percentChanges);
        var stdev = getStandardDeviation(percentChanges);

        var stdev_span = document.getElementById("stdev");
        stdev_span.innerHTML = "&sigma;<sup>2</sup> = " + stdev.toFixed(5);

        var percentChanges_table = document.getElementById("percentChanges_table");

        var newRow;
        for (var i = 0; i < dateAndPercentChanges.length; i++) {
            if (i % 12 === 0) {
                newRow = percentChanges_table.insertRow(percentChanges_table.rows.length);
            }

            var newCell_percentChange = newRow.insertCell(i % 12);

            var currentPercentChange = dateAndPercentChanges[i].percentChange;
            var currentDate = dateAndPercentChanges[i].date;

            var percentChangeString = currentPercentChange.toFixed(3) + "%";
            if (currentPercentChange > 0) {
                percentChangeString = "+" + percentChangeString;
            }

            newCell_percentChange.innerHTML = "<span id=\"tooltip\">" + percentChangeString + "<span id=\"tooltiptext\">" + currentDate + "</span></span>";
            if (currentPercentChange <= mean - stdev / 2) {
                newCell_percentChange.style.fontWeight = "bold";
                newCell_percentChange.style.color = "#FF0000";
            }
            if (currentPercentChange >= mean + stdev / 2) {
                newCell_percentChange.style.fontWeight = "bold";
                newCell_percentChange.style.color = "#006400";
            }
        }
    });
}

getCompanyData("MSFT");
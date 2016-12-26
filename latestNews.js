var getLatestNewsJSON = function (latestNewsAPI) {

    $.getJSON(latestNewsAPI, function (data) {

        var date = new Date('2012-11-29 03:41:30 UTC');
        date.toString();

        var article = data.articles[0];
        var title = article.title;
        var description = article.description;
        var link = article.url;
        var img = article.urlToImage;
        
        var monthNames = ["Jan.", "Feb.", "Mar.", "Apr.", "May", "Jun.",
            "Jul.", "Aug.", "Sept.", "Oct.", "Nov.", "Dec."
        ];
        
        var publishedAt = new Date(article.publishedAt.substring(0, 19).replace('T', ' ') + " UTC");
        var date = monthNames[publishedAt.getMonth()] + " " + publishedAt.getDate() + ", " + publishedAt.getFullYear();
        var time = publishedAt.getHours() + ":" + publishedAt.getMinutes();

        var source = mapNewsSourceNames(data.source);

        if (description.length > 150) {
            description = description.substring(0, 150) + " ...";
        }

        var latestNewsTable = document.getElementById("latestNews_table");
        latestNewsTable.style.borderCollapse = "collapse";

        var latestNewsTable_rowIndex = latestNewsTable.rows.length;

        var newRow = latestNewsTable.insertRow(latestNewsTable_rowIndex = latestNewsTable.rows.length);
        newRow.style.cursor = "pointer";
        newRow.style.backgroundColor = "#FFFFFF";
        newRow.onmouseover = function () {
            newRow.style.backgroundColor = "#F0F0F0";
        }
        newRow.onmouseout = function () {
            newRow.style.backgroundColor = "#FFFFFF";
        }
        newRow.onclick = function () {
            window.open(link, "_blank");
        }

        var newCell_left = newRow.insertCell(0);
        newCell_left.style.paddingBottom = "20px";
        newCell_left.innerHTML = "<h3 style=\"margin: 0px;\">" + title + "</h3>"
            + "<h4 style=\"margin: 0px 0px 10px 0px;\"><span style=\"font-weight: normal;\">" + date + " " + time + " on </span>" + source + "</h4>"
            + "<span>" + description + "</span>";

        var newCell_right = newRow.insertCell(1);
        newCell_right.style.paddingBottom = "20px";
        newCell_right.style.textAlign = "right";
        newCell_right.innerHTML = "<img src=\"" + img + "\" style=\"max-width: 200px; max-height: 100px; vertical-align: middle;\" />";
    });
}

var mapNewsSourceNames = function (logicalName) {
    switch (logicalName) {
        case "bloomberg":
            return "Bloomberg";
        case "cnbc":
            return "CNBC";
        case "business-insider":
            return "Business Insider";
        default:
            return logicalName;
    }
}

getLatestNewsJSON(latestNewsAPI("bloomberg"));
getLatestNewsJSON(latestNewsAPI("cnbc"));
getLatestNewsJSON(latestNewsAPI("business-insider"));
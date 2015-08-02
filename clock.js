function init() {

var dateObj = new Date();

var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
    "Saturday", "Sunday"
];

var day = dayNames[dateObj.getDay()];
var date = dateObj.getDate();
var month = monthNames[dateObj.getMonth()];
var year = dateObj.getFullYear();
var hour = dateObj.getHours();
var minute = dateObj.getMinutes();

if (hour < 10) {
    hourString = "0" + hour;
}
else {
    hourString = "" + hour;
}

if (minute < 10) {
    minuteString = "0" + minute;
}
else {
    minuteString = "" + minute;
}

var second = dateObj.getSeconds();

if (second < 10) {
    secondString = "0" + second;
}
else {
    secondString = "" + second;
}

document.getElementById("date").innerHTML = day + ", " + month + " " + date + ", " + year
    + " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + hourString + ":" + minuteString + ":" + secondString + "&nbsp; EST &nbsp;&nbsp;&nbsp;";

setInterval(displayData, 100);

function displayData() {

    var dateObj = new Date();

    var monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
      "Saturday", "Sunday"
    ];

    var day = dayNames[dateObj.getDay()];
    var date = dateObj.getDate();
    var month = monthNames[dateObj.getMonth()];
    var year = dateObj.getFullYear();
    var hour = dateObj.getHours();
    var minute = dateObj.getMinutes();

    if (hour < 10) {
        hourString = "0" + hour;
    }
    else {
        hourString = "" + hour;
    }

    if (minute < 10) {
        minuteString = "0" + minute;
    }
    else {
        minuteString = "" + minute;
    }

    var second = dateObj.getSeconds();

    if (second < 10) {
        secondString = "0" + second;
    }
    else {
        secondString = "" + second;
    }

    document.getElementById("date").innerHTML = day + ", " + month + " " + date + ", " + year
        + " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + hourString + ":" + minuteString + ":" + secondString + "&nbsp; EST &nbsp;&nbsp;&nbsp;";

}

}

window.onload = init;
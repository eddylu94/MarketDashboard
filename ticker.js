function init() {

    var tickerBox = document.getElementById("ticker");

    setInterval(moveTicker, 100);

    function moveTicker() {
        tickerBox.style.position += 1;
    }

}

window.onload = init;
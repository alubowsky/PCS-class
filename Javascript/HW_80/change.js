(function () {
    "use strict";

    var colorIntervalId;
    var bgIntervalId;
    
    var startString = 'Start';
    var stopString = 'Stop';

    function changeBgColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        var thergb = "rgb(" + r + "," + g + "," + b + ")"; 
        document.body.style.backgroundColor = thergb;
    }

    function changeColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        var thergb = "rgb(" + r + "," + g + "," + b + ")"; 
        document.body.style.color = thergb;
    }


    var changeButton = document.getElementById("changeButton");
    changeButton.innerHTML = startString;

    changeButton.addEventListener('click', function () {
        if (changeButton.innerHTML === startString) {
            bgIntervalId = setInterval(changeBgColor, 1500);
            colorIntervalId = setInterval(changeColor, 1000);
            changeButton.innerHTML = stopString;
        } else {
            clearInterval(bgIntervalId);
            clearInterval(colorIntervalId);
            changeButton.innerHTML = startString;
        }
    });

}());
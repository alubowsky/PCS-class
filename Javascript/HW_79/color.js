(function () {
    "use strict";
    var colorChanger = document.getElementById('submit');

    colorChanger.addEventListener('click', function () {
        var backgroundColor = document.getElementById('backgroundColor').value;
        var fontColor = document.getElementById('fontColor').value;
        document.body.style.color = fontColor;
        document.body.style.backgroundColor = backgroundColor;
    });
}());
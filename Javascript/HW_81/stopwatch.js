var pcs = pcs || {};

pcs.timer = (function () {
    "use strict";

    var startTime;

    var startString = 'Start';
    var stopString = 'Stop';

    function getElapsedTime() {
        var endTime = new Date() - startTime;
        return endTime;
    }

    function createElement(type) {
        return document.createElement(type);
    }

    function show() {
        var div = createElement("div");
        var span = createElement("span");
        var time = createElement("h1");
        var buttonDiv = createElement("div");
        var okButton = createElement("button");
        var br = createElement("br");

        
        okButton.innerHTML = startString;
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);
        span.innerHTML = "Click the start button to start the stopwatch";
        div.appendChild(span);

        div.style.backgroundColor = 'lightblue';
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.left = '50%';
        div.style.top = '50%';
        div.style.marginLeft = '-200px';
        div.style.marginTop = '-50px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.top = '6px';
        buttonDiv.style.marginLeft = '-10px';

        span.style.position = 'absolute';
        span.style.marginLeft = '50px';
        span.style.marginTop = '-10px';

        time.style.textAlign = 'center';

        okButton.addEventListener("click", function () {   
            if (okButton.innerHTML === startString) {
                startTime = new Date();
                okButton.innerHTML = stopString;
                span.innerHTML = "Click the stop button to stop the stopwatch";
                time.innerHTML = "";
            } else {
                span.innerHTML = "The elapsed Time in Milliseconds is: ";
                div.appendChild(br);
                time.innerHTML = getElapsedTime();
                div.appendChild(time);
                okButton.innerHTML = startString;
            }
        });
    }

    return {
        show: show
    };
}());
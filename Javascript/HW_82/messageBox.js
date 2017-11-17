var pcs = pcs || {};

pcs.messagebox = (function (module) {
    "use strict";
    var howMany = 0;
    var offset = 50;
    module.createElement= function(type) {
        return document.createElement(type);
    };

    module.show = function(msg, isModal) {
        howMany ++;

        if(howMany > 0){
            offset ++;
        }

        var div = module.createElement("div");
        var span = module.createElement("span");
        var buttonDiv = module.createElement("div");
        var okButton = module.createElement("button");

        span.innerHTML = msg;
        div.appendChild(span);
        okButton.innerHTML = "OK";
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);

        div.style.backgroundColor = 'lightblue';
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.left =  offset + '%';
        div.style.top = offset + '%';
        div.style.marginLeft = '-200px';
        div.style.marginTop = '-50px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';

        if(!isModal){
            div.addEventListener("click", function(){
                div.style.zIndex = offset;
            });
        }

        if(isModal){
            var modalDiv = document.createElement('div');
            document.body.appendChild(modalDiv);
            modalDiv.style.width = '100%';
            modalDiv.style.height = '100%';
            modalDiv.style.position = 'absolute';
            modalDiv.style.backgroundColor = 'gray';
            modalDiv.style.opacity = '0.5';
            modalDiv.style.top = '0';
            div.style.zIndex = offset + 1;
        }

        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        okButton.addEventListener("click", function () {
            howMany --;
            offset --;
            document.body.removeChild(div);
            if(isModal){
                document.body.removeChild(modalDiv);
            }
        });
    };

    return module;
}(pcs.messagebox || {}));
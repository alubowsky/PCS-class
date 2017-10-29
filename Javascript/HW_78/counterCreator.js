var app = app || {};

app.counterCreator = (function (module) {
    "use strict";
    
    var amountCounters = 0;

    module.createCounter = function() {
        amountCounters +=1;
        return {
            count: 0,

            myIncrementCount: function () {
                return this.count += 1;
            },

            myCurrentCount: function () {
                return this.count;
            }
        };
    };

    module.amountOfCounters = function () {
        return amountCounters;
    };



    return module;
}(app.counterCreator || {}));

var myApp = myApp || {};

myApp.utils = (function (utils) {
    "use strict";

    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
    'September', 'October', 'November', 'December'];
    var month;

    utils.getMonthNumber = function (name) {
            for (var i = 0; i < months.length; i++) {
                if (months[i] === name) {
                    month = i + 1;
                }
            }

            if(month === 0) {
                month = "NO SUCH Month!";
            }
            
            console.log(month);
    };

    return utils;
}(myApp.utils || {}));
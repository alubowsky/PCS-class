var myApp = myApp || {};

myApp.utils = (function (utils) {
    "use strict";

    utils.getMonthName = function (num) {
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
        'September', 'October', 'November', 'December'];
        var monthName;
            if(num in months){
                monthName = months[num - 1];
            }
            else{
                monthName = "Month Does Not Exist!";
            }
        console.log(monthName);
    };

    return utils;
}(myApp.utils || {}));
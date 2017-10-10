var theMonthUtils = (function () {
    'use strict';

    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 
        'September', 'October', 'November', 'December'];

    return {
        getMonthName: function (num) {
            if(num in months){
                return months[num - 1];
            }
            else{
                return "Month Does Not Exist!";
            }
        },
        getMonthNumber: function (name) {
            for (var i = 0; i < months.length; i++) {
                if (months[i] === name) {
                    return i + 1;
                }
            }
            return "NO SUCH Month!";
        }
    };
}());

console.log("theMonthUtils.getMonthName(6)", theMonthUtils.getMonthName(6));
console.log('theMonthUtils.getMonthNumber("June")', theMonthUtils.getMonthNumber("June"));


console.log("theMonthUtils.getMonthName(13)", theMonthUtils.getMonthName(13));
console.log('theMonthUtils.getMonthNumber("king")', theMonthUtils.getMonthNumber("king"));
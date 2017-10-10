var interestCalculator = (function () {
    'use strict';

    var rate;

    var Years;

    return {
        setRate: function (rate) {
            this.rate = (rate/100);
        },
        setYears: function (years) {
            this.years = years;
        },
        calculateInterest: function (amount) {
            return  amount * this.rate * this.years;
        }
    };
}());

console.log("interestCalculator.setRate(10)",interestCalculator.setRate(10));
console.log("interestCalculator.setYears(1)",interestCalculator.setYears(1));
console.log("interestCalculator.calculateInterest(100)", interestCalculator.calculateInterest(100));

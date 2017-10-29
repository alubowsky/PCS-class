"use strict";

var account1 = {
     balance: 0
};

var account2 = {
    balance: 0
};

function addinterest(amount) {
    this.balance += amount;
    console.log("the new balance is: " + this.balance);
}

addinterest.call(account1, 30);
addinterest.call(account2, 9);

var myApp = myApp || {};

myApp.utils = (function (utils) {
    "use strict";

    utils.stringCaseInsensitiveEquals= function (string1, string2) {
        if(string1.toUpperCase() === string2.toUpperCase()){
            return true;
        }
        else{
            return false;
        }
    };

    return utils;
}(myApp.utils || {}));
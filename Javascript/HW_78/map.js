var map = function(array, callback){
    "use strict";
    var newArray = [];
    for(var i = 0; i < array.length; i++){
        newArray[i] = callback(array[i]);
    }
    return newArray;
};

var doubles = function(x){
    "use strict";
    return x * 2;
};

var array = [2,4,6];
console.log("original array", array);
console.log("new array", map(array, doubles));



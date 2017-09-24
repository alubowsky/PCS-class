 var letters = ['A', 'b', 'C', 'd', 'e'];
 var lowLetter = ['a', 'b', 'c', 'd', 'e'];
 var upLetter = ['A', 'B', 'C', 'D', 'E'];

function some(theArray, callback){
    for(var i = 0; i < theArray.length; i++) {
        if(callback(theArray[i])){
           return true;
        }
    }
    return false;
}

function isUpperCase(letter){
    return letter === letter.toUpperCase();
}

function isLowerCase(letter){
    return letter === letter.toLowerCase();
}

//////////////////////////////////////////////////////

function printIt(it) {
    document.write(it, " ");
}

function onlyIf(array, test, action){
    /*
    either like this
    
    array.forEach(function(element) {
        if(test(element)){
            action(element);
        }
    });
    
    or this...
    */
    var passed = array.filter(test);
    passed.forEach(function(element) {
        action(element);
    });
}


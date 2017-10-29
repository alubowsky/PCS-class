var app = app || {};

for(let i = 0; i < 10; i++){
    app.counter.incrementCount();
}

var counter1 = app.counterCreator.createCounter();
var counter2 = app.counterCreator.createCounter();

for(let i = 0; i < 5; i++){
    counter1.myIncrementCount();
}

for(let i = 0; i < 15; i++){
    counter2.myIncrementCount();
}

console.log("app.counter.getCurrentCount()",app.counter.getCurrentCount());

console.log("counter1.myCurrentCount()",counter1.myCurrentCount());

console.log("counter2.myCurrentCount()",counter2.myCurrentCount());

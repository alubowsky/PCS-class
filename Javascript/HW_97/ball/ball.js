(function(){
"use strict";
var canvas = document.getElementById("theCanvas"),
        context = canvas.getContext('2d');


function resizeCanvas() {
    var width = window.innerWidth - 10;
    var height = window.innerHeight - 10;

    canvas.width = width;
    canvas.height = height;

}

window.addEventListener('resize', resizeCanvas);

resizeCanvas();

var x = getRandomNumberBetween(0, canvas.width),
    y = 0,
    changeX=getRandomNumberBetween(-10, 10),
    changeY=getRandomNumberBetween(-10, 10),
    radius = 50;


function getRandomNumberBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}


function bounce (x,y){
    if (x < 0 || x >= canvas.width) {
       changeX = -changeX;
    } 
    if (y < 0 || y >= canvas.height) {
        changeY = -changeY;
    }
    context.arc(x, y, radius, 0, 2 * Math.PI);
    context.fillStyle = "blue";
    context.fill();
}

setInterval(() => {
    context.beginPath();
    context.clearRect(x- radius - 1, y - radius - 1, radius * 2 + 2, radius * 2 + 2);
    context.closePath();
    context.beginPath();
    bounce(x += changeX,y +=changeY);
    context.closePath();
}, 50);

}());
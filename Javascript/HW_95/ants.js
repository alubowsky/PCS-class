/* jshint -W119, -W104 */
(function () {
    "use strict";

    var canvas = document.getElementById("theCanvas"),
        context = canvas.getContext('2d'),
        ants = [];

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    class Ant {
        constructor() {
            this.x = canvas.width/2;
            this.y = canvas.height/2;
            this.color = document.getElementById("color").value;
            this.numOfMove = getRandomNumberBetween(1 , 100);
            this.yMove = getRandomNumberBetween(-2, 2);
            this.xMove = getRandomNumberBetween(-2, 2);
        }
        move() {
            if(this.numOfMove > 0 && (this.x + this.xMove > 0 && this.x + this.xMove < canvas.width-1) && (this.y + this.yMove > 0 && this.y + this.yMove < canvas.height-1) ){
                this.x += this.xMove;
                this.y += this.yMove;
                context.fillRect(this.x, this.y, 2, 2);
                this.numOfMove--;
            }
            else{
                this.numOfMove = getRandomNumberBetween(1 , 30);
                this.yMove = getRandomNumberBetween(-2, 2);
                this.xMove = getRandomNumberBetween(-2, 2);
                context.fillRect(this.x, this.y, 2, 2);
            }
        }
    }

    function getRandomNumberBetween(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function addAnts (){
        for (var i = 0; i < 10000; i++) {
            ants.push(new Ant());
        }
    }

    document.getElementById("add").addEventListener("click", addAnts);

    addAnts();   
    setInterval(() => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        ants.forEach(function(ant){
            context.fillStyle = ant.color;
            
            ant.move();
        });
    }, 100);
}());
(function () {
    "use strict";

    var canvas = document.getElementById("theCanvas"),
        context = canvas.getContext('2d');


    function resizeCanvas() {
        canvas.width = window.innerWidth - 10;
        canvas.height = window.innerHeight - 10;
    }

    window.addEventListener('resize', resizeCanvas);

    resizeCanvas();

    var img = document.createElement('img');
    img.src = "snake.png";

    img.onload = function () {
        context.drawImage(img, 0, 0, 64, 64);
    };

    /*var x = 0,
     draw =   setInterval(() => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        if(x >= canvas.width-30){
            clearInterval(draw);
        }
        context.drawImage(img, x, 0, 64, 64);
        x ++;
    }, 25);*/

    var x = 0,
        y = 0;

    window.addEventListener('keydown', function(event){
        if(event.keyCode === 37){
            x-=2;
            if(x > 64){
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(img, x, y, 64, 64);
                console.log("left ", x);
            }
        }
        if(event.keyCode === 39){
            x+=2;
            if(++x <= canvas.width-64){
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(img, x, y, 64, 64);
            }
        }
        if(event.keyCode === 40){
            y+=2;
            if(++y <= canvas.height-64){
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(img, x, y, 64, 64);
            }
        }
        if(event.keyCode === 38){
            y-=2;
            if(--y > 64){
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(img, x, y, 64, 64);
                console.log("up ", y);
            }
        }
    });
    
}());
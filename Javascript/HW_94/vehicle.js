(function(){
    "use strict";
    function Vehicle(color) {
        this.color = color;
        this.go = function (speed) {
            this.speed = speed;
            console.log('now going at speed: ' + this.speed);
        };
    }

    Vehicle.prototype.print = function(){
        console.log('color: ' + this.color + " speed: " + this.speed);
    };

    var vehicle = new Vehicle('blue');
    vehicle.print();
    vehicle.go(50);
    vehicle.print();
    console.log(vehicle);


    function Plane(color) {
        this.color = color;
    }

    Plane.prototype = Object.create(Vehicle.prototype);
    Plane.prototype.go = function (speed) {
        this.speed = speed;
        console.log('now flying at speed: ' + this.speed);
    };

    var plane = new Plane('green');
    
    console.log(plane);
    plane.print();
    plane.go(700);
    plane.print();
}());


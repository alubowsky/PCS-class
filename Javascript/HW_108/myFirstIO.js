var fs = require('fs');

var string = fs.readFileSync(process.argv[2]).toString();
var array = string.split('\n');
console.log(array.length - 1);

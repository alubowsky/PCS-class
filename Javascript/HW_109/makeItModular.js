var module = require('./module.js');
let files = module(process.argv[2], process.argv[3], callback);

function callback(err, data) {
    if (err) {
        console.log(err);
    }
    for (let i = 0; i < data.length; i++) {
        console.log(data[i]);
    }
}

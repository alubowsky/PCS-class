var http = require('http'),
    concatStream = require('concat-stream');
let td = "";
http.get(process.argv[2], callback);
function callback(response) {
    response.setEncoding("utf8");
    response.pipe(concatStream(function (data) {
        console.log(data.length);
        console.log(data);
    }));
}
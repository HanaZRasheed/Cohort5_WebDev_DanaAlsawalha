var http = require('http');
var url = require('url');

const hostname = 'localhost';
const port = 8080;

var server = http.createServer((request, response) => {
    //processing GET paramters
    var query = url.parse(request.url, true).query;
    var num1 = query.num1;
    var num2 = query.num2;
    var num3 = query.num3;

    //Build HTTP response
    response.statusCode = 200;
    response.setHeader('Content-Type', 'text/html');
    response.setHeader('Cache-Control', 'no-store');

    response.write(`num1= ${num1}, num2= ${num2}, num3= ${num3}`);
    response.end();
}).listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
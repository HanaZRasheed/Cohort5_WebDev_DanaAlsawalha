//connections
const Student = require("./student.js");
std = require("./std.js");

//using var
var x1 = 60;
var x2 = 60;
console.log(x1 + x2);

//obj
console.log(std);
console.log(std.name);

//class
var std = new Student();
std.id = 20;
std.name = "Rahaf";
std.avg = 80;

console.log(std)
console.log(std.name)
console.log(std.hello())

//function in 2 formats
function sayHi() {
    console.log("Hi from sayHi function");
}
sayHi();

var sayHi2 = (name) => console.log("Function in a variable " + name);
sayHi2("Dana");

//array
var arr = ['Dana','Rahaf', 'Rozan'];
console.log(arr);

//convert from JSON to obj and from obj to JSON
var Person = {
    "id":"20",
    "name":"Dana",
    "salary":500,
};

var jsonText = JSON.stringify(Person);
console.log("JSON format" + jsonText);


var obj2 = JSON.parse(jsonText);
console.log(`JavaScript objects format`, obj2);


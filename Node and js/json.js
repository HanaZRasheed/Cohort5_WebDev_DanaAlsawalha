var Person = {
    "id":"20",
    "name":"Dana",
    "salary":500,
};

var jsonText = JSON.stringify(Person);
console.log("JSON format" + jsonText);


var obj2 = JSON.parse(jsonText);
console.log(`JavaScript objects format`, obj2);

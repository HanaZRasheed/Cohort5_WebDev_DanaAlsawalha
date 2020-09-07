var arr = ['Dana','Rahaf', 'Rozan'];
console.log(arr);

var fun = function(item, index){
    console.log(`Item at index ${index} = ${item}`);
}

arr.forEach(fun);

arr.push('Rula');
arr.push('Sara');
console.log(arr);

arr.pop();
console.log(arr);
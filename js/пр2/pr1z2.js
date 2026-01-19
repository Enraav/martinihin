const readline = require('readline-sync');
let b = Number(readline.question('Input b: '));
let c = Number(readline.question('Input c: '));
while(b > 3){
    console.log(c = c + b);
    console.log(b = b - 5);
}
console.log(c)
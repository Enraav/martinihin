const readline = require('readline-sync');
const a = readline.question('Input a: ');
const b = readline.question('Input b: ');
let s = a*b;
if(s>=500){
    console.log(s*0.9);
}else if(s<=500) {
    console.log(s);
}


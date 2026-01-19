const readline = require('readline-sync');
let c=Number(readline.question('Input c: '));
let a=Number(readline.question('Input a: '));
let b=Number(readline.question('Input b: '));
let x=Number(readline.question('Input x: '));
let y = 0;
if(x<0){
    y =(y = a + b);
}else if(x > 0){
    y =(y=c/b);
}else if(x=0){
    y =( c *(a + 2 *B));
}
console.log(y)
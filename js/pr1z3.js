const readline = require('readline-sync');
let n=Number(readline.question('Input n: '));
let i = 1;
let s = 0;
while(i<=n){
    s=(s=s+i);
    i=(i=i+2);
}
    console.log(s);

console.log('задание 1') 
let startNumber = 1;
let multiplier = 4;
let quantity = 7;
for (let i =1; i <quantity; i++){
  let result = startNumber *= multiplier;
  console.log(result)
}


console.log('задание 2') 
let lastNumber1 = 10;
let sum =0;
for (let i = 1; i <= lastNumber1; i++) {
    sum += i;  
}

console.log(sum);


console.log('задание 3') 
let lastNumber2=5;
let multiplicationResult=1;
for(n=1; n<=lastNumber2; n++){
    if(n%2===0){
        multiplicationResult *=n;
    }
}
console.log(multiplicationResult);

console.log('задание 4')
let number =15; 
for(i=0; i<=number; i++){
    if(number %i===0){
        console.log(i)
    }
}

console.log('Задание 5')
const readline = require('readline-sync');
const k = Number(readline.question('enter the number K '));
    for (let num = 100; num <= 999; num++) {
        const hundreds = Math.floor(num / 100);
        const tens = Math.floor((num % 100) / 10);
        const units = num % 10;

        if (hundreds + tens + units === k) {
            console.log(num);
        }

}
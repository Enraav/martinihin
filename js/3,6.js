console.log('Задание 1')
const readline = require('readline-sync');
let a = Number(readline.question('введите a: '));
let b = Number(readline.question('Input b: '));
function checkVehicle(wheels, weight) {
  if (wheels === 2 && weight < 100) {
    return 'Парковка разрешена';
  }
  return 'Вам здесь не место! Мяу!';
}
console.log(checkVehicle(4, 200)); 


console.log('Задание 2')
let liquidDensity = 1000;
const accelerationOfFreeFall = 9.8;
let depth = 67;
function calculatePressure(liquidDensity,accelerationOfFreeFall,depth){
    return Math.round(liquidDensity * accelerationOfFreeFall*depth );
}
console.log(calculatePressure(liquidDensity,accelerationOfFreeFall,depth));

console.log('Задание 3')
let arr = [true, false, true, true, false, false];
let TrueCount = 0;
let FalseCount = 0
function election(arr){
    for(let item of arr){
        if(item === true) TrueCount++;
            else FalseCount++;
    }
    if(TrueCount > FalseCount) console.log('Значений True больше');
        else console.log('значений false больше');
    if(TrueCount == FalseCount) console.log('количество True и False равно')
    }
election(arr);



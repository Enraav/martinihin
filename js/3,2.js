//задание 4
let age =7;
let ageGroup ;
if (age <= 1){
    ageGroup = 'Котята'}
    else if( age >1 && age <=3  ){
    ageGroup = 'Молодые коты'} 
    else if( age >3 && age <=7  ){
    ageGroup = 'Коты средних лет'} 
    else if( age >7  ){
    ageGroup = 'Почтенные коты'};
console.log('кот относится к ' + ageGroup);
//заданеи 5
let weight = 7;
let recommendation;
if (weight < 4) {
  recommendation = 'Пора перекусить';
} else if (weight >= 4 && weight <= 5.5) {
  recommendation = 'Вес в норме';
} else {
  recommendation = 'Пора на тренировку';
}
console.log(recommendation)
//задание 6
let number = 16;
let taskResult;
if (number %3 === 0 && number  %5 ===0){
    taskResult='FizzBuzz'}
    else if(number %3 === 0){
    taskResult='Fizz'}
    else if(number  %5 ===0){
        taskResult='Buzz'
    }

console.log(taskResult)

//задание 7 

const readline = require('readline-sync');
const m = Number(readline.question('Input m: '));
const n = Number(readline.question('Input n: '));
  

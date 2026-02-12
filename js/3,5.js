console.log('Задание 1')
"use strict";
const readline = require('readline-sync');
let chosenLiquid = Number(readline.question('Введите основу для смузи:'));
let chosenFruit = Number(readline.question('Введите фрукт для смузи:'));
let chosenGreen = Number(readline.question('Введите добавку для смузи:'));
let liquids = ['вода', 'молоко', 'сок', 'чай', 'йогурт'];
let fruits = ['киви', 'банан', 'персик', 'манго', 'груша', 'ананас'];
let greens = ['мята', 'шпинат', 'руккола', 'петрушка', 'базилик'];

let order = 'Основа - ' + liquids[chosenLiquid -1 ] + 
            ', фрукт -' + fruits[chosenFruit -1] + 
            ', зелень - ' + greens[chosenGreen -1];
console.log(order);

console.log('Задание 2')
let groceries = ['чай', 'шпроты', 'печенье', 'сахар', 'чипсы'];
let shoppingList = groceries[0]; 
for (let i = 1; i < groceries.length; i++) {
    shoppingList = shoppingList + ', ' + groceries[i];
}
console.log(shoppingList);

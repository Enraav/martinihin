console.log('Задание 1-Смузишняя на блокчейне')

const readline = require('readline-sync');
let liquids = ['water', 'milk', 'juice', 'tea', 'yogurt'];
let fruits = ['kiwi', 'banana', 'peach', 'mango', 'pear', 'pineapple'];
let greens = ['mint', 'spinach', 'arugula', 'parsley', 'basil'];
let order = '';

console.log('Добрый день, добро пожаловать в нашу крутую смузешную, выш мастер смузи плохо говорит на русском, так что пишите на английском');

console.log('Выберите основу для смузи')
console.log(liquids)
let chosenLiquid = readline.question('Введите основу для смузи: ');

console.log('Выберите фрукт для своего смузи: ')
console.log(fruits)
let chosenFruit = readline.question('Введите фрукт для смузи: ');

console.log('Выберите зелень для смузи')
console.log(greens)
let chosenGreen = readline.question('Введите зелень для смузи: ');

console.log('В ваш супер мега крутой смузи входят следующие ингридиенты:')
console.log(chosenLiquid);
console.log(chosenFruit);
console.log(chosenGreen); 


let tips = readline.question('cпасибо за заказ, выберите сумму чаевых, сумма в USDT:');
console.log('Спасибо большое')

console.log('Задание 2 Список покупок');

let groceries = ['чай', 'шпроты', 'печенье', 'сахар', 'чипсы'];
let shoppingList = '';

console.log('задание 1');
const number=67;
switch(number){
    case 1:
        console.log('январь')
        break;
    case 2:
        console.log('февраль')
        break;
    case 3:
        console.log('март')
        break;
    case 4:
        console.log('апрель')
        break;
    case 5:
        console.log('май')
        break;
    case 6:
        console.log('июнь')
        break;
    case 7:
        console.log('июль')
        break;
    case 8:
        console.log('август')
        break;
    case 9:
        console.log('сентябрь')
        break;
    case 10:
        console.log('октябрь')
        break;
    case 11:
        console.log('ноябрь')
        break;
    case 12:
        console.log('декарь')
        break;
    case 67:
        console.log('67')
        break;       
    default:
        console.log('ничего не совпало');
}

console.log('задание 2');

const monthNumber = 2;
let monthName;

if (monthNumber === 1) {
  monthName = 'Январь';
} else if (monthNumber === 2) {
  monthName = 'Февраль';
} else if (monthNumber === 3) {
  monthName = 'Март';
} else if (monthNumber === 4) {
  monthName = 'Апрель';
} else if (monthNumber === 5) {
  monthName = 'Май';
} else if (monthNumber === 6) {
  monthName = 'Июнь';
} else if (monthNumber === 7) {
  monthName = 'Июль';
} else if (monthNumber === 8) {
  monthName = 'Август';
} else if (monthNumber === 9) {
  monthName = 'Сентябрь';
} else if (monthNumber === 10) {
  monthName = 'Октябрь';
} else if (monthNumber === 11) {
  monthName = 'Ноябрь';
} else if (monthNumber === 12) {
  monthName = 'Декабрь';
} else {
  monthName = 'ничего не совпало';
}

console.log(monthName);

console.log('задание 3');

const day = 4;
switch(day){
    case 1:
        console.log('1-4 урок - Основы алгоритмизации и программирования, 5-7 урок - Тестирование информационных систем')
        break;
    case 2:
        console.log('1-4 урок - Тестирование информационных систем, 5-6 урок Архитектура аппаратных средств, 7-8 урок Физическая культура ')
        break;
    case 3:
        console.log('2-3 урок - Иностранный язык в профессиональной деятельности, 4-6 урок - Тестирование информационных систем')
        break;
    case 4:
        console.log('1-2 урок - Основы алгоритмизации и программирования, 3-6 урок - Архитектура аппаратных средств, 7-8 урок - Основы алгоритмизации и программирования')
        break;
    case 5:
        console.log('1-6 урок - Тестирование информационных систем, 7-8 урок - Основы алгоритмизации и программирования')
        break;
    case 6:
        console.log('Выходной, нету уроков')
        break;
    case 7:
        console.log('Выходной, нету уроков')
        break;       
    default:
        console.log('Такого дня недели нету');
}

console.log('задание 4');

const numberTask4 = 9;
let answer;
if (numberTask4 === 0) {
  answer = 0;
} else if (numberTask4 === 1) {
  answer = '1';
} else if (numberTask4 === 2) {
  answer = '4';
} else if (numberTask4 === 3) {
  answer = '9';
} else if (numberTask4 === 4) {
  answer = '6';
} else if (numberTask4 === 5) {
  answer = '5';
} else if (numberTask4 === 6) {
  answer = '6';
} else if (numberTask4 === 7) {
  answer = '9';
} else if (numberTask4 === 8) {
  answer = '4';
} else if (numberTask4 === 9) {
  answer = '1';
} else {
  answer = 'ничего не совпало';
}
console.log(answer);

console.log('задание 5');
let numberTask5 = 45;
    count = 5;
    if(numberTask5 === 0) count = 1;
    while( numberTask5 !== 0){
      x = Math.floor(numberTask5/10)
      count++
    }            
console.log(count) 
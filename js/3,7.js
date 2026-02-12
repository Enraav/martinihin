"use strict"

console.log('Задание 1')

let daysOfWeek = {
  'понедельник': 'monday',
  'вторник': 'tuesday',
  'среда': 'wednesday',
  'четверг': 'thursday',
  'пятница': 'friday',
  'суббота': 'saturday',
  'воскресенье': 'sunday'
};
 
let translate = function(week,daysOfWeek){
 
  return week+' по-английски:'+daysOfWeek[week];
  };
console.log(translate('воскресенье', daysOfWeek));


// console.log('Задание 2')

// let getStatistics = function (players) {
//   let name = 'Cristiano '
//   let goals = 0;



// };

console.log('Задание 3')

let materialPrice = {
'wood': 1000,
'stone': 1500,
'brick': 2000
};
let house = {
rooms: 10,
floors: 5,
material: 'wood',
coefficient: 10.5
};

function calculateSquare(house){
  let square = house.rooms * house.flors * house.coefficient;
  return square;
};

function calculatePrice (){
  let price=calculateSquare(house)* materialPrice[house.material];  
};

console.log(calculateSquare(house));
console.log(calculatePrice(house));
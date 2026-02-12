//задание 1
const euroRate =91;
const dollarRate = 78;
let euroAmount = 500;
let dollarAmount = 2500;

let euro=(euroRate * euroAmount);
let dollar=(dollarRate * dollarAmount);
let travelCost=(euro+dollar);
console.log(travelCost );
console.log('столько денег нужно коту Кексу на поездку');
//задание 2
let balance = 100000;
debtAmount = ((travelCost - balance)*2);
console.log(debtAmount);
console.log('должен будет Кекс своему братану');
//задание 3
let flightDistance = 7260;
let averageSpeed = 600;
let flightTime=(flightDistance / averageSpeed);
console.log( Math.round(flightTime));
console.log('часов проведет кекс в воздухе');
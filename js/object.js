"use strict"
let field = 'last name';
let name = 'Вася';
let birth = 2005;

const user ={
    'first name' : name,
    [field]: 'Иванов',
    birth : birth + 5,
};
user[field]= 'Петров';
user.age = 20;
for(let prop in user){
    console.log(user[prop]);
}
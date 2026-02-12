"use strict";

const readline = require("readline-sync");

function inputArray() {
    let arr = [];
    let n;

    while (true) {
        n = Number(readline.question("Введите размер массива: "));
        if (!isNaN(n) && n > 0 && n % 1 === 0) {
            break;
        }
        console.log("Введите целое положительное число.");
    }

    for (let i = 0; i < n; i++) {
        let x;

        while (true) {
            x = Number(readline.question("Введите число: "));
            if (!isNaN(x)) {
                break;
            }
            console.log("Это не число.");
        }

        arr.push(x);
    }

    return arr;
}


function maxInTheArray(arr) {
    if (arr.length === 0) return false;

    let max = arr[0];

    for (let i = 1; i < arr.length; i++) {
        if (arr[i] > max) {
            max = arr[i];
        }
    }

    return max;
}

function minInTheArray(arr) {
    if (arr.length === 0) return false;

    let min = arr[0];

    for (let i = 1; i < arr.length; i++) {
        if (arr[i] < min) {
            min = arr[i];
        }
    }

    return min;
}


function meanTwoDigit(arr) {
    let sum = 0;
    let count = 0;

    for (let i = 0; i < arr.length; i++) {
        if ((arr[i] >= 10 && arr[i] <= 99) || (arr[i] <= -10 && arr[i] >= -99)) {
            sum = sum + arr[i];
            count = count + 1;
        }
    }

    if (count === 0) return false;
    return sum / count;
}


function transformArray(arr) {
    let result = [];

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] > 0) {
            result.push(arr[i] * arr[i]);
        } else {
            result.push(arr[i] < 0 ? -arr[i] : arr[i]);
        }
    }

    return result;
}
let a = inputArray();

console.log("Массив:", a);
console.log("Максимум:", maxInTheArray(a));
console.log("Минимум:", minInTheArray(a));
console.log("Среднее двузначных:", meanTwoDigit(a));
console.log("Преобразованный массив:", transformArray(a));
<h1>Задание 2 - анонимные функции</h1>
<h2>Задание 1</h2>
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13,14,15,16,17,18,19,20];
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 === 0;
});

if (empty($evenNumbers)) {
    echo "Четных чисел в массиве нет.\n";
} else {
    echo "Четные числа: " . implode(", ", $evenNumbers) . "\n";
}
?>

<h2>Задание 2</h2>
<?php
$integers = [1, 2, 3, 4, 5];
$cubes = array_map(function($num) {
    return $num ** 3;
}, $integers);

echo "Кубы чисел: " . implode(", ", $cubes) . "\n";
?>

<h2>Задание 3</h2>
<?php

 $numbers = [1, 2, 3, 4, 5];
$count = count($numbers);
$sum = array_reduce($numbers, function($carry, $num) {
    return $carry + $num;
}, 0);
$arithmeticMean = $sum / $count;

$product = array_reduce($numbers, function($carry, $num) {
    return $carry * $num;
}, 1);
$geometricMean = pow($product, 1 / $count);

echo "Среднее арифметическое: " . $arithmeticMean;
echo "Среднее геометрическое: " . $geometricMean;
?>



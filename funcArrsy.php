<h1>функции для массивов</h1>
<h2>Задание 1</h2>
<?php
$numbers = [2,54,8,75,8750,0,5478,7467,46746778,674];
function printNumberZero($array) {
    $zeroIndex = array_search(0, $array);
        if ($zeroIndex !== false) {
        $result = array_slice($array, 0, $zeroIndex + 1);
                foreach ($result as $number) {
            echo $number . "\n";
        }
    } 
}
printNumberZero($numbers);
?>

<H2>Задание 2</H2>
<?php
$arr2 = [10, -2, 7, 5, -7, 11];
echo "\n2) swapMinMax: \n";

function swapMinMax(array $arr): array {
    if (empty($arr)) return $arr;
    $max = max($arr);
    $min = min($arr);
    $kMax = array_search($max, $arr, true);
    $kMin = array_search($min, $arr, true);
    if ($kMax !== false && $kMin !== false && $kMax !== $kMin) {
        $tmp = $arr[$kMax];
        $arr[$kMax] = $arr[$kMin];
        $arr[$kMin] = $tmp;
    }
    return $arr;
}
print_r(swapMinMax($arr2));
?>

<h2>Задание 3</h2>
<?php
$arr = [1, 0, 3, 0, 5, 0, 7];

$null_positions = [];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == 0) {
        $null_positions[] = $i;
    }
}
print_r($null_positions);
?>

<h2>Задание 4</h2>
<?php
$arr = [1, 0, 3, 0, 5, 0, 7];
$non_zero_arr = [];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] != 0) {
        $non_zero_arr[] = $arr[$i];
    }
}

print_r($non_zero_arr);
?>


<h2>Задание 5</h2>
<?php
$arr = [2 => 'a', 5 => 'b', 7 => 'c'];

$arr = array_values($arr);

print_r($arr);
?>

<h2>Задание 6</h2>
<?php
$arr = [1,3,5,7,9 ];

$odd_count = 0;
$total = count($arr);

for ($i = 0; $i < $total; $i++) {
    if ($arr[$i] % 2 != 0) {
        $odd_count++;
    }
}

if ($total > 0) {
    $percent = ($odd_count / $total) * 100;
    echo $percent . "%\n";
}
?>

<h2>Задание 7</h2>
<?php
$arr = [1.5, 2.5, 3.0, 4.2, 5.3, 6.4, 7.1, 8.0, 9.9, 10.0];

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if (isPrime($i)) {
        $sum += $arr[$i];
    }
}

echo "Сумма элементов с простыми индексами: " . $sum . "\n";
?>
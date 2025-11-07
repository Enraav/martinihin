<h1>Задание 2 Ссылки</h1>
<H2>Задание 1</H2>
<?php
echo '
    array_pop;
    array_push;
    array_shift;
    array_splice;
    array_walk;
    array_walk_recursive;
    asort;
    arsort;
    end;
    extract;
    krsort;
    ksort;
    natcasesort;
    natsort;
    next;
    prev;
    reset;
    rsort;
    shuffle;
    sort;
    uasort;
    uksort;
    usort;
';
?>

<H2>Задание 2</H2>
<?php
$number = 3;

function cube(&$n) {
    $n = $n ** $n;
}

cube($number);
echo $number; 
?>


<H2>Задание 3</H2>
<?php


$string = "Hello, world, manera, krutit, mir,";  
function remove_commas(&$str) {
    $str = str_replace(',', '', $str);
}

remove_commas($string);
echo $string; 
?>

<h2>Задание 4</h2>
<?php
$string = "Hello, world, manera, krutit, mir,";  
function reverse_words(&$str) {
    $words = explode(' ', $str);
    $reversed_words = array_map('strrev', $words);
    $str = implode(' ', $reversed_words);
}

reverse_words($string);
echo $string; 
?>

<h2>Задание 5</h2>
<?php
$array = [-7, -13, -1, -5, -2];
function abs_values(&$arr) {
    foreach ($arr as &$value) {
        $value = abs($value);
    }
}

abs_values($array);
print_r($array); 
?>

<h2>Задание 6</h2>
<?php
$array = [21, 3, 0, 5, -23];

function change_keys_to_values(&$arr) {
    $new_array = [];
    foreach ($arr as $value) {
        $new_array[(string)$value] = $value;
    }
    $arr = $new_array;
}

change_keys_to_values($array);
print_r($array); 
?>

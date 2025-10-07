<h1>Практическая 4 </h1>
<h2> Задание №1 </h2>
<?php


$nums=[1,2,3,113,5];
$max = $nums[0];
foreach($nums as $num){
    if($nums<$max)
        $max > $num;
}
echo "Минимум: $max";
?>

<?php

$nums=[1=>1,2=>2,3,113,5];
$max = $nums[0];

foreach($nums as $num){
    if($nums>$max)
        $max = $num;
}
echo "Максимум: $max";
?>

<h2> Задание  №2 </h2>

<?php
$array = [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14];
$sum =0;
$z=1;

foreach ($array as $v){
    $sum += $v;
    $z *= $v;
}
echo "Сумма: $sum\n";
echo "Произведение: $z\n";

?>
<h2> Задание  №3 </h2>
<?php
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
$sum = 0;

foreach ($array as $value) {
    $sum += $value;
}

$average = $sum / count($array);
echo "Среднее арифметическое: $z\n";
?>

<h2> Задание №4</h2>

<?php

$V = [1.5, -2.3, 4.1, -0.5, 3.2, -7.8, 2.0];
$Z = [];

foreach ($V as $num) {
    if ($num >= 0) {
        $Z[] = $num * $num;
    } else {
        $Z[] = abs($num);
    }
}

echo "исходный массив:\n";
echo "[";
for ($i = 0; $i < count($V); $i++) {
    echo $V[$i];
    if ($i < count($V) - 1) {
        echo ", ";
    }
}
echo "]\n\n";

echo "преобразованный массив:\n";
echo "[";
for ($i = 0; $i < count($Z); $i++) {
    echo $Z[$i];    
    if ($i < count($Z) - 1) {
        echo ", ";
    }
}
echo "]\n";

?>

<h2> Задание №5 </h2>
<?php
$z=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
for($i=0; $i<count($z); $i +=2){
    echo "$i ";
}
?>

<h2> Заданеи №6 </h2>


<?php
        $n = [4,5,45,24,52,17,8,5,275,74,5,8,70,6,78,905,41,024,225,406,308];
        $len = 0;
        foreach ($n as $value) {
            $len++;
        }
        for ($i = 0; $i < $len - 1; $i += 2) {
            $temp = $n[$i];
            $n[$i] = $n[$i + 1];
            $n[$i + 1] = $temp;
        }
        $lastIndex = count($n) - 1;
        foreach ($n as $index => $value) {
            echo $value;
            if ($index !== $lastIndex) {
                echo ', ';
            }
        }
        ?>

<h1>Многомерные массивы</h1>
<h2> Задание №1 </h2>
<?php
$zov = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];
echo "<table border='1'>";
foreach ($zov as $row){
    echo"<tr>";
    foreach($row as $value){
        echo "<td>$value</td>";

    }

    echo "</tr>";
}
echo "<table>";

?>

<h2> Задание №2 </h2>
<?php
$num = [];
for ($i = 10; $i <= 99; $i++) {
    $num[] = $i * $i;
}
$size = 10; 
echo "<table border='1'>";
for ($row=0; $row<$size; $row++) {
    echo "<tr>";
    for ($c=0; $c<$size; $c++) {
        $ind=$row * $size + $c;
        if ($ind<count($num)) {
            echo "
            <td>
            {$num[$ind]}
            </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>


<h2> Задание №3 </h2>
<?php
$array = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $array[$i][$j] = rand(1, 100);
        }
}
$max = $array[0][0];
$min = $array[0][0];
$maxIndex = [0, 0];
$minIndex = [0, 0];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
                $maxIndex = [$i, $j];
            }
        if ($array[$i][$j] < $min) {
                $min = $array[$i][$j];
                $minIndex = [$i, $j];
            }
        }
}
echo "<b>Массив</b>:", '<br>';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j]," ";
    }
    echo '<br>';
}
echo "<b>Максимальный элемент</b>: $max (Индекс [строка: {$maxIndex[0]}, столбец: {$maxIndex[1]}])", '<br>';
echo "<b>Минимальный элемент</b>: $min (Индекс [строка: {$minIndex[0]}, столбец: {$minIndex[1]}])";
?>
<h2> Задание №4 </h2>



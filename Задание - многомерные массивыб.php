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
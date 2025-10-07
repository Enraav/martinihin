<h1> ЗАДАНИЕ 1 </h1>

<?php
$len = 1;
$width = 9;
for($i=1;$i<=9; $i++){
for($j=1;$j<=9;$j++){
    echo $i*$j;
}
echo'<br>';

}

?>

<h1> ЗАДАНИЕ 3</h1>

<?php
echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse;'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td style='width: 10px; height: 10px; text-align: center;'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<H1> ЗАДАНИЕ 4 </H1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
<?php
echo "<tr>";
for ($i = 10; $i <= 99; $i++) {
    echo "<td> " . ($i**2) . "</td>";
    if ($i % 10 ==9) echo "</tr><tr>";
}
echo "</tr>";
?>
</table>
</body>
</html>

<H1> ЗАДАНИЕ 5 </H1>

<?php
$width =6;
$height =4;
for ($i=1; $i<=$height; $i++) {
    for ($j=1; $j<=$width; $j++) {
        if ($i == 1 or $i== $height or $j ==1 or $j== $width) {
            echo "#";
        } else {
            echo "+";
        }
    }
    echo "<br>";
}
?>

<h1> ЗАДАНИЕ 6 </h1>

<?php
    $n = 12;
    for($i = 1; $i <= $n;$i++){
        if ($n % $i == 0){
            echo $i;
        }
    }
?>

<h1> ЗАДАНИЕ 7 </h1>

<?php

$n=67321;
$b=1;
while($n>0){
    $b *= $n % 10;
    $n =(int)($n/10);
}
echo $b;
?>
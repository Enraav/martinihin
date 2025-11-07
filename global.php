<?php
echo "Задание 1. ";
$r = 5;
$circumference = fn() => 2 * 3.14 * $r;
echo "Длина окружности (r = $r): " . $circumference();
?>

<?php
echo "Задание 2. ";
$r = 5;
$circleArea = fn() => 3.14 * $r ** 2;
echo "Площадь круга (r = $r): " . $circleArea();
?>

<?php
echo "Задание 3. ";
$a = 3; $b = 4; $c = 5;
$p = fn($a, $b, $c) => ($a + $b + $c) / 2;
$pp = $p($a, $b, $c);
$s = fn($a, $b, $c, $p) => sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
echo "Площадь треугольника (a=$a, b=$b, c=$c): " . $s($a, $b, $c, $pp);
?>

<?php
echo "Задание 4. ";
$a = 3; $b = 4; $c = 0;
$p = fn($a, $b, $c) => ($a + $b + $c) / 2;
$pp = $p($a, $b, $c);
$s = fn($a, $b, $c, $p) => ($p > $a && $p > $b && $p > $c) ? sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)) : 0;
echo "Площадь (a=$a, b=$b, c=$c): " . $s($a, $b, $c, $pp);
?>

<?php
echo "Задание 5. ";
$x = 10; $y = 7;
$compare = fn($x, $y) => $x > $y ? "$x больше $y" : ($x < $y ? "$x меньше $y" : "$x равно $y");
echo "Сравнение ($x и $y): " . $compare($x, $y);
?>

<?php
echo "Задание 6. ";
$str = "Эта строка имеет длину ровно 79 символов, чтобы проверить граничные условия! Проверим, что будет.";
$checkLength = fn($s) => 
    strlen($s) > 79 ? "String is long" : 
    (strlen($s) < 32 ? "String is short" : "Length of String OK");
echo "Проверка строки: " . $checkLength($str);
?>


<?php
echo "Задание 7. ";


?>

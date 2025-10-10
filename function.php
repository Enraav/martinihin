<h1>функции</h1>
<h2> Заданеи №1 </h2>
<?php
$res = 10;
$r=10;
function calculitor($r = 10) {
    $res= 2 * 3.14 + $r;
}
calculitor();
echo $res;
?>


<h2> Задание №2 </h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <form action="">
        <p>Введите первую сторону треугольник:<input type="text" name="a"></p>
        <p>Введите вторую сторону треугольник:<input type="text" name="b"></p>
        <p>Введите третью сторону треугольник:<input type="text" name="c"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>
<?php
function squareTr($a, $b, $c) {
    if ($a <= 0 or $b <= 0 or $c <= 0){
        return 0;
    }else{
        $p =($a+$b+$c)/2;
        $s = ($p*($p-$a)*($p-$b)*($p-$c))**0.5;
        return $s;
    }
    
}
echo squareTr($_GET['a'], $_GET['b'], $_GET['c']);
?>



<h2> Задание №3</h2>
<?php
$number = 444621;  
function the_largest_number($number) {  
   for ($i = floor($number / 2); $i >= 1; $i--) {  
        if ($number % $i == 0) {  
            return $i; 
        }  
    }  
      
    return;  
}  
$answer = the_largest_number($number);  
echo $answer;  
?>

<h2> Задание №4 </h2>
<?php
$number = 145;
function finding_all_divisors($number){
    $divisors = [];
    for ($i = 1; $i < $number; $i++){
        $divisors[] = $i;
    }
return $divisors;

}
$divisors = finding_all_divisors($number);
echo "все делители $number: " . implode(", ", $divisors) ;
?>

<h2> Заданеи №5 </h2>
<?php
$numbers=[1,2,3,4];
function sumOfSquares($numbers) {
    if (!is_array($numbers) || empty($numbers)) {
        return 0;
    }
    $sum = 0;
    foreach ($numbers as $number) {
        if (is_numeric($number)) {
            $sum += $number * $number;
        }
    }
    return $sum;
}
echo sumOfSquares($numbers); 

?>
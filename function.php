<h1>функции</h1>
<h2> Заданеи №1 </h2>
<?php
$res = 1;
$r=10;
function calculitor($r = 10) {
    $res= 2 * 3.14 + $r;
}
calculitor();
echo $res;
?>


<h2> Задание №2 </h2>

<?php
$rdy = 0;
$a = 5;
$b = 6;
$c = 7;
function triangle($a, $b, $c) {

 $p = ($a + $b + $c) / 2 ;
 global $rdy;
 $rdy = sqrt($p  * ($p - $a) * ($p - $b) * ($p - $c));
}
triangle($a, $b, $c);
echo $rdy;
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
$number = 12;
function finding_all_divisors($number) {
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
$divisors = finding_all_divisors($number);
echo "все делители $number: " . implode(", ", $divisors) ;
?>

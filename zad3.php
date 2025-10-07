<?php
$lastNumber = 8; 
$multiplicationResult = 1;
for ($i = 2; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult *= $i; 
    }
}
echo "Произведение чётных чисел от 1 до $lastNumber равно $multiplicationResult.";
?>
<h1>пр5</h1>
<h2>задание№1</h2>
<?php 

$str = "Hello (world) !";
$len = strlen($str);
$start = 0;
$end = 0;

for ($i = 0; $i < $len; $i++) {
    if ($str[$i] == '(') {
        $start = $i + 1;
    }
    if ($str[$i] == ')') {
        $end = $i;
        break;
    }
}

for ($i = $start; $i < $end; $i++) {
    echo $str[$i];
}
echo "<br>"
?>
<h2> Задание№2</h2>
<?php

$zov = [
'words' => 0,
'string' => "hemimetamorphosis putrid stranger thrush ultraviolet trombonist lambskin quixotic spinsterhood mezzotint"
];
for ($i = 0; $i < mb_strlen($zov['string']); $i++)
    {
        if ($zov['string'][$i] == " ")
            {
                $zov['words']++;
            }
    }
echo $zov['words'] + 1;
?>


<h2> Задание№3</h2>
<?php
$str = "hemimetamorphosis putrid stranger thrush ultraviolet trombonist lambskin quixotic spinsterhood mezzotint";
$len = strlen($str);
$word_start = 0;
$in_word = 0;

for ($i = 0; $i <= $len; $i++) {
    if ($i == $len || $str[$i] == ' ') {
        if ($in_word) {
            $word_end = $i - 1;
            if ($str[$word_start] == $str[$word_end]) {
                for ($j = $word_start; $j <= $word_end; $j++) {
                    echo $str[$j];
                }
                echo " ";
            }
            $in_word = 0;
        }
    } else {
        if (!$in_word) {
            $word_start = $i;
            $in_word = 1;
        }
    }
}
echo "<br>";
?>

<h2> задание №4</h2>
<?php  
$string =  "hemimetamorphosis putrid stranger thrush ultraviolet trombonist lambskin quixotic spinsterhood mezzotint";
  
$uniqueChars = [];  
  
for ($i = 0; $i < strlen($string); $i++) {  
    if (!in_array($string[$i], $uniqueChars)) {  
        $uniqueChars[] = $string[$i];  
    }  
}  
  
echo "количество уникальных символов: " . count($uniqueChars) . "\n";  
echo "уникальные символы: " . implode(", ", $uniqueChars);  
?> 


<h2>Задание  №5</h2>
<?php 
$str = "hemimetamorphosis putrid stranger thrush ultraviolet trombonist lambskin quixotic spinsterhood mezzotint";
$len = strlen($str);
$count_r = 0;
$count_k = 0;
$count_t = 0;

for ($i = 0; $i < $len; $i++) {
    if ($str[$i] == 'r') {
        $count_r++;
    } elseif ($str[$i] == 'k') {
        $count_k++;
    } elseif ($str[$i] == 't') {
        $count_t++;
    }
}

echo "r: $count_r, k: $count_k, t: $count_t<br>";
?>

<h2>Задание №6</h2>
<?php
$str= "hemimetamorphosis putrid stranger thrush ultraviolet trombonist lambskin quixotic spinsterhood mezzotint";
$len = strlen($str);
$min_len = $len;
$max_len = 0;
$word_len = 0;
$in_word = 0;

for ($i = 0; $i <= $len; $i++) {
    if ($i == $len || $str[$i] == ' ') {
        if ($in_word) {
            if ($word_len < $min_len) {
                $min_len = $word_len;
            }
            if ($word_len > $max_len) {
                $max_len = $word_len;
            }
            $word_len = 0;
            $in_word = 0;
        }
    } else {
        $word_len++;
        $in_word = 1;
    }
}

echo "самое короткое: $min_len, самое длинное: $max_len<br>";
?>

<h2> Задание №7</h2>


































































































































































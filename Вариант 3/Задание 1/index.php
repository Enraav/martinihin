<?php

$str1 = "apple banana orange grape";
$str2 = "banana orange kiwi apple pear";

function countEqualWord($str1, $str2) {
    $words1 = explode(" ", $str1);
    $words2 = explode(" ", $str2);
    
    $result = [];
    
    foreach ($words1 as $word) {
        if (in_array($word, $words2)) {
            if (!in_array($word, $result)) {
                $result[] = $word;
            }
        }
    }
    
    return $result;
}

$result = countEqualWord($str1, $str2);

echo "Первая строка: $str1\n";
echo "Вторая строка: $str2\n";

echo "Общие слова: ";
print_r($result);

?>
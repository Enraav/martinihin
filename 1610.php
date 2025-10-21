
<h1>Задание2 - строковые функции</h1>
<h2> Задание №1</h2>
<?php
$string = "hello world (from) Russia";
$start = strpos($string, '(') + 1; 
$end = strpos($string, ')'); 
$length = $end - $start; 
echo substr($string, $start, $length); 
?>

<h2> Задание №2</h2>

<?php
$string = "hello my hame is.";
$words = explode(' ', $string); 
echo count($words); 
?>

<H2> Задание №3 </H2>
<?php
function sameStartEndWords($str) {
    $words = explode(' ', $str);
    $result = [];
    
    foreach ($words as $word) {
        $first = $word[0];
        $last = substr($word, -1);
        if ($first == $last) {
            $result[] = $word;
        }
    }
    
    return $result;
}

$text = "php level eye test noon hello";
$words = sameStartEndWords($text);

echo "Слова, которые начинаются и заканчиваются одной буквой:\n";
foreach ($words as $word) {
    echo $word . "\n";
}
?>

<h2> Задание №4 </h2>
<?php
function uniqueChars($str) {
    $chars = str_split($str);
    $unique = array_unique($chars);
    echo "Уникальные символы: " . implode(', ', $unique) . "\n";
    return count($unique);
}

echo uniqueChars("yey stars book life warning line roblox");
?>

<h2>Задание №5</h2>
<?php 
countRTK("rkt rocket letter");

function countRTK($str) {
    echo "Букв r: " . substr_count($str, 'r') . "\n";
    echo "Букв k: " . substr_count($str, 'k') . "\n";
    echo "Букв t: " . substr_count($str, 't') . "\n";
}

?>


<h2>Задание №6</h2>
<?php 
function minMaxWordLength($str) {
    $words = str_word_count($str, 1);
    $lengths = array_map('strlen', $words);
    return [
        'min' => min($lengths),
        'max' => max($lengths)
    ];
}

print_r(minMaxWordLength("fguia4eGUif fgagufugagfua fguagusaffd ff"))
?>



<h2>Задание №7</h2>
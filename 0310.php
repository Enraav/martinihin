<h1>Задание - ассоциативные массивы</h1>
<h2> Задание №1</h2>
<?php 



$array = [ 
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wednesday' => 'среда',
    'thursday' => 'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота',
    'sunday' => 'воскресенье',



];

foreach($array as $key => $item){
echo "$key -  $item", '<br>' ;

}
?>

<h2> Задание №2</h2>
<?php
$word = 'кракозябра';
$array = [ 
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wednesday' => 'среда',
    'thursday' => 'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота',
    'sunday' => 'воскресенье',



];

$z = false;
foreach ($array as $key => $value){
    if ($value == $word) {
        echo "$word - $key<br>";
        $z = true;
        break;
    }
}

if (!$z) {
    echo "$word - В словаре нет такого слова";
}

?>

<h2> Задание №3</h2>
<?php
$array = [
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wednesday' => 'среда',
    'thursday' => 'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота',
    'sunday' => 'воскресенье',

];

$word = 'monday'; 

$found = false;

if(isset($array[$word])){
    echo"word - {$array[$word]}<br>";
    $found=true;

}else{
    foreach ($array as $key => $value){
        if($value == $word){
            echo "$word - $key <br>";
            $found = true;
            break;
        }
    }
}

if(!$found){
    echo "$word - В словаре нету такого слова <br>";
}
?>

<h2> Задание №4</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="word">Введите слово для перевода:</label>
        <input type="text" id="word" name="word">
        <button type="submit">Найти</button>
    </form>

    <?php
    $array = [
        'monday' => 'понедельник',
        'tuesday' => 'вторник',
        'wednesday' => 'среда',
        'thursday' => 'четверг',
        'friday' => 'пятница',
        'saturday' => 'суббота',
        'sunday' => 'воскресенье',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['word'])) {
        $word = trim(strtolower($_POST['word'])); 
        $found = false;

        if (empty($word)) {
            echo "введите слово <br>";
        } else {
            if (array_key_exists($word, $array)) {
                echo "$word - {$array[$word]}<br>";
                $found = true;
            } else {
                foreach ($array as $key => $value) {
                    if ($value === $word) {
                        echo "$word - $key<br>";
                        $found = true;
                        break;
                    }
                }
            }

            if (!$found) {
                echo "$word - В словаре нету слова<br>";
            }
        }
    }
    ?>
</body>
</html>



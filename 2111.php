<?php

$json = file_get_contents('2111.json');

$array = json_decode($json, true);
$teacher = $array['teacher'];
foreach($teacher as $teacher){
    echo $teacher['name'],'<br>';
    echo $teacher['subject'],'<br>';    
}
?>
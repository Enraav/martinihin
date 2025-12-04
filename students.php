<?php

$json = file_get_contents('students.json');

$array = json_decode($json, true);
$students = $array['students'];
foreach($students as $student){
    echo $student['name'],'<br>';
    echo $student['groupe'],'<br>';    
}
?>
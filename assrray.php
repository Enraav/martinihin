<H1> Ассоциативнеы Массивы</H1>

<?php
$array = [ 'one' => 'один', 'two' => 'два', 
'three' => 'три'];
$array['four']='четыре';
unset($array['two']);
foreach($array as $key => $item){
echo "$key -  $item", '<br>' ;

}
?>
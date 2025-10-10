<?php
$str= 'hi';
echo $str, '<br>';
for ($i= 0; $i <mb_strlen($str); $i++){
    echo $str[$i],'<br>';
}
echo mb_strlen(string: $str);
?>
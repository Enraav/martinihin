<?php
$a= 5;

function setparam(&$param){
    $param = 10;
};
setparam($a);
?>

<p><?= $a ?></p>

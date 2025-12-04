<?php 

class User{
private $name;
public function __construct($name){
    $this->name=$name;
}
public function getName(){
    return $this->name;
}
public function setName($newName){
    if ($newName){    
    $this-> name = $newName;
    return true;
}
return false;

}
}
$user1 = new User('Вася');
$res =$user1-> setName('Петя');
echo $res ?'имя изменино' : 'имя не изменино';
?>

<p><?=  $user1 ->getname() ?> </p>
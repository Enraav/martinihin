<?php

class Student {
    public $name;
    public $groupe;

    public function __construct($name, $groupe){
        $this->name = $name;
        $this->groupe = $groupe;
    }

    public function sayAboutMe() {
        echo "Студент: {$this->name}, группа: {$this->groupe}<br>";
    }
}

class Teacher {
    public $name;
    public $subject;

    public function __construct($name, $subject){
        $this->name = $name;
        $this->subject = $subject;
    }

    public function sayAboutMe() {
        echo "Учитель: {$this->name}, предмет: {$this->subject}<br>";
    }
}

class Manager {
    public $name;
    public $groupe;

    public function __construct($name, $groupe){
        $this->name = $name;
        $this->groupe = $groupe;
    }

    public function sayAboutMe() {
        echo "Менеджер: {$this->name}, группа: {$this->groupe}<br>";
    }
}


$json = file_get_contents('users.json');
$array = json_decode($json, true);

$teachers = $array['teachers'];
$students = $array['students'];
$managers = $array['managers'];

$users = []; 
foreach ($students as $s) {
    $users[] = new Student($s['name'], $s['groupe']);
}

foreach ($teachers as $t) {
    $users[] = new Teacher($t['name'], $t['subjects']);
}

foreach ($managers as $m) {
    $users[] = new Manager($m['name'], $m['post']);
}

array_map(function($user) {
    $user->sayAboutMe();
}, $users);

?>
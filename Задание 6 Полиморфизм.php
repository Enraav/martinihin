<?php

class User {
    public $name;
    public $surname;
    public $email;
    private $role;

    public function __construct($name, $surname, $email) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->role = 'User';
    }

    public function getRole() {
        return $this->role;
    }

    public static function makeAdmin($user) {
        if ($user instanceof User) {
            $user->role = 'Admin';
        }
    }

    public static function createAdmin($name, $surname, $email) {
        $admin = new User($name, $surname, $email);
        self::makeAdmin($admin);
        return $admin;
    }

    public function sayAboutMe() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Role: " . $this->getRole() . "<br>";
        echo "I am a User.<br><br>";
    }
}

class Student extends User {
    public $course;
    private static $numberStudents = 0;

    public function __construct($name, $surname, $email, $course) {
        parent::__construct($name, $surname, $email);
        $this->course = $course;
        self::$numberStudents++;
    }

    public function __destruct() {
        self::$numberStudents--;
    }

    public static function getNumberStudents() {
        return self::$numberStudents;
    }

    public static function printStudentInfo($student) {
        if ($student instanceof Student) {
            echo "Name: " . $student->name . "<br>";
            echo "Surname: " . $student->surname . "<br>";
            echo "Email: " . $student->email . "<br>";
            echo "Course: " . $student->course . "<br>";
            echo "Role: " . $student->getRole() . "<br><br>";
        }
    }

    public function sayAboutMe() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Course: " . $this->course . "<br>";
        echo "Role: " . $this->getRole() . "<br>";
        echo "I am a Student.<br><br>";
    }
}

class Teacher extends User {
    public $subjects = [];

    public function __construct($name, $surname, $email, $subjects) {
        parent::__construct($name, $surname, $email);
        $this->subjects = $subjects;
    }

    public function sayAboutMe() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Subjects: " . implode(', ', $this->subjects) . "<br>";
        echo "Role: " . $this->getRole() . "<br>";
        echo "I am a Teacher.<br><br>";
    }
}

class Manager extends User {
    public $position;
    public $jobDuties = [];

    public function __construct($name, $surname, $email, $position, $jobDuties) {
        parent::__construct($name, $surname, $email);
        $this->position = $position;
        $this->jobDuties = $jobDuties;
    }

    public function sayAboutMe() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Position: " . $this->position . "<br>";
        echo "Job Duties: " . implode(', ', $this->jobDuties) . "<br>";
        echo "Role: " . $this->getRole() . "<br>";
        echo "I am a Manager (Administration).<br><br>";
    }
}

$person1 = new Student('Alice', 'Johnson', 'alice@example.com', 3);
$person2 = new Student('Bob', 'Brown', 'bob@example.com', 4);
$person3 = new Teacher('Charlie', 'Davis', 'charlie@example.com', ['Math', 'Physics']);
$person4 = new Teacher('David', 'Evans', 'david@example.com', ['History']);
$person5 = new Manager('Eve', 'Foster', 'eve@example.com', 'Director', ['Manage staff', 'Budgeting']);
$person6 = new Manager('Frank', 'Green', 'frank@example.com', 'Assistant', ['Scheduling', 'Reports']);
$person7 = new Student('Grace', 'Harris', 'grace@example.com', 2);$persons = [$person1, $person2, $person3, $person4, $person5, $person6, $person7];

usort($persons, function($a, $b) {
    return strcmp($a->name, $b->name);
});

echo "Information about persons (sorted by name):<br><br>";
foreach ($persons as $person) {
    $person->sayAboutMe();
}

$winnerIndex = rand(0, count($persons) - 1);
$winner = $persons[$winnerIndex];
echo "Prize winner announcement:<br>";
echo "The winner is " . $winner->name . " " . $winner->surname . "!<br>";
$winner->sayAboutMe();

?>
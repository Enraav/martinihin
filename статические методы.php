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

    public static function printstyudentInfo($student) {
        if ($student instanceof Student) {
            echo "Name: " . $student->name . "<br>";
            echo "Surname: " . $student->surname . "<br>";
            echo "Email: " . $student->email . "<br>";
            echo "Course: " . $student->course . "<br>";
            echo "Role: " . $student->getRole() . "<br><br>";
        }
    }
}

$student1 = new Student('Вовка', 'Многолеткин', 'vovkakrutoy2017@gmail.com', 1);
$student2 = new Student('Гусь', 'Даниловский', 'Danilaprogamer@gmail.com', 2);
$student3 = new Student('Джон', 'сина', 'don@gmail.com', 3);


echo "Number of students: " . Student::getNumberStudents() . "<br><br>";

unset($student4);
unset($student5);

echo "Number of students after deletion: " . Student::getNumberStudents() . "<br><br>";

Student::printstyudentInfo($student1);
Student::printstyudentInfo($student2);
Student::printstyudentInfo($student3);

User::makeAdmin($student1);

echo "Role of student1: " . $student1->getRole() . "<br><br>";

$admin = User::createAdmin('Admin', 'User', 'admin@example.com');
echo "New admin role: " . $admin->getRole() . "<br>";
echo "New admin name: " . $admin->name . "<br>";
?>
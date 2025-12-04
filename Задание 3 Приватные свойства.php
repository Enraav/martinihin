<h1> Приватные свойства</h1>

<?php
class User {
    private $firstName;
    private $lastName;
    private $mail;

    public function __construct($firstName, $lastName, $mail) {
        if ($this->isNameCorrect($firstName)) {
            $this->firstName = $firstName;
        }
        if ($this->isNameCorrect($lastName)) {
            $this->lastName = $lastName;
        }
        if ($this->isMailCorrect($mail)) {
            $this->mail = $mail;
        }
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setFirstName($firstName) {
        if ($this->isNameCorrect($firstName)) {
            $this->firstName = $firstName;
        }
    }

    public function setLastName($lastName) {
        if ($this->isNameCorrect($lastName)) {
            $this->lastName = $lastName;
        }
    }

    public function setMail($mail) {
        if ($this->isMailCorrect($mail)) {
            $this->mail = $mail;
        }
    }

    public function sayAboutMe() {
        echo "Имя: " . $this->firstName . ", Фамилия: " . $this->lastName . "\n";
    }

    private function isNameCorrect($name) {
        return mb_strlen($name) <= 128;
    }

    private function isMailCorrect($mail) {
        $atPos = mb_strpos($mail, '@');
        $dotPos = mb_strrpos($mail, '.');
        return ($atPos !== false && $dotPos !== false && $dotPos > $atPos);
    }
}

$user1 = new User("Алексей", "Иванов", "alexey.ivanov@example.com");
$user2 = new User("Мария", "Петрова", "maria.petrov@example.com");

$user1->sayAboutMe();
$user2->sayAboutMe();
?>

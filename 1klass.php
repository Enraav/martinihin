<h1>ООП</h1>
<h2>задание 1</h2>
<?php
class User {
    public $firstName;
    public $lastName;
    public $email;

    public function sayAboutMe() {
        echo "Имя: $this->firstName, Фамилия: $this->lastName, Почта: $this->email\n";
    }
}

$user1 = new User();
$user1->firstName = "Владимир";
$user1->lastName = "МОТОБЛОК";
$user1->email = "VLADIMIRMOTOBLOK12@proton.com";

$user2 = new User();
$user2->firstName = "Настоящий";
$user2->lastName = "лев";
$user2->email = "reallev@proton.com";

$user1->sayAboutMe();
$user2->sayAboutMe();
?>

<h2>задание 2</h2>
<?php
class Car {
    public $brand = 'Неизвестно';
    public $model = 'Неизвестно';
    public $type = 'Неизвестно';
    public $color = 'Неизвестно';
    public $weight = 0;

    public function getInfo() {
        echo "Марка: $this->brand, Модель: $this->model, Тип: $this->type, Цвет: $this->color";
    }

    public function getWeight() {
        return $this->weight;
    }
}

$demoCar = new Car();
$demoCar->brand = "Toyota";
$demoCar->model = "Camry";
$demoCar->type = "седан";
$demoCar->color = "черный";
$demoCar->weight = 1500;
?>
<p Информация:><?= $demoCar->getInfo() ?></p>
<p Вес:><?= $demoCar->getWeight() ?> кг</p>

<h2>задание 3</h2>
<?php

class Cars {
    public $brand = 'Неизвестно';
    public $model = 'Неизвестно';
    public $type = 'Неизвестно';
    public $color = 'Неизвестно';
    public $weight = 0;
    public $year = 0;
    public $price = 0;

    public function getInfo() {
        echo "Марка: $this->brand, Модель: $this->model, Тип: $this->type, Цвет: $this->color";
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getPrice() {
        return $this->price;
    }
}

$car1 = new Cars();
$car1->brand = "Ferrari";
$car1->model = "250 GTO";
$car1->year = 1962;
$car1->price = 70000000;

$car2 = new Cars();
$car2->brand = "Bugatti";
$car2->model = "Type 57SC Atlantic";
$car2->year = 1936;
$car2->price = 114000000;

$car3 = new Cars();
$car3->brand = "Mercedes-Benz";
$car3->model = "300 SLR Uhlenhaut Coupe";
$car3->year = 1955;
$car3->price = 143000000;

$car4 = new Cars();
$car4->brand = "Aston Martin";
$car4->model = "DB5";
$car4->year = 1964;
$car4->price = 3;

$car5 = new Cars();
$car5->brand = "Porsche";
$car5->model = "911 GT1";
$car5->year = 1997;
$car5->price = 5;

$totalPrice = $car1->getPrice() + $car2->getPrice() + $car3->getPrice() + $car4->getPrice() + $car5->getPrice();
?>
<p Машина 1:><?= $car1->getInfo() ?>, Год: <?= $car1->year ?>, Цена: <?= $car1->getPrice() ?> долларов</p>
<p Машина 2:><?= $car2->getInfo() ?>, Год: <?= $car2->year ?>, Цена: <?= $car2->getPrice() ?> долларов</p>
<p Машина 3:><?= $car3->getInfo() ?>, Год: <?= $car3->year ?>, Цена: <?= $car3->getPrice() ?> долларов</p>
<p Машина 4:><?= $car4->getInfo() ?>, Год: <?= $car4->year ?>, Цена: <?= $car4->getPrice() ?> долларов</p>
<p Машина 5:><?= $car5->getInfo() ?>, Год: <?= $car5->year ?>, Цена: <?= $car5->getPrice() ?> долларов</p>
<p Общая стоимость коллекции:><?= $totalPrice ?> долларов</p>


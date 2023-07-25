<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "ワンワン！<br>";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "ニャー！<br>";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound(); // ワンワン！
$cat->makeSound(); // ニャー！
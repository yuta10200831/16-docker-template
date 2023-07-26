<?php
abstract class Animal {
  protected $name;
  protected $sound;

  public function __construct($name, $sound) {
    $this->name = $name;
    $this->sound = $sound;
  }

  abstract public function makeSound();

}

class Dog extends Animal {
  public function makeSound() {
    echo "{$this->name}が{$this->sound}と鳴きます。<br>";
  }
}

class Cat extends Animal {
  public function makeSound() {
    echo "{$this->name}が{$this->sound}と鳴きます。<br>";
  }
}

$dog = new Dog("ポチ", "ワンワン");
$cat = new Cat("タマ", "ニャー");

$dog->makeSound();
$cat->makeSound();

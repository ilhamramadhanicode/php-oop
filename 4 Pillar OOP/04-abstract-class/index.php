<?php

abstract class Animal 
{
    public $name;

    abstract public function run();

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}

$cat = new Cat("Bona");
$cat->run();

$dog = new Dog("Bora");
$dog->run();
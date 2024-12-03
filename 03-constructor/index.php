<?php

// Class
class AlatElektronik {
    // Property
    public $hp;
    public $laptop;

    // Constructor
    public function __construct($hp, $laptop) {
        $this->hp = $hp;
        $this->laptop = $laptop;
    }

    // Method
    public function display() {
        $this->hp . PHP_EOL;
        $this->laptop . PHP_EOL;
    }

}


// Object
$alatelektronik = new AlatElektronik("Iphone 11 Pro", "Mackbook Pro");

$alatelektronik->display();
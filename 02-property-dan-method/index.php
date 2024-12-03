<?php

// Class
class Location {
    // Property
    public $address;
    public $city;

    // Method
    public function display() {
        echo "Address : " . $this->address . PHP_EOL;
        echo "City : " . $this->city . PHP_EOL;
    }

}

// Object
$location = new Location();

$location->address = "Tanjungsari";
$location->city = "Bandung";

$location->display();
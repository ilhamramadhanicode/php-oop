<?php

class Location
{
    protected $address;
    protected $city;

    public function __construct($address, $city)
    {
        $this->address = $address;
        $this->city = $city;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function getCity()
    {
        return $this->city;
    }
}

class Pusat extends Location {
    public function Display()
    {
        echo "Pusat di $this->address" . PHP_EOL;
        echo "Tempat di $this->city" . PHP_EOL;
    }
}

$pst = new Pusat("Gang", "Cafe");
$pst->Display();
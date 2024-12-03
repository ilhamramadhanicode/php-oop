<?php

class Location
{
    private $address;
    private $city;

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

$location = new Location("Tanjungsari", "Bandung");
echo $location->getAddress() . PHP_EOL;
echo $location->getCity();
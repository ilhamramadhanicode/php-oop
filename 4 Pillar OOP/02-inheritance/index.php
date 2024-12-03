<?php

class Mahasiswa {
    public $name;

    public function info($name)
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class Person extends Mahasiswa {

}

$mhs = new Mahasiswa();
$mhs->name = "Budi";
$mhs->info("Joko");

$mhs = new Person();
$mhs->name = "Asep";
$mhs->info("Joko");
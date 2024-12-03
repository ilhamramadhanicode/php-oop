<?php

// Class
class Person {
    public $nama;
    public $jurusan;
}


// Object
$person = new Person();
$person->nama = "Budi Nugroho" . PHP_EOL;
$person->jurusan = "Psikologi" . PHP_EOL;

echo "Nama : ".  $person->nama;
echo "Jurusan : " . $person->jurusan;
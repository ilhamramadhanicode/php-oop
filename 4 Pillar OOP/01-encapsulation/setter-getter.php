<?php

class Mahasiswa {
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama(){
        return "Nama : " . $this->nama . PHP_EOL;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
}

$obj = new Mahasiswa("Budi");
echo $obj->setNama("Budi Nugraha"); // Setter Merubah / Menambah Nama
echo $obj->getNama(); // Getter Menampilkan Nama
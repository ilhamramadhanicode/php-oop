<?php

require_once "index.php";

// $mahasiswa1 = new \App\One\Mahasiswa();
// echo $mahasiswa1->Display();

use App\One\Mahasiswa;
use App\Two\Mahasiswa as TwoMhs;

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->Display();

$mahasiswa2 = new TwoMhs();
$mahasiswa2->Display();
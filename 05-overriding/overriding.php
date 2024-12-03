<?php

require_once "index.php";

$programmer = new Programmer();
$programmer->name = "Backend";
$programmer->getName("Joko");

$coder = new Coder();
$coder->name = "Frontend";
$coder->getName("Joko");

$dog = new Animal();
$dog->name = "Dog";
$dog->getName("Human");
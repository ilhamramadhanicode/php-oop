<?php

class Programmer {
    public $name;

    function getName($name)
    {
        echo "Hi $name, my programmer $this->name" . PHP_EOL;
    }
}

class Coder extends Programmer {

    function getName($name)
    {
        echo "H1 $name, my coder $this->name" . PHP_EOL;
    }
}

class Animal extends Programmer {
    function getName($name)
    {
        echo "Hi $name, my animal $this->name" . PHP_EOL;
    }
}
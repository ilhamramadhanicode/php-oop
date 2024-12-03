<?php

class Programmer {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
    
}
class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

$company = new Company();
$company->programmer = new Programmer("Budi");
var_dump($company);

$company->programmer = new BackendProgrammer("Budi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Budi");
var_dump($company);
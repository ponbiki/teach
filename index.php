<?php
ini_set('error_reporting', E_ALL);

/*
 * teaching core PHP OOP concepts intentionally ignoring
 * protected visibility for now
 */

class totalNewb
{
    public $newb_name;
    private $age;    
    
    public function __construct($name)
    {
        $this->newb_name = $name;
    }

    public function puke()
    {
        return "$this->newb_name puked!";
    }
    
    public function ageIn($old)
    {
        $this->setAge($old);
    }
    
    private function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    
    public static function fart()
    {
        return "FART!";
    }
}

$erik = new totalNewb('Erik');

//$erik->setAge(42); // no!

//$erik->ageIn(42);

echo "<pre>";

//echo $erik->newb_name . PHP_EOL;

//echo $erik->puke() . PHP_EOL;

//echo totalNewb::fart() . PHP_EOL;

//echo $erik->age . PHP_EOL; // no!

//echo $erik->getAge() . PHP_EOL;

//print_r($erik);

//print_r(get_class_methods(totalNewb));

echo "</pre>";

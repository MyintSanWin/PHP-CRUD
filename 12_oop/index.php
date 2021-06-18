<?php

// What is class and instance
class  Person{
    public  $name;
    public $username;
    private $age;


    public function  __construct($name, $username)
    {
        $this->name= $name;
        $this->username = $username;

    }
}
$p = new Person("Brand", "Traversy");
echo '<pre>';
var_dump($p);
echo "</pre>";
//$p->name="Myint San Win";
//$p->username="Traversy";
//
//
//$p2 = new Person();
//$p2->name="John Smith";
//$p2->username="Hello";
//
//var_dump($p).'<br>';
//var_dump($p2).'<br>';
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
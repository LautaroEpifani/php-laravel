<?php

class Person {
  
public const species = "Homo sapiens";
public $name;
public $age;
public $occupation;

public function __construct($name, $age, $occupation) {
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
}

public function introduce() {
    echo "Hello, my name is $this->name" . "<br>";
}

public function describe_job() {
    echo "I am currently working as a(n) $this->occupation" . "<br>"; 
}
    
  public static function greet_extraterrestrials($species) {
    echo "Welcome to Planet Earth $species!";
  }
}

$person = new Person("Juan", 34, "Admin");

$person->introduce();
$person->describe_job();
Person::greet_extraterrestrials("tumadre");





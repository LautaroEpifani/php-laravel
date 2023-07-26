<?php

class Person {
  public $name, $age, $gender, $occupation;
  public function __construct(string $name, int $age, string $gender, string $occupation) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->occupation = $occupation;
  }
}

$persona = new Person("Juan", 43, "asd", "asd");

function get_profile(Person $person) {
    return "Name = " . $person->name . "<br> Occ = " . $person->occupation ;
}

echo get_profile($persona);
<?php


class Dog {
  public $name, $age, $species;
  public function __construct($name, $age, $species) {
    $this->name = $name;
    $this->age = $age;
    $this->species = $species;
  }
  public function bark() {
    return "Woof woof";
  }
}

// The Child Class inherits from the parent class
class Dachshund extends Dog {
  public function __construct($name, $age) {
    parent::__construct($name, $age, "Dachshund");
  }
  public function bark() {
    echo parent::bark() . "! I am a Dachshund";
  }
}

$dachs = new Dachshund("T", "M");


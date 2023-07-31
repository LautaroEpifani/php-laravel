<?php
class Organism {
    public $name; 
    public $species;
  
  public function __construct($name, $species) {
    // Using $this notation
    $this->name = $name;
    $this->species = $species;
  }
}

$tubie = new Organism("asd", "");
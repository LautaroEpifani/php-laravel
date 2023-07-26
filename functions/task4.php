<?php

function multiply($a, $b) {
  // A named function called "multiply" which multiplies two numbers together
  return $a * $b;
}

$my_array = array(1, 2, 3, 4, 5);
// We want to compute the product of all the items in $my_array
echo array_reduce($my_array, 'multiply', 1) . "<br>";

//task

function person_description($name, $age, $occupation) {
    return "$name is $age years old and currently works as a(n) $occupation";
}

$person_description = 'person_description';


echo $person_description("Juan", 42,  "Admin");
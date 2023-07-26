<?php
$x = 10;
$y = 20;
$z = 30;
$string = "Lautaro";

function increment_x() {
    global $x;
    $x++;
}

function double_x_triple_y_quadruple_z() {
    global $x, $y, $z;
    $x *= 2;
    $y *= 3;
    $z *= 4;
}

function append_whitespace_to_string() {
    global $string;
    $string = $string . " ";
}

append_whitespace_to_string();


echo $string;

function add_world($s) {
    $s .= "world";
  }
  $hello = "Hello ";
  add_world($hello); // We would expect $hello to now be "Hello world" if the variable was passed by reference in PHP
  echo $hello; // still "Hello " - variable was not modified
  function add_three($n) {
    $n += 3;
  }
  $number = 5;
  add_three($number); // If variables are pass by reference in PHP then $number would now be 8
  echo $number; // still 5, demonstrating the fact that primitives are pass-by-value in PHP
  
  // Even arrays are "pass-by-value" (this is actually not entirely true but we will not go into the details for this lesson)
  
  function swap_first_and_second_items($a) {
    $temp = $a[0];
    $a[0] = $a[1];
    $a[1] = $temp;
  }
  
  $array = array(1, 2, 3);
  swap_first_and_second_items($array); // would the array now be array(2, 1, 3)?
  var_dump($array);
<?php
$my_array = [1,2,3,4,5];
$arguments = [1,1,1,1];
$scale = 5;

function sum_all($a, $b, $c, $d, $e) {
    return $a + $b + $c + $d + $e;
}  

function prod_all($a, $b, $c, $d, $e) {
    return $a * $b * $c * $d * $e;
}  

function scale_sum($a, $b, $c, $d, $e) {
    return $a + ($b * $c * $d * $e);
}

echo sum_all(...$my_array) . "<br>";
echo prod_all(...$my_array) . "<br>";
echo scale_sum($scale, ...$arguments) . "<br>";

var_dump($my_array);


<?php

$string = "Lau";

function add_world(&$s)
{
    $s .= "taro"; 
}

add_world($string);
echo $string . "<br>";



$array = array(1, 2, 3);
function swap_first_and_second_items(&$a)
{
    $temp = $a[0];
    echo $temp . "<br>";
}
swap_first_and_second_items($array);
echo var_dump($array) . "<br>";


//task
$my_number = 2;
$my_sc_number = 8; 
function double(&$n)
{
    $n *= 2;
}
double($my_number);
echo $my_number . "<br>";


function halve(&$n)
{
    $n /= 2;
}
halve($my_number);
echo $my_number . "<br>";


function enlarge(&$x, $n)
{
    $x *= 2;
    $n /= 2;
}
enlarge($my_sc_number, $my_sc_number);

echo $my_sc_number . "<br>"; //16

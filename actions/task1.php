<?php

$GLOBALS['x'] = "hola"; 
function increment_x($string) {
  return $GLOBALS['x'] . $string;
}

echo increment_x("mundo");

// echo $_GET['rank'] === '7kyu';
// $_GET['author'] === 'donaldsebleung'$
<?php
$fechaInicio = '22. 11. 2023';
$fechaFin = '22. 11. 2024';
$inicio = \DateTime::createFromFormat('d. m. Y', $fechaInicio);
$fin = \DateTime::createFromFormat('d. m. Y', $fechaFin);

echo nl2br("Fecha de Inicio: " . $inicio->format('m/d/Y') . "\n" . "Fecha Fin " . $fin->format('m/d/Y') . "\n");

$x = 21;
$y = 10;
function double_x_halve_y() {
  global $x, $y; 
  $x *= 2; 
  $y /= 2; 
}
double_x_halve_y();
echo $x . "\n"; 
echo $y;

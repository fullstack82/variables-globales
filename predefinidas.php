<?php 
// Funciones predefinidas

//Debugear
$nombre = "Maria Pinto";
var_dump($nombre);     // var_dump saca todos los datos de nombre en este caso

echo "<hr/>";

// Fechas 
$time = time();
echo date("d-m-y (H:i:s)", $time); // Fecha y hora actual;
echo "<br/>";
echo time();

echo "<hr/>";

// Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);  // (sqtr) saca la raiz cuadrada;

echo "<hr/>";

echo "Numero aleatorio entre 10 y 40: ".rand(10, 40); // (rand) nos muestra un numero aleatorio;
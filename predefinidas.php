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

echo "<hr/>";

echo "Número pi:".pi(); // (pi) nos muestra el número pi;

echo "<br/>";

echo "Redondear: ".round(7.89234, 1); // Numero a redondear, y decimales que quieres que se vean son los parametros de round();


echo "<hr/>";
// Más funciones generales

echo gettype($nombre);  // Devuelve el tipo de la variable;

echo "<hr/>";

if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<hr/>";

if(!is_float($nombre)){
    echo "La variable nombre no es un decimal";
}

echo "<hr/>";
// Funcion isset, con ella comprobamos si la variable existe o no en el programa;
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

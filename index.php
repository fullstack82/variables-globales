<?

/*
* Variables locales: Son las que se definen dentro de una función y no pueden ser
* usadas fuera de la función, solo estan disponibles dentro, a no ser que haga un return.
*
* Variables globales: son las que se declaran fuera de una función y estan disponibles 
* dentro y fuera de las funciones;
* En php si tienes que declarar la variable global, poniendo global y la variable;
*/


// Variable global
$frase = "Ni los buenos son tan buenos, ni los malos tan malos";


echo $frase;

function holaMundo(){
    global $frase;

    echo "<h1>$frase</h1>";
}



holaMundo();
?>
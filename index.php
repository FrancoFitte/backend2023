<?php

//Ejercicio 1

$n = 3; 

if ($n > 0) {
    echo "El número ingresado es un número positivo.<br>";
}

echo "<br>";

//Ejercicio 2

$n2 = 6;

if ($n2 > 1 && $n2 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10 . <br>";
}

echo "<br>";

//Ejercicio 3

$n3 = 5;

if ($n3 >=  10 || $n3 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2 . <br>";
}
else {
    echo "El número ingresado no pudo ser validado . <br>";
}

echo "<br>";

//Ejercicio 4

$numero1 = 8;

$numero2 = 4;


if ($numero1 > $numero2) {
    echo $numero1 + $numero2 . "<br>";
    echo $numero1 - $numero2 . "<br>";
}


elseif ($numero2 > $numero1) {
    echo $numero1 * $numero2 . "<br>";
    echo $numero2 / $numero1 . "<br>";
    echo $numero2 % $numero1 . "<br>";
}

else {
    echo "Los números ingresados son iguales.<br>";
}


?>
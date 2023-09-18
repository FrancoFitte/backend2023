<?php 
 

 // Ejercicio 1 
echo "Hola Mundo";

echo "<br>"; 
echo "<br>"; 

//Ejercicio 2

$variable = "Hola Mundo";
    echo $variable;

    echo "<br>"; 
    echo "<br>"; 

//Variables enteras - Ejercicio 3

$numero10 = 10;

$numero5 = 5;

 echo ($numero10 + $numero5) . "<br>"; //SUMA

 echo ($numero10 - $numero5) . "<br>"; //RESTA

 echo ($numero10 * $numero5) . "<br>"; //MULTIPLICACION

 echo ($numero10 / $numero5) . "<br>"; //DIVISION ENTERA

 echo  ($numero10 % $numero5) . "<br>"; //EL RESTO DE LA DIVISION ENTERA

 echo "<br>"; 
 echo "<br>"; 

//Transformación de grados - Ejercicio 4

 $celsius = 20;
 $fahrenheit = ($celsius * 9/5) + 32;

 echo "20°C es igual a " . $fahrenheit . "°F";

 echo "<br>"; 
 echo "<br>"; 


 //Ejercicio 5


$baseRectangulo = 18; 
$alturaRectangulo = 12; 


$areaRectangulo = $baseRectangulo * $alturaRectangulo;
$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);


$radioCirculo = 30;
$pi = 3.14159265;


$areaCirculo = $pi * ($radioCirculo ** 2);
$perimetroCirculo = 2 * $pi * $radioCirculo;

echo "<br>";
echo "<br>";

// Imprimir resultados

echo "<b>Rectángulo:</b>";
echo "<br>";
echo "Área: " . $areaRectangulo . " cm²";
echo "<br>";
echo "Perímetro: " . $perimetroRectangulo . " cm";

echo "<br>";
echo "<br>";

echo "<b>Círculo:</b>";
echo "<br>";
echo "Área: " . $areaCirculo . " cm²";
echo "<br>";
echo "Perímetro: " . $perimetroCirculo . " cm";




?>
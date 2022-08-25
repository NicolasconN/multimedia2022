<?php

#saber que tiene una variable por dentro

$nombre = "Jorge";
$arreglo = [
    "nombre"  => "Jorge",
    "Apellido"  => "Shranka",
    "edad"  => "40siempre",
];

//mas legible

print_r($nombre);
echo "<br>";
//mas completa

var_dump($nombre);
echo "<br>";
//spoiler

var_dump($arreglo);

//tarea: Averiguar los siguientes tipos de datos
$numero_1 = 10;
$numero_2 = 10.5;
$letra = "a";
$verdadero = true;
echo "<br>";
//tarea
var_dump($numero_1);
echo "<br>";
var_dump($numero_2);
echo "<br>";
var_dump($letra);
echo "<br>";
var_dump($verdadero);

?>
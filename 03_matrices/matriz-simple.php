<?php
/*Ejercicio 2.2.1 archivo
Crear una matriz que contenga las 4 estaciones del año (Primavera, Verano, Otoño, Invierno) 
y agrega el código para recorrerla e imprimir las estaciones una en cada línea.
*/

$estaciones = array ("Primavera", "Verano", "Otoño", "Invierno");

$estaciones_count = count($estaciones);
for ($i=0; $i<$estaciones_count; $i++)
{
    echo $estaciones[$i]. "\n";
}
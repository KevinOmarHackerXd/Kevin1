<?php
/*
*Crear un matriz que contenga los nombres de los siguientes:
estados (Sinaloa, Sonora, Nayarit, Chihuahua, Durango), agrega el código para recorrerla e imprime los nombres
de los estados en una sola línea separados por coma.

Ordena la matriz en forma descendente y vuelve a imprimir 
los nombres de los estados en una sola línea separados por coma
*/


$estados = array ("Sinaloa", "Sonora", "Nayarit", "Chihuahua", "Durango");
$linea = "";

for ($i=0; $i < sizeof($estados); $i++) 
{
    $linea .= $estados[$i].", ";
}
echo $linea;


$estados = array (
"Sinaloa",
"Sonora",
"Nayarit",
"Chihuahua",
"Durango");

for ($i=0; $i < sizeof($estados); $i++) 
{
   $linea .= $estados[$i].", ";
}
echo $linea;

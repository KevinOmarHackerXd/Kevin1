<?php
/*
Ejercicio 2.2.4 archivo: matriz-multidimensional.php
Crear una matriz multidimensional que contenga una lista de 3 usuarios, y cada usuario debe contener tres valores 
(Nombre, Apellidos, Correo Electrónico), para los usuarios utiliza arreglo asociativo.
Recorre e imprime los valores de cada usuario expresados de la siguiente manera:
Hola soy Juan Perez y mi correo es juan@perez.com
*/

$user = [
    ["Kevin ","Cabanillas","kevinomar37@hotmail.com"],
    ["Keyla","Cabanillas","natali_keyla@hotmail.com"],
    ["Cristian","Cabanillas","cristianCa@gmail.com"]
];

for($i=0;$i<3;$i++)
{
   echo "Hola soy ". $user[$i][0] . " " . $user[$i][1] . " y mi correo es: ".  $user[$i][2] . "\n";
}
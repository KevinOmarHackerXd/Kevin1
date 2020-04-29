<?php
$colores = array ("verde" => "green", "rojo" => "red", "azul" => "blue");

//var_dump($colores);

/*Imprimir la matriz de los colores en español primero y despues en ingles
-verde
_green
-rojo
_red
-azul
_blue


echo $colores["verde"];  falló
*/

/*
$colores_keys = array_keys($colores);
echo $colores_keys[0]."\n";
echo $colores[$colores_keys[0]]."\n";

echo $colores_keys[1]."\n";
echo $colores[$colores_keys[1]]."\n";

echo $colores_keys[2]."\n";
echo $colores[$colores_keys[2]]."\n";

for ($i=0; $i < count($colores); $i++)
{
    echo key($colores)."\n";
    echo $colores[key($colores)]."\n";
    next ($colores);
}
*/

foreach ($colores as $esp => $eng); 
{
    echo $esp."\n";
    echo $esg."\n";
}

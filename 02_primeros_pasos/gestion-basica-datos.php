<?php
$parcial_1 = 10;
$parcial_2 = 8;
$parcial_3 = 8;

$promedio = ($parcial_1+$parcial_2+$parcial_3)/3;

// if ($promedio >= 6)
// {
//     $esta_aprobado = true;
// }
// else
// {
//    $esta_aprobado = false;
// }
        
        
$esta_aprobado = ($promedio >= 6)?true:false;
$nombre_completo = 'Kevin Omar Cabanillas Nuñez';

//Expancion de variables
echo "Hola $nombre_completo, tu promedio final es $promedio\n";
//concatenacion (.)
echo "Estas " . ($esta_aprobado)?"Aprobado":"Reprobado";
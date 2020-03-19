<?php
/**
 * Arreglos y matrices
 * 
 * Es un tipo de dato que permite guardar varias variables y distintos
 * valores, con el mismo nombre, identificandolas por medio de uno o
 * más indices
 * Se pueden definir con la funcion array() o con abreviación[]
 * Pueden almacenar distintos valores
 * Pueden cambiar su tamaño despues de ser definidos
 */

 $cals = array(9,9,10,null);
 $clas[3] = ($cals[0]+$cals[1]+$cals[2])/3;
 var_dump($cals);

 $nombre = "Kevin Omar";
 $apellidos = "Cabanillas Nuñez";
 $edad = 16;

 $usuario = [$nombre, $apellidos, $edad];
 var_dump($usuario);

 $nombre_completo = $usuario[0]." ".$usuario[1];

 // Arreglos asociativos
 $user = [ 
     "nombre" => "Kevin Omar", 
     "appelidos" => "Cabanillas Nuñez", 
     "Edad" => 16
    ];
    
 $nombre_completo = $user[$nombre]." ".$user["apellidos"];
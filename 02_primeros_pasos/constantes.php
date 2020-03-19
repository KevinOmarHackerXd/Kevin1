<?php
/**
 * Constantes
 * 
 * Son aquellos pares nombre-valor que su valor se mantiene inmutable
 * durante toda la ejecucion del script.
 * Ejemplo: Pi=3.1416, IVA=0.16, DBNAME=demo
 * Para definir una constante se utiliza la funcion define()
 * Debes nombrarlas con todas las letras Mayusculas
 * Sin espacios, en caso de tener 2 o mas palabar
 * utiliza _ para separarlas
 */

 define("PI", 3.1416);
 $radio = 123;
 $area_circulo = PI * $radio**2;
echo $area_circulo;

// Constantes dentro de clases
class Impuesto 
{
    const IVA = 0.16;
    const ISR = 0.34;
    const IVA_FRONTERIZO = 0.10;
}

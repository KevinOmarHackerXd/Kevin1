<?php
/**
 * Secuencia de escape
 * 
 * \n nueva linea
 * \r retorno de carro
 * \t tabulador
 * \$ signo de moneda
 * \' comilla simple
 * \" comilla doble
 * \\diagonal invertida (backslash)
 */

 echo "Al final de este texto, hay un salto de linea Gracias a: \\n"."\n";
 echo "Esta linea al final tiene un retorno de carro \r de verdad"."\n";
 echo "if (\$variable) {\n";
 echo "\t echo \"lo que sea\":";
 echo "}\n";
 echo "Si la cadena esta entre comillas dobles basta con poner la comilla simple'\n";
 echo "Si la cadena esta entre comillas simples debes anteponer \ a la comilla simple'\n";
 echo "Si la cadena esta entre comillas dobles debes anteponer \ a la comilla doble\"\n";
 echo "Si la cadena esta entre comillas simples basta con poner la comilla doble"."\n";
 echo "Final final";
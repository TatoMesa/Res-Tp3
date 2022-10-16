<?php

/*Escribir un programa que lea números enteros de teclado hasta que encuentre uno que cumpla las 
siguientes condiciones:  
• Múltiplo de 2.  
• No múltiplo de 5.  
• Mayor que 100.  
• Menor que 10.000.*/

do {
    $aux = readline("Ingrese un numero entero a corroborar: ");
} while (!(($aux % 2 == 0) && ($aux % 5 != 0) && ($aux > 100) && ($aux < 1000)));

echo ("El numero que cumple todas las condiciones requeridas es: ".$aux);

?>
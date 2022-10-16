<?php

/*Realizar la división entera a/b de dos valores enteros positivos mediante restas.*/
/*Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas. */
$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$cont = 0;

if ($A > $B) {
    while ($A >= $B) {
        $A -= $B;
        $cont++;
    }
    echo ("A/B = " . $cont . PHP_EOL);
    echo ("El resto de A/B es: " . $A);
} else {
    echo ("A es menor que B");
}
?>
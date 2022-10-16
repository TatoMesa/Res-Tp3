<?php

/*Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.*/

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$potenciacion = 1;

for ($i = 1; $i <= $B; $i++)
    $potenciacion *= $A;
echo ("A elevado a la B es = a: " . $potenciacion);
?>
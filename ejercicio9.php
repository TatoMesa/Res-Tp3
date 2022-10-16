<?php

/*Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial. */
$N = readline("Ingrese un numero N: ");
$factorial=1;

for ($i = 1; $i <= $N; $i++) {
    for ($j = $i; $j > 1; $j--)
        $factorial *= $j;
    echo ($i . "! = " . $factorial . PHP_EOL);
    $factorial = 1;
}

?>
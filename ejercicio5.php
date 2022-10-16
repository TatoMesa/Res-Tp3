<?php

/*Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente 
hasta 2.*/

$N = readline("Ingrese un numero par positivo: ");

if ($N % 2 == 0) {
    for (; $N > 0; $N -= 2)
        echo ($N . PHP_EOL);
} else {
    echo ("El numero ingresado " . $N . " no es par");
}

?>
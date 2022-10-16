<?php

/*mprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13...*/


$primero = 0;
$segundo = 1;

for ($i = 0; $i <= 100; $i++) {
    if ($i == 0)
        echo ($primero . ", ");
    elseif ($i == 1) {
        $aux = $primero + $segundo;
        echo ($aux . ", ");
    } else {
        $aux = $primero + $segundo;
        $primero = $segundo;
        $segundo = $aux;
        echo ($aux . ", ");
    }
}


?>
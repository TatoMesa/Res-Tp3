<?php

/*mprimir un listado con los números impares desde 1 hasta 999 y seguidamente otro listado con los 
números pares desde 2 hasta 1000*/

echo ("Numeros impares del 1 al 999" . PHP_EOL);
for ($i = 1; $i < 1000; $i += 2)
    echo ($i . PHP_EOL);

echo ("Numeros pares del 2 al 1000" . PHP_EOL);
for ($i = 2; $i <= 1000; $i += 2)
    echo ($i . PHP_EOL);

?>
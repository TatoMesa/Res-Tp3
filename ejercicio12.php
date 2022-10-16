<?php

/* Leer 20 números y encontrar el mayor y el menor valor leídos. */

$menor = 200;
$mayor = -200;

for ($i=0;$i<20;$i++){
    $aux = readline("Ingrese un valor: ");
    if ($aux < $menor)
        $menor = $aux;
    elseif ($aux > $mayor)
        $mayor = $aux;
}

echo ("El menor de los numeros Ingresados es: ".$menor.PHP_EOL);
echo ("El mayor de los numeros Ingresados es: ".$mayor.PHP_EOL);

?>
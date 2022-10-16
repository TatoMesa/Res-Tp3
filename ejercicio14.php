<?php

/*  Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres 
versiones, con un bucle: para, mientras y repetir. Repetir el ejercicio considerando que el número de 
valores se le solicita al usuario.*/

$sumaPares = 0;
$sumaImpares = 0;
$contPares = 0;
$contImpares = 0;
$contIteraciones = 0;

/*do {
    $aux = readline("Ingrese un valor a promediar: ");
    if ($aux % 2 == 0) {
        $sumaPares += $aux;
        $contPares++;
    } elseif ($aux % 2 == 1) {
        $sumaImpares += $aux;
        $contImpares++;
    }
    $contIteraciones++;
} while ($contIteraciones < 10);*/


/*while ($contIteraciones < 10){
    $aux = readline("Ingrese un valor a promediar: ");
    if ($aux % 2 == 0) {
        $sumaPares += $aux;
        $contPares++;
    } elseif ($aux % 2 == 1) {
        $sumaImpares += $aux;
        $contImpares++;
    }
    $contIteraciones++;
}

/*for (; $contIteraciones < 10; $contIteraciones++) {
    $aux = readline("Ingrese un valor a promediar: ");
    if ($aux % 2 == 0) {
        $sumaPares += $aux;
        $contPares++;
    } elseif ($aux % 2 == 1) {
        $sumaImpares += $aux;
        $contImpares++;
    }
}*/

$contIteraciones = readline("Ingrese la cantidad de numeros a promediar: ");

for (; $contIteraciones > 0; $contIteraciones--) {
    $aux = readline("Ingrese un valor a promediar: ");
    if ($aux % 2 == 0) {
        $sumaPares += $aux;
        $contPares++;
    } elseif ($aux % 2 == 1) {
        $sumaImpares += $aux;
        $contImpares++;
    }
}

if ($contPares >0)
    echo("El promedio de los Numeros Pares es: ". $sumaPares/$contPares.PHP_EOL);
if ($contImpares >0)
    echo("El promedio de los Numeros Impares es: ". $sumaImpares/$contImpares.PHP_EOL);


?>
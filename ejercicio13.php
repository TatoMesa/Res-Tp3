<?php

/*Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los positivos y la media de los negativos*/

$sumaNegativos = 0;
$sumaPositivos = 0;
$contNegativos = 0;
$contPositivos = 0;


do{
    $aux = readline ("Ingrese un valor a promediar: ");
    if ($aux < 0){
        $sumaNegativos += $aux;
        $contNegativos ++;
    }elseif ($aux >0){
        $sumaPositivos +=$aux;
        $contPositivos ++;
    }

}while($aux != 0);

echo("El promedio de los Numeros Negativos es: ". $sumaNegativos/$contNegativos.PHP_EOL);
echo("El promedio de los Numeros Positivos es: ". $sumaPositivos/$contPositivos.PHP_EOL);


?>
<?php

/*En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las 
tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para 
informar en que año la población del país B supera a la de A. */

$poblacionPaisA = 25000000;
$poblacionPaisB = 19900000;
$anioInicio = 1994;

while ($poblacionPaisA >= $poblacionPaisB){
    $poblacionPaisA *=  1.02;
    $poblacionPaisB *=  1.03;
    $anioInicio++;
}

echo ("La poblacion del pais B superara a la poblacion del pais A en el año: ".$anioInicio. " Pais A: ".$poblacionPaisA. " Pais B: ".$poblacionPaisB);


?>
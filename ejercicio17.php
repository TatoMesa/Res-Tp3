<?php

/*Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un 
algoritmo que le permita registrar el tiempo empleado en cada recorrido, al final del proceso el 
algoritmo debería mostrar el promedio de los tiempos empleados. También necesita saber cuántas 
veces su tiempo fue menor a valor dado y cuál fue su mejor tiempo realizado.*/

$tiempoActual = readline("Ingrese el tiempo del recorrido 0 para finalizar: ");
$record = $tiempoActual;
$promedio = $record;
$contadorMenores = 0;
$contadorRecorridos = 1;
$sumaTiempos=0;

while ($tiempoActual > 0){
    $sumaTiempos += $tiempoActual;
    $promedio = $sumaTiempos/$contadorRecorridos;
    $contadorRecorridos ++;
    if ($tiempoActual < $record)
        $record = $tiempoActual;
    if ($tiempoActual < $promedio)
        $contadorMenores ++;
    $tiempoActual = readline("Ingrese el tiempo del recorrido 0 para finalizar: ");    
}

echo ("El promedio de los tiempos empleados para recorer los 200 km fue: ".$promedio.PHP_EOL);
echo ("La cantidad de veces que realizo el recorrido por debajo debajo de: ". $promedio. " Fueron: ".$contadorMenores." veces.".PHP_EOL);
echo ("El record de tiempo fue: ". $record.PHP_EOL);



?>

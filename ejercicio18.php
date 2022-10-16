
<?php

/*Un censista recopila ciertos datos aplicando encuestas para el último Censo Nacional de Población y 
Vivienda. Desea procesar los datos de todas las personas que alcance a encuestar en un día y 
obtener los porcentajes de estudios de niveles primario, secundario, superior no universitario, 
universitario y de postgrado.*/

$nivelDeEstudio = readline("Ingrese el nivelde estudio alcanzado, Ingrese Basta para terminar: ");
$Primario = 0;
$Secunadrio = 0;
$Superior = 0;
$Universitario = 0;
$Postgrado = 0;

while ($nivelDeEstudio != "Basta"){
    switch ($nivelDeEstudio){
        case "Primario":{
            $Primario++;
            break;
        }
        case "Secundario":{
            $Secunadrio++;
            break;
        }
        case "Superior":{
            $Superior++;
            break;
        }
        case "Universitario":{
            $Universitario++;
            break;
        }
        case "Postgrado":{
            $Postgrado++;
            break;
        }
        default ;
            echo "Nivel de estudio mal ingresado". PHP_EOL ;
    }
    $nivelDeEstudio = readline("Ingrese el nivelde estudio alcanzado, Ingrese Basta para terminar: ");           
}

echo "La cantidad de personas que alcanzaron el nivel de estudio Primario: ". $Primario. PHP_EOL;
echo "La cantidad de personas que alcanzaron el nivel de estudio Secundario: ". $Secunadrio . PHP_EOL;
echo "La cantidad de personas que alcanzaron el nivel de estudio Superior: ". $Superior. PHP_EOL;
echo "La cantidad de personas que alcanzaron el nivel de estudio Universitario: ". $Universitario. PHP_EOL;
echo "La cantidad de personas que alcanzaron el nivel de estudio Postgrado: ". $Postgrado. PHP_EOL;

?>
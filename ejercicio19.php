<?php

/*Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en 
letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar 
octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso 
finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e 
incorrectos ingresados por el usuario.*/

$Mes = readline("Ingrese el numero correspondiente a un mes del año, 0 para finalizar: ");
$Correctos = "";
$Incorrectos = "";

while ($Mes != 0){
    switch ($Mes){
        case 1:{
            echo "Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos = $Correctos.strval( $Mes).", ";
            Break;
        }
        case 2:{
            echo "Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 3:{
            echo "Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 4:{
            echo "Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 5:{
            echo "Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 6:{
            echo "Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 7:{
            echo "Agosto, Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 8:{
            echo "Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        } 
        case 9:{
            echo "Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        case 10:{
            echo "Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }   
        case 11:{
            echo "Septiembre, Octubre, Noviembre, Diciembre". PHP_EOL;
            $Correctos= $Correctos.strval( $Mes).", ";
            Break;
        }
        default;
            $Incorrectos= $Incorrectos.strval( $Mes).", ";
    }    
    $Mes = readline("Ingrese el numero correspondiente a un mes del año, 0 para finalizar: ");
}

echo "Los numero ingresados correctamente son: ".$Correctos . PHP_EOL;
echo "Los numero ingresados incorrectamente son: ".$Incorrectos . PHP_EOL;

?>


<?php
  
  /* Suponga que tiene usted una tienda y desea registrar las ventas en su computadora. Diseñe un 
  algoritmo que lea por cada cliente, el monto total de su compra. Al final del día que escriba la 
  cantidad total de ventas y el número de clientes atendidos*/


$CantCliente = 0;
$TotalVentas = 0;
$trabajando = 1;

while ($trabajando != 0){
    $Venta = readline("Ingrese el Monto de la Venta: ");
    if ($Venta > 0){
        $TotalVentas +=$Venta;
        $CantCliente++;
    }
    else{
        echo "Venta mal Ingresada no puede ser un valor negativo".PHP_EOL;
    }
    $trabajando = readline("Desea seguir trabajando (0. No)");
    
}
echo "El total de ventas del dia es: ".$TotalVentas. PHP_EOL;
echo "La cantidad de clientes atendidos fue: ".$CantCliente. PHP_EOL;



?>
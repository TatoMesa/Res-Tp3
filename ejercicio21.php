<?php

/*Se ofrece un trabajo que pague un centavo en la primera semana y dobla su salario cada sema- 
na, es decir, $0.01 la primera semana; $0.02 la segunda semana; $0.04 la tercera semana; 
$(2 n-1 )/100 la n-ésima semana. Determine el salario por cada semana y el salario pagado hasta 
la fecha por espacio de n semanas. */

$salarioInicial = 0.01;
$N = readline("Ingrese la cantidad de semanas trabajadas: ");
$salario = 0;

for ($i=1; $i<=$N; $i++){
       
    echo $salarioInicial . PHP_EOL;
    $salario += $salarioInicial;
    $salarioInicial *= 2;
}
echo "El salario a pagar transcurridas ".$N." semanas es: ".$salario . PHP_EOL ;
?>
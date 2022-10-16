
<?php

/*Calcular el factorial de 10 números diferentes cuyos valores se leen. */

for ($i = 0; $i < 10; $i++) {
    $N = readline("Ingrese el numero a calcular el factorial: ");
    $factorial = 1;
    for ($j = $N; $j > 0; $j--)
        $factorial *= $j;
    echo ($N . "! =" . $factorial.PHP_EOL);
}



?>
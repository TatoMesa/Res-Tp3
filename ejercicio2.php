<?php

/*Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres 
algoritmos con cada estructura repetitiva. */
//--------------  estrucutra while   -----------------
$a = readline("ingrese el valor de A: ");
$b = readline("ingrese el valor de B: ");
$multiplicacion = 0;
if ($b > $a) {
    $aux = $a;
    $a = $b;
    $b = $aux;
}
while ($b > 0) {
    $multiplicacion += $a;
    $b--;
    echo ("Suma Parcial: " . $multiplicacion . PHP_EOL);
}
echo ("La Multiplicacion de A y B es: " . $multiplicacion . PHP_EOL . PHP_EOL);
//--------------  estrucutra for   ----------------
$a = readline("ingrese el valor de A: ");
$b = readline("ingrese el valor de B: ");
$multiplicacion = 0;
if ($b > $a) {
    $aux = $a;
    $a = $b;
    $b = $aux;
}
for ($i = $b; $i > 0; $i--) {
    $multiplicacion += $a;
    echo ("Suma Parcial: " . $multiplicacion . PHP_EOL);
}
echo ("La Multiplicacion de A y B es: " . $multiplicacion . PHP_EOL . PHP_EOL);
//--------------  estrucutra do while   ----------------
$a = readline("ingrese el valor de A: ");
$b = readline("ingrese el valor de B: ");
$multiplicacion = 0;
if ($b > $a) {
    $aux = $a;
    $a = $b;
    $b = $aux;
}
if ($b > 0) {
    do {
        $multiplicacion += $a;
        $b--;
        echo ("Suma Parcial: " . $multiplicacion . PHP_EOL);
    } while ($b > 0);
}
echo ("La Multiplicacion de A y B es: " . $multiplicacion . PHP_EOL . PHP_EOL);

?>

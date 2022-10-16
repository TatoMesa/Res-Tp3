
<?php

/*Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota 
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?*/

$suma = 0;
$contador = 0;

do {
    $nota = readline("Ingrese una nota para finalizar ingrese un numero negativo: ");
    if ($nota >= 0) {
        $suma += $nota; //$suma=$suma+$nota;
        $contador++; //$contador=$contador+1;
    }
} while ($nota > 0);
$resultado = $suma / $contador;
echo "El promedio es: " . $resultado . PHP_EOL;

$suma = 0;
$contador = 0;
$nota = readline("Ingrese una Nota para finalizar ingrese un numero negativo: ");
while ($nota >= 0) {
    $suma += $nota;
    $contador++;
    $nota = readline("Ingrese una Nota para finalizar ingrese un numero negativo: ");
}
$resultado = $suma / $contador;
echo "El promedio es: " . $resultado . PHP_EOL;

//no se puede hacer con for ya que no sabemos de antemano cuantas iteracion debe hacer el bucle

?>

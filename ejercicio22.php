<?php

/* Calcular la nota promedio de un salón de clase y la nota mayor y el código del estudiante 
que la obtuvo, validar que las notas ingresadas se encuentren en el intervalo [0,10]. El 
ingreso de notas finaliza a pedido del operador.*/

$Promedio = 0;
$NotaMayor = 1;
$Inicio = 0;
$NotasAcumuladas = 0;

do{
$CodigoAlumno = readline("Ingrese el codigo del alumno: ");
$NotaAlumno = readline("Ingrese la nota del alumno: ");
if (($NotaAlumno) >=1 and ($NotaAlumno <=10)){
    if ($NotaMayor<$NotaAlumno){
        $NotaMayor = $NotaAlumno;
        $MejorAlumno = $CodigoAlumno;
    }
    $NotasAcumuladas += $NotaAlumno;
    $Inicio ++;


}else
    echo "La Nota del alumno debe ser un valor entre 1 y 10".PHP_EOL;


$Seguir = readline("Desea seguir ingresando Notas? 1:SI 0:NO :");

}while ($Seguir == 1);

$Promedio = $NotasAcumuladas / $Inicio;

echo "La mejor Nota es: " . $NotaMayor . " y pertenece al alumno: " . $MejorAlumno . PHP_EOL;
echo "El promedio del curso es: " . $Promedio . PHP_EOL; 

?>
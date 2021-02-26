

<?php
// 3.Programa para solicitar el nombre, y la nota promedio
//de 5 estudiantes de un curso de computación.

$Estudiantes = (array)[
    (string) "Thomas" => (int) 10 ,
    (string) "Juan Diego" => (int) 8 ,
    (string) "Miguel" => (int) 6 ,
    (string) "Danilo" => (int) 6 ,
    (string) "Santiago" => (int) 4
];

$notas = array_values($Estudiantes);
$Promedio = (int) (array_sum($notas)/5);

print("El promedio de los estudiantes es: $Promedio ");
?>
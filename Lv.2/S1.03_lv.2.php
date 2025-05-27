<?php
declare(strict_types=1);

//EJ.1

$array1 = [5, 2.4, 1.2];
$array2 = [2, 5, 2.3];

function compararArrays(array $array1, array $array2): void{
    $interseccion = array_intersect($array1, $array2);
    print_r($interseccion) . PHP_EOL;

    $unionArrays = array_merge($array1, $array2);
    print_r($unionArrays) . PHP_EOL;
}

compararArrays($array1, $array2) . PHP_EOL;

//EJ.2

$notasClase = [
    'Germán' => [3, 5, 4.5, 8, 5.5],
    'Alex' => [4, 5.5, 8, 3, 4],
    'Alexia' => [8, 9, 5.5, 7, 7.5],
    'Ana' => [6, 7, 8, 5, 6]
    ];

function listarAlumnos(array $notasClase): void{
    foreach($notasClase as $alumno => $notas){
        echo $alumno .":". implode(',', $notas)."\n" . PHP_EOL;
    }
}

function calcularMedia($notasClase): float{
    $totalNotas = [];
    foreach($notasClase as $alumno => $notas){
        $mediaAlumno = array_sum($notas) / count($notas);
        echo "La media de $alumno es: $mediaAlumno\n" . PHP_EOL;
        $totalNotas = array_merge($totalNotas, $notas);      
    }
    $mediaClase = array_sum($totalNotas) / count($totalNotas);
    echo "La media de la clase es: ".$mediaClase."\n" . PHP_EOL;
    return $mediaClase;
}

listarAlumnos($notasClase);
calcularMedia($notasClase);



?>
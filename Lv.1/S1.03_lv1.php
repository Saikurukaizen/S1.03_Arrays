<?php
declare(strict_types=1);


$numArray = [5,8,12,21,36];
foreach($numArray as $n){
    echo $n . PHP_EOL;
}


$x = array (10, 20, 30, 40, 50,60);
echo count($x) . PHP_EOL;
unset($x[0], $x[3]);
$x = array_values($x);
var_dump($x);


function encontrarChars(array $palabras, string $char): bool{
    foreach($palabras as $palabra){
        if(stripos($palabra, $char) === false){
            return false;
        }
    }
    return true;
}

$palabras = ['hola', 'Php','Html'];
var_dump(encontrarChars($palabras, "h")) . PHP_EOL;
var_dump(encontrarChars($palabras, "l")) . PHP_EOL;


function getInfo(): string{
    $miPersona = [
    'nombre' => 'Marc',
    'edad' => 25,
    'email' => 'marc@example.com',
    'comida favorita' => 'Pizza Trufada'
    ];
    
    return '
    Nombre: '.$miPersona['nombre'].'
    Edad: '.$miPersona['edad'].'
    Email: '.$miPersona['email'].'
    Comida favorita: '.$miPersona['comida favorita'].'
    ';
}

echo getInfo() . PHP_EOL;
?>

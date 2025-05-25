<?php
declare(strict_types=1);

//EJ.1

$numArray = [5,8,12,21,36];
foreach($numArray as $n){
    echo $n;
}

//EJ.2

$x = array (10, 20, 30, 40, 50,60);
echo count($x);
unset($x[0], $x[3]);
$x = array_values($x);
var_dump($x);

//EJ.3

function encontrarChars(array $palabras, string $char): bool{
    foreach($palabras as $palabra){
        if(stripos($palabra, $char) === false){
            return false;
        }
    }
    return true;
}

$palabras = ['hola', 'Php','Html'];
var_dump(encontrarChars($palabras, "h"));
var_dump(encontrarchars($palabras, "l"));

//EJ.4

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

echo getInfo();
?>

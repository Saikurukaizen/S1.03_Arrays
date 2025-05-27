<?php
declare(strict_types=1);

//EJ.1

$valores = array(2,5,8,10,15);

function prepararMap($v): int{
    return $v ** 3;
}

print_r(array_map("prepararMap", $valores));

//EJ.2

function probarFiltro($f){
    return (strlen($f) % 2 === 0);
}

$hardware = array("procesador", "placa base", "tarjeta gráfica", "SSD");
print_r(array_filter($hardware, "probarFiltro"));

//EJ.3

function esPrimo(int $n): bool{
    if($n < 2){
        return false;  
    }
    for($i = 2; $i <= sqrt($n); $i++){
        if($n % $i === 0){
            return false;
        }
    }
    return true;
}

$n = array(3, 5, 6, 8);
$primos = array_reduce($n, function($acc, $v){
    return esPrimo($v) ? $acc + $v : $acc;
}, 0);

echo "La suma de los números primos es: $primos\n" . PHP_EOL;



?>
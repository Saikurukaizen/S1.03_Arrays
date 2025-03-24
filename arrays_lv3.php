<?php

$enteros = [3, 5, 6, 8, 9, 12];
$res = array_map(function($n){return $n ** 3;}, $enteros);
print_r($res);

$cocina = ['olla', 'sartén', 'espátula', 'cuchillo'];
$res = array_filter($cocina, function($palabra){return strlen($palabra) % 2 === 0;});
print_r($res);


class SumaPrimos{
    private array $n;

    public function __construct(array $n){
        $this->n = $n;
    }
    private function esPrimo(int $n){
        if($n < 2){
            return false;
        }

        for($i = 2; $i * $i <= $n; $i++){
            if($n % $i === 0){
                return false;
            }
        }
        return true;
    }

    public function sumarPrimos(): int{
        $primos = array_filter($this->n, function($n){
            return $this->esPrimo($n);
        });

        return array_reduce($primos, function($acc, $n){
            return $acc + $n;
        }, 0);
    }
}

$n = [2, 4, 6, 9, 11, 13];
$calcular = new SumaPrimos($n);
echo "La suma de los números primos es: " . $calcular->sumarPrimos();

?>
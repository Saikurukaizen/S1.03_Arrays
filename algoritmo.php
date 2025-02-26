<?php
    // Recorrer los números, del 1 al 100
    // Para cada número, comprobar si es primo o no es primo. (True o false)

    $minimo = 1;
    $maximo = 100;

    //Recorrer los números
    for($i=$minimo; $i <= $maximo; $i++){
        if(checkPrimo($i)){
            echo 'El número '.$i. 'es primo<br>';
        }
        else{
            echo 'El número '.$i. ' no es primo<br>';
        } 
    }

    function checkPrimo($numero){
        $contador = 0;

        for($i=1;$i <= $numero; $i++){
            if($numero%$i == 0){ //De esta condicional lo hacemos para obtener el residuo de la división, ya que los números primos cumplen, con al menos dos divisiones
                $contador++;     //con resultado entero(Entre 1 y el mismo número)Si se cumple estas dos condiciones, es true. Cada vez que no hay residuo(Residuo = 0),
            }                   //se incrementa el contador.
        }

        if($contador == 2){
            return true;
        } else{
            return false;
        }
    }


?>
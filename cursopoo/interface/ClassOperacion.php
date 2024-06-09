<?php

    require_once("Operacion.php");
    require_once("OperacionesBasicas.php");
    
    class Calcular implements Operacion, Operacion_basica {
        public function raizCuadrada(float $numero): float 
        {
            $total = sqrt($numero);
            return $total;
        }

        public function potencia(int $base, int $exponente): int 
        {
            $total = pow($base, $exponente);
            return $total;
        }

        public function op_basicas(float $num1, float $num2, string $operacion)
        {
            if ($operacion == "+") {
                $resultado = $num1 + $num2;
            } elseif ($operacion == "-") {
                $resultado = $num1 - $num2;
            } elseif ($operacion == "*") {
                $resultado = $num1 * $num2;
            } elseif ($operacion == "/") {
                $resultado = $num1 / $num2;
            } else {
                echo "Operacion no valida";
            }            
            return $resultado;
        }
    }

?>
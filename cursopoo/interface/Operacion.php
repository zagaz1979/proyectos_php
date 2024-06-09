<?php

    interface Operacion {
        public function raizCuadrada(float $numero): float;
        public function potencia(int $base, int $exponente): int;
    }

?>
<?php

    class Calculadora
    {
        public function somar($s1, $s2) {
            echo "A soma de $s1 e $s2 é: ".$s1+$s2;
            echo '<hr>';            
        }

        public function subtrair($s1, $s2) {
            echo "A subtração de $s1 e $s2 é: ".$s1-$s2;
            echo '<hr>';            
        }
        
        public function dividir($s1, $s2) {
            echo "A dividir de $s1 e $s2 é: ".$s1/$s2;
            echo '<hr>';            
        }

        public function multiplicar($s1, $s2) {
            echo "A multiplicação de $s1 e $s2 é: ".$s1*$s2;
            echo '<hr>';            
        }
    }

    $calculadora = new Calculadora();
    $calculadora->somar(4,5);
    $calculadora->subtrair(47,25);
    $calculadora->dividir(16,4);
    $calculadora->multiplicar(21,45);
?>
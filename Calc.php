<?php

Class Calc{
    private $n1;
    private $n2;
    private $res;
    
    public function somar($n1, $n2){
        $res=$n1+$n2;
        return $res;
    }

    public function subtrair($n1, $n2){
        $res=$n1-$n2;
        return $res;
    }

    public function multiplicar($n1, $n2){
        $res=$n1*$n2;
        return $res;
    }

    public function dividir($n1, $n2){
        $res=$n1/$n2;
        return $res;
    }
}
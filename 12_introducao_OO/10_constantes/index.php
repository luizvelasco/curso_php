<?php 

class Humano 
{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante(){
        echo self::BRACOS;
    }
}

$velasco = new Humano;

echo $velasco::OLHOS . "<br>";

$velasco->mostrarConstante();
<?php

interface Caracteristicas 
{
    const NOME = "Velasco";
    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 36;

    public function falar(){
        echo "Olá mundo <br>";
    }

    public function dizerNome(){
        echo "meu nome é " . self::NOME . "<br>";
    }
}

$velasco = new Humano;
$velasco->falar();
$velasco->dizerNome();
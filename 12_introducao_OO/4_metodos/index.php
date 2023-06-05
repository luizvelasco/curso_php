<?php 

class Pessoa 
{

    function falar(){
        echo "Olá, eu sou um objeto<br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }
}

$velasco = new Pessoa;
$velasco->falar();
$velasco->falar();

$joao = new Pessoa;
$joao->falar();

$velasco->somar(2,2);
$joao->somar(2,3);
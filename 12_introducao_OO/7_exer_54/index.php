<?php 

class Pessoa 
{
    public $nome;
    public $idade;

    function andar($m){
        echo "A pessoa andou $m metros";
    }
}

$velasco = new Pessoa;

$velasco->nome = "Velasco";
$velasco->idade = 36;

echo "O nome dele é $velasco->nome e a sua idade é $velasco->idade <br>";

$velasco->andar(6);
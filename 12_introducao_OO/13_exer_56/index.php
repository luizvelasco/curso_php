<?php

class Humano 
{
    public $nome = "Luiz";
    public $idade = 36;

    public function falar(){
        echo "O humano falou <br>";
    }
}
class Professor extends Humano 
{
    public $materia = "Matematática";

    public function estaLecionando(){
        echo "O professor está dando aula de $this->materia <br>";
    }
}

$velasco = new Professor;
echo "$velasco->nome <br>";
echo "$velasco->idade <br>";
$velasco->falar();
$velasco->estaLecionando();
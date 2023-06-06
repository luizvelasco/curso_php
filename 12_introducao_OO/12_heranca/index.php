<?php

class Humano 
{
    public $idade = 36;

    public function falar(){
        echo "Olá Mundo <br>";
    }

    private function gritar(){
        echo "PHP é muito bom <br>";
    }

    public function acessaGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "lalala <br>";
    }

    public function acessaFalarBaixinho(){
        $this->falarBaixinho();
    }
}

class Programador extends Humano 
{
    public function acessaFalarBaixinhoProgramador(){
        $this->falarBaixinho();
    }
}

$ze = new Humano;
$ze->falar();
$ze->acessaGritar();
$ze->acessaFalarBaixinho();

$velasco = new Programador;
echo $velasco->idade . "<br>";
echo $velasco->falar();
$velasco->acessaGritar();
$velasco->acessaFalarBaixinho();
$velasco->acessaFalarBaixinhoProgramador();
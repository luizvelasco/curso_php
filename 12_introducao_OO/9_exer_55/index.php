<?php 

class Carro 
{
    public $marca;
    public $nome;
    public $velocidade_maxima;

    function setVelocidadeMaxima($velocidade_maxima){
        $this->velocidade_maxima = $velocidade_maxima;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima é $this->velocidade_maxima km/h <br>";
    }
}

$bmw = new Carro;

$bmw->setVelocidadeMaxima(180);
$bmw->getVelocidadeMaxima();

$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(200);
$ferrari->getVelocidadeMaxima();
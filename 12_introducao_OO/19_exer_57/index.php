<?php 

class Cachorro 
{

    public $raca;
    public $idade;
    public $nome;

    function __construct($raca, $idade, $nome)
    {
        $this->raca = $raca;
        $this->idade = $idade;
        $this->nome = $nome;
    }

    public function mostraValores(){
        echo "O cachorro é da raça $this->raca, tem  $this->idade anos e se chama $this->nome <br>";
    }
}

$bob = new Cachorro("Vira Lata", 8, "Bob");

$bob->mostraValores();

$raca = "Tomba lata";
$idade = 2;
$nome = "Einstein";

$einstein = new Cachorro($raca, $idade, $nome);

$einstein->mostraValores();
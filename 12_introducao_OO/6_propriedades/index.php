<?php 

class Car 
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar(){
        echo "Vrummm";
    }
}

$ferrari = new Car;

echo $ferrari->rodas;
echo "<br>";
echo $ferrari->aro;

$ferrari->cor = "Azul";
echo "<br>";
echo $ferrari->cor;
echo "<br>";

$ferrari->ligar();
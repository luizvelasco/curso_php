<?php 

class Cachorro 
{
    function latir() {
        echo "O cachorro está latindo<br>";
    }

    function andar() {
        echo "O cachorro está andando<br>";
    }
}

$toto = new Cachorro;
$bob = new Cachorro;
$caramelo = new Cachorro;

$toto->latir();
$toto->andar();

$bob->latir();
$bob->andar();

$caramelo->latir();
$caramelo->andar();
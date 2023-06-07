<?php 

class Humano {

    public function falar(){
        echo "olá";
    }
}

$velasco = new Humano;

$teste = 10;

if (is_object($velasco)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if (is_object($teste)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($velasco) . "<br>";
if (method_exists($velasco, "falar")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if (method_exists($velasco, "asd")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}
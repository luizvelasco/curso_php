<?php

function defineCarro($cor = "Vermelha"){
    return $cor;
}

$cor = "Lilás";

$corCarro = defineCarro($cor);

echo "O Carro tem a cor $corCarro"; 
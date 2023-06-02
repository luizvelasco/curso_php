<?php 

$raca = 'vira lata';
$nome = 'bob';
$idade = '8';

$cachorro = compact("raca", "nome", "idade");

foreach ($cachorro as $item => $value){
    echo "$item: $value";
    echo "<br>";
}
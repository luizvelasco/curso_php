<?php 

$velasco = [
    'nome' => 'Velasco',
    'idade' => 36,
    'profissao' => 'PM',
];

$luiz = [
    'nome' => 'luiz',
    'idade' => 50,
    'profissao' => 'PC',
];

foreach ($velasco as $carac => $value){
    echo "$carac: $value <br>";
}

foreach ($luiz as $value){
    echo "$value <br>";
}
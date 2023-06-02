<?php

$arr = [
    'nome' => "Velasco",
    'idade' => 39
];

if (array_key_exists("profissao", $arr)){
    echo "Chave Existe";
} else {
    echo "Chave não Existe";
}

if (isset($arr['iidade'])){
    echo "Chave Existe";
} else {
    echo "Chave não Existe";
}
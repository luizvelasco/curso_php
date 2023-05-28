<?php

function alteraDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";
    return [$nome, $idade];
}

$dados = alteraDados("Luiz", 36);

var_dump($dados);

echo "<br>";

echo "olá $dados[0], vc tem $dados[1]";
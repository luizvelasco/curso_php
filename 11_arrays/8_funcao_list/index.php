<?php

$pessoa = ['luiz', 36, 'programador', 'azul'];

var_dump($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $cor_olhos) = $pessoa;

echo $nome . "<br>";
echo $idade . "<br>";
echo $profissao . "<br>";
echo $cor_olhos . "<br>";
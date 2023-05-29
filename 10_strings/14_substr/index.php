<?php 

$str = "Esta é a minha string";

$minha = substr($str, 10, 5);

echo "$str<br>";
echo "$minha<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 9); //omitir cumprimento, pegar até o fim

echo $novaString . "<br>";

$novaString2 = substr($str2, -3); // comprimento negativo = remover do último índice

echo $novaString2;
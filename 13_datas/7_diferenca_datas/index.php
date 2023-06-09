<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

var_dump($dataA);
echo "<br>";


var_dump($dataB);
echo "<br>";

$diferenca = $dataA->diff($dataB);

var_dump($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
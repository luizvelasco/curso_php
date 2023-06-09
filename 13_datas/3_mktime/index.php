<?php

$dataNascimento = mktime(02, 12, 33, 07, 17, 1986);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";
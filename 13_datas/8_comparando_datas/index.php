<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2024, 10, 10);

if ($dataB > $dataA){
    echo "A Data B é maior que a data A <br>";
}

if ($dataB < $dataA){
    echo "A Data A é maior que a data B <br>";
}
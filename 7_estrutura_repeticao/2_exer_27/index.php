<?php

$valores = ["luiz", 2, 4, "34", 45.5, 25, "velasco", 5, 9, "aa"];
$i = 0;

while ($i < sizeof($valores)) {
    if (is_string($valores[$i])){
        echo $valores[$i] . "<br>";
    }
    
    $i++;
}
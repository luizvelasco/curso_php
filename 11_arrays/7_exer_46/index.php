<?php

$arr = [
    ["abacate", "abacaxi", "amora", "ameixa"],
    ["banana", "brocolis", "beterraba", "berinjela"],
    ["caju", "cereja", "curcuma", "caja"]
];

for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
        echo $arr[$i][$j];
        echo "<br>";
    }

    if ((count($arr) - 1) != $i){
        echo "Mundando de array... <br>";
    } 
    
}
<?php

$lista = ["Arroz", "Trigo", "Cerveja", "Sal"];

function itens($arr){
    $str = "Você levou estes itens: ";
    for ($i=0; $i < count($arr); $i++){
        if ($i + 1 == count($arr)) {
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }
        
    }
    return $str;
}

echo itens($lista);
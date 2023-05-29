<?php 

$arr = [
    'porta' => 100,
    'macaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function intensCaros($arr){
    $arrItens = [];

    foreach($arr as $item => $preco){
        if ($preco > 10){
            array_push($arrItens, $item);
        }
    }

    return $arrItens;
    
}

$novoArr = intensCaros($arr);

print_r($novoArr);
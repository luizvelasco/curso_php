<?php

$arr = range(10 ,45);
//var_dump($arr);
$msg = "";

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] + 6 > 30) {
        $msg = " valor muito alto";
    } else {
        $msg = "";
    }
    echo $arr[$i] + 6 . $msg . "<br>";
}
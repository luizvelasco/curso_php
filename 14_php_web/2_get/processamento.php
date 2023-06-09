<?php

if (isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "teste";
    $idade = 66;
}


?>

<h1>O Seu nome é <?= $nome?> e tem <?= $idade?> anos</h1>
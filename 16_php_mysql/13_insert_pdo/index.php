<?php

include_once("../12_pdo_conexao/index.php");

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte monitor";
$descricao = "O suporte está novo e ainda na caixa";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();


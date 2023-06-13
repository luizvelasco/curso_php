<?php

include_once("../12_pdo_conexao/index.php");

$id = 3;
$nome = "Teclado 2";
$descricao = "Teclado da Microsoft2";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao= :descricao WHERE id = :id");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":id", $id);

$stmt->execute();
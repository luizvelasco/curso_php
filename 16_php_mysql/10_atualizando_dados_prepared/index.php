<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 3;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Mesa";
$descricao = "Mesa de madeira reflorestada";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}
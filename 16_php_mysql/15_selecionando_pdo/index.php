<?php

include_once("../12_pdo_conexao/index.php");

$id = 0;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

//$data = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($itens);
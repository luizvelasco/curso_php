<?php

$usuario = [
    'nome' => 'Luiz',
    'idade' => 36,
    'profissao' => 'programador'
];

if ($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" placeholder="Digite seu nome" value="<?= $nome?>">
        </div>
        <div>
            <input type="text" placeholder="Digite sua idade" value="<?= $idade?>">
        </div>
        <div>
            <input type="text" placeholder="Digite sua profissão" value="<?= $profissao?>">
        </div>
    </form>
</body>
</html>
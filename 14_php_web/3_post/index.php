 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="Marca do Carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do Carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" Value="Teto Solar"> Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" Value="Película"> Película
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" Value="Blindado"> Blindado
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
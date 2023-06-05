<?php

$valores = [
    'Luiz' => 5,
    'Antonio' => 8,
    'Braga' => 3,
    'Velasco' => 9,
];

arsort($valores);

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Pontuação</th>       
    </tr>
    <?php foreach($valores as $valor => $item) :?>
    <tr>
        <td><?php echo $valor ?></td>
        <td><?php echo $item ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?php 

$pessoas = [
    'Luiz' => 30,
    'Braga' => 35,
    'Velasco' => 40,
];

foreach ($pessoas as $pessoa => $value){
    echo "$pessoa: $value<br>";
}

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $pessoa => $value): ?>
        <tr>
            <td><?php echo $pessoa ?></td>
            <td><?php echo $value ?></td>
        </tr>
    <?php endforeach ?>
</table>
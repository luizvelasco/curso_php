<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincoDias);

echo $dataAtualMais5 . "<br>";
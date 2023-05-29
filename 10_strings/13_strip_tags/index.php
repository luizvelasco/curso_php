<?php

$textoHtml = "<p>Testando parágrafo</p><div>Uama div</div><p>Outro parágrafo</p>";

echo $textoHtml;

$salvarTexto = strip_tags($textoHtml);

echo $salvarTexto . "<br>";
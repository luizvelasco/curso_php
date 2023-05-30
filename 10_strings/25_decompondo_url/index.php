<?php

$url = "https://www.google.com";

$arryUrl = parse_url($url);

var_dump($arryUrl);

echo "<br>" . $arryUrl["host"];
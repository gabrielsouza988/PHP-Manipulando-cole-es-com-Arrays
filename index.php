<?php

require "autoload.php";

use Alura\ArrayUtils;

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$combine = array_combine($correntistas, $saldos);

echo '<pre>';
var_dump($combine);
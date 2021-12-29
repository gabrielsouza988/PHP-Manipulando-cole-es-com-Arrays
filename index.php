<?php
    require "Calculadora.php";

$notas = [2, 3, 4, 5, 6];

$calculadora = new Calculadora;
$media = $calculadora->calcularMedia($notas);
if ($media == null) {
    echo "não foi possivel concluir o calculo de media!";
} else {
    echo "A media é {$media}";
}
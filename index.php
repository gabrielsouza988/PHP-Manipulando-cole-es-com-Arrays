<?php
$nomes = 'Gabriel, Carlos, João, Raymundo';

$nomes_array = explode(', ', $nomes);

foreach ($nomes_array as $value) {
    echo "Olá {$value} <br>";
}

$nomes_juntos = implode(', ', $nomes_array);

echo "<h1>{$nomes_juntos}</h1";
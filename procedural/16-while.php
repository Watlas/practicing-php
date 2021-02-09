<?php

$contador = 1;

while ($contador <= 10):
    echo "contador é $contador <br>";
    $contador++;
endwhile;
//poderia abrir e fechar chave
$contador = 1;

echo "<hr>";

do {
    echo "contador é $contador <br>";
    $contador++;
} while ($contador <= 10);
<?php

for($contador = 0; $contador <= 10; $contador++){
    echo "8 x $contador = ".($contador * 8)."<br>";
}

//for($contador = 0; $contador <= 10; $contador++): endfor

echo "<hr>";

$cores = array("verde", "vermelho", "azul");

//foreach ($cores as $valor) {
//    echo "$valor"."<br>";
//}
echo "<hr>";
foreach ($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;

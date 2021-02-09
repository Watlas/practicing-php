<?php
$carros = array(1=>"BMW", 2=>"FUSCA", "GOL");
$carros[] = "amarok";
print_r($carros);

echo "<br>";

$motos = array();
$motos[] = "oi";

//coubt

echo count($carros); //tamanho do array

$totalcarros = count($carros);

foreach ($carros as $valor){
    echo "$valor <br>";
}
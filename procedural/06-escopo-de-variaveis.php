<?php
// Escopo global
$nome = 'watlas rick \n';
$a = 1;
$b = 2;
$c = 3;

function exibe(){
    global $nome;
    echo $nome;
}

exibe();
///////////////
function soma(){
    echo $GLOBALS['a'] +  $GLOBALS['a'];
}

soma();
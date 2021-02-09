<?php

namespace ola;
class Pessoa{
    public $idade;

    public function __clone()
    {
        echo "Clagem de objetos";
    }
}

$pessa = new Pessoa();
$pessa-> idade = 25;

$pessoa2= $pessa; //vira uma referencia ao objeto pessa
$pessoa2= clone $pessa; //agora clonou o objeto e virou 2 objetos
$pessoa2->idade = 35;

echo $pessa->idade;  //35
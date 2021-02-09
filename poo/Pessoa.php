<?php


class Pessoa
{
    const nome = "Watlas";

    public function exibirNome(){
        echo self::nome;
    }
}
$pessoa = new Pessoa();
$pessoa->exibirNome();

class Rodrigo extends Pessoa{
    const nome = "rick";

    public function exibirNome(){
        echo self::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
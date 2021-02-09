<?php

class Pessoa{

    private $nome;
    private $idade;

    public function Falar(){
        echo "falou";
    }
}

$teste = new Pessoa();
$teste->Falar(); //pegando metodo do OBJETO
Pessoa::Falar(); //Pegando metodo direto da CLASSE
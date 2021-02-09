<?php
require 'classes/Produto.php';
require 'models/Produto.php';

use classe\Produto as pr; //usando o namespace la da outra classe

$produto = new pr();
$produto->mostrarDetalhes();
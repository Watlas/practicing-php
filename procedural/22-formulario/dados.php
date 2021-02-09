<?php

$nome = $_POST['nome']; //nome do input
$email = $_POST['email'];

echo "Seu nome é $nome e seu email é $email";

$nome = $_GET['nome']; //nome do input
$email = $_GET['email'];
//muda a urlfica visivel na url
echo "Seu nome é $nome e seu email é $email";

<?php

$arquivo = 'arquivo.txt';
$conteudo = "conteudo de teste\r\n";
$tamanhoArquivo = filesize($arquivo); // pega o tamho o arquivo

$arquivoAberto = fopen($arquivo, 'a'); //a = altera // r exisb
fwrite($arquivoAberto, $conteudo); //escreve
fclose($arquivoAberto);

while (!feof($arquivoAberto)):
    $linha = fgetc($arquivoAberto, $tamanhoArquivo);
echo $linha;
endwhile;


<?php

//Abre o arquivo para leitura.
$arquivo = fopen('lorem.txt', 'r');

//filesize retorna o tamanho do arquivo(em Bytes)
$tamanhoDoArquivo = filesize('lorem.txt');
//fread tem que ser passado o arquivo que deseja ser lido, e o quanto em bytes você quer que leia
$lorem = fread($arquivo, $tamanhoDoArquivo);

echo $lorem;
//Fecha o arquivo
fclose($arquivo);

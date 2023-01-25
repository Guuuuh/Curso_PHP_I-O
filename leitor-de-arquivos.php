<?php

//abre o arquivo, lê o conteúdo, retorna uma string com o conteúdo e fecha o arquivo
$lorem = file_get_contents('lorem.txt');

echo $lorem;

//file retorna um array com cada linha se tornando um índice do array
$lorem = file('lorem.txt');

var_dump($lorem);
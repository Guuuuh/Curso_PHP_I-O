<?php

//cria o arquivo caso não exista para abrir ele, w = write
$arquivo = fopen('lorem-escrito.txt', 'w');

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

//em qual arquivo deseja escrever, o conteúdo, e o quanto deseja escrever.
fwrite($arquivo, $lorem);

fclose($arquivo);
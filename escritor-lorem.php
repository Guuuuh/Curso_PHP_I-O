<?php

//cria o arquivo caso não exista para abrir ele, a = append
$arquivo = fopen('lorem-escrito.txt', 'a');

$lorem = "\nPellentesque habitant morbi tristique senectus et netus.";

//em qual arquivo deseja escrever, o conteúdo, e o quanto deseja escrever.
fwrite($arquivo, $lorem);

fclose($arquivo);
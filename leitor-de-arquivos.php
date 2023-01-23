<?php

//Abre o arquivo para leitura.
$arquivo = fopen('lorem.txt', 'r');

//while para chamar o fgets, e fazer ele ler todas as linhas até o final do arquivo.
//feof = end of file
while (!feof($arquivo)) {
    //fgets lê a string até a quebra de linha.
    $lorem = fgets($arquivo);

    echo $lorem;
}

//Fecha o arquivo
fclose($arquivo);

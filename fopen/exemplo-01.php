<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 10:01
 */

$file = fopen("log.txt", "a+"); //w escrever no arquivo, +cria se não existir

fwrite($file, date("Y-m-d H:i:s") . "\r\n");


fclose($file);

echo "Arquivo criado com sucesso";

<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 10:56
 */

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

echo "arquivo deletado";
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 09:28
 */

$name = "images";

if (!is_dir($name)){

    mkdir($name);
    echo "Diretório $name criado com sucesso!";
}
else {
    rmdir($name);
    echo "Já existe o diretório: $name foi removido";
}
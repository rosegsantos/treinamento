<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 26/09/2018
 * Time: 07:50
 */

function ola(){
    return "Olá mundo!<br>";
}

function salario(){
    return 946.00;
}

echo ola();

$frase = ola();

echo strlen($frase);


echo "Jose recebeu 3 salarios: " . (salario() * 3);
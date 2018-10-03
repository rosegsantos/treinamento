<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 25/09/2018
 * Time: 13:59
 */

$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes){
    echo "O mês é: " . $mes . "<br>";
}

foreach ($meses as $index => $mes){

    echo "Índice: " . $index . "<br>";
    echo "O mês é: " . $mes . "<br>" . "<br>";
}


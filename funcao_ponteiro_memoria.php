<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 26/09/2018
 * Time: 08:09
 */


$a = 10;

function trocaValor(&$a){ //passagem de parametro por referencia

    $a += 50;
    return $a;
}


echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";
echo $a;

<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 26/09/2018
 * Time: 08:06
 */

function ola(){
    $argumentos = func_get_args();
    return $argumentos;
}

ola("Bom dia", "Rose", 10);

var_dump(ola("Bom dia", "Rose", 10));
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 26/09/2018
 * Time: 07:56
 */

function ola($texto = "mundo", $periodo="Bom dia"){
    return "Ola $texto! $periodo! <br>";
}

echo ola() . "<br>";
echo ola("Boa noite") ;
echo ola("Glaucio", "Boa tarde") ;
echo ola("João","");
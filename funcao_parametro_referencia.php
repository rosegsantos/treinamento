<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 26/09/2018
 * Time: 08:17
 */

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as $value){

    if (gettype($value) == 'integer' ) $value += 10;



    echo $value . '<br>';
}

print_r($pessoa);

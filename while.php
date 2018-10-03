<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 25/09/2018
 * Time: 15:31
 */

$condicao = true;

// foreach usado para array

while ($condicao){
    $numero = rand(1,10);

    if ($numero === 3 ){
        echo "TRES" . "<br>";
        $condicao = false;
    }

    echo $numero . "<br>";
}

$total = 150;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ( $total > 100);

echo $total;
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 25/09/2018
 * Time: 18:03
 */

$frutas = array("maça", "laranja", "abacaxi", "melancia"); //vetor
print_r($frutas); // exibe o array e sua estrutura

//array bidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "EcoSport";

echo "<br>" . $carros[0][3] . "<br>";
echo end($carros[1]);

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => 20
));

echo "<br>";

print_r($pessoas);
print_r($pessoas[0]['nome']);
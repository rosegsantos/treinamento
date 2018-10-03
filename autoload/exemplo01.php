<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 10:04
 */

function __autoload($nomeClasse){
    //var_dump($nomeClasse);
    require_once("$nomeClasse.php");
    }


$carro = new DelRey();

$carro ->acelerar(80);
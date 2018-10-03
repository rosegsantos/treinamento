<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 10:10
 */


function incluirClasses($nomeClasse){

    var_dump($nomeClasse);
    if (file_exists($nomeClasse.".php") === true){
        require_once ($nomeClasse.".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse){

    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true){
        require_once ("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }
});



$carro = new DelRey();

$carro ->acelerar(80);
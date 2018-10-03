<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 10:49
 */

class Pessoa {

    public $nome ; // atributo

    public function falar() {  //metodo
        return "O meu nome é " . $this->nome;
    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


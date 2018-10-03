<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 16:53
 */

//encapsular = proteger as informações, restringir acesso e como vai acessar

class Pessoa {

    public $nome = "Rasmus Lerdorf";  // todos mundo vêem
    protected $idade = 48; // só a classe e os herdeiros conseguem ver idade
    private $senha = "123456"; // só a classe  consegue ver idade

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}


class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this)  . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }


}

$objeto = new Programador();

//echo $objeto->nome . "<br>";
//echo $objeto->idade . "<br>";
//echo $objeto->senha . "<br>";

$objeto->verDados(); //nao consegue exibir senha pq é privado





<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 15:01
 */

// metodos magicos
// coisas que acontecem sem vc ver
// metodo construtor -- ele é executado automaticamente ao instanciar a classe
// a regra é que o metodo tenha o mesmo nome da classe
// metodo magico tem o nome __construct

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        var_dump("Destruir");

    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }
}

$meuEndereceo = new Endereco("Rua A", "277", "Volta Redonda");

echo $meuEndereceo;

//var_dump($meuEndereceo);

unset($meuEndereceo);
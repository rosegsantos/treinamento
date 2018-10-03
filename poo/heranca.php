<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 17:11
 */

// deixar as classes mais genéricas


class Documento {

    private  $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

class CPF extends Documento {

    public function validar()
    {
        $numeroCPF = $this->getNumero();

        // aqui entra a validacao do cpf
        return true;
    }


}

$doc = new CPF();

$doc->setNumero("11111111111");

var_dump($doc->validar());

$doc->validar();

echo "<br/>";

echo $doc->getNumero();
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 15:39
 */

namespace Cliente;

class Cadastro extends \Cadastro {

    public  function registrarVenda()
    {
        echo "Foi registrada uma venda para o cliente " . $this->getNome();

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 15:26
 */

class Cadastro {

    private $nome;
    private $senha;
    private $email;


    public function getNome()
    {
        return $this->nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function  setNome($nome)
    {
        $this-> nome = $nome;
    }

    public function  setEmail($email)
    {
        $this->email = $email;
    }

    public function  setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        return json_encode(array(
           "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
           "senha"=>$this->getSenha()
        ));
    }
}
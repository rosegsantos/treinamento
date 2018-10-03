<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 15:33
 */

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hode.com.br");
$cad->setSenha("123456");


$cad->registrarVenda();

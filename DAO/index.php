<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 17:51
 */

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);



//teste novo repositorio - aff


<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 17:51
 * teste de commit
 */

//teste da maquina do thiago
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//carrega um usuario
/*$rose = new Usuario();

$rose->loadById(5);

echo $rose;*/

//carrega uma lista de usuarios

/*$lista = Usuario::getList();

echo json_encode($lista);
*/

// carrega uma lista de usuaruios buscando pelo login

/*$search = Usuario::search("o");

echo json_encode($search);*/

// carrega um usuario usando o login e a senha

// $usuario = new Usuario();
// $usuario->login("jose","12");

//teste

// echo $usuario;

/*
 *
 * //  criando um novo usuario
$aluno = new Usuario("aluno2", "@luno2");

$aluno->insert();

echo $aluno;
*/

/*
 * //alterar um usuaruio
$usuario = new Usuario();

$usuario->loadById(11);

$usuario->update("_professor_", "_12_");

echo $usuario;
*/


//deletar um usuario
$usuario = new Usuario();

$usuario->loadById(10);

$usuario->delete();

echo $usuario;



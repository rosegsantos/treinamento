<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 16:30
 */



$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","aapvr");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario =?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();


echo "Dados excluídos com sucesso";
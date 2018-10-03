<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 16:15
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","aapvr");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario =:ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluídos com sucesso";

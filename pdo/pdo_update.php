<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 16:03
 */


$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","aapvr");

$stmt = $conn->prepare("UPDATE tb_usuarios SET dessenha = :PASS WHERE deslogin =:LOGIN");

$login = "jose";
$pass = "12";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Dados alterados com sucesso";

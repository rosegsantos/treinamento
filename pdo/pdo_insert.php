<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 01/10/2018
 * Time: 15:52
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","aapvr");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASS)");

$login = "jose";
$pass = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "Dados inseridos com sucesso";

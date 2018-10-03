<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 17:20
 */

$con = new mysqli("localhost", "root", "aapvr", "dbphp7");

if ($con->connect_error) {
    echo "Error: " . $con->connect_error;
}

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss",$login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "Rose";
$pass = "!@#$";

$stmt->execute();

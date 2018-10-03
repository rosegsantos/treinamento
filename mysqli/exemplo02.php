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

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) { // verifica se tem inf e manda para a var
    array_push($data, $row);
}

echo json_encode($data);


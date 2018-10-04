<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 10:23
 */

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

// jogar o conteudo do array para um arquivo csv

$headers = array();

foreach ($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row){  //nos linhas
    $data = array();

    foreach ($row as $key => $value) { // nos registros
        array_push($data, $value);
    } // end foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n");
} // end foreach de linha

fclose($file);







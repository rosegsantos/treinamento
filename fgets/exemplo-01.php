<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 11:45
 */

$filename = "usuarios.csv";

if (file_exists($filename)) {

    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file)); //transforma um array

    $data = array();

    while ($row = fgets($file)) {

        $rowData = explode(",", $row);
        $linha= array();

        for ($i = 0; $i < count($headers); $i++) {

            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);

}



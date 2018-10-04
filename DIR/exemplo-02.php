<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 09:37
 */

$images = scandir("images");

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))){ // faz busca dentro de um array

        $filename = "images". DIRECTORY_SEPARATOR. $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost:63342/PHP/DIR/" . str_replace("\\","/", $filename);

        array_push($data, $info);
    }
}

echo json_encode($data);
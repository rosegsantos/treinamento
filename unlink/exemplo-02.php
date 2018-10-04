<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 11:06
 */

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item){
    if (!in_array($item, array(".", ".."))) {
        unlink("images/"  . $item);
    }
}

echo("ok");
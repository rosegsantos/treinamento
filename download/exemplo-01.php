<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 05/10/2018
 * Time: 10:29
 */

// file_get_contents() pega o conteudo de um arquivo

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);
 ?>

<img src="<?=$basename?>"



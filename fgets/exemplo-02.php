<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 04/10/2018
 * Time: 14:48
 */

$filename = "logo.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>


<a href="<?=$base64encode?>" target="_blank">Link para imagem></a>

<img scr="<?=$base64encode?>">
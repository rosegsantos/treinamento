<form method="POST" enctype="multipart/form-data"> //os dados enviados serão binarios
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 05/10/2018
 * Time: 10:13
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];

    if ($file["error"]){

        throw new Exception("Erro: " . $file["error"]);
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "Upload realizado com sucesso!";
    }
    else{
        throw new Exception("Não foi possível realizar o update: " . $file["error"]);
    }
}

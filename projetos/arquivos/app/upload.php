<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 05/10/2018
 * Time: 15:31
 */

require_once("class/Functions.php");
require_once("config.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];

    $fileType = $_FILES["fileUpload"]["type"];
    $fileName = $_FILES["fileUpload"]["name"];
    $fileTmpName = $_FILES["fileUpload"]["tmp_name"];
    $dirUploads = "uploads";
    $destination = $dirUploads . DIRECTORY_SEPARATOR . $file["name"];
    $expected_columns =  array("Conta",	"Cod. Terceiro", "Classificador", "Nome da Conta", "C/Custo", "Saldo Inicial", "Débito", "Crédito", "Saldo Final\r\n");

    $competencia = "201808";


    if ($file["error"])
        throw new Exception("Erro: " . $file["error"]);

    $result = Functions::verificarTipoArquivo($fileTmpName, "text/plain");

    if(!in_array(false, $result)) {

        // verificar colunas do arquivo
        $fileColumns = Functions::retornarColunasArquivo($fileTmpName);
        $inconsistencia = array_diff_assoc($fileColumns, $expected_columns);

        if(empty($inconsistencia)) {
            if(Functions::transferirArquivo($fileTmpName, $dirUploads, $destination)){
                $alert = "Arquivo enviado com sucesso!";


                // importar para o banco de dados
                $gravarFontesReceitas = new Functions();


                $gravarFontesReceitas->gravarFontesReceitas($destination, $competencia);

            }


            else
                $alert = "Erro ao enviar o Arquivo!";


        }
        else

            $alert = "Arquivo fora do padrão estabelecido!";
    }
    else{

        $alert = "Arquivo Inválido!";
    }
    echo "<div class='mensagem'>$alert</div>";



}




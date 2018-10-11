<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 05/10/2018
 * Time: 16:26
 */

require_once("class/Receitas.php");

class Functions
{
    public static function verificarTipoArquivo($fileTmpFullPath, $type) {

        /*
        * User: rose
        * Date: 05/10/2018
        * Description: Realiza uma validação básica do arquivo. Se não for executável, verifica se é do tipo esperado
        * Parameters:
        *              $fileTmpFullPath : path completo do arquivo no diretório temporário
        *              $type : tipo esperado do arquivo
        * */

        $checkResult = array();

        if (!is_executable($fileTmpFullPath)) { // não é executável?

            array_push($checkResult, true);

            // verifica se o tipo do arquivo é o esperado
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mtype = finfo_file($finfo, $fileTmpFullPath);

            finfo_close($finfo);

            $result = $mtype == ($type) ? true : false;

            array_push($checkResult, $result);
        }
        else
            array_push($checkResult, false);

        return $checkResult;
    }

    public static function retornarColunasArquivo($fileTmpFullPath) {

        /*
        * User: rose
        * Date: 05/10/2018
        * Description: Realiza uma validação básica do arquivo. Se não for executável, verifica se é do tipo esperado
        * Parameters:
        *              $fileTmpFullPath : path completo do arquivo no diretório temporário
        * */

        $file = fopen($fileTmpFullPath, "r");

        $headers = explode(";", fgets($file)); //transforma um array

        $data = array();

        for ($i = 0; $i < count($headers); $i++) {
            array_push($data, utf8_encode($headers[$i]));
        }

        fclose($file);

        return $data;
    }

    public static function transferirArquivo($tmpPath, $dirUploads, $destination){

        /*
         * User: rose
         * Date: 05/10/2018
         * Description: Transfere o arquivo do diretório temporário para o diretório base no servidor
         * Parameters:
         *              $tmpPath : path do arquivo no diretório temporário
         *              $dirUploads : diretório destino
         *              $destination : caminho completo do diretório no servidor
         * */

        if (!is_dir($dirUploads)){
            mkdir($dirUploads, 0777);
        }


        return move_uploaded_file($tmpPath, $destination) ? true : false;


    }


    public function gravarFontesReceitas($filePath, $competencia){

        // abrir o arquvio no modo leitura
        $file = fopen ($filePath, 'r');

        $data = array();

        // ler o conteúdo do arquivo
        while(!feof($file)) {
            // pegar os dados da linha
            $linha = fgets($file, 1024);

            // dividir as informações das celulas para poder salvar
            $dados = explode(';', str_replace(array("\r","\n",'\r','\n'),'',  $linha));

            // verificar se os dados não é o cabeçalho ou não esta em branco
            if($dados[0] != 'Conta' && !empty($linha)){

                if( empty($dados[0])) $dados[0] = null;
                if( empty($dados[1])) $dados[1] = null;
                if( empty($dados[2])) $dados[2] = null;
                if( empty($dados[3])) $dados[3] = null;
                if( empty($dados[4])) $dados[4] = null;
                if( empty($dados[5])) $dados[5] = null;
                if( empty($dados[6])) $dados[6] = null;
                if( empty($dados[7])) $dados[7] = null;
                if( empty($dados[8])) $dados[8] = null;


                $receitas = new Receitas($competencia, $dados[0], $dados[1], $dados[2], $dados[3], $dados[4], $dados[5],  $dados[6] ,
                    $dados[7] , $dados[8]);
                $receitas->insert();

                echo $receitas;
            }
        }

        // fechar arquivo
        fclose($file);
    }
}


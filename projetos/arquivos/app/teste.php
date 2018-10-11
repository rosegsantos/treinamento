<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 11/10/2018
 * Time: 11:31
 */


$estados = array(
    'SP'=>'São Paulo',
    'RJ'=>'Rio de Janeiro',
    'MG'=>'Minas Gerais'
);
$select_estado = $_GET['select_estado']; // não precisa colocar na sessão aqui
?>

<html>
<head>
        <title>teste</title>
        <form action="teste.php">
            Nome<input type="text" name="text_nome">
            <br>
            Estado
            <select name="select_estado" id="select_estado">

                <?php foreach($estados as $sigla=>$nome){ ?>
                <option value="<?php echo $sigla; ?>" <?php echo ($sigla==$select_estado) ?'selected="selected"':''; ?>><?php echo $nome; ?></option>
                <?php } ?>
            </select>
            <br> <br> <br>
            <input type="submit" value="Enviar">
        </form>
</head>
</html>
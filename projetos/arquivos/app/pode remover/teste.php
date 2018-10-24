<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<select name="competencia">
    <?php
    require_once("class/Functions.php");
    require_once("config.php");

    $data = Functions::retornarCompetencia();

    foreach ($data as $competencia) {
        echo '<option value="'.$competencia.'">'.$competencia.'</option>';
    }
    ?>
</select>
</body>
</html>
<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="ok">

</form>


<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 25/09/2018
 * Time: 14:04
 */

if (isset($_GET)){

    foreach ($_GET as  $key => $value){

        echo "Nome do campo : " . $key . "<br>";
        echo "Valor do campo : " . $value;

        echo "<hr>";

    }
}

?>



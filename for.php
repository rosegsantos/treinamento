<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 25/09/2018
 * Time: 13:34
 */

// for -- for each -- while

for ($i = 0 ; $i <= 10; $i++){
    echo $i. "<br>";
}

echo "<br>";

for ($i = 0 ; $i <= 100; $i += 5 ) {

    if ($i > 50 && $i < 80) continue;

    if ($i == 95) break;

    echo $i . "<br>";
}

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--){

    echo '<option value="' .$i.'">' . $i. '</option>';


}

echo "</select>";
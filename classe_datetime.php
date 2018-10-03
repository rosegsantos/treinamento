<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 10:29
 */

$dt = new DateTime();
echo $dt->format("d/m/y H:i:s") ."<br>";

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/y H:i:s") ."<br>";

$dt -> add($periodo);

echo $dt->format("d/m/y H:i:s") ."<br>";

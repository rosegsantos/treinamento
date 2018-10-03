<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 10:19
 */

// $ts = strtotime("2001-09-11");

$ts = strtotime("now");

echo date("l, d/m/Y", $ts). "<br>";

$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts) . "<br>";

$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);
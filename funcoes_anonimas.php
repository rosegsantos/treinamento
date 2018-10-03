<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 27/09/2018
 * Time: 09:15
 */


function test($callback){

    //processo lento

    $callback();

}

test(function (){
    echo "Terminou";
});
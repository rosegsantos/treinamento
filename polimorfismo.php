<?php
/**
 * Created by PhpStorm.
 * User: rose
 * Date: 28/09/2018
 * Time: 09:45
 */

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e  " . parent::mover();
    }

}

echo "-----------------------------------" . "<br>";
$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "-----------------------------------" . "<br>";
$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "-----------------------------------" . "<br>";
$pombo = new Passaro();
echo $pombo->falar() . "<br>";
echo $pombo->mover() . "<br>";
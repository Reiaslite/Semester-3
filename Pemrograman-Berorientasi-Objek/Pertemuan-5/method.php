<?php

class Hewan{
    public $energi;
    public $bernafas;

    function bergerak($energi){
        echo "aku dapat bergerak karena ada ".$energi;
    }
    function bernafas($nafas){
        echo "aku dapat bernafas karena ada ". $nafas;
    }

    function mendengar(){
        echo "aku dapat mendengar";
    }

    static function makan(){
        echo "aku dapat makan";
    }
}

// Hewan::makan();
$kucing = new Hewan();
$kucing->energi = "karbohidrat";
$kucing->nafas = "Udara";
echo $kucing->bergerak($kucing->energi);
echo "<br/>";
echo $kucing->bernafas($kucing->nafas);
// echo PHP_EOL;
// print_r($kucing->bernafas());
// echo PHP_EOL;
// var_dump($kucing->mendengar());
// echo PHP_EOL;

?>
<?php
class Hewan {
    function __construct(){
        echo "aku dipanggil pertama kali </br>".PHP_EOL;
    }

    function bergerak() {
        echo 'aku dapat bergerak</br>';
    }

    function __destruct(){
        echo 'aku dipanggil terakhir kali '.PHP_EOL;
    }
}



$kucing = new Hewan();
echo $kucing->bergerak();
print_r($kucing->bergerak());
var_dump($kucing->bergerak());

?>
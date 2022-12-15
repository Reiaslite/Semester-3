<?php
interface Kendaraan {
    public function __construct();
    public function getWarna();
}

class Motor implements Kendaraan {
    public function __construct(){
        echo "Hello ini dari constructor motor <br/>";
    }
    public function getWarna(){
        return "Hijau";
    }
}

class Mobil implements Kendaraan {
    public function __construct(){
        echo "Hello ini dari contructor mobil <br/>";
    }

    public function getWarna()
    {
        return "Biru";
    }
}

$motor = new Motor();
echo $motor->getWarna();
echo "<br/>";

$mobil = new Mobil();
echo $mobil->getWarna();

?>
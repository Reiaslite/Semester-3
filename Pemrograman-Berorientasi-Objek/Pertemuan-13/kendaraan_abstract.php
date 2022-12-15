<?php 
abstract class Kendaraan {
    abstract public function getInformasi();

    public function getInformasiRoda($jmlRoda){
        echo "Jumlah Roda Kendaraan Ini Adalah ".$jmlRoda;
    }
}

class Motor extends Kendaraan {
    public function getInformasi(){
        return "Informasi Motor";
    }

    public function getRoda(){
        return $this->getInformasiRoda("2");
    }
}

class Mobil extends Kendaraan {
    public function getInformasi(){
        return "Informasi Mobil";
    }

    public function getRoda(){
        return $this->getInformasiRoda("4");
    }
}

$motor = new Motor();
echo $motor->getInformasi();
echo "<br/>";
echo $motor->getRoda();
echo "<br/>";

$mobil = new Mobil();
echo $mobil->getInformasi();
echo "<br/>";
echo $mobil->getRoda();
echo "<br/>";
?>
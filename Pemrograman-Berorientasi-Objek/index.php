<?php
// Contoh Class
class Kendaraan{
    // Isi Class
}
// Akhir Class
class mobil {
    public function __construct(){
        $this->merek = new Kendaraan();
    }
}

$honda = new mobil();
var_dump($honda->merek);
?>
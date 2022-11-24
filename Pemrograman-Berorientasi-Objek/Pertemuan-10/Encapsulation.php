<?php

class Hewan {
    private string $kaki;
    private string $tangan;

    //setter
    public function setKaki($kaki){
        $this->kaki = $kaki;
    }

    public function setTangan($tangan){
        $this->tangan = $tangan;
    }

    //getter
    public function getKaki(){
        return $this->kaki;
    }

    public function getTangan(){
        return $this->tangan;
    }
}


$ular = new Hewan();
$ular->setKaki ('Ular tidak punya kaki'); // mengisi property kaki ular
print_r($ular->getKaki());

echo ('</br>');

$ayam = new Hewan();
$ayam-> setKaki('Ayam berkaki dua'); //mengisi property kaki ayam
print_r($ayam->getKaki());

echo ('</br>');

print_r($tangan->getTangan());

?>
<?php 

require_once('./Pegawai.php');

use pegawaiParent\pegawai;

class Tendik extends pegawai{
    public $departmen;

    public function __construct($obj){
        $this->departmen = $obj['departmen'];
    }

    function tunjanganTendik(){
        return $this->jumlah_gaji * 0.15;
    }
}


?>
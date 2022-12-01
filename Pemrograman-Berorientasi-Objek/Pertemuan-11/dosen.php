<?php 

require_once("./Pegawai.php");

use pegawaiParent\pegawai;

class Dosen extends pegawai{
    public $homebase;

    public function __construct($obj){
        $this->homebase = $obj['homebase'];
    }

    function tunjanganDosen(){
        return $this->jumlah_gaji * 0.15;
    }
}

?>
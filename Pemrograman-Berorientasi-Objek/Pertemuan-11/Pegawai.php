<?php 

namespace pegawaiParent{
    class pegawai{
        public $nama, $nip, $tempat_lahir, $tanggal_lahir, $email, $nomer_hp, $jumlah_gaji;

        public function __construct($obj){
            $this->nama = $obj['nama'];
            $this->nip = $obj['nip'];
            $this->tempat_lahir = $obj['tempat_lahir'];
            $this->tanggal_lahir = $obj['tanggal_lahir'];
            $this->email = $obj['email'];
            $this->nomer_hp = $obj['nomor_hp'];
            $this->jumlah_gaji = $obj['jumlah_gaji'];
            $this->homebase = $obj['homebase'];
            $this->departmen = $obj['departmen'];
        }

        public function tunjanganPegawai(){
            return $this->jumlah_gaji * 0.15;
        }   
    }
}

?>
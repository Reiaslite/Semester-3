<?php 

class mahasiswa {

    public function Rai(){
        $nama = $this->nama();
        echo 'Nama Mahasiswa : '. $nama . '</br>';
        $nim = $this->nim();
        echo 'NIM Mahasiswa : '. $nim . '</br>';
        $kelas = $this->kelas();
        echo 'Kelas Mahasiswa : '. $kelas . '</br>';
        $angkatan = $this->angkatan();
        echo 'Angkatan Mahasiswa : '. $angkatan . '</br>';
    }

    function nama(){
        return 'Rai Tilosava De Araujo';
    }

    function nim(){
        return '21416255201184';
    }

    function kelas(){
        return 'IF21B';
    }

    function angkatan(){
        return '2021';
    }

}

$mhs_1 = new mahasiswa();
$mhs_1->rai();
?>
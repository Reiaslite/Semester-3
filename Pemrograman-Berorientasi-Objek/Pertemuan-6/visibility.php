<?php 

class Hewan{

    public function aktifitas(){
        $aktifitas = $this->hidup();
        echo $aktifitas;
        $aktifitas = $this->berenang();
        echo $aktifitas;
        $aktifitas = $this->bertelur();
        echo $aktifitas;
    }

    public function hidup(){
        return 'aku hidup </br>';
    }

    protected function berenang(){
        return 'aku berenang </br>';
    }

    private function bertelur(){
        return 'aku bertelur';
    }
}

$kucing = new Hewan();
$kucing->aktifitas();
// $kucing->berenang();
// echo $kucing->mata = 'hitam';
// echo $kucing->hidung = 'oval';
// echo $kucing->telinga = 'runcing';

?>
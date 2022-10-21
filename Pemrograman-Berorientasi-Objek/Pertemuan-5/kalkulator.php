<?php 
    class Kalkulator{
        // public $bilangan_1;
        // public $bilangan_2;

        function tambah($bilangan_1,$bilangan_2){
            return $bilangan_1 + $bilangan_2;
        }
        function kurang($bilangan_1,$bilangan_2){
            return $bilangan_1 - $bilangan_2;
        }
        function kali($bilangan_1,$bilangan_2){
            return $bilangan_1 * $bilangan_2;
        }
        function bagi($bilangan_1,$bilangan_2){
            return $bilangan_1 / $bilangan_2;
        }
    }

$soal1 = new Kalkulator();

echo "Hasil Pertambahan adalah " .$soal1->tambah(10,5);
echo "<br/>"; 
echo "Hasil Pengurangan adalah " .$soal1->kurang(10,5); 
echo "<br/>"; 
echo "Hasil Perkalian adalah " .$soal1->kali(10,5); 
echo "<br/>"; 
echo "Hasil Pembagian adalah " .$soal1->bagi(10,5); 

?>
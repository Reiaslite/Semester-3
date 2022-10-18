<?php
// class Hewan
// {
//  public $Nama = 'Hello World!';
//  public function tes(){
//     echo $Nama;
// }

// }

// $hewan = new Hewan ();
// $Hewan -> tes();
class Hewan {
    public $mata;
    public $hidung;
    public $telinga;
}
$kelinci = new Hewan();
$kelinci -> mata = 'bulat';
$kelinci -> hidung = 'kecil';
$kelinci -> telinga = 'panjang';

$kucing = new Hewan();
$kucing -> mata = 'melihat';
$kucing -> hidung = 'indra penciuman';
$kucing -> telinga = 'mendengar';

var_dump($kelinci);
var_dump($kucing);

// var_dump($kelinci -> mata) . PHP_EOL;
// var_dump($kelinci -> hidung) . PHP_EOL;
// var_dump($kelinci -> telinga) . PHP_EOL;

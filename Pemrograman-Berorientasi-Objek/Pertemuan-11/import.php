<?php 
require_once('./Pegawai.php');
require_once('./dosen.php');
require_once('./tendik.php');

$obj = [
    "nama" => "Reynaldi gm tampubolon",
    "nip" => "21416255201135",
    "tempat_lahir" => "17-08-2003",
    "tanggal_lahir" => "mandoge",
    "email" => "naldi@gmail.com",
    "nomor_hp" => "081234563421",
    "jumlah_gaji" => 600000,
    "homebase" => "fuckkklid",
    "departmen" => "12345676"
];

$pegawai1 = new pegawaiParent\pegawai($obj);

echo "
    Nama Pegawai : $pegawai1->nama
    </br>
    NIP Pegawai : $pegawai1->nip
    </br>
    Tempat Lahir: $pegawai1->tempat_lahir
    </br>
    Tanggal Lahir : $pegawai1->tanggal_lahir
    </br>
    Email : $pegawai1->email
    </br>
    Nomor HP : $pegawai1->nomer_hp
    </br>
    Jumlah Gaji : $pegawai1->jumlah_gaji
    </br>
    Homebase : $pegawai1->homebase
    </br>
    Departmen : $pegawai1->departmen
";

// var_dump($gaji);

?>
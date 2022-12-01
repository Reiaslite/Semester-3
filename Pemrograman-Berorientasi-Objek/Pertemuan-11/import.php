<?php 
require_once('./Pegawai.php');
require_once('./dosen.php');
require_once('./tendik.php');

$obj = [
    "nama" => "Rai Tilosava D",
    "nip" => "2312315213213",
    "tempat_lahir" => "12-06-2003",
    "tanggal_lahir" => "Karawang",
    "email" => "rai@gmail.com",
    "nomor_hp" => "018203812521",
    "jumlah_gaji" => 600000,
    "homebase" => "test123",
    "departmen" => "123213123"
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
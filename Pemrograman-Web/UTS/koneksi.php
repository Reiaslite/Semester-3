<?php
    class koneksi{
        public function __construct(){
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "data_siswa";

            $conn = mysqli_connect($server, $user, $password, $db);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
    }

    $conn = new koneksi();
?>
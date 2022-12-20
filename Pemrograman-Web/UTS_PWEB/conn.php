<?php

    $conn = mysqli_connect('localhost', 'root', '', 'nilai');
    
    if(isset($_POST['submit'])) {
        global $conn;

        $nama = $_POST['name'];
        $nim = $_POST['nim'];
        $presensi = $_POST['presensi'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // insert data
        $insert = "INSERT INTO nilai_mahasiswa VALUES(
            '',
            '$nama',
            '$nim',
            '$presensi',
            '$tugas',
            '$uts',
            '$uas'
        )";

        // operation

        $presensi *= 10 / 100;
        $tugas *= 25 / 100;
        $uts *= 30 / 100;
        $uas *= 35 / 100;

        $result = $presensi + $tugas + $uts + $uas;

        if(mysqli_query($conn, $insert)) {
            header("Location: viewData.php");
        } else {
            echo "Data gagal ditambahkan!" . "<br>";
        }
        
        return mysqli_affected_rows($conn);
        
    }
    
?>
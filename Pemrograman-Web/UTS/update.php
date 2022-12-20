<?php 
    require 'conn.php';

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $presensi = $_POST['nilai_presensi'];
        $tugas = $_POST['nilai_tugas'];
        $uts = $_POST['nilai_uts'];
        $uas = $_POST['nilai_uas'];
    
        $update = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', nilai_presensi = '$presensi', nilai_tugas = '$tugas', nilai_uts = '$uts', nilai_uas = '$uas' WHERE id = '$id'";
        
        if(mysqli_query($conn, $update)) {
            header('Location: read.php');
        } else {
            echo 'Data gagal di tambahkan';
        }
        return mysqli_affected_rows($conn);
    }

?>
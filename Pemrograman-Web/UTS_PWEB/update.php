<?php

require_once('conn.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $nim = $_POST['nim'];
    $presensi = $_POST['presensi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $update = "UPDATE nilai_mahasiswa SET nama = '$nama', nim = '$nim', presensi = '$presensi', tugas = '$tugas', uts = '$uts', uas = '$uas' WHERE id_mahasiswa = '$id'";
    
    if(mysqli_query($conn, $update)) {
        header('Location: viewData.php');
    } else {
        echo 'Data gagal di tambahkan';
    }
    return mysqli_affected_rows($conn);
}
?>
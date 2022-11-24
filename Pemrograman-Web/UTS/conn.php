<?php 

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "data_siswa";

    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $nama = $_POST['nama_mhs'];
    $nim = $_POST['nim_mhs'];
    $presensi = $_POST['presensi_mhs'];
    $tugas = $_POST['tugas_mhs'];
    $uts = $_POST['uts_mhs'];
    $uas = $_POST['uas_mhs'];

    $sql = "INSERT INTO mahasiswa (nama, nim, nilai_presensi, nilai_tugas, nilai_uts, nilai_uas) VALUES ('$nama', '$nim', '$presensi', '$tugas', '$uts', '$uas')";

    if (mysqli_query($conn, $sql)) {
        header("Location: read.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
        
    // echo "Connected successfully";

?>
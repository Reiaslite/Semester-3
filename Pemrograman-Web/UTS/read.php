<?php 
    //Deklarasi Variabel Koneksi
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "data_siswa";

    //Koneksi ke Database
    $conn = mysqli_connect($server, $user, $password, $db);

    //Cek Koneksi
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Mengambil data dari database
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <hr>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Presensi</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            
            while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nilai_presensi"] ?></td>
                <td><?= $row["nilai_tugas"] ?></td>
                <td><?= $row["nilai_uts"] ?></td>
                <td><?= $row["nilai_uas"] ?></td>
            </tr>
        <?php 
            } 
            } else {
            echo "0 results";
        }
        ?>
        
    </table>
    <br>
    <a href="index.php">Tambah Data</a>
</body>
</html>


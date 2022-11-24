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
    <title>Read Data</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Presensi</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>
        
        
            <?php 
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            
            while($row = mysqli_fetch_assoc($result)) {
                // echo "ID: ". $row["id"] ." - Nama: " . $row["nama"]. " - NIM: " . $row["nim"]. " - Nilai Presensi: " . $row["nilai_presensi"]. " - Nilai Tugas: " . $row["nilai_tugas"]. " - Nilai UTS: " . $row["nilai_uts"]. " - Nilai UAS: " . $row["nilai_uas"]. "<br>";
                echo '<tr>';
                echo '<td>'.$row["id"].'</td>';
                echo '<td>'.$row["nama"].'</td>';
                echo '<td>'.$row["nim"].'</td>';
                echo '<td>'.$row["nilai_presensi"].'</td>';
                echo '<td>'.$row["nilai_tugas"].'</td>';
                echo '<td>'.$row["nilai_uts"].'</td>';
                echo '<td>'.$row["nilai_uas"].'</td>';
                echo '</tr>';
            }
        } else {
            echo "0 results";
        }
        ?>
        
    </table>
    <a href="index.php">Tambah Data</a>
</body>
</html>


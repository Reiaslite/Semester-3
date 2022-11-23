<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS - Pemrograman Web</title>
</head>
<body>
    <h2>Input Data!</h2>
    <hr>
    <form action="conn.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input name="nama_mhs" type="text" id="nama" placeholder="Nama Mahasiswa" require></td>
            </tr>

            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input name="nim_mhs" type="text" id="nim" placeholder="NIM Mahasiswa" require></td>
            </tr>

            <tr>
                <td><label for="absensi">Presensi</label></td>
                <td><input name="presensi_mhs" type="number" id="absensi" placeholder="Nilai Presensi Mahasiswa" require> 10%</td>
            </tr>

            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td><input name="tugas_mhs" type="number" id="tugas" placeholder="Nilai Tugas Mahasiswa" require> 25%</td>
            </tr>

            <tr>
                <td><label for="uts">UTS</label></td>
                <td><input name="uts_mhs" type="number" id="uts" placeholder="Nilai UTS Mahasiswa" require> 30%</td>
            </tr>

            <tr>
                <td><label for="uas">UAS</label></td>
                <td><input name="uas_mhs" type="number" id="uas" placeholder="Nilai UAS Mahasiswa" require> 35%</td>
            </tr>

            <tr>
                <td><button type="submit" name="submit" value="submit">Process</button></td>
                <td><button type="reset">Cancel</button></td>
            </tr>
            <tr>
                <td><a href="read.php">Lihat Data</a></td>
            </tr>
        </table>
    </form>

    <hr>


</body>
</html>
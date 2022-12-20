<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
</head>
<body>
    <?php
    require('conn.php');

    $id = $_GET["id"];
    $select = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);

    ?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td><label for="id">ID</label></td>
                <td><input value="<?$row['id']?>" name="id" type="text" id="id" placeholder="ID Mahasiswa"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input value="<?$row['nama']?>" name="nama_mhs" type="text" id="nama" placeholder="Nama Mahasiswa"></td>
            </tr>

            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input value="<?$row['nim']?>" name="nim_mhs" type="text" id="nim" placeholder="NIM Mahasiswa"></td>
            </tr>

            <tr>
                <td><label for="absensi">Presensi</label></td>
                <td><input value="<?$row['nilai_presensi']?>" name="presensi_mhs" type="number" id="absensi" placeholder="Nilai Presensi Mahasiswa"> 10%</td>
            </tr>

            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td><input value="<?$row['nilai_tugas']?>" name="tugas_mhs" type="number" id="tugas" placeholder="Nilai Tugas Mahasiswa"> 25%</td>
            </tr>

            <tr>
                <td><label for="uts">UTS</label></td>
                <td><input value="<?$row['nilai_uts']?>"  name="uts_mhs" type="number" id="uts" placeholder="Nilai UTS Mahasiswa"> 30%</td>
            </tr>

            <tr>
                <td><label for="uas">UAS</label></td>
                <td><input value="<?$row['nilai_uas']?>" name="uas_mhs" type="number" id="uas" placeholder="Nilai UAS Mahasiswa"> 35%</td>
            </tr>

            <tr>
                <td><button type="submit" name="submit" value="submit">Process</button></td>
                <td><button type="reset">Cancel</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
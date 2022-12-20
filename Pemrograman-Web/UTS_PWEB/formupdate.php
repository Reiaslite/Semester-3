<?php
require_once('conn.php');

$id = $_GET["id"];
$select = "SELECT * FROM nilai_mahasiswa WHERE id_mahasiswa = $id";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Edit Nilai Mahasiswa</title>
    <style>
        input {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 80px;
            margin-bottom: 15px;
        }

        form {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    
    <div class="insert-contents">
        <div class="container">
            <h2>UTS Pemrograman Web 2022/2023</h2>
            <form action="update.php" method="post">
                <input type="text" id="id" name="id" class="form-control" value="<?= $row['id_mahasiswa']; ?>"disabled>
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $row['id_mahasiswa']; ?>">
                <input type="text" id="name" name="name" class="form-control" value="<?= $row['nama']; ?>" placeholder="nama">
                <input type="text" id="nim" name="nim" class="form-control" value="<?= $row['nim']; ?>" placeholder="nim">
                <input type="number" id="presensi" name="presensi" class="form-control" value="<?= $row['presensi']; ?>" placeholder="presensi  10%"> 
                <input type="number" id="tugas" name="tugas" class="form-control" value="<?= $row['tugas']; ?>" placeholder="tugas 25%"> 
                <input type="number" id="uts" name="uts" class="form-control" value="<?= $row['uts']; ?>" placeholder="uts 30%">
                <input type="number" id="uas" name="uas" class="form-control" value="<?= $row['uas']; ?>" placeholder="uas 35%"> 
                <button type="submit" class="btn btn-warning" name="update">Edit</button>
            </form>
            <a href="viewData.php">Lihat Data</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
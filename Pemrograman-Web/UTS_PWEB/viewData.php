<?php
    require_once('conn.php');

    // select data
    $select = "SELECT * FROM nilai_mahasiswa";
    $result2 = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Data Nilai Mahasiswa</title>
</head>
<body>
    
    <div class="view-contents">
        <div class="container">

            <h1>Data Nilai Mahasiswa</h1>
            
            <?php if($row = mysqli_num_rows($result2)) :?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Presensi</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php while($row = mysqli_fetch_assoc($result2)) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['id_mahasiswa'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['nim'] ?></td>
                            <td><?= $row['presensi'] ?></td>
                            <td><?= $row['tugas'] ?></td>
                            <td><?= $row['uts'] ?></td>
                            <td><?= $row['uas'] ?></td>
                            <td>
                                <a href="formupdate.php?id=<?= $row['id_mahasiswa']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?= $row['id_mahasiswa']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php endif ; ?>
            <a href="index.php">kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
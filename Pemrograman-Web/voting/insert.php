<?php 
    require 'conn.php';

    $nama = $_POST['nama'];
    $vote = $_POST['vote'];

    $sql = "INSERT INTO tes_array (nama, jumlah_vote) VALUES ('$nama', '$vote')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
    ?>
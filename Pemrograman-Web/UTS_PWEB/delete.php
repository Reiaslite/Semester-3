<?php

require_once('conn.php');

$id = $_GET['id'];
$delete = "DELETE FROM nilai_mahasiswa WHERE id_mahasiswa = $id";

if(mysqli_query($conn, $delete)) {
    header('Location: viewData.php');
} else {
    echo "data gagal terhapus";
};


?>
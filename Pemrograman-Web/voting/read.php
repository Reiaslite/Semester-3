<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read DataBase</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        require 'conn.php';
        require 'array.php';
        $sql = "SELECT * FROM tes_array";
        $query = mysqli_query($conn, $sql);
    ?>
    <!-- Data DB -->
    <table>
        <h2>Data Vote (Belum Disorting)</h2>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Jumlah Vote</td>
        </tr>
        <?php 
        if (mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jumlah_vote']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        

    </table>
    <hr>
    <table>
        <h2>Data Vote (Disorting)</h2>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Jumlah Vote</td>
        </tr>
        <?php
            foreach ($arr as $arrs){
                $sorted = $arrs['jumlah_vote'];
                $query2 = mysqli_query($conn, "SELECT * FROM tes_array WHERE jumlah_vote = '$sorted'");
                while($baris = mysqli_fetch_assoc($query2)){ ?>
                     <tr>
                         <td><?= $baris['id']; ?></td>
                         <td><?= $baris['nama']; ?></td>
                         <td><?= $baris['jumlah_vote']; ?></td>
                     </tr>
        <?php } }?>
    </table>

</body>
</html>
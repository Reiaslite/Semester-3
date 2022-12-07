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

    <?php 
    $arr = array();
    if (mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            array_push($arr, $row['jumlah_vote']);
        }
    }

    function bubble_sort($arr) {
        $size = count($arr)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($arr[$k] < $arr[$j]) {
                    // Swap elements at indices: $j, $k
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                }
            }
        }
        return $arr;
    }
    
    $arr = bubble_sort($arr);
    ?>
    <?php
    if($arr > 0){
        while($rows = $arr){
            echo $rows;
        }
    }
    ?>

</body>
</html>
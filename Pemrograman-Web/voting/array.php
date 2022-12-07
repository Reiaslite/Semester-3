<?php 
    require 'conn.php';
    $sql = "SELECT * FROM tes_array";
    $query = mysqli_query($conn, $sql);
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

    print("Before sorting");
    print_r($arr);
    echo "<br/>";

    $arr = bubble_sort($arr);
    print("After sorting by using bubble sort");
    print_r($arr);
    echo "<br/>";

    foreach ($arr as $arrs) {
        echo $arrs;
    }
?>
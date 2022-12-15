<?php 
    require 'conn.php';
    $query = "SELECT * FROM tes_array";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // sequential array
    $result = $stmt->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    // die();
    
    // $query = mysqli_query($conn, $sql);
    // $res = mysqli_fetch_array($query);
    // print_r($res)
    
    // $arr = array();
    // if (mysqli_num_rows($query) > 0){
    //     while($row = mysqli_fetch_assoc($query)){
    //         array_push($arr, $row['jumlah_vote']);
    //     }
    // } S

    function bubble_sort($arr) {
        $size = count($arr)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($arr[$k]['jumlah_vote'] < $arr[$j]['jumlah_vote']) {
                    // Swap elements at indices: $j, $k
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                }
            }
        }
        return $arr;
    }
    $arr = bubble_sort($rows);
    print("Before sorting");
    print_r($arr);
    echo "<br/>";

    $arr = bubble_sort($rows);
    print("After sorting by using bubble sort");
    print_r($arr);
    echo "<br/>";
    
    foreach ($rows as $row) {
        echo $row['jumlah_vote'];
    }
    
    echo "<br/>";
    foreach($arr as $row){
        echo $row['jumlah_vote'];
    }
?>
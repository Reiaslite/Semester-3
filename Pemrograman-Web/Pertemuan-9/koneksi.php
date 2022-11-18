<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "mahasiswa";

    $sql = mysqli_connect($servername, $username, $password, $db);

    if(!$sql){
        echo "Connection Error";
    } else {
        echo "Connection Success";
    };

?>
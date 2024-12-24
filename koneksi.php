<?php

$koneksi = mysqli_connect ("localhost", "root", "", /*"your_database"*/);

if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
    }else {
        echo "";
    }

?>

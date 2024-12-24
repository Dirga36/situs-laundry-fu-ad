<?php

$koneksi = mysqli_connect ("localhost", "root", ""/* <--stands for password for MySQL */, "");

if(mysqli_connect_errno()){
    echo "koneksi database gagal: " . mysqli_connect_error();
    }else {
        echo "CONNECTED";
    }
?>

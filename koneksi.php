<?php

$koneksi = mysqli_connect ("localhost","root","","laundry_fu'ad");

if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
    }else {
        echo "";
    }

?>
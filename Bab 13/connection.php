<?php 

    $mysqli = new mysqli("localhost", "root", "", "toko");


    if($mysqli -> connect_errno){
        echo "Gagal menyambungan ke MySQL:" . $mysqli -> connect_errno;
        exit();
    }

<?php 

$mysqli = new mysqli("localhost", "root", "", "coba_sekolah");

// check connection

if ($mysqli->connect_errno) {
    echo "Gagal Menyambungkan ke MySQL:" . $mysqli->connect_error;
    exit();
}

?>
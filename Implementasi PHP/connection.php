<?php

// $mysqli = new mysqli("localhost", "root", "", "toko");


// if ($mysqli->connect_errno) {
//     echo "Gagal menyambungan ke MySQL:" . $mysqli->connect_error;
//     exit();
// }
session_start();
error_reporting(~E_NOTICE);

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'toko';
$koneksi = mysqli_connect($host, $user, $password, $dbname);

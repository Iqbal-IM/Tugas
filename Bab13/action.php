<?php

require_once("connection.php");


$error = 0;

if (isset($_POST['nama_barang'])) $nama = $_POST['nama_barang'];
else $error = 1;

if (isset($_POST['harga'])) $harga = $_POST['harga'];
else $error = 1;

if ($error == 1) {
    echo "Terjadi kesalahan pada proses input data";
    exit();
}


$query = "INSERT INTO tb_barang (nama_barang , harga) VALUES ('{$nama}', '{$harga}');";

$insert = mysqli_query($mysqli, $query);


if ($insert == false) {
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

<?php
require_once("connection.php");

// Mendapatkan NIS

$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "UPDATE tb_barang SET nama_barang='$nama', harga='$harga' WHERE id_barang='$_GET[id_barang]'");

header("location:index.php?");

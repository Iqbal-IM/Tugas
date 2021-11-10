<?php

require_once("connection.php");


$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO tb_barang (nama_barang, harga)
	VALUES ('$nama', '$harga')");



header("Location: index.php");

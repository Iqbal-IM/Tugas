<?php

require_once("connection.php");

$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];

mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang='$_GET[id_barang]'");

header("Location: index.php");

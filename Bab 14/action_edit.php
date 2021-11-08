<?php

require_once("connection.php");


if (isset($_POST["id_barang"])) $id = $_POST["id_barang"];
else {
    echo "ID Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}


if (isset($_POST['nama'])) $nama = $_POST['nama'];
if (isset($_POST['harga'])) $harga = $_POST['harga'];

$query = "
    UPDATE tb_barang SET 
        nama_barang = '{$nama}', 
        harga = '{$harga}' 
    WHERE id_barang = '{$id}'";

$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

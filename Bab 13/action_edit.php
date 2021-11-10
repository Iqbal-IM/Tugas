<?php
require_once("connection.php");

// Mendapatkan NIS

if (isset($_POST["id_barang"])) $id = $_POST["id_barang"];
else {
    echo "NIS tidak ditemukan! <a href='index.php'>kembali</a>";
    exit();
}


if (isset($_POST['nama_barang'])) $nama = $_POST['nama_barang'];
if (isset($_POST['harga'])) $harga = $_POST['harga'];



// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE tb_barang SET
        nama_barang = '{$nama}',
        harga = '{$harga}'
    WHERE id_barang = '{$id}'";



// Mengesekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
if ($insert === false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

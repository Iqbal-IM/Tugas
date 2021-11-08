<?php

require_once("connection.php");

require_once("session_check.php");

if ($sessionStatus == false) {
    header("Location: index.php");
}

if (isset($_GET["id_barang"])) $id = $_GET["id_barang"];
else {
    echo "ID Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

$query = "DELETE FROM tb_barang WHERE id_barang = '{$id}'";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    exit("Gagal menghapus data");
}
header("Location: index.php");

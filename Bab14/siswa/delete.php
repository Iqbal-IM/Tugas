<?php

require_once("connection.php");

//Mendapatkan Data barang
if (isset($_GET["nis"])) $nis = $_GET["nis"];
else {
    echo "NIS tidak ditemukan <a href='index.php'>Kembali</a>";
    exit();
}


//Query get data barang
$query = "DELETE FROM siswa WHERE nis = '{$nis}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if (!$result) {
    exit("Gagal menghapus data!");
}

header("Location: index.php");

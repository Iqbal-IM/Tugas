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

// Mengambil data File Upload
$files = $_FILES['gambar'];
$path = "penyimpanan/";

// Menangani File Upload
if (!empty($files['name'])) {
    $filpath = $path . $files['name'];
    $upload = move_uploaded_file($files["tmp_name"], $filpath);
} else {
    $filpath = "";
    $upload = false;
}

// Menyiapkan Error saat Mengupload
if ($upload != true && $filpath != "") {
    exit("Gagal Mengupload File <a a href='form_barang.php'>Kembali</a>");
}

$query = "INSERT INTO tb_barang (nama_barang , harga, gambar) VALUES ('{$nama}', '{$harga}', '{$filpath}');";

$insert = mysqli_query($mysqli, $query);


if ($insert == false) {
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

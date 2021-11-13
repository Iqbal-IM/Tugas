<?php

require_once("connection.php");


if (isset($_POST["id_barang"])) $id = $_POST["id_barang"];
else {
    echo "ID Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

$query = "SELECT * FROM tb_barang WHERE id_barang = '{$id}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $toko) {
    $gambar = $toko["gambar"];
    $nama = $toko["nama_barang"];
    $harga = $toko["harga"];
}


if (isset($_POST['nama_barang'])) $nama = $_POST['nama_barang'];
if (isset($_POST['harga'])) $harga = $_POST['harga'];

$files = $_FILES['gambar'];
$path = "penyimpanan/";

// Menangani File Upload
if (!empty($files['name'])) {
    $filepath = $path . $files["name"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ($upload) {
        unlink($gambar);
    }
} else {
    $filepath = $gambar;
    $upload = false;
}


if ($upload != true && $filepath != $gambar) {
    exit("Gagal Mengupload File <a href='form_edit.php?id_barang={$id}'>Kembali</a>");
}

$query = "
    UPDATE tb_barang SET 
        nama_barang = '{$nama}', 
        harga = '{$harga}',
        gambar = '{$filepath}',
WHERE id_barang = '{$id}'";

$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

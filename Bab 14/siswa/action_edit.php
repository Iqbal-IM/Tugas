<?php
require_once("connection.php");

// Mendapatkan NIS

if (isset($_POST["nis"])) $nis = $_POST["nis"];
else {
    echo "NIS tidak ditemukan! <a href='index.php'>kembali</a>";
    exit();
}


if (isset($_POST['nama'])) $nama = $_POST['nama'];
if (isset($_POST['gender'])) $gender = $_POST['gender'];
if (isset($_POST['address'])) $address = $_POST['address'];
if (isset($_POST['placeOfBirth'])) $placeOfBirth = $_POST['placeOfBirth'];
if (isset($_POST['dateOfBirth'])) $dateOfBirth = $_POST['dateOfBirth'];
if (isset($_POST['phone'])) $phone = $_POST['phone'];


// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    UPDATE siswa SET
        nama = '{$nama}',
        jk = '{$gender}',
        alamat = '{$address}',
        tmp_lahir = '{$placeOfBirth}',
        tgl_lahir = '{$dateOfBirth}',
        telefon = '{$phone}'
    WHERE nis = '{$nis}'";



// Mengesekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
if ($insert === false) {
    echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
}

<?php

if (isset($_POST["submit"])) {


    $name = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
}

?>

<html>

<head>
    <title>Action PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div id="profile">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8">

                    <h4>Nama Barang = <?= $name ?></h4>
                    <h4>Merk = <?= $merk ?></h4>
                    <h4>Jenis = <?= $jenis ?></h4>
                    <h4>Deskripsi = <?= $deskripsi ?></h4>
                    <h4>Harga = <?= $harga ?></h4>
                    <h4>Stok = <?= $stok ?></h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php

require_once("connection.php");

require_once("session_check.php");

if ($sessionStatus == false) {
    header("Location: index.php");
}

$error = 0;


if (isset($_GET["id_barang"])) $id = $_GET["id_barang"];
else echo "Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";

$query = "SELECT * FROM tb_barang WHERE id_barang = '{$id}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $toko) {
    $gambar = $toko["gambar"];
    $nama = $toko["nama_barang"];
    $harga = $toko["harga"];
}

?>


<html>

<head>
    <title>Form Edit</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2-lg-0">
                    <li class="nav-item">
                        <a href="" class="navlink" aria-current="page">Daftar Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <form action="action_edit.php" method="POST" enctype="multipart/form-data">
                        <?php if (!is_null($gambar) && !empty($gambar)) : ?>
                            <div class="form-group mb-2">
                                <img src="<?= $gambar ?>" class="preview" style="height:120px; width:120px;" />
                                <a href="hapus_foto.php?id_barang=<?= $id ?>">Hapus Gambar</a>
                            </div>
                        <?php endif; ?>
                        <div class="form-group mb-2">
                            <label for="gambar">Gambar</label>
                            <input id="gambar" name="gambar" class="form-control" type="file" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama">Nama Barang</label>
                            <input id="nama" name="nama_barang" class="form-control" value="<?= $nama ?>" type="text" placeholder="Nama Barang" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="harga">Harga</label>
                            <input id="harga" name="harga" class="form-control" value="<?= $harga ?>" type="number" placeholder="Harga" required>
                        </div>
                        <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>


</html>
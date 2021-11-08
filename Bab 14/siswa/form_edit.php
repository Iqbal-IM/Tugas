<?php

// Pemanggilan File Koneksi
require_once("connection.php");

require_once("session_check.php");

if ($sessionStatus == false) {
    header("Location: index.php");
}


// Status tidak Error 
$error = 0;

// Mendapatkan  Data NIS
if (isset($_GET["nis"])) $nis = $_GET["nis"];
else echo "NIS tidak ditemukan <a href='index.php>Kembali</a>'";

$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";
$result = mysqli_query($mysqli, $query);


foreach ($result as $siswa) {

    $nis  = $siswa["nis"];
    $nama = $siswa["nama"];
    $address = $siswa["alamat"];
    $placeOfBirth = $siswa["tmp_lahir"];
    $dateOfBirth = $siswa["tgl_lahir"];
    $phone = $siswa["telefon"];

    $maleChecked = " ";
    $femaleChecked = " ";

    if ($siswa["jk"] == "L") {
        $maleChecked = "checked";
    } elseif ($siswa["jk"] == "P") {
        $femaleChecked = "checked";
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Form</title>
</head>

<body>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <form action="action_edit.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="nis">NIS</label>
                            <input id="nis" value="<?= $nis ?>" class="form-control" type="text" name="nis" placeholder="Nomer Induk Siswa" readonly>
                        </div>

                        <div class="form-group mb-2">
                            <label for="nama">Nama</label>
                            <input id="nama" value="<?= $nama ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" <?= $maleChecked ?> type="radio" name="gender" id="male" value="L" required>
                                <label class="form-check-label" for="male">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" <?= $femaleChecked ?> type="radio" name="gender" id="female" value="P" required>
                                <label class="form-check-label" for="female">Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control" id="address" rows="3" required><?= $address ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tmpt_lahir">Tempat Lahir</label>
                            <input id="tmpt_lahir" value="<?= $placeOfBirth ?>" class="form-control" type="text" name="placeOfBirth" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input id="tgl_lahir" value="<?= $dateOfBirth ?>" class="form-control" type="date" name="dateOfBirth" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="telefon">Telefon</label>
                            <input id="phone" value="<?= $phone ?>" class="form-control" type="text" name="phone" placeholder="Nomor Telefon/Handphone" />
                        </div>
                        <input name="submit" type="submit" class="btn btn-primary" value="Kirim" />


                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
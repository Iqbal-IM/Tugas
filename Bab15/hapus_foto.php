
<?php

require_once("connection.php");

if (isset($_GET["id_barang"])) $id_barang = $_GET["id_barang"];
else {
    echo "ID Tidak Diemukan! <a href='index.php'>Kembali</a>";
    exit();
}

$query = "SELECT * FROM tb_barang WHERE id_barang = '{$id_barang}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $toko) {
    $gambar = $toko["gambar"];
}

if (!is_null($gambar) && !empty($gambar)) {
    $remove = unlink($gambar);

    if ($remove) {

        $query = "UPDATE tb_barang SET gambar = NULL WHERE id_barang = '{$id_barang}'";

        $insert = mysqli_query($mysqli, $query);
    }
}

header("Location: form_edit.php?id_barang={$id_barang}");

?>
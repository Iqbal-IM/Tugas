<?php
require_once("connection.php");

$query = "SELECT * FROM tb_barang";
$result = mysqli_query($mysqli, $query);


?>



<html>

<head>
    <title>PHP dan MySQL</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirm_delete() {
            return confirm("Anda Yakin?");
        }
    </script>
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
                        <a href="" class="nav-link active" aria-current="page">Daftar Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="list-barang" style="margin-top: 20px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2>Daftar Barang</h2>
                </div>
                <div class="col text-end">
                    <a href="form_barang.php" class="btn btn-primary" role="button">Tambah Barang</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $i = 1;
                            foreach ($result as $data) {
                                echo '<tr>
                                <th scope="row">' . $i++ . '</th>
                                <td>' . $data["nama_barang"] . '</td>
                                <td>' . $data["harga"] . '</td>
                                <td>
                                    <a href="form_edit.php?id_barang=' . $data["id_barang"] . '" class="btn btn-info">Edit</a>
                                    <a href="delete.php?id_barang=' . $data["id_barang"] . '" onclick="return confirm_delete()" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>';
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
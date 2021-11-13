<?php

$artikel = array(
    (object) array(
        "judul" => "Fakta Mengejutkan Mumi-mumi Tertua di China",
        "gambar" => "gambar/artikel1.jpg",
        "text" => "Sebuah studi DNA yang dilakukan peneliti China, Amerika, 
        dan Eropa menunjukkan fakta mengejutkan mengenai 13 mumi tertua di China, 
        yang tadinya dianggap sebagai nenek moyang."
    ),
    (object) array(
        "judul" => "Pelaku UMKM Perlu Tahu, Ini Bedanya Dagang dan Bisnis",
        "gambar" => "gambar/artikel2.jpg",
        "text" => "Para pelaku UMKM, tahukah ada perbedaan antara dagang dan bisnis? 
        Keduanya memang sama-sama melakukan kegiatan menjual barang atau jasa."
    ),
    (object) array(
        "judul" => "Keindahan Alam Indonesia",
        "gambar" => "gambar/artikel3.jpg",
        "text" => "Pantai Pink Lombok merupakan salah satu destinasi wisata di Lombok 
        Timur yang makin populer karena memiliki keindahan alam dan keunikan pasirnya yang berwarna merah muda."
    ),
    (object) array(
        "judul" => "Target Produksi Motor Listrik Gesits 200 Unit per Hari",
        "gambar" => "gambar/artikel4.jpg",
        "text" => "Wika Industri Manufaktur (Wima) mengklaim sanggup memproduksi motor listrik Gesits sebanyak 200 unit per hari."
    ),
    (object) array(
        "judul" => "Kisah Penyelam Temukan Harta Sriwijaya Miliaran Rupiah",
        "gambar" => "gambar/artikel5.jpg",
        "text" => "Penyelam asal Pulau Kemaro, Palembang, Sumatera Selatan bernama Asmadi (26) membagi kisahnya 
        saat menemukan harta karun milik Kerajaan Sriwijaya bernilai miliaran rupiah dari dasar Sungai Musi."
    ),
    (object) array(
        "judul" => "Ilmuwan Temukan Planet Baru di Tata Surya dan Mudah Diamati",
        "gambar" => "gambar/artikel6.jpg",
        "text" => "Tim ilmuwan yang dipimpin Universitas Hawaii menemukan salah satu planet termuda yang 
        pernah ditemukan. Planet ini baru terbentuk dan dapat diamati secara langsung."
    ),
);

$slide = array(
    (object) array(
        "gambarslide" => "gambar/gambar2.jpg",
    ),
    (object) array(
        "gambarslide" => "gambar/gambar3.jpg",
    ),
    (object) array(
        "gambarslide" => "gambar/gambar4.jpg",
    ),

);

?>
<html>

<head>
    <title>Foreach</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!--navbar brand-->
            <a class="navbar-brand" href="#">
                <img src="gambar/logo1.png" />

            </a>

            <!--navbar toggler-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--navbar collapse-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!--carousel indicator-->

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <!--carousel indicator-->

            <!--carousel inner-->

            <div class="carousel-inner">
                <?php $i = 0;
                foreach ($slide as $sr) { ?>
                    <?php if ($i == 0) {
                        $set_ = 'active';
                    } else {
                        $set_ = '';
                    } ?>
                    <div class='carousel-item <?php echo $set_; ?>' style="height: 500px; width: 800px;">
                        <img src='<?= $sr->gambarslide ?>'>
                        <div class="carousel-caption">
                            <!-- <h5><?= $sr->judulslide ?></h5>
                            <p><?= $sr->textslide ?></p> -->
                        </div>
                    </div>
                <?php $i++;
                } ?>


            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>


    <div id="features" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar Koding harus Teliti dan Disiplin</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar Koding harus Teliti dan Disiplin</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar Koding harus Teliti dan Disiplin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($artikel as $data) { ?>
                    <div class="col col-3">

                        <div class="card mb-3">
                            <img src="<?= $data->gambar ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data->judul ?></h5>
                                <p class="card-text"><?= $data->text ?></p>
                                <p clas="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                    </div>

                <?php } ?>


            </div>

        </div>
    </div>

</body>

</html>
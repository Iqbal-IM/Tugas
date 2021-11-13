<?php

$elektronik = (object)[
    'nama' => 'Laptop',
    'merk' => 'Asus',
    'harga' => 6000000,
    'spek' => [
        'ram' => '4 GB',
        'cpu' => 'intel i5',
        'layar' => '14 inch'
    ]
];

$elektronik->spek = (object)$elektronik->spek;

echo "<pre>";
print_r($elektronik);
echo "<pre>";

$kendaraan = (object)[
    'nama' => 'Motor',
    'merk' => 'Scoopy',
    'warna' => 'Hitam',
    'keluaran' => [
        'baru' => 'Tahun 2020',
        'lama' => 'Tahun 2015'
    ]
];

$kendaraan->keluaran = (object)$kendaraan->keluaran;

echo "<pre>";
print_r($kendaraan);
echo "<pre>";

$penginapan = (object)[
    'nama' => 'Hotel',
    'kelas' => 'Bintang 4',
    'harga' => [
        'vip' => '2000000 / Malam',
        'suite' => '4000000 / Malam'
    ]
];

$penginapan->harga = (object)$penginapan->harga;

echo "<pre>";
print_r($penginapan);
echo "<pre>";

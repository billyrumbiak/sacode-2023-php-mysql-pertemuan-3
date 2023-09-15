<?php
    // Kata Selamat Datang
    $welcome = 'Selamat Datang';

    // nama saya
    $nama = 'Billy';

    // Keterangan
    $keterangan = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati minus qui dignissimos sapiente dolor molestias voluptates! Molestias at totam voluptatum.';

    // copyright
    $copyright = 'Copyright by Billy';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaCode PHP - Pertemuan 3</title>
</head>
<body>
    <!-- Echo Fungsinya Untuk Menampilkan Variabel yang Tong sudah Buat -->
    <h1> <?= $welcome .' '. $nama ?> </h1>

    <p> <?= $keterangan ?> </p>

    <p> <?= $copyright ?></p>
    
</body>
</html>
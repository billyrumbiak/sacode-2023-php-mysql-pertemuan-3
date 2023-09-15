<?php

    // string
    $string = "Tipe Data String digunakan untuk menampilkan karakter";

    $namaDepan = "Billy";
    $namaBelakang = "Rumbiak";
    $alamat = "Pemda III Kotaraja";

    // integer/int
    $x = 7;
    $y = 4;

    $tambah = $x + $y;
    $kurang = $x + $y;
    $kali = $x * $y;
    $bagi = $x / $y;

    // float
    $pecahan = 14.8;
    $pecahan_dua  = 21.2;

    // boolean
    $satu = true;
    $nol = false;

    // Lakukan Operasi Boolean && || == 
    $and = $satu && $nol;

    $or = $satu || $nol;

    // Tipe Data null
    $r = ' ';
    $r = null;

    // Tipe Data Array
    $nama = array('Billy' , 'Samuel' , 'Acho')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Tipe Data String -->
    <p> <?= $string ?></p>
    <p> Nama Saya <?= $namaDepan .' '. $namaBelakang .' '. $alamat ?> alamat saya. </p>

    <br>
    <br>

    <!-- Tipe Data Integer -->
    <p> <?= $x ?> + <?= $y ?> = <?= $tambah ?></p>
    <p> <?= $x ?> - <?= $y ?> = <?= $kurang ?></p>
    <p> <?= $x ?> * <?= $y ?> = <?= $kali ?></p>
    <p> <?= $x ?> / <?= $y ?> = <?= $bagi ?></p>

    <br>
    <br>

    <!-- Tipe Data Float -->
    <p> <?= $pecahan ?></p>
    <p> <?= $pecahan_dua ?></p>

    <br>
    <br>

    <!-- Tipe Data Boolean -->
    <p>
        <?= var_dump($and) ?>
    </p>
    <p>
        <?= var_dump($or) ?>
    </p>

    <br>
    <br>

    <!-- Tipe Data Null -->
    <p>
        <?= var_dump($r) ?>
    </p>

    <br>

    <!-- Tipe Data Array -->
    <p><?= $nama [0] ?></p>

    <br>

    <!-- Perulangan -->
    <?php 
        foreach($nama as $n) :
    ?>
    <p> <?= $n ?></p>
    <?php endforeach; ?>
    
</body>
</html>
<?php

$datsis = [
    "siswa1" => ["mickel", "Bandung", "Bandung, 04 Agustus 2009", "087546485648", "Futsal", "mickel@gmail.com"],
    "siswa2" => ["leido", "Surabaya", "Surabaya, 12 Januari 1995", "085546485648", "Bermain", "leido@gmail.com"],
    "siswa3" => ["junior", "Solo", "Solo, 11 Oktober 1998", "087946485648", "Game", "junior@gmail.com"],
    "siswa4" => ["messi", "Jakarta", "Jakarta, 5 Mei 1996", "081234567890", "Basket", "messi@gmail.com"],
    "siswa5" => ["neymar", "Bogor", "Bogor, 10 Juni 1997", "082345678901", "Renang", "neymar@gmail.com"],
    "siswa6" => ["ronaldo", "Depok", "Depok, 15 Juli 1998", "083456789012", "Membaca", "ronaldo@gmail.com"],
    "siswa7" => ["lamine", "Bekasi", "Bekasi, 20 Agustus 1997", "084567890123", "Menari", "lamine@gmail.com"],
    "siswa8" => ["cubarsi", "Semarang", "Semarang, 25 September 1996", "085678901234", "Sepak bola", "cubarsi@gmail.com"],
    "siswa9" => ["pedri", "Cibolerang", "Cibolerang, 3 Maret 1998", "086789012345", "Memancing", "pedri@gmail.com"],
    "siswa10" => ["rodri", "Malang", "Malang, 8 April 1997", "087890123456", "Bermain musik", "rodri@gmail.com"]
];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>

<body>

<h2>Data Siswa</h2>

<table border="1" cellpadding="8" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat,Tanggal Lahir</th>
        <th>No. HP</th>
        <th>Hobi</th>
        <th>Email</th>
    </tr>

    <?php
    $no = 1;

    foreach ($datsis as $siswa) {
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $siswa[0]; ?></td>
        <td><?= $siswa[1]; ?></td>
        <td><?= $siswa[2]; ?></td>
        <td><?= $siswa[3]; ?></td>
        <td><?= $siswa[4]; ?></td>
        <td><?= $siswa[5]; ?></td>
    </tr>

    <?php
    }
    ?>

</table>

</body>
</html>
<?php

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// queri mhs berdasarkan id
$m = query("SELECT *FROM mahasiswa WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li>
      <img src="img/<?= $m['gambar']; ?>" width="200" alt="">
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><a href="">Ubaha</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali Ke daftar mahasiswa</a></li>
    </li>
  </ul>
</body>

</html>
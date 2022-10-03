<?php 
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(5);
$lingkaran2 = new Lingkaran(10);
$persegi = new PersegiPanjang(10, 5);
$persegi2 = new PersegiPanjang(5, 5);
$segitiga = new Segitiga(10, 5, 4);
$segitiga2 = new Segitiga(5, 2, 4);
$ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

$bentuk2d = [$segitiga, $segitiga2, $persegi, $persegi2, $lingkaran];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kumpulan Bidang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center">Kumpulan Bidang 2D</h1>
    <table class="table">
  <thead>
    <tr>
    <?php
        foreach($ar_judul as $judul){
        ?>
        <th><?= $judul?></th>
        <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($bentuk2d as $bentuk){
    ?>
    <tr>
      <td><?= $no++?> </td>
      <td><?= $bentuk->namaBidang()?></td>
      <td><?= $bentuk->Keterangan()?></td>
      <td><?= $bentuk->luasBidang()?></td>
      <td><?= $bentuk->kelilingBidang()?></td>
      <td></td>
      <td></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
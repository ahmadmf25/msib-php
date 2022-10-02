<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('011','Mohammed Salah','Asisten Manager','Islam','Menikah');
$cr7 = new Pegawai('007','Cristiano','Manager','Kristen','Menikah');
$leo = new Pegawai('010','Lionel','Manager','Kristen','Menikah');
//dst ...
//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$cr7->mencetak();
$leo->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;
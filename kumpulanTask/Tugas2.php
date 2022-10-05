<?php
//array scalar
$m1 = ['NIM'=>'001', 'Nama'=>'Apel', 'Nilai'=>100];
$m2 = ['NIM'=>'002', 'Nama'=>'Asep', 'Nilai'=>80];
$m3 = ['NIM'=>'003', 'Nama'=>'Belimbing', 'Nilai'=>70];
$m4 = ['NIM'=>'004', 'Nama'=>'Bangkuang', 'Nilai'=>80];
$m5 = ['NIM'=>'005', 'Nama'=>'Cerry', 'Nilai'=>90];
$m6 = ['NIM'=>'006', 'Nama'=>'Andin', 'Nilai'=>80];
$m7 = ['NIM'=>'007', 'Nama'=>'Deni', 'Nilai'=>60];
$m8 = ['NIM'=>'008', 'Nama'=>'Gilang', 'Nilai'=>77];
$m9 = ['NIM'=>'009', 'Nama'=>'Putu', 'Nilai'=>50];
$m10 = ['NIM'=>'0010', 'Nama'=>'Galang', 'Nilai'=>90];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
//array associative
$mahasiswas = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

// Agregate Function
$jumlah_siswa = count($mahasiswas);
$jml_n = array_column($mahasiswas,'Nilai');
$total_n = array_sum($jml_n);
$max_n = max($jml_n);
$min_n = min($jml_n);
$rata2 = $total_n / $jumlah_siswa;

// Keterangan
$keterangan = [
  'Jumlah Mahasiswa'=> $jumlah_siswa,
  'Nilai Tertinggi' => $max_n,
  'Nilai Terendah' => $min_n,
  'Rata-Rata' => $rata2
];
?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h3>Nilai Mahasiswa</h3>
    <table class="table table-striped">
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
            foreach($mahasiswas as $mahasiswa){
            $nilai = $mahasiswa['Nilai'];
            $ket = ($nilai >= 60) ? 'Lulus' : 'Tidak Lulus';

            if ($nilai >= 80 && $nilai <= 100) {
                $grade = 'A';
            }
            elseif ($nilai >= 60 && $nilai < 80) {
                $grade = 'B';
            }
            elseif ($nilai >= 40 && $nilai < 60) {
                $grade = 'C';
            }
            elseif ($nilai >= 20 && $nilai < 40) {
                $grade = 'D';
            }
            elseif ($nilai >= 0 && $nilai < 20) {
                $grade = 'E';
            }
            else {
                $grade = '';
            }
            switch ($grade) {
                case 'A':
                    $predikat = 'Memuaskan';
                    break;
                case 'B':
                    $predikat = 'Bagus';
                    break;
                case 'C':
                    $predikat = 'Baik';
                    break;
                case 'D':
                    $predikat = 'Kurang';
                    break;
                case 'E':
                    $predikat = 'Buruk';
                    break;
                
                default:
                    $predikat = '';
                    break;
            }
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $mahasiswa['NIM'] ?></td>
            <td><?= $mahasiswa['Nama'] ?></td>
            <td><?= $mahasiswa['Nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
          </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <?php
          foreach ($keterangan as $ket => $hasil) {
          ?>
          <tr>
            <th colspan="6"><?= $ket ?></th>
            <th><?= $hasil ?></th>
          </tr>
          <?php } ?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
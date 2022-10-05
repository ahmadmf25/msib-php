<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<h1 align="center">FORM DATA PEGAWAI</h1>
<div class="container px-5 my-5">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaPegawai">Nama Pegawai</label>
            <input class="form-control" type="text" name="nama" placeholder="Nama Pegawai" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block" name="jabatan">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manager" type="radio" value="Manager" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asisten" type="radio" value="Asisten" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kabag" type="radio" value="Kabag" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" value="Staff" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select class="form-select" id="agama" name="agama" aria-label="New Field 7">
                <option value="Islam">Islam</option>
                <option value="Katholik">Katholik</option>
                <option value="Protestan">Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Budhha">Budhha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block" name="status">Status Pernikahan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" type="radio" value="sudah" name="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="belumMenikah" type="radio" value="belum" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
            <input class="form-control" id="jumlahAnak" name ="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submit" name="submit" type="submit">Submit</button>
        </div>
    </form>
    <?php
    error_reporting(0);
        //tangkap request
        $name = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $agama = $_POST['agama'];
        $status = $_POST['status'];
        $anak = $_POST['jumlahAnak'];
        $submit = $_POST['submit'];
        
        // Gaji yang didapat
        
        switch ($jabatan) {
            case 'Manager':
                $gaji_pokok = 20000000;
                break;
            case 'Asisten':
                $gaji_pokok = 15000000;
                break;
            case 'Kabag':
                $gaji_pokok = 10000000;
                break;
            case 'Staff':
                $gaji_pokok = 4000000;
                break;
            default:
                $gaji_pokok = 0;
        }

        // Tunjangan Jabatan
        $tunjangan = $gaji_pokok * 0.2;

        // Tunjangan Keluarga

        if ($status == 'sudah' && $anak >=1 && $anak <= 2) $tunjangan_keluarga = $gaji_pokok * 0.5;
        else if ($status == 'sudah' && $anak >= 3 && $anak <= 5) $tunjangan_keluarga = $gaji_pokok * 0.1;
        else if ($status == 'sudah' && $anak >= 6) $tunjangan_keluarga = $gaji_pokok * 0.15;
        else if ($status == 'belum') $tunjangan_keluarga = 0;

        $gaji_kotor = $gaji_pokok + $tunjangan + $tunjangan_keluarga;

        // Zakat Profesi
        $zakat_profesi = $agama == "Islam" && $gaji_kotor >= 6000000 ? 0.025 * $gaji_kotor : 0;

        // Take Home Pay
        $thp = $gaji_kotor - $zakat_profesi;
        ?>
        <div class="border border-secondary rounded  bg-light">
            <h3 class="text-center">Tabel Gaji Pegawai</h3>
            <div class=>
                <table class="table table-hover table-striped-columns">
                    <tr class="table-success">
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Agama</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan Jabatan</th>
                        <th>Tunjangan Keluarga</th>
                        <th>Gaji Kotor</th>
                        <th>Zakat Profesi</th>
                        <th>Take Home Pay</th>
                    </tr>
                    <?php if (isset($submit)) : ?>
                    <tr class="table-secondary">
                        <td><?= $name; ?></td>
                        <td><?= $jabatan; ?></td>
                        <td><?= $agama; ?></td>
                        <td>Rp. <?= $gaji_pokok ?></td>
                        <td>Rp. <?= $tunjangan ?></td>
                        <td>Rp. <?= $tunjangan_keluarga ?></td>
                        <td>Rp. <?= $gaji_kotor?></td>
                        <td>Rp. <?= $zakat_profesi?></td>
                        <td>Rp. <?= $thp?></td>
                        </tr>
                    <?php endif ?>
                </table>
            </div>
        </div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
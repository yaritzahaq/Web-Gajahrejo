<?php

require 'functions.php';

$mampu = query("SELECT * FROM mampu ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $mampu = cariPembuatMampu($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="top-shadow"></div>
    <div class="inner-page">
        <div class="slider-item" style="background-image: url('images/bg_admin.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                        <h1 class="pt-5"><span>Daftar calon pembuat surat keterangan tidak mampu</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END slider -->

    <section class="section blog">
        <div class="container">
            <form action="" method="post">
                <div class="form-group row font-weight-bold text-uppercase">
                    <h5 class="col-sm-12">Mencari data pembuat surat keterangan tidak mampu</h5>
                    <input type="text" class="col-sm-6" placeholder="Masukkan keyword . . ." name="keyword" id="keyword" autocomplete="off">
                    <button type="submit" class="col-sm-1 btn btn-success" name="cari">Cari</button>
                </div>
            </form>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>No Bukti</th>
                        <th>Nama</th>
                        <th>Tempat tanggal lahir</th>
                        <th>Pekerjaan</th>
                        <th>Status</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Tanggal Pengambilan</th>
                        <th>Cetak Surat</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <!-- foreach digunakan  pengulangan khusus untuk array -->
                <tbody>
                    <?php foreach ($mampu as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["tempat_lahir"] ?> , <?= $row["tgl_lahir"] ?></td>
                            <td><?= $row["pekerjaan"] ?></td>
                            <td><?= $row["status_perkawinan"] ?></td>
                            <td><?= $row["tgl_buat"] ?></td>
                            <td><?= $row["tgl_ambil"] ?></td>
                            <td><a href="cetak_mampu.php?id=<?= $row["id"]; ?>" target="_blank" i class="fas fa-print text-info fa-2x"></i></a></td>
                            <td><a href="hapus.php?id=<?= $row["id"]; ?>&hapus=mampu" onclick="return confirm('Mau dihapus ?')"><i class="fas fa-trash text-danger fa-2x"></i></a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
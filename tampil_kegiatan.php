<?php

require 'functions.php';

$artikel = query("SELECT * FROM kegiatan ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $artikel = cariPembuatKegiatan($_POST["keyword"]);
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
                        <h1 class="pt-5"><span>Daftar Kegiatan Desa</span></h1>
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
                    <h5 class="col-sm-12">Mencari Kegiatan Desa</h5>
                    <input type="text" class="col-sm-6" placeholder="Masukkan keyword . . ." name="keyword" id="keyword" autocomplete="off">
                    <button type="submit" class="col-sm-1 btn btn-success" name="cari">Cari</button>
                </div>
            </form>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Tempat Kegiatan</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <!-- foreach digunakan  pengulangan khusus untuk array -->
                <tbody>
                    <?php foreach ($artikel as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["judul"] ?></td>
                            <td><?= tgl_indo($row["tanggal"]); ?></td>
                            <td><?= $row["tempat"]; ?></td>
                            <td><a href="hapus.php?id=<?= $row["id"]; ?>&hapus=kegiatan1" onclick="return confirm('Mau dihapus ?')"><i class="fas fa-trash text-danger fa-2x"></i></a></td>
                            <td><a id="edit" class="edit ml10 " href="edit_kegiatan.php?id=<?= $row["id"]; ?>" title="edit" ><i class="glyphicon glyphicon-edit"></i></a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
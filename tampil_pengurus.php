<?php

require 'functions.php';

$pengurus = query("SELECT * FROM pengurus ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $pengurus = cariPengurus($_POST["keyword"]);
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
                        <h1 class="pt-5"><span>Daftar Pengurus Desa</span></h1>
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
                    <h5 class="col-sm-12">Mencari Pengurus Desa</h5>
                    <input type="text" class="col-sm-6" placeholder="Masukkan keyword . . ." name="keyword" id="keyword" autocomplete="off">
                    <button type="submit" class="col-sm-1 btn btn-success" name="cari">Cari</button>
                </div>
            </form>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tahun</th>
                        <th>No.SK</th>
                        <th>Jabatan</th>
                        <th>Gambar</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <!-- foreach digunakan  pengulangan khusus untuk array -->
                <tbody>
                    <?php foreach ($pengurus as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["tahun"]; ?></td>
                            <td><?= $row["nosk"] ?></td>
                            <td><?= $row["jabatan"]; ?></td>
                            <td><img style="max-width: 50px; min-width: 50px; min-height: 50px; max-height: 50px;" src="img/<?= $row["gambar"] ?>" alt="" class="img-fluid"></td>
                            <td><a href="hapus.php?id=<?= $row["id"]; ?>&hapus=pengurus1" onclick="return confirm('Mau dihapus ?')"><i class="fas fa-trash text-danger fa-2x"></i></a></td>
                            <td><a id="edit" class="edit ml10 " href="edit_pengurus.php?id=<?= $row["id"]; ?>" title="edit" ><i class="glyphicon glyphicon-edit"></i></a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
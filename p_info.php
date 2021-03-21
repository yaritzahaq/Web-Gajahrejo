<?php

// load 
require 'functions.php';

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahInfo($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil Membuat Profil Desa');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Membuat Profil Desa');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<body>
    <div class="top-shadow"></div>

    <div class="inner-page">
        <div class="slider-item" style="background-image: url('images/bg_admin.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                        <h1 class="pt-5"><span>Form Pembuatan Profil desa</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END slider -->
    <section class="section">
        <div class="container">
            <div class="col-12 text-center">
                <h2>Membuat Profil Desa</h2>
            </div>
            <br><br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row font-weight-bold text-uppercase">
                    <label for="judul" class="col-sm-2 col-form-label text-black">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" id="judul" oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Judul" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profil" class="col-sm-2 col-form-label text-black">Profil</label>
                    <div class="col-sm-10">
                        <!-- <input type="textarea" rows="10" cols="70" class="form-control" name="profil" id="profil" oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Profil" required autocomplete="off"> -->
                        <!-- <textarea name="profil" id="profil" cols="100" rows="10" style="width: 100%;" placeholder="Syarat Syarat Pelayanan"></textarea> -->
                        <textarea name="profil" id="summernote" placeholder="Tulis Profil Desa"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        $('#summernote').summernote({
            placeholder: 'Tuliskan profil desa',
            tabsize: 2,
            height: 100
        });
    </script>
</body>

</html>
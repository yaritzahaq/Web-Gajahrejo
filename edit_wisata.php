<?php

include 'functions.php';

$id = $_GET["id"];

$wisata = query("SELECT * FROM wisata WHERE id = $id");

if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $link = $_POST["link"];

    // query sql
    $query = "UPDATE wisata SET nama='$nama', link='$link' where id='$id'";
    $hasil=mysqli_query($conn, $query);
    
    header("location: admin.php?halaman=wisata1");

    //cek apakah data berhasil ditambahkan atau tidak
    if (editWisata($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil Mengedit Wisata');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Mengedit Wisata');
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Desa Gajahrejo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">


    <!-- include libraries(jQuery, bootstrap) -->

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
</head>

<body>

    <header role="banner" id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="admin.php">DESA GAJAHREJO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav pl-md-5 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="?halaman=artikel">Buat Artikel</a>
                                <a class="dropdown-item" href="?halaman=artikel1">Daftar Artikel</a>
                                <a class="dropdown-item" href="?halaman=info">Buat Profil</a>
                                <a class="dropdown-item" href="?halaman=info1">Daftar Profil</a>
                                <a class="dropdown-item" href="?halaman=kegiatan">Buat Kegiatan</a>
                                <a class="dropdown-item" href="?halaman=kegiatan1">Daftar Kegiatan</a>
                                <a class="dropdown-item" href="?halaman=wisata">Buat Wisata</a>
                                <a class="dropdown-item" href="?halaman=wisata1">Daftar Wisata</a>
                                <a class="dropdown-item" href="?halaman=produk">Buat Produk</a>
                                <a class="dropdown-item" href="?halaman=produk1">Daftar Produk</a>
                                <a class="dropdown-item" href="?halaman=potensi">Buat Potensi</a>
                                <a class="dropdown-item" href="?halaman=potensi1">Daftar Potensi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tampilkan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="?halaman=daftarktp">Daftar Pembuat KTP</a>
                                <a class="dropdown-item" href="?halaman=kk">Daftar Pembuat KK</a>
                                <a class="dropdown-item" href="?halaman=skck">Daftar Pembuat SKCK</a>
                                <a class="dropdown-item" href="?halaman=usaha">Daftar Pembuat Keterangan Usaha</a>
                                <a class="dropdown-item" href="?halaman=mampu">Daftar Pembuat Surat Tidak Mampu</a>
                                <a class="dropdown-item" href="?halaman=lahir">Daftar Pembuat Keterangan Lahir</a>
                                <a class="dropdown-item" href="?halaman=mati">Daftar Pembuat Keterangan Kematian</a>
                                <a class="dropdown-item" href="?halaman=nikah">Daftar Pembuat Belum Menikah</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengurus</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="?halaman=pengurus">Buat Pengurus Desa</a>
                                <a class="dropdown-item" href="?halaman=pengurus1">Daftar Pengurus Desa</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="?halaman=kritik">Kritik dan Saran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="top-shadow"></div>
    <div class="inner-page">
        <div class="slider-item" style="background-image: url('images/bg_admin.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                        <h1>Edit Wisata</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END slider -->
    <section class="section blog">
        <div class="container">
            <table class="table table-bordered text-center">
                
                <!-- foreach digunakan  pengulangan khusus untuk array -->
                <tbody>
                    <?php foreach ($wisata as $row) : ?>
                                    <form action="" method="post">
                <div class="form-group row font-weight-bold text-uppercase">
                    <label for="nama" class="col-sm-2 col-form-label text-black">nama</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $row['nama'];?>" type="text" name="nama">
                    </div>
                </div>
                <div class="form-group row font-weight-bold text-uppercase">
                    <label for="link" class="col-sm-2 col-form-label text-black">link</label>
                    <div class="col-sm-10">
                        <input value="<?php echo $row['link'];?>" type="text" name="link">
                    </div>
                </div>
                <div class="form-group row font-weight-bold text-uppercase">
                    <label for="gambar" class="col-sm-2 col-form-label text-black">gambar</label>
                    <div class="col-sm-10">
                        <img style="max-width: 250px; min-width: 250px; min-height: 250px; max-height: 250px;" src="img/<?= $row["gambar"] ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="row justify-content-center">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Save</button>
                </div>
            </form>                  
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
<script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
</body>

</html>


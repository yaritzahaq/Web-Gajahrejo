<?php
require 'functions.php';

$id = $_GET["id"];

$potensi = query("SELECT * FROM potensi WHERE id = $id");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Potensi Desa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .background {
            width: 100%;
            height: 154px;
            background-image: url('images/title.jpg');
            border-bottom: 10px solid black;
        }

        .halo img {
            max-width: 300px;
            max-height: 300px;
        }
    </style>

</head>

<body>
    <div class="background">
        <div class="logo">
                <h1>POTENSI DESA</h1>
        </div>
    </div>

    <?php foreach ($potensi as $row) : ?>
        <!-- <div class="backgroundd"> -->
        <div class="container">
            <div class="wrap">
                <div class="header align-content-stretch">
                    <h1 class="text-center"><?= $row["nama"]; ?></h1>
                    <h5 class="text-center">POTENSI DESA <?= tgl_indo($row["tanggal"]); ?></h5>
                </div>
                <div class="menu text-center">
                    <div class="halo">
                        <img src="img/<?= $row["gambar"]; ?>" alt="">
                    </div>
                </div>
                <div class="badan">
                    <?= $row["keterangan"]; ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- </div> -->
    <?php endforeach; ?>

<footer class="site-footer bg-light" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-5">
                    <h3>Tentang Gajahrejo</h3>
                    <p class="mb-5">Desa Gajahrejo terletak wilayah administrasi kecamatan Gedangan kabupaten Malang yang terdiri dari pemukiman penduduk, tanah perkebunan, dengan  luas wilayah desa 35.000,56 Ha. Wilayah Desa Gajahrejo terdiri dari 4 Dusun yaitu: Dusun Krajan, Dusun Sumberlele, Dusun Ardimulyo dan Dusun Bajulmati yang masing-masing dipimpin oleh  seorang Kepala Dusun. </p>
                    <ul class="list-unstyled footer-link d-flex footer-social">
                        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                    </ul>

                </div>
                <div class="col-md-5 mb-5 pl-md-5">
                    <h3>Desa Gajahrejo</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block">Alamat :</span>
                            <span>Gajahrejo, Gedangan, Malang, East Java</span></li>
                        <li class="d-block"><span class="d-block">Telephone:</span><span>0341-</span></li>
                        <li class="d-block"><span class="d-block">Email:</span><span>desa-gajahrejo@malangkab.go.id</span></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126310.23051193371!2d112.55709640671516!3d-8.38250099033735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd60270ddccf0f5%3A0x9363c3f444509d0e!2sGajahrejo%2C%20Gedangan%2C%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1615519106759!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        <i class="fa fa-heart" aria-hidden="true"></i> <span class="text-black">KKN UM GAJAHREJO 2021</span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
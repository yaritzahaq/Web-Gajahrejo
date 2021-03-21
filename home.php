<?php

require 'functions.php';

$artikel = query("SELECT * FROM artikel ORDER BY id DESC");
$wisata = query("SELECT * FROM wisata");
$potensi = query("SELECT * FROM potensi");
$produk = query("SELECT * FROM produk");
$info = query("SELECT * FROM info");

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahKritik($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil Membuat Kritik dan Saran');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Membuat Kritik dan Saran');
            </script>
        ";
    }
}
$kritik = query("SELECT * FROM kritik ORDER BY id DESC LIMIT 1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home-Desa Gajahrejo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <div class="top-shadow"></div>
  <!-- Slider atau tampilan Awal -->
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg1.jpg');">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-lg-7 text-center col-sm-12 element-animate">
            <h1 class="mb-4"><span>DESA GAJAHREJO</span></h1>
            <p class="mb-5 w-75">Selamat Datang di Website Desa Gajahrejo</p>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-item" style="background-image: url('images/bg2.jpg');">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-lg-7 text-center col-sm-12 element-animate">
            <h1 class="mb-4"><span>DESA GAJAHREJO</span></h1>
            <p class="mb-5 w-75">Desa Asri penuh wisata dan potensi</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="section blog">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2 class=" heading mb-4">BERITA DESA</h2>
          <p class="mb-5 lead">Baca Berita Harian Desa Gajahrejo, dapatkan berbagai informasi dan wawasan.</p>
        </div>
      </div>
      <div class="row">
        <?php foreach ($artikel as $row) : ?>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="lengkap.php?id=<?= $row["id"] ?>" class="mr-5"><img style="max-width: 200px; min-width: 200px; min-height: 200px; max-height: 200px;" src="img/<?= $row["gambar"] ?>" alt="" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta"><?= tgl_indo($row["tanggal"]) ?></span>
                <h3 class="mt-2 text-black"><a href="lengkap.php?id=<?= $row["id"] ?>" class="text-black"><?= $row["judul"] ?></a></h3>
                <p><a href="lengkap.php?id=<?= $row["id"] ?>" class="readmore text-black">Baca lanjut <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>POTENSI DESA</h2>
          <p class="mb-5 lead">Potensi desa adalah segenap sumber daya alam dan sumber daya manusia yang dimiliki desa sebagai modal dasar yang perlu dikelola dan dikembangkan bagi kelangsungan dan perkembangan desa.</p>
        </div>
      </div>
    </div>
  </div>
   <div class="container-fluid">
      <div class="row no-gutters">
       <?php foreach ($potensi as $row) : ?>
        <div class="col-md-4 element-animate">
          <a href="potensi.php?id=<?= $row["id"] ?>" class="link-thumbnail">
            <h3><?= $row["nama"] ?></h3>
            <span class="ion-plus icon"></span>
            <img src="img/<?= $row["gambar"] ?>" alt="Image" class="img-fluid">
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section border-t pb-0">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2 class=" heading mb-4">WISATA DESA</h2>
          <p class="mb-5 lead">Wisata Desa adalah suatu tempat yang teletak di kawasan Desa Gajahrejo dimana masyarakat baik dari daerah sekitar maupun daerah luas dapat melakukan kegiatan wisata</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">
       <?php foreach ($wisata as $row) : ?>
        <div class="col-md-4 element-animate">
          <a href="<?= $row["link"] ?>" class="link-thumbnail">
            <h3><?= $row["nama"] ?></h3>
            <span class="ion-plus icon"></span>
            <img src="img/<?= $row["gambar"] ?>" alt="Image" class="img-fluid">
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>SISKEUDES</h2>
          <p class="mb-5 lead">SISKEUDES berisikan aplikasi Sistem Keuangan Desa sebagai upaya mengawal transparansi pengelolaan keuangan desa.</p>
          <a href="http://siskeudes.malangkab.go.id/#/Main"><h6>Lihat SISKEUDES</h6></a>
        </div>
      </div>
    </div>
  </div>
  </section>

<section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>MONOGRAFI</h2>
          <p class="mb-5 lead">Monografi Desa Gajahrejo menyajikan himpunan data yang dilaksanakan oleh pemerintah desa yang tersusun secara sistematis dan terpadu dalam penyelenggaraan pemerintahan.</p>
          <a href="monografi.php"><h6>Lihat Monografi</h6></a>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="section border-t pb-0">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2 class=" heading mb-4">LAYANAN DESA</h2>
          <p class="mb-5 lead">Daftar pelayanan bagi penduduk Desa Gajahrejo.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-md-3 element-animate">
          <a href="?page=ktp" class="link-thumbnail">
            <h3>Pembuatan KTP</h3>
            <span class="ion-plus icon"></span>
            <img src="images/ktp.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=kk" class="link-thumbnail">
            <h3>Pembuatan Kartu Keluarga</h3>
            <span class="ion-plus icon"></span>
            <img src="images/kk.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=skck" class="link-thumbnail">
            <h3>Pembuatan Surat Pengantar SKCK</h3>
            <span class="ion-plus icon"></span>
            <img src="images/skck.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=lahir" class="link-thumbnail">
            <h3>Pembuatan Akta kelahiran</h3>
            <span class="ion-plus icon"></span>
            <img src="images/lahir.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=mati" class="link-thumbnail">
            <h3>Pembuatan Keterangan Kematian</h3>
            <span class="ion-plus icon"></span>
            <img src="images/mati.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=nikah" class="link-thumbnail">
            <h3>Pembuatan Surat Belum Menikah</h3>
            <span class="ion-plus icon"></span>
            <img src="images/nikah.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=usaha" class="link-thumbnail">
            <h3>Pembuatan Surat Izin Usaha</h3>
            <span class="ion-plus icon"></span>
            <img src="images/usaha.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
        <div class="col-md-3 element-animate">
          <a href="?page=mampu" class="link-thumbnail">
            <h3>Pembuatan Surat Keterangan Tidak Mampu</h3>
            <span class="ion-plus icon"></span>
            <img src="images/mampu.PNG" alt="Image" class="img-fluid">
          </a>
        </div>
      </div>
  </section>

<section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>PRODUK UNGGULAN DESA</h2>
          <p class="mb-5 lead">Berisi program dan kebijakan yang dicanangkan oleh Pemerintah untuk dilaksanakan antar Pemerintah Desa melalui mekanisme kerjasama Desa berkaitan dengan pembentukan dan pengembangan ekonomi Desa berbasis produk unggulan kawasan Perdesaan</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
      <div class="row no-gutters">
       <?php foreach ($produk as $row) : ?>
        <div class="col-md-4 element-animate">
          <a href="produk.php?id=<?= $row["id"] ?>" class="link-thumbnail">
            <h3><?= $row["nama"] ?></h3>
            <span class="ion-plus icon"></span>
            <img src="img/<?= $row["gambar"] ?>" alt="Image" class="img-fluid">
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- END section -->

  <!-- Contact -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-12 text-center">
          <div class="section-heading">
            <h2>Kritik Dan Saran</h2>
            <div class="heading-line"></div>
            <p>Untuk membangun desa yang baik dibutuhkan kontribusi dari masyarakat</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-12  text-center ">
          <div id="sendmessage">Kirim Pesanmu... Terimakasih</div>
          <br>
          <div class="justify-content-center">
            <form action="" method="post">
              <div class="col-md-offset col-md-12">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
              </div>
              <div class="col-md-offset-2 col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="kritik_saran" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Kritik dan Saran"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-12">
                  <button type="submit" class="btn btn-theme btn-lg btn-block" name="submit">Kirim</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>

</body>

</html>                                                           
-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2019 pada 05.02
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nik_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN','','') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `status_hubungan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `no_paspor` varchar(100) NOT NULL,
  `no_kitas` varchar(100) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(7, '2019-11-25', 'Desa Terbersih didunia', 'Prestasi Ngroto tersebut tidak dicapai dengan mudah. Pada 2014, Ngroto masih berstatus desa berkembang dengan nilai IDM 0,64. Butuh waktu empat tahun bagi desa ini untuk mengubah statusnya menjadi desa mandiri. â€™â€™Ini adalah hasil dari kerja keras bersama. Kuncinya adalah adanya sinergitas antara pemerintah desa dengan masyarakat. Dengan begitu, perencanaan yang kami buat bisa dilaksanakan sesuai harapan,â€ kata Kepala Desa Ngroto Prayogi.\r\n\r\nKetua Pelaksana Program Gerakan Penanggulangan Kemiskinan Pedesaan (GalangKesan) Nasrun Annahar mengatakan bahwa Ngroto termasuk salah satu dari tiga desa yang menjadi pilot project program penanggulangan kemiskinan di Kabupaten Malang.\r\n\r\nDua lainnya adalah Desa Urek-Urek yang terletak di Kecamatan Gondanglegi dan Desa Bantur, Kecamatan Bantur. Kelebihan utama Ngroto adalah desa ini menjadi contoh nasional dalam sistem pengelolaan sampah organik.\r\n\r\nPetugas desa sukses menyulap sampah menjadi kompos dan energi listrik. Ngroto dipilih menjalankan program tersebut oleh organisasi yang berbasis di Barcelona, Spanyol, United Cities and Local Governments Asia Pacific.\r\n\r\nSelain Ngroto ada satu desa lain di Indonesia yang menjalankan program serupa. Letaknya di Kota Jambi. â€™â€™Desa Ngroto ini dipilih karena keberhasilannya dalam menyelaraskan program pembangunan dengan kebutuhan masyarakat, khususnya di sektor pengentasan kemiskinan. Berdasarkan praktik baik tersebut, desa ini bisa jadi contoh bagi desa-desa yang lain,â€ ucap Nasrun yang merupakan alumnus Administrasi Publik Universitas Brawijaya tersebut.\r\n\r\nProgram GalangKesan lahir atas inisiatif Bappeda bersama Averroes Community, Malang, sebagai upaya dalam mengentaskan kemiskinan masyarakat desa. â€™â€™Sebelum semua desa melakukan gerakan penanggulangan kemiskinan. Ngroto dan dua desa lainnya akan menjadi contoh bagaimana desa yang pro-poor,â€ lanjut', '5ddbe6701b222.jpg'),
(8, '2019-11-28', 'Desa Sehat', 'cgdssfglwhg;', '5ddf3e3e54335.jpg'),
(9, '2019-11-28', 'art', '&lt;b&gt;Coba&lt;/b&gt; Coba', '5ddf437d48423.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `nama_kpl` varchar(300) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama_anak` varchar(300) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pukul` varchar(20) NOT NULL,
  `jenis_lahir` varchar(100) NOT NULL,
  `ke` varchar(5) NOT NULL,
  `penolong` varchar(100) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `nama_ibu` varchar(300) NOT NULL,
  `tgl_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `desa_ibu` varchar(100) NOT NULL,
  `kab_ibu` varchar(100) NOT NULL,
  `kec_ibu` varchar(100) NOT NULL,
  `prov_ibu` varchar(100) NOT NULL,
  `kewar_ibu` varchar(5) NOT NULL,
  `kebang_ibu` varchar(100) NOT NULL,
  `tgl_kawin` date NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tgl_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `desa_ayah` varchar(100) NOT NULL,
  `kab_ayah` varchar(100) NOT NULL,
  `kec_ayah` varchar(100) NOT NULL,
  `prov_ayah` varchar(100) NOT NULL,
  `kewar_ayah` varchar(5) NOT NULL,
  `kebang_ayah` varchar(100) NOT NULL,
  `nik_lapor` varchar(100) NOT NULL,
  `nama_lapor` varchar(100) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `jk_lapor` enum('L','P','','') NOT NULL,
  `pekerjaan_lapor` varchar(100) NOT NULL,
  `desa_lapor` varchar(100) NOT NULL,
  `kab_lapor` varchar(100) NOT NULL,
  `kec_lapor` varchar(100) NOT NULL,
  `prov_lapor` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama_kpl`, `no_kk`, `nama_anak`, `jk`, `tempat_lahir`, `hari`, `tgl_lahir`, `pukul`, `jenis_lahir`, `ke`, `penolong`, `berat`, `panjang`, `nik_ibu`, `nama_ibu`, `tgl_ibu`, `pekerjaan_ibu`, `desa_ibu`, `kab_ibu`, `kec_ibu`, `prov_ibu`, `kewar_ibu`, `kebang_ibu`, `tgl_kawin`, `nik_ayah`, `nama_ayah`, `tgl_ayah`, `pekerjaan_ayah`, `desa_ayah`, `kab_ayah`, `kec_ayah`, `prov_ayah`, `kewar_ayah`, `kebang_ayah`, `nik_lapor`, `nama_lapor`, `umur`, `jk_lapor`, `pekerjaan_lapor`, `desa_lapor`, `kab_lapor`, `kec_lapor`, `prov_lapor`, `tgl_buat`, `tgl_ambil`) VALUES
(1, 'As', 'As', 'As', 'L', 'As', 'As', '2019-11-16', '01 : 00', 'Tungal', '1', 'Dokter', 'Axa', 'Ax', 'Ax', 'Xa', '2019-11-09', 'Ax', 'Ax', 'Ax', 'Xa', 'Ax', 'Wni', 'Wni', '2019-11-10', 'Ax', 'Ax', '2019-11-03', 'Ax', 'Ax', 'Ax', 'Xa', 'Xa', 'Wni', 'Wni', 'Xa', 'Ax', '2019-', 'L', 'Xa', 'Ax', 'Xa', 'Ax', 'Xa', '2019-11-23', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
--

CREATE TABLE `kk` (
  `id` int(11) NOT NULL,
  `nama_kepala` varchar(300) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`id`, `nama_kepala`, `nik`, `alamat`, `rt`, `rw`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `telepon`, `jumlah`, `tgl_buat`, `tgl_ambil`) VALUES
(24, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 1, '2019-11-26', '2019-11-27'),
(25, 'A', 'A', 'A', 'AA', 'A', 'A', 'A', 'AA', 'A', 'AA', 'A', 2, '2019-11-26', '2019-11-27'),
(26, 'AHMAD', '111', 'SAMPANG', '01', '02', 'KEBUMEN', 'JAWA', 'TIMUR', 'JATIM', '6926', '081', 2, '2019-11-28', '2019-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mampu`
--

CREATE TABLE `mampu` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `agama` varchar(300) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `keperluan` varchar(300) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mampu`
--

INSERT INTO `mampu` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `keperluan`, `tgl_buat`, `tgl_ambil`) VALUES
(3, 'As', 'Sa', 'Sa', '2019-11-13', 'L', 'Islam', 'Belum kawin', 'Sa', 'Sa', 'Sa', 'Sa', 'Sa', 'As', 'As', '2019-11-23', '2019-11-25'),
(4, 'As', 'As', 'Sa', '2019-11-14', 'P', 'Islam', '', 'As', 'As', 'Sa', 'Sa', 'Sa', 'Sa', 'Sa', '2019-11-24', '2019-11-25'),
(5, 'As', 'As', 'As', '2019-11-08', 'L', 'Islam', '', 'Sa', 'As', 'Sa', 'Sa', 'Sa', 'Sa', 'Sa', '2019-11-24', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mati`
--

CREATE TABLE `mati` (
  `id` int(11) NOT NULL,
  `nama_lapor` varchar(300) NOT NULL,
  `nik_lapor` varchar(100) NOT NULL,
  `umur_lapor` varchar(10) NOT NULL,
  `pekerjaan_lapor` varchar(100) NOT NULL,
  `rt_lapor` varchar(5) NOT NULL,
  `rw_lapor` varchar(5) NOT NULL,
  `desa_lapor` varchar(100) NOT NULL,
  `kec_lapor` varchar(100) NOT NULL,
  `kab_lapor` varchar(100) NOT NULL,
  `hub` varchar(100) NOT NULL,
  `nama_mati` varchar(300) NOT NULL,
  `nik_mati` varchar(100) NOT NULL,
  `jk_mati` enum('L','P','','') NOT NULL,
  `tgl_mati` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `rt_mati` varchar(5) NOT NULL,
  `rw_mati` varchar(5) NOT NULL,
  `desa_mati` varchar(100) NOT NULL,
  `kec_mati` varchar(100) NOT NULL,
  `kab_mati` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tgl_kematian` date NOT NULL,
  `pukul` varchar(10) NOT NULL,
  `bertempat` varchar(100) NOT NULL,
  `penyebab` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mati`
--

INSERT INTO `mati` (`id`, `nama_lapor`, `nik_lapor`, `umur_lapor`, `pekerjaan_lapor`, `rt_lapor`, `rw_lapor`, `desa_lapor`, `kec_lapor`, `kab_lapor`, `hub`, `nama_mati`, `nik_mati`, `jk_mati`, `tgl_mati`, `agama`, `rt_mati`, `rw_mati`, `desa_mati`, `kec_mati`, `kab_mati`, `hari`, `tgl_kematian`, `pukul`, `bertempat`, `penyebab`, `bukti`, `tgl_buat`, `tgl_ambil`) VALUES
(1, 'Sa', 'Sasas', 'Sa', 'As', 'As', 'As', 'SAS', 'Asa', 'Ssa', 'Sasas', 'Assa', 'As', 'L', '2019-11-15', 'Islam', 'Asa', 'Sas', 'ASA', 'Sa', 'S', 'Sas', '2019-11-09', 'Sas', 'A', 'Sasas', 'A', '2019-11-24', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nikah`
--

CREATE TABLE `nikah` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `pekerjaan` varchar(300) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `keperluan` varchar(300) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skck`
--

CREATE TABLE `skck` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `keperluan` varchar(300) NOT NULL,
  `keterangan` text NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skck`
--

INSERT INTO `skck` (`id`, `nama`, `jenis_kelamin`, `agama`, `status`, `nik`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `keperluan`, `keterangan`, `mulai`, `selesai`, `tgl_buat`, `tgl_ambil`) VALUES
(6, 'Sa', 'L', 'Islam', 'Belum kawin', 'Sas', 'Sasa', '2019-11-16', 'Sa', 'Sa', '0', 'Sa', 'As', 'As', 'As', 'As', '2019-11-23', '2019-12-23', '2019-11-23', '2019-11-25'),
(7, 'Sa', 'L', 'Islam', 'Belum kawin', 'As', 'Sa', '2019-11-03', 'Sa', 'Sa', '0', 'As', 'Sa', 'As', 'As', 'Sa', '2019-11-23', '2019-12-23', '2019-11-23', '2019-11-25'),
(8, 'As', 'L', 'Kristen', 'Cerai Hidup', 'As', 'Sa', '2019-11-21', 'Sa', 'Sa', '0', 'Sa', 'Sa', 'Sa', 'As', 'Sa', '2019-11-23', '2019-12-23', '2019-11-23', '2019-11-25'),
(9, 'As', 'L', 'Islam', 'Kawin', 'As', 'Sa', '2019-11-14', 'As', 'Sa', 'Sas', 'As', 'Sa', 'Sa', 'Mohon skck ke polsek trenggalek', 'Ornag tersebut benar benar baik', '2019-11-24', '2019-12-24', '2019-11-24', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `rt` varchar(8) NOT NULL,
  `rw` varchar(8) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `nama_usaha` varchar(300) NOT NULL,
  `keperluan` varchar(300) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `jenis_kelamin`, `agama`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `jenis_usaha`, `nama_usaha`, `keperluan`, `tgl_buat`, `tgl_ambil`) VALUES
(2, 'Sassa', 'Saas', '2019-11-09', 'Sasa', 'L', 'Islam', 'Sasa', 'Assa', 'Asas', 'Asas', 'Assa', 'Assa', 'Asas', 'Assa', 'Assasasasas', '2019-11-23', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rianari', '1234'),
(2, 'coworasavanila', '1234'),
(3, 'sitifatimah', '1234'),
(4, 'riza', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `no_nik` varchar(100) NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(300) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nama`, `no_nik`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `kewarganegaraan`, `pekerjaan`, `status_perkawinan`, `rt`, `rw`, `desa`, `kecamatan`, `tgl_buat`, `tgl_ambil`, `keterangan`) VALUES
(32, 'As', 'Sas', 'Sas', '2019-11-10', 'L', 'Islam', 'WNI', 'Sasa', 'Belum kawin', 'As', 'As', 'Sa', 'Sa', '2019-11-23', '2019-11-25', ''),
(33, 'Asd', 'Asd', 'Asd', '222222-04-12', 'L', 'Islam', 'WNI', 'Weqweqwe', 'Belum kawin', '12', '12', 'Qwer', 'Arwe', '2019-11-23', '2019-11-25', ''),
(35, 'Rizki Akmalludin', '12345', 'Malang', '2019-11-13', 'L', 'Islam', 'WNI', 'Pengangguran sukses', 'Kawin', '12', '34', 'Aing', 'Trenggalek', '2019-11-23', '2019-11-25', ''),
(36, 'Vishnu adisaka', '300631234', 'Tangerang', '1999-05-22', 'L', 'Islam', 'WNI', 'Mahasiswa', 'Belum kawin', '002', '008', 'Aing', 'Klojen', '2019-11-24', '2019-11-25', ''),
(37, '', '', '', '', '', '', '', '', '', 'A', 'A', 'A', 'A', '2019-11-25', '2019-11-26', ''),
(38, 'Siti fatimah', '3264542565353732', 'Lamongan', '2019-11-16', 'P', 'Islam', 'WNI', 'Mahasiswa', 'Belum kawin', '03', '01', 'Aing', 'Jabodetabek', '2019-11-28', '2019-11-29', ''),
(39, 'Sembarang', '1234', 'Malang', '2019-11-28', 'L', 'Islam', 'WNI', 'Wiraswasta', 'Belum kawin', '01', '02', 'Babatan', 'Pakis', '2019-11-28', '2019-11-29', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mampu`
--
ALTER TABLE `mampu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mati`
--
ALTER TABLE `mati`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `mampu`
--
ALTER TABLE `mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mati`
--
ALTER TABLE `mati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `skck`
--
ALTER TABLE `skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

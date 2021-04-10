-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 07:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `anggota`
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

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nik`, `nama`, `nik_anggota`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `status_hubungan`, `kewarganegaraan`, `no_paspor`, `no_kitas`, `ayah`, `ibu`) VALUES
(1, '3', 'E', '3', 'LAKI-LAKI', 'E', '2021-04-01', 'ISLAM', 'D', 'D', 'KAWIN', 'KEPALA KELUARGA', 'WNI', '3', '3', 'F', 'F'),
(2, '3', 'F', '5', 'LAKI-LAKI', 'G', '2021-04-02', 'ISLAM', 'G', 'G', 'KAWIN', 'ISTERI', 'WNI', '5', '5', 'G', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(18, '2021-03-18', 'Gajahrejo', '&lt;p style=&quot;margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;&quot;&gt;&lt;b&gt;Gajahrejo&lt;/b&gt;&amp;nbsp;adalah sebuah desa di wilayah Kecamatan&amp;nbsp;&lt;a href=&quot;https://id.wikipedia.org/wiki/Gedangan,_Malang&quot; title=&quot;Gedangan, Malang&quot; style=&quot;color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Gedangan&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;https://id.wikipedia.org/wiki/Kabupaten_Malang&quot; title=&quot;Kabupaten Malang&quot; style=&quot;color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Kabupaten Malang&lt;/a&gt;, Provinsi&amp;nbsp;&lt;a href=&quot;https://id.wikipedia.org/wiki/Jawa_Timur&quot; title=&quot;Jawa Timur&quot; style=&quot;color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Jawa Timur&lt;/a&gt;. Luas desa ini adalah 15.149.000&amp;nbsp;&lt;a href=&quot;https://id.wikipedia.org/wiki/Meter_persegi&quot; title=&quot;Meter persegi&quot; style=&quot;background: none rgb(255, 255, 255); color: rgb(6, 69, 173);&quot;&gt;m&lt;sup style=&quot;line-height: 1; font-size: 11.2px;&quot;&gt;2&lt;/sup&gt;&lt;/a&gt;, tetapi 3.750.000 di antaranya merupakan lahan kritis. Desa ini terletak pada ketinggian 500 meter dari permukaan laut. 64% wilayah desa merupakan daratan, sementara 36% sisanya merupakan daerah perbukitan.&amp;nbsp;&lt;/p&gt;', '6053d7c6a5616.jpg'),
(19, '2021-03-18', 'Gajahrejo888', '<p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\"><b>Gajahrejo</b> adalah sebuah desa di wilayah Kecamatan <a href=\"https://id.wikipedia.org/wiki/Gedangan,_Malang\" title=\"Gedangan, Malang\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Gedangan</a>, <a href=\"https://id.wikipedia.org/wiki/Kabupaten_Malang\" title=\"Kabupaten Malang\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kabupaten Malang</a>, Provinsi <a href=\"https://id.wikipedia.org/wiki/Jawa_Timur\" title=\"Jawa Timur\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Jawa Timur</a>. Luas desa ini adalah 15.149.000 <a href=\"https://id.wikipedia.org/wiki/Meter_persegi\" title=\"Meter persegi\" style=\"background: none rgb(255, 255, 255); color: rgb(6, 69, 173);\">m<sup style=\"line-height: 1; font-size: 11.2px;\">2</sup></a>, tetapi 3.750.000 di antaranya merupakan lahan kritis. Desa ini terletak pada ketinggian 500 meter dari permukaan laut. 64% wilayah desa merupakan daratan, sementara 36% sisanya merupakan daerah perbukitan. </p>', '6053d849e9e19.jpg'),
(23, '2021-03-30', 'kjmhnbgvfcvfffffffffff', '<p>l,kmjnhbgvvbnmk,l.;l,kmnbvfvvvvvvvvvvv</p>', ''),
(24, '2021-03-27', 'kjmhnbgvfc', '', ''),
(25, '2021-03-30', 'sdfgh111111111111111ddddddd', '<p>dddddd</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', 'cb916ce1f783fde7cf2bc845167a675b33acd979r1-1337-1000_hq.gif'),
(26, '2021-04-19', 'asssssssssfffffffff', '<p>fffffffffffffffffffffffdddddddgggg</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `profil` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `profil`) VALUES
(13, 'dsvdhsd', '<p>fefeee</p>'),
(14, 'dsvdhsdssssssssssss', '<p>nnnnnnnnnnnnnn</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(300) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `tanggal`, `tempat`, `isi`, `gambar`) VALUES
(1, 'kjhgfd', '2021-03-11', 'tempat', 'isi', 'gambar'),
(2, 'gfdsasdfgh', '2021-03-16', 'tempat', 'isi', 'gambar'),
(3, 'hg11', '2021-03-09', 'gvfcwwww', 'vfchgbggggggggggggggggggggg', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
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
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama_kpl`, `no_kk`, `nama_anak`, `jk`, `tempat_lahir`, `hari`, `tgl_lahir`, `pukul`, `jenis_lahir`, `ke`, `penolong`, `berat`, `panjang`, `nik_ibu`, `nama_ibu`, `tgl_ibu`, `pekerjaan_ibu`, `desa_ibu`, `kab_ibu`, `kec_ibu`, `prov_ibu`, `kewar_ibu`, `kebang_ibu`, `tgl_kawin`, `nik_ayah`, `nama_ayah`, `tgl_ayah`, `pekerjaan_ayah`, `desa_ayah`, `kab_ayah`, `kec_ayah`, `prov_ayah`, `kewar_ayah`, `kebang_ayah`, `nik_lapor`, `nama_lapor`, `umur`, `jk_lapor`, `pekerjaan_lapor`, `desa_lapor`, `kab_lapor`, `kec_lapor`, `prov_lapor`, `tgl_buat`, `tgl_ambil`) VALUES
(2, 'Vfd', '543', 'Rgvf', 'L', 'Gf', 'Gfr', '2021-04-05', '00 : 00', 'Tungal', '1', 'Dokter', '54', '43', '543', 'Gf', '2021-04-13', 'Gvf', 'Fd', 'Cfd', 'Gf', 'Fd', 'Wni', 'Wni', '2021-04-06', '543', 'Gfr', '2021-04-08', 'Gvf', 'Fd', 'Gf', 'F', 'Fd', 'Wni', 'Wni', '65', 'G', '2021-', 'L', 'G', 'G', 'G', 'G', 'B', '2021-04-07', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
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
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id`, `nama_kepala`, `nik`, `alamat`, `rt`, `rw`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `telepon`, `jumlah`, `tgl_buat`, `tgl_ambil`) VALUES
(28, 'YOGI', '3213', 'SDFSF', '5', '7', 'GAJAHREJO', 'GEDANGAN', 'MALANG', 'JAWA TIMUR', '12131', '123123', 1, '2021-03-19', '2021-03-22'),
(29, 'JHGF', '765', 'HGF', '675', '544', 'HGF', 'GFD', 'GF', 'GFD', '543', '54', 5, '2021-03-28', '2021-03-29'),
(30, 'SDFGHYUJ', '6543', 'YTR', '5', '6', 'H', 'H', 'H', 'H', '54', 'J', 2, '2021-04-07', '2021-04-08'),
(31, 'D', '3', 'F', '3', '3', 'F', 'F', 'F', 'F', '3', '3', 3, '2021-04-07', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kritik_saran` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mampu`
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
-- Dumping data for table `mampu`
--

INSERT INTO `mampu` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `keperluan`, `tgl_buat`, `tgl_ambil`) VALUES
(7, 'L,kmj', 'Iu', '.m', '2021-03-13', 'L', 'Islam', 'Belum kawin', ',,kmj', '7', '65', 'Hg', 'Hbg', 'Hb', 'Hbg', '2021-03-20', '2021-03-22'),
(8, 'Frgtyh', '654', 'G', '2021-04-14', 'L', 'Islam', 'Belum kawin', 'Gfd', '4', '3', 'Fd', 'Fd', 'Gfvr', 'Fer', '2021-04-09', '2021-04-12'),
(9, 'Grt', '123', 'F', '2021-04-06', 'L', 'Islam', 'Belum kawin', 'G', '3', '3', 'G', 'G', 'G', 'G', '2021-04-09', '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `mati`
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
  `tgl_ambil` date NOT NULL,
  `kk_mati` int(100) NOT NULL,
  `no_kk` int(100) NOT NULL,
  `jk_lapor` enum('L','P','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mati`
--

INSERT INTO `mati` (`id`, `nama_lapor`, `nik_lapor`, `umur_lapor`, `pekerjaan_lapor`, `rt_lapor`, `rw_lapor`, `desa_lapor`, `kec_lapor`, `kab_lapor`, `hub`, `nama_mati`, `nik_mati`, `jk_mati`, `tgl_mati`, `agama`, `rt_mati`, `rw_mati`, `desa_mati`, `kec_mati`, `kab_mati`, `hari`, `tgl_kematian`, `pukul`, `bertempat`, `penyebab`, `bukti`, `tgl_buat`, `tgl_ambil`, `kk_mati`, `no_kk`, `jk_lapor`) VALUES
(3, 'Kjhg', '876', '76', 'Hg', '766', '76', 'JNHB', 'Jnhb', 'Nhbg', 'Hbg', 'Hbg', 'Yt', 'L', '2021-03-04', 'Islam', '6', '65', 'NB', 'Hbgv', 'Gvf', 'Gf', '2021-03-06', '654', 'Hgf', 'Gf', 'Gf', '2021-03-20', '2021-03-22', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `nikah`
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

--
-- Dumping data for table `nikah`
--

INSERT INTO `nikah` (`id`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jk`, `pekerjaan`, `agama`, `kewarganegaraan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `keperluan`, `tgl_buat`, `tgl_ambil`) VALUES
(1, 'Jh', '87', 'Nb', '2021-03-03', 'L', 'Mn', 'Islam', 'Mkjnhb', '76', '876', 'Kmjn', 'Jnh', 'Jnh', 'Jnh', '2021-03-20', '2021-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `nosk` varchar(300) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `tahun`, `nosk`, `jabatan`, `gambar`) VALUES
(4, 'Siswoyo111', '12-11-2019', '111111111188.45/1657/KEP/35.07.013/2019', 'kadesss', '60537146654ce.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id`, `nama`, `keterangan`, `gambar`) VALUES
(4, 'xcfgh', '<p>jhgfds</p>', '6055ab80abed6.jpg'),
(5, 'ergh111', '<p>wertyujio111111111111111111111111111111</p>', '6055ad01ec109.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `keterangan`, `gambar`) VALUES
(1, 'fghjk', '<p>jhgfds</p>', '60560af02efc7.jpg'),
(2, 'erfty', '<p>kjhgfds</p>', '6056ae080252c.jpg'),
(3, 'rghjkl', '<p>lllllkjhgfd</p>', '6056ae14ef468.jpg'),
(4, 'rghjkl11111', '<p>lllllkjhgfdxcfvghjkl;lkjhghjkl</p>', '6056ae8e6a0b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skck`
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
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck`
--

INSERT INTO `skck` (`id`, `nama`, `jenis_kelamin`, `agama`, `status`, `nik`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `keperluan`, `mulai`, `selesai`, `tgl_buat`, `tgl_ambil`, `kewarganegaraan`) VALUES
(10, 'Jhgf', 'L', 'Islam', 'Belum kawin', '765432', 'Hgfds', '2021-03-05', 'Hgf', '765', '765', 'Jhgf', 'Gfd', 'Gvfc', 'Vc', '2021-03-20', '2021-04-19', '2021-03-20', '2021-03-22', ''),
(11, 'Kjhngb', 'L', 'Islam', 'Belum kawin', '65', 'Hg', '2021-03-03', 'Hbgv', '54', '54', 'Gf', 'Gf', 'Gf', 'R', '2021-03-28', '2021-04-27', '2021-03-28', '2021-03-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `rt` varchar(8) NOT NULL,
  `rw` varchar(8) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `keperluan` varchar(300) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(200) NOT NULL,
  `tempat_usaha` varchar(500) NOT NULL,
  `tahun` int(100) NOT NULL,
  `pemasaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `ktp`, `jenis_kelamin`, `agama`, `pekerjaan`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `jenis_usaha`, `keperluan`, `tgl_buat`, `tgl_ambil`, `status`, `kewarganegaraan`, `tempat_usaha`, `tahun`, `pemasaran`) VALUES
(4, 'Hgfr', 'Tgrfd', '2021-03-29', '543', 'L', 'Islam', 'G', '4', '4', 'Gf', 'Fd', 'D', 'Ds', 'D', '2021-04-07', '2021-04-08', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gajahrejo', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
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
  `keterangan` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `propinsi` varchar(200) NOT NULL,
  `keperluan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `no_nik`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `kewarganegaraan`, `pekerjaan`, `status_perkawinan`, `rt`, `rw`, `desa`, `kecamatan`, `tgl_buat`, `tgl_ambil`, `keterangan`, `alamat`, `kabupaten`, `propinsi`, `keperluan`) VALUES
(40, 'Jhgfd', '87654', 'Kjhngbfd', '2021-03-03', 'L', 'Islam', 'WNI', 'Kjhgfd', 'Belum kawin', '76', '87', 'Jnhb', 'Njhbg', '2021-03-28', '2021-03-29', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `link`, `gambar`) VALUES
(2, 'Pantai Jelangkungnnnn', 'https://blog.rosihanari.net/script-php-untuk-mengedit-data-via-form/', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mampu`
--
ALTER TABLE `mampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mati`
--
ALTER TABLE `mati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mampu`
--
ALTER TABLE `mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mati`
--
ALTER TABLE `mati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skck`
--
ALTER TABLE `skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

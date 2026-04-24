-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2026 pada 08.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting_tritech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `kandidat_id` int(11) NOT NULL,
  `kandidat_kode` varchar(255) NOT NULL,
  `kandidat_nama` varchar(255) NOT NULL,
  `kandidat_tentang` text NOT NULL,
  `kandidat_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`kandidat_id`, `kandidat_kode`, `kandidat_nama`, `kandidat_tentang`, `kandidat_foto`) VALUES
(2, '1', 'ari ', '<p><strong>DATA PERORANGAN</strong></p>\r\n\r\n<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ari</p>\r\n\r\n<p>Tempat Tgl Lahir&nbsp;&nbsp;&nbsp;&nbsp; : Kumai 27 Maret 1975</p>\r\n\r\n<p>Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Islam</p>\r\n\r\n<p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Amin Jaya Kec.Pangkalan Banteng<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kabupaten Kotawaringin Barat Kalteng</p>\r\n\r\n<p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kepala Desa</p>\r\n\r\n<p>Pendidikan Trakhir&nbsp; : S2</p>\r\n\r\n<p><strong>PENGALAMAN ORGANISASI</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Sekdes Amin Jaya 2003 S/D 2005</li>\r\n	<li>Ketua KNPI Kecamatan Pangkalan Banteng 2006 S/D 2014</li>\r\n	<li>Kepala Desa 2008 s/d 20014</li>\r\n	<li>Wakil Ketua Asosiasi Kepala Desa Se Kecamatan Pangkalan Banteng 2011 S/D 2014</li>\r\n	<li>Anggota Korwil IMI Kotawaringin Barat 2012 S/D Sekarang</li>\r\n	<li>Anggota PERBAKIN Kotawaringin Barat 2015 S/D Sekarang</li>\r\n	<li>Kepala Desa 2014 sekarang</li>\r\n</ul>\r\n\r\n<p><strong>PELATIHAN</strong></p>\r\n\r\n<ul>\r\n	<li>Pelatihan Skau Dinas kehutanan KOBAR</li>\r\n	<li>Pelatihan Aparatur pemerintah Desa</li>\r\n	<li>Dilkat PMKS Dinas Sosial Banjarmasin</li>\r\n	<li>Bintek pemetaan Fak Geografi UGM Jogjakarta</li>\r\n	<li>Pelatihan bidang berburu Perbakin angkatan 13 Semarang</li>\r\n</ul>\r\n', 'ari.jpg'),
(3, '3', 'Bagus', '<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bagus</p>\r\n\r\n<p>Tempat Tgl Lahir&nbsp;&nbsp;&nbsp;&nbsp; : Kumai 2 Agustus 1995</p>\r\n\r\n<p>Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Islam</p>\r\n\r\n<p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Amin Jaya Kec.Sneznaya</p>\r\n\r\n<p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Pedagang mainan</p>\r\n', '1303727919_IMG20220317152736.jpg'),
(7, '2', 'Fery nenggolan', '<p><strong>DATA PERORANGAN</strong></p>\r\n\r\n<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Fery nenggolan</p>\r\n\r\n<p>Tempat Tgl Lahir&nbsp;&nbsp;&nbsp;&nbsp; : Kumai 2 Agustus 1995</p>\r\n\r\n<p>Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Islam</p>\r\n\r\n<p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Amin Jaya Kec.Pangkalan Banteng<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kabupaten Kotawaringin Barat Kalteng</p>\r\n\r\n<p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Petani</p>\r\n\r\n<p>Pendidikan Trakhir&nbsp; : S1</p>\r\n\r\n<p><strong>PENGALAMAN ORGANISASI</strong></p>\r\n\r\n<ul>\r\n	<li>Sekdes Amin Jaya 2003 S/D 2005</li>\r\n	<li>Ketua KNPI Kecamatan Pangkalan Banteng 2006 S/D 2014</li>\r\n	<li>Kepala Desa 2008 s/d 20014</li>\r\n	<li>Wakil Ketua Asosiasi Kepala Desa Se Kecamatan Pangkalan Banteng 2011 S/D 2014</li>\r\n	<li>Anggota Korwil IMI Kotawaringin Barat 2012 S/D Sekarang</li>\r\n	<li>Anggota PERBAKIN Kotawaringin Barat 2015 S/D Sekarang</li>\r\n</ul>\r\n\r\n<p><strong>PELATIHAN</strong></p>\r\n\r\n<ul>\r\n	<li>Pelatihan Skau Dinas kehutanan KOBAR</li>\r\n	<li>Pelatihan Aparatur pemerintah Desa</li>\r\n	<li>Dilkat PMKS Dinas Sosial Banjarmasin</li>\r\n	<li>Bintek pemetaan Fak Geografi UGM Jogjakarta</li>\r\n	<li>Pelatihan bidang berburu Perbakin angkatan 13 Semarang</li>\r\n	<li>Pelatihan Komputer</li>\r\n</ul>\r\n', 'feri.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `pemilih_id` int(11) NOT NULL,
  `pemilih_nis` varchar(255) NOT NULL,
  `pemilih_kelas` varchar(255) NOT NULL,
  `pemilih_nama` varchar(255) NOT NULL,
  `pemilih_jk` varchar(10) NOT NULL,
  `pemilih_username` varchar(255) NOT NULL,
  `pemilih_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`pemilih_id`, `pemilih_nis`, `pemilih_kelas`, `pemilih_nama`, `pemilih_jk`, `pemilih_username`, `pemilih_password`) VALUES
(308, 'R.0148.21', 'X-RX1', 'DAYA FIKRI SIREGAR', 'Laki-Laki', 'R014821', 'R014821'),
(309, 'R.0153.21', 'X-RX1', 'FADIL ALI AUFA', 'Laki-Laki', 'R015321', 'R015321'),
(310, 'R.0155.21', 'X-RX1', 'FAUZIAH', 'Perempuan', 'R015521', 'R015521'),
(311, 'R.0156.21', 'X-RX1', 'FIRDA NABILAH', 'Perempuan', 'R015621', 'R015621'),
(312, 'R.0157.21', 'X-RX1', 'FIYAZ ANDIRA', 'Laki-Laki', 'R015721', 'R015721'),
(313, 'R.0159.21', 'X-RX1', 'GILANG PRASETYA', 'Laki-Laki', 'R015921', 'R015921'),
(314, 'R.0162.21', 'X-RX12', 'IMAM MAULANA 12', 'Perempuan', 'R016221', 'R016221'),
(315, 'R.0164.21', 'X-RX1', 'KHOIRUNNISA', 'Perempuan', 'R016421', 'R016421'),
(316, 'R.0168.21', 'X-RX1', 'M. QORY AL FATTAH', 'Laki-Laki', 'R016821', 'R016821'),
(317, 'R.0169.21', 'X-RX1', 'M. REYHAN AL FATHIR', 'Laki-Laki', 'R016921', 'R016921'),
(318, 'R.0170.21', 'X-RX1', 'MAULANA HAIKAL HUTASUHUT', 'Laki-Laki', 'R017021', 'R017021'),
(319, 'R.0173.21', 'X-RX1', 'MUHAMMAD NADHIF NUGRAHA', 'Laki-Laki', 'R017321', 'R017321'),
(320, 'R.0174.21', 'X-RX1', 'MUHAMMAD RAIHAN', 'Laki-Laki', 'R017421', 'R017421'),
(321, 'R.0178.21', 'X-RX1', 'NADILA SHAMIMI', 'Perempuan', 'R017821', 'R017821'),
(322, 'R.0179.21', 'X-RX1', 'NAFIL RIZQTRIANTO', 'Laki-Laki', 'R017921', 'R017921'),
(323, 'R.0180.21', 'X-RX1', 'OBED MICHAEL', 'Laki-Laki', 'R018021', 'R018021'),
(324, 'R.0181.21', 'X-RX1', 'RACHMAD SYAHPUTRA', 'Laki-Laki', 'R018121', 'R018121'),
(325, 'R.0182.21', 'X-RX1', 'RAFI AZMI SYUJA RYAN', 'Laki-Laki', 'R018221', 'R018221'),
(326, 'R.0187.21', 'X-RX1', 'SITI ZAHARA', 'Perempuan', 'R018721', 'R018721'),
(327, 'R.0138.21', 'X-RX2', 'ABIYYU HANIFAN', 'Laki-Laki', 'R013821', 'R013821'),
(328, 'R.0144.21', 'X-RX2', 'ARLAN MULIA QARDAYA S PANE', 'Laki-Laki', 'R014421', 'R014421'),
(329, 'R.0146.21', 'X-RX2', 'AURY KHALIDA NAZLA', 'Perempuan', 'R014621', 'R014621'),
(330, 'R.0147.21', 'X-RX2', 'AYUNDA LESTARI', 'Laki-Laki', 'R014721', 'R014721'),
(331, 'R.0150.21', 'X-RX2', 'DIMAS SUAJI HABIBI', 'Laki-Laki', 'R015021', 'R015021'),
(332, 'R.0151.21', 'X-RX2', 'DIO BIMA PANGESTU', 'Laki-Laki', 'R015121', 'R015121'),
(333, 'R.0154.21', 'X-RX2', 'FADILAH SALSABILA ELPHI LAMENGGE', 'Perempuan', 'R015421', 'R015421'),
(334, 'R.0158.21', 'X-RX2', 'GHAZWAN DEWA PUTRA MUCHARI', 'Laki-Laki', 'R015821', 'R015821'),
(335, 'R.0160.21', 'X-RX2', 'GILANG RAMADHANSYAH', 'Laki-Laki', 'R016021', 'R016021'),
(336, 'R.0161.21', 'X-RX2', 'HANDRIAN RAMADHAN', 'Laki-Laki', 'R016121', 'R016121'),
(337, 'R.0163.21', 'X-RX2', 'IQBAL MUNAHAR', 'Laki-Laki', 'R016321', 'R016321'),
(338, 'R.0166.21', 'X-RX2', 'M. ARIF', 'Laki-Laki', 'R016621', 'R016621'),
(339, 'R.0167.21', 'X-RX2', 'M. HILMI SYUHADA', 'Laki-Laki', 'R016721', 'R016721'),
(340, 'R.0183.21', 'X-RX2', 'RAFLI AL GHIFARI NASUTION', 'Laki-Laki', 'R018321', 'R018321'),
(341, 'R.0185.21', 'X-RX2', 'ROID RUSYDI SIREGAR', 'Laki-Laki', 'R018521', 'R018521'),
(342, 'R.0186.21', 'X-RX2', 'SIRAJUDDIN', 'Laki-Laki', 'R018621', 'R018621'),
(343, 'R.0188.21', 'X-RX2', 'STEVEN YESAYA DARMAWAN SITUMORANG', 'Laki-Laki', 'R018821', 'R018821'),
(344, 'R.0189.21', 'X-RX2', 'VANI JULIAN PUTRI ZEBUA', 'Perempuan', 'R018921', 'R018921'),
(345, 'R.0190.21', 'X-RX2', 'VARIQRIEHAN EISYAHRA', 'Laki-Laki', 'R019021', 'R019021'),
(346, 'R.0139.21', 'X-RX3', 'ADITYA SAPUTRA', 'Laki-Laki', 'R013921', 'R013921'),
(347, 'R.0140.21', 'X-RX3', 'AGHA GHAISAN HAMDANI NASUTION', 'Laki-Laki', 'R014021', 'R014021'),
(348, 'R.0141.21', 'X-RX3', 'AISYAH ASMIRA', 'Perempuan', 'R014121', 'R014121'),
(349, 'R.0142.21', 'X-RX3', 'ANUGRAH PUTRA PERDANA', 'Laki-Laki', 'R014221', 'R014221'),
(350, 'R.0143.21', 'X-RX3', 'ARIQ AL IKRAM', 'Laki-Laki', 'R014321', 'R014321'),
(351, 'R.0145.21', 'X-RX3', 'ATHAYA KIYASAH PERMANA', 'Laki-Laki', 'R014521', 'R014521'),
(352, 'R.0149.21', 'X-RX3', 'DIMAS ARDIANSYAH', 'Laki-Laki', 'R014921', 'R014921'),
(353, 'R.0152.21', 'X-RX3', 'FADEL FAJRI', 'Laki-Laki', 'R015221', 'R015221'),
(354, 'R.0165.21', 'X-RX3', 'LUTHFIA HASANAH', 'Perempuan', 'R016521', 'R016521'),
(355, 'R.0171.21', 'X-RX3', 'MHD. EVANDRA FACHREZY', 'Laki-Laki', 'R017121', 'R017121'),
(356, 'R.0172.21', 'X-RX3', 'MUHAMAD RIFKY', 'Laki-Laki', 'R017221', 'R017221'),
(357, 'R.0175.21', 'X-RX3', 'MUHAMMAD REIHAN SIDDIK SUHERI', 'Laki-Laki', 'R017521', 'R017521'),
(358, 'R.0176.21', 'X-RX3', 'MUHAMMAD RIFIALDI', 'Laki-Laki', 'R017621', 'R017621'),
(359, 'R.0177.21', 'X-RX3', 'MUHAMMAD ZAKI', 'Laki-Laki', 'R017721', 'R017721'),
(360, 'R.0184.21', 'X-RX3', 'RIDHO DARMAWAN', 'Laki-Laki', 'R018421', 'R018421'),
(361, 'R.0191.21', 'X-RX3', 'VILAR SIDDIK AVRIANSARI', 'Laki-Laki', 'R019121', 'R019121'),
(362, 'R.0192.21', 'X-RX3', 'YEHEZKIEL HAGANTA TARIGAN', 'Laki-Laki', 'R019221', 'R019221'),
(363, 'R.0193.21', 'X-RX3', 'ZAHIRAH AFIQAH BALQIS', 'Perempuan', 'R019321', 'R019321'),
(364, 'R.0194.21', 'X-RX3', 'ZASQIA DWI NAVITA', 'Perempuan', 'R019421', 'R019421'),
(365, 'R.0195.21', 'X-RX3', 'ZONA FERNANDO SINAGA', 'Laki-Laki', 'R019521', 'R019521');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `user_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_foto`) VALUES
(1, 'Muhammad Nakhlah', 'admin', '0192023a7bbd73250516f069df18b500', 'administrator', 'IMG_20200405_110612.jpg'),
(8, 'feri', 'panitia', 'd41d8cd98f00b204e9800998ecf8427e', 'Panitia', '139407170_');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voting`
--

CREATE TABLE `voting` (
  `voting_id` int(11) NOT NULL,
  `voting_waktu` datetime NOT NULL,
  `voting_pemilih` int(11) NOT NULL,
  `voting_kandidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `voting`
--

INSERT INTO `voting` (`voting_id`, `voting_waktu`, `voting_pemilih`, `voting_kandidat`) VALUES
(2, '2019-12-15 09:45:20', 1, 7),
(3, '2019-12-15 09:59:45', 4, 7),
(5, '2019-12-22 10:39:42', 205, 7),
(6, '2019-12-22 10:39:42', 206, 7),
(7, '2019-12-22 10:39:42', 207, 2),
(8, '2019-12-22 10:39:42', 208, 7),
(9, '2019-12-22 10:39:42', 209, 7),
(10, '2019-12-22 10:39:42', 210, 7),
(11, '2019-12-22 10:39:42', 211, 2),
(12, '2019-12-22 10:39:42', 212, 3),
(13, '2019-12-22 10:39:42', 213, 3),
(14, '2019-12-22 10:39:42', 214, 2),
(15, '2019-12-22 10:39:42', 215, 3),
(16, '2019-12-22 10:39:42', 216, 3),
(17, '2019-12-22 10:39:42', 217, 3),
(18, '2019-12-22 10:39:42', 218, 3),
(19, '2019-12-22 10:39:42', 219, 3),
(20, '2019-12-22 10:39:42', 220, 2),
(21, '2019-12-22 10:39:42', 221, 2),
(22, '2019-12-22 10:39:42', 222, 2),
(23, '2019-12-22 10:39:42', 223, 3),
(24, '2019-12-22 10:39:42', 224, 2),
(25, '2019-12-22 10:39:42', 225, 2),
(26, '2019-12-22 10:39:42', 226, 3),
(27, '2019-12-22 10:39:42', 227, 2),
(28, '2019-12-22 10:39:42', 228, 3),
(29, '2019-12-22 10:39:42', 229, 2),
(30, '2019-12-22 10:39:42', 230, 3),
(31, '2019-12-22 10:39:42', 231, 2),
(32, '2019-12-22 10:39:42', 232, 2),
(33, '2019-12-22 10:39:42', 233, 3),
(34, '2019-12-22 10:39:42', 234, 2),
(35, '2019-12-22 10:39:42', 235, 2),
(36, '2019-12-22 10:39:42', 236, 2),
(37, '2019-12-22 10:39:42', 237, 2),
(38, '2019-12-22 10:39:42', 238, 3),
(39, '2019-12-22 10:39:42', 239, 2),
(40, '2019-12-22 10:39:42', 240, 2),
(41, '2019-12-22 10:39:42', 241, 2),
(42, '2019-12-22 10:39:42', 242, 3),
(43, '2019-12-22 10:39:42', 243, 2),
(44, '2019-12-22 10:39:42', 244, 2),
(45, '2019-12-22 10:39:42', 245, 2),
(46, '2019-12-22 10:39:42', 246, 3),
(47, '2019-12-22 10:39:42', 247, 3),
(48, '2019-12-22 10:39:42', 248, 3),
(49, '2019-12-22 10:39:42', 249, 2),
(50, '2019-12-22 10:39:42', 250, 3),
(51, '2019-12-22 10:39:42', 251, 3),
(52, '2019-12-22 10:39:42', 252, 3),
(53, '2019-12-22 10:39:42', 253, 2),
(54, '2019-12-22 10:39:42', 254, 2),
(55, '2019-12-22 10:39:42', 255, 3),
(56, '2019-12-22 10:39:42', 256, 3),
(57, '2019-12-22 10:39:42', 257, 2),
(58, '2019-12-22 10:39:42', 258, 2),
(59, '2019-12-22 10:39:42', 259, 2),
(60, '2019-12-22 10:39:42', 260, 2),
(61, '2019-12-22 10:39:42', 261, 3),
(62, '2019-12-22 10:39:42', 262, 2),
(63, '2019-12-22 10:39:42', 263, 2),
(64, '2019-12-22 10:39:42', 264, 3),
(65, '2019-12-22 10:39:42', 265, 3),
(66, '2019-12-22 10:39:42', 266, 3),
(67, '2019-12-22 10:39:42', 267, 3),
(68, '2019-12-22 10:39:42', 268, 3),
(69, '2019-12-22 10:39:42', 269, 3),
(70, '2019-12-22 10:39:42', 270, 3),
(71, '2019-12-22 10:39:42', 271, 3),
(72, '2019-12-22 10:39:42', 272, 3),
(73, '2019-12-22 10:39:42', 273, 3),
(74, '2019-12-22 10:39:42', 274, 3),
(75, '2019-12-22 10:39:42', 275, 3),
(76, '2019-12-22 10:39:42', 276, 3),
(77, '2019-12-22 10:39:42', 277, 3),
(78, '2019-12-22 10:39:42', 278, 3),
(79, '2019-12-22 10:39:42', 279, 2),
(80, '2019-12-22 10:39:42', 280, 2),
(81, '2019-12-22 10:39:42', 281, 3),
(82, '2019-12-22 10:39:42', 282, 3),
(83, '2019-12-22 10:39:42', 283, 2),
(84, '2019-12-22 06:06:06', 303, 2),
(85, '2022-11-09 02:06:45', 0, 3),
(86, '2023-01-17 02:03:06', 308, 7),
(87, '2023-01-17 02:06:11', 309, 3),
(88, '2023-01-17 02:11:42', 310, 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`kandidat_id`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`pemilih_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`voting_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `kandidat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `pemilih_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `voting`
--
ALTER TABLE `voting`
  MODIFY `voting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

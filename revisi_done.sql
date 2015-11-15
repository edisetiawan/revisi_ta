-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 02:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `revisi_done`
--
CREATE DATABASE IF NOT EXISTS `smkmaar4_revisi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smkmaar4_revisi`;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `anggota_nis` varchar(12) NOT NULL,
  `anggota_nama` varchar(50) DEFAULT NULL,
  `anggota_images` text,
  `kelas` varchar(12) DEFAULT NULL,
  `jurusan` varchar(40) DEFAULT NULL,
  `anggota_tempat` varchar(20) DEFAULT NULL,
  `anggota_tgl_lahir` varchar(50) DEFAULT NULL,
  `anggota_berlaku` varchar(50) DEFAULT NULL,
  `anggota_jns_kelamin` varchar(40) DEFAULT NULL,
  `anggota_email` varchar(50) DEFAULT NULL,
  `anggota_hp` varchar(30) DEFAULT NULL,
  `anggota_alamat` text,
  `anggota_username` varchar(30) DEFAULT NULL,
  `anggota_password` varchar(32) DEFAULT NULL,
  `anggota_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`anggota_nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`anggota_nis`, `anggota_nama`, `anggota_images`, `kelas`, `jurusan`, `anggota_tempat`, `anggota_tgl_lahir`, `anggota_berlaku`, `anggota_jns_kelamin`, `anggota_email`, `anggota_hp`, `anggota_alamat`, `anggota_username`, `anggota_password`, `anggota_tanggal`) VALUES
('1561', 'Nina Aprilia Putri', 'DSC_0260.JPG', 'XI A', 'RPL', 'Wonosari', '13 November 1995', '18 September 2017', 'Perempuan', 'joni@yahoo.com', '313121212', 'Dono Terto Ponjong Gunung Kidul', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2015-10-22 13:41:00'),
('1562', 'Anisa Putri Tunggal', 'DSC_0102.JPG', 'XI A', 'RPL', 'Yogyakarta', '18 Desember 1998', '15 November 2015', 'Perempuan', 'anisa@yahoo.com', '08199288120', 'Mangkuyudan, Yogyakarta, Indonenesia', '1123', '92af93f73faf3cefc129b6bc55a748a9', '2015-10-02 09:08:00'),
('1563', 'Anisa Rahmawati', 'DSC_0110.JPG', 'XI A', 'RPL', 'Wonosari', '15 Februari 1997', '18 September 2017', 'Perempuan', 'ramawati@yahoo.com', '09288333', 'eee', '22222', '3d2172418ce305c7d16d4b05597c6a59', '2015-10-01 11:36:00'),
('1564', 'Dimas Aji Susanto', 'DSC_0245.JPG', 'XI A', 'RPL', 'Yogyakarta', '18 Desember 1998', '18 September 2017', 'Laki-laki', 'iuwan@yahoo.com', '0819988277726', 'Jetis 34 Gunung Kidul', '3123311091', '8279db65a2edc92d44d64c73041ea9b5', '2015-10-01 10:40:00'),
('1565', 'Anisa Apprilia Nurjanah', 'DSC_0117.JPG', 'XI A', 'RPL', 'Kebumen', '05 September 1998', '18 September 2017', 'Laki-laki', 'anisa@yahoo.com', '081992882', 'Gang delima 766 Yogyakarta', '3123311092', '927794cade2fd79cb0563e63a5493a8c', '2015-10-01 10:30:00'),
('1566', 'Aulia Rahmanita', 'DSC_0257.JPG', 'XI A', 'RPL', 'Banguntapan', '18 Desember 1998', '18 September 2017', 'Perempuan', 'aulia45@yahoo.com', '0877166177', 'ngipik', '31299', '9a9e0713c813c15dac6e857cd7e33e05', '2015-10-02 02:09:00'),
('1567', 'Tya Yuliani', 'DSC_0059.JPG', 'XI A', 'RPL', 'Wonosari', '19 Oktober 1996', '19 September 2017', 'Perempuan', 'tyayuliani@yahoo.com', '0981882991', 'RT 10/RW 11 Sumbergiri, Ponjong, Gunung Kidul ', '1567', '18d10dc6e666eab6de9215ae5b3d54df', '2015-10-01 11:36:00'),
('1568', 'Dika Putra Parwanto', 'DSC_0104.JPG', 'XI A', 'RPL', 'Sleman', '11 Mei 1995', '18 September 2017', 'Laki-laki', 'ttg5e@yahoo.com', '087835778009', 'RT 10/ RW 6 Sladi Umbolharjo Ponjong Gunung Kidul', '1568', 'dfa92d8f817e5b08fcaafb50d03763cf', '2015-10-01 11:38:00'),
('1569', 'Sawung Hermawan', 'DSC_0109.JPG', 'XI A', 'RPL', 'Wonosari', '15 Agustus 2001', '13 September 1998', 'Perempuan', 'agus778@yahoo.com', '08786677878', 'RT 11/ RW 11 Sladi Umbulharjo, Ponjong, Gunung Kidul\r\n', '1569', '655ea4bd3b5736d88afc30c9212ccddf', '2015-10-01 11:44:00'),
('1570', 'Aprilia Rahmanini', 'DSC_0351.JPG', 'XI A', 'RPL', 'Lampung', '16 Juli 1997', '18 September 2017', 'Perempuan', 'aplrilia@yahoo.com', '0819928828', 'RT 11/ RW 12 Ngajin, Pandaan Gunung Kidul', '1570', '7949e456002b28988d38185bd30e77fd', '2015-10-01 11:46:00'),
('1571', 'Suci Handayani', 'DSC_0180.JPG', 'XI A', 'RPL', 'Wonosari', '16 September 1996', '17 November 2017', 'Perempuan', 'sudayani@yahoo.com', '0878667988112', 'RT 02/ RW 08 Klitren, Ponjong, Gunung Kidul', '1571', '7bd28f15a49d5e5848d6ec70e584e625', '2015-10-02 01:48:00'),
('1572', 'Ardiansyah Prutra', 'DSC_0187.jpg', 'XI A', 'RPL', 'Wonogiri', '15 Oktober 2015', '15 Agustus 2016', 'Perempuan', 'ardiansyah@yahoo.com', '087899778998', 'RT 05/ RW 12 Pati, Sumber Giri, Ponjong, Gunung Kidul', '1572', '452bf208bf901322968557227b8f6efe', '2015-10-02 01:50:00'),
('1573', 'Sidik Kusuma Jaya', 'DSC_0242.JPG', 'XI A', 'RPL', 'Wonosari', '18 Agustus 1998', '11 Oktober 2009', 'Laki-laki', 'sidik334@yahoo.com', '087839887887', 'RT 08/ RW 17 Pengok, Ponjong, Gunung Kidul', '1573', 'a1afc58c6ca9540d057299ec3016d726', '2015-10-02 02:11:00'),
('1574', 'Hendra Budiyanto', 'DSC_0254.JPG', 'XI A', 'RPL', 'Wonosari', '14 September 1998', '18 September 2017', 'Laki-laki', 'hendr33@yahoo.com', '087839778776', 'Klitren Ponjong Gunung Kidul', '1574', '0d4f4805c36dc6853edfa4c7e1638b48', '2015-10-02 02:16:00'),
('1575', 'Singgih Pambudi', 'DSC_0258.JPG', 'XI A', 'RPL', 'Wonosari', '18 Oktober 1998', '17 November 2015', 'Laki-laki', 'siiki@yahoo.co.id', '087898665889', 'Bedoyo, Ponjong, Gunung Kidul', '1575', '70efba66d3d8d53194fb1a8446ae07fa', '2015-10-02 02:17:00'),
('1576', 'Lina Subekti', 'DSC_0332.JPG', 'XI A', 'RPL', 'Wonogiri', '18 Desember 1998', '24 September 2015', 'Laki-laki', 'linasu33@yahoo.com', '087665988988', 'RT 11/RT 12 Klepu Ponjong Gunung Kidul', '1576', 'af5afd7f7c807171981d443ad4f4f648', '2015-10-02 04:09:00'),
('1577', 'Nurul Hestiani', 'DSC_0326.JPG', 'XI A', 'RPL', 'Wonosari', '18 Desember 1998', '18 November 2016', 'Perempuan', 'nurultiani@yahoo.com', '0877799826822', 'Pati Sumber Giri Ponjong Gunung Kidul\r\n', '1577', '7e1d842d0f7ee600116ffc6b2d87d83f', '2015-10-02 04:12:00'),
('1578', 'Evi Intiasari', 'DSC_0305.JPG', 'XI A', 'RPL', 'Yogyakarta', '19 November 1998', '17 Agustus 2011', 'Perempuan', 'eviinti998@yahoo.com', '087882772812', 'RT 11 / RW 12 Klitren , Sumbergiri, Ponjong Gunung Kidul', '1578', '95d309f0b035d97f69902e7972c2b2e6', '2015-10-02 04:14:00'),
('1579', 'Tri Yuniarti', 'DSC_0302.JPG', 'XI A', 'RPL', 'Wonosari', '14 Oktober 1998', '19 Oktober 2017', 'Perempuan', 'triy998@yahooo.com', '087991862888', 'RT 08/ RW 07 Sladi , Sumber Giri, Ponjong Gunung Kidul', '1579', 'ed4227734ed75d343320b6a5fd16ce57', '2015-10-02 04:16:00'),
('1580', 'Sari Rahmadani', 'DSC_0293.JPG', 'XI A', 'RPL', 'Klaten', '13 September 1998', '19 September 2016', 'Perempuan', 'sari@yahoo.com', '081992888277', 'RT 10/ RW 11 Sawahan, Ponjong Gunung Kidul', '1580', 'dc5c768b5dc76a084531934b34601977', '2015-10-02 05:53:00'),
('1581', 'Kustiawan', 'DSC_0289.JPG', 'XI A', 'RPL', 'Bantul', '18 November 1996', '17 November 2015', 'Laki-laki', 'kuntiawan@yahoo.com', '087998776887', 'RT 08 / RW 12 Sladi, Sumber Giri, Ponjong, Gunung Kidul', '1581', '88a199611ac2b85bd3f76e8ee7e55650', '2015-10-02 05:55:00'),
('1582', 'Heru Susanto', 'DSC_0288.JPG', 'XI A', 'RPL', 'Wonogiri', '19 November 1998', '18 Desember 2016', 'Laki-laki', 'herus@yahoo.com', '081998777888', 'RT 08/ RW 06 Eromoko Wonogiri', '1582', 'b710915795b9e9c02cf10d6d2bdb688c', '2015-10-02 06:00:00'),
('1583', 'Linda Sutantri', 'DSC_0275.JPG', 'XI A', 'RPL', 'Wonosari', '19 September 1998', '18 September 2016', 'Perempuan', 'linda55@yahoo.com', '087554887998', 'RT 09/ RW 11 Kalioyo Ponjong Gunung Kidul', '1583', '076023edc9187cf1ac1f1163470e479a', '2015-10-02 06:04:00'),
('1584', 'Lukman Aji Pamungkas', 'DSC_0280.JPG', 'XI A', 'RPL', 'Wonosari', '19 November 1998', '12 November 2015', 'Laki-laki', 'lukmanaji@yahoo.com', '087839887666', 'RT 10 / RW 13 Sladi, Sumber Giri Ponjong Gunung Kidul', '1584', '277281aada22045c03945dcb2ca6f2ec', '2015-10-02 06:09:00'),
('1585', 'Sugeng Riayadi', 'DSC_0282.JPG', 'XI A', 'RPL', 'Wonosari', '17 Desember 2015', '19 Desember 2016', 'Laki-laki', 'sugeng@yahoo.com', '081998288788', 'RT 10 / RW 08 Mlati Sleman Yogyakarta', '1585', '228499b55310264a8ea0e27b6e7c6ab6', '2015-10-02 06:12:00'),
('1586', 'Ninik Prihnawati', 'DSC_0285.JPG', 'XI A', 'RPL', 'Wonosari', '17 Oktober 1998', '18 Oktober 2015', 'Perempuan', 'ninik@yahoo.com', '087839877667', 'RT 10/RW 08 Sladi Sumber Giri Ponjong Gunung Kidul', '1586', '8f19793b2671094e63a15ab883d50137', '2015-10-02 06:15:00'),
('1587', 'Didik Santoso', 'DSC_0286.JPG', 'XI A', 'RPL', 'Wonosari', '16 Desember 1998', '18 Desember 2016', 'Laki-laki', 'didik@yahoo.com', '087997881776', 'RT 10/ RW 11 Saldi Sumbergiri Ponjong Gunung Kidul', '1587', '49af6c4e558a7569d80eee2e035e2bd7', '2015-10-02 06:18:00'),
('1588', 'Apri Stiawan', 'DSC_0288.JPG', 'XI A', 'RPL', 'Wonosari', '17 November 1998', '18 September 2017', 'Laki-laki', 'apri334@yahoo.com', '08722287765', 'RT 10/ RW 12 Pati Sumber Giri Ponjong Gunung Kidul', '15', '9bf31c7ff062936a96d3c8bd1f8f2ff3', '2015-10-02 06:23:00'),
('1589', 'Ayu Rosita Wati', 'DSC_0274.JPG', 'XI A', 'RPL', 'Wonosari', '18 November 1998', '14 Agustus 2016', 'Laki-laki', 'ayurosita@yahoo.com', '08786199888', 'RT 10 / RW 06 Sladi Umbul Harjo Ponjong Gunung Kidul\r\n', '1589', 'dca5672ff3444c7e997aa9a2c4eb2094', '2015-10-02 06:25:00'),
('7161', 'Edi Setiawan', 'DSC_0104.JPG', 'XI A', 'RPL', 'Wonogiri', '16 Maret 1996', '15 September 2016', 'Laki-laki', 'edi2992@gmail.com', '081999758789', 'Tanjung RT 10 / RW 11', '7161', '8860a4e27cbbe4c63821b429211684a3', '2015-10-23 04:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `berita_judul` varchar(50) DEFAULT NULL,
  `berita_images` text,
  `berita_isi` text,
  `berita_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_images`, `berita_isi`, `berita_tanggal`) VALUES
(16, 'Perpustakaan', '20150612_083705.jpg', 'Perpustakaan adalah sumber informasi, sumber kreativitas, sumber pengetahuan, dan sumber kekuatan bangsa....Perpustakaan adalah pusat penyemaian budaya baca, basis kaum intelektual muda.Perpustakaan adalah pusat pembangkit jiwa, gudang inspirasi, agen utama pembentuk karakter siswa. (seminar perpustakaan)', '2015-08-25 08:59:00'),
(17, 'Perpustakaan', '20150612_083650.jpg', 'Perpustakaan adalah sumber informasi, sumber kreativitas, sumber pengetahuan, dan sumber kekuatan bangsa....Perpustakaan adalah pusat penyemaian budaya baca, basis kaum intelektual muda.Perpustakaan adalah pusat pembangkit jiwa, gudang inspirasi, agen utama pembentuk karakter siswa. (seminar perpustakaan)', '2015-08-25 08:59:00'),
(19, 'Petugas Perpustakaan Baru', '20150612_083731.jpg', 'Perpustakaan adalah sumber informasi, sumber kreativitas, sumber pengetahuan, dan sumber kekuatan bangsa....Perpustakaan adalah pusat penyemaian budaya baca, basis kaum intelektual muda.Perpustakaan adalah pusat pembangkit jiwa, gudang inspirasi, agen utama pembentuk karakter siswa. (seminar perpustakaan)', '2015-08-25 09:00:00'),
(20, 'Tempat Coding', '20150612_092412.jpg', 'Perpustakaan adalah sumber informasi, sumber kreativitas, sumber pengetahuan, dan sumber kekuatan bangsa....Perpustakaan adalah pusat penyemaian budaya baca, basis kaum intelektual muda.Perpustakaan adalah pusat pembangkit jiwa, gudang inspirasi, agen utama pembentuk karakter siswa. (seminar perpustakaan)', '2015-08-25 09:00:00'),
(21, 'Pelayan meinjaman buku', '20150612_083734.jpg', 'Perpustakaan adalah sumber informasi, sumber kreativitas, sumber pengetahuan, dan sumber kekuatan bangsa....Perpustakaan adalah pusat penyemaian budaya baca, basis kaum intelektual muda.Perpustakaan adalah pusat pembangkit jiwa, gudang inspirasi, agen utama pembentuk karakter siswa. (seminar perpustakaan)', '2015-08-25 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kode_buku` varchar(12) NOT NULL,
  `judul_buku` varchar(100) DEFAULT NULL,
  `klasifikasi_id` varchar(11) DEFAULT NULL,
  `nomor_klasifikasi` varchar(30) DEFAULT NULL,
  `foto_buku` text,
  `kode_penerbit` varchar(11) DEFAULT NULL,
  `tahun_terbit` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `rak` varchar(20) DEFAULT NULL,
  `sinopsis` text,
  `jumlah_awal` int(11) DEFAULT NULL,
  `jumlah_akhir` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `klasifikasi_id`, `nomor_klasifikasi`, `foto_buku`, `kode_penerbit`, `tahun_terbit`, `isbn`, `rak`, `sinopsis`, `jumlah_awal`, `jumlah_akhir`, `value`) VALUES
('B0005', 'Instalasi Office ', '600', '200.001', 'book-6.png', 'P-002', '2015', '1234-44-55-66', 'RG3', 'microsoft', 13, 12, 2),
('B0006', 'Pengetahuan Popular', '000', '300.003.12', '88PENGETAHUAN POPULAR.jpg', 'P-003', '2014', '1234-44-555-2', 'RA3', 'Pengetahuan Popular', 15, 15, 1),
('B0007', 'Startup Indonesia', '000', '100.110.11', 'Cover-Buku-Startup.jpg', 'P-005', '2015', '123-445-556-1', 'RA3', 'Bisnis', 13, 13, 0),
('B0008', 'Dasar Otomotif', '000', '300.091.22', 'book-7.jpg', 'P-002', '2014', '1234-444-', 'RA1', 'Dasar Otomotif', 14, 14, 0),
('B0009', 'AERIE', '100', '300.10', 'aerie.jpg', 'P-003', '2014', '2220-22-222', 'RB3', 'wewew', 14, 14, 0),
('B0010', 'Rangka', '500', '300.003.1', 'rangka.jpe', 'P-002', '2014', '1234-4441-22', 'RF2', 'Rangka', 14, 14, 0),
('B0011', 'Pendidikan Agama Islam', '200', '200.110.22.33', 'book-5.jpg', 'P-004', '2015', '1234-4444-5', 'RC3', 'Pendidikan Agama Islam', 13, 13, 2),
('B0012', 'Si Juki', '000', '400.11.23', 'si-juki-depanRESIZE.jpg', 'P-001', '2015', '334-2211-222', 'RA3', 'Si Juki', 14, 12, 2),
('B0013', 'Kaya Otak Kanan', '000', '300.333.001', 'KAYA-DENGAN-OTAK-KANAN.jpg', 'P-002', '2015', '2102-2222-222', 'RA1', 'Kaya Otak Kanan', 14, 14, 0),
('B0014', 'Fisika Dasar', '600', '100.11', 'Sampul.png', 'P-001', '2015', '333-333-3333', 'RG1', 'Fisika Dasar', 14, 14, 0),
('B0015', 'Sejarah Nasional Indonesia', '900', '100.112', 'buku_tiar.jpg', 'P-002', '2013', '1223-333-333-', 'RJ1', 'Sejarah Nasional Indonesia', 14, 14, 0),
('B0016', 'Sistem Jaringan Komputer', '600', '100.34', 'SISTEM JARINGANKOMPUTER UNTUK PEMULA acc.jpg', 'P-001', '2015', '1292-222-234', 'RG1', 'Sistem Jaringan Komputer', 14, 15, 2),
('B0017', 'Rekayasa Perangkat Lunak', '600', '100.220.22', 'buku-rpl-janner-01.jpg', 'P-003', '2015', '129-228-334-5', 'RG4', 'Rekayasa Perangkat Lunak', 13, 12, 3),
('B0018', 'Mengenal Cinta', '100', '300.10.11', 'ustad jadi wasi.jpg', 'P-001', '2015', '123-111-111-2222', 'R01', 'mengenal', 10, 10, 2),
('B0019', 'Fisika Dasar', '000', '200.100.11', 'Sampul.png', 'P-001', '2014', '220-111-111', 'RB01', 'Fisika Dasar Ilmian dan Teknologi                                                                                      ', 22, 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE IF NOT EXISTS `denda` (
  `deda_id` int(11) NOT NULL AUTO_INCREMENT,
  `pinjam_id` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`deda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`deda_id`, `pinjam_id`, `bayar`) VALUES
(4, 46, 200);

-- --------------------------------------------------------

--
-- Table structure for table `dikarang`
--

CREATE TABLE IF NOT EXISTS `dikarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(12) DEFAULT NULL,
  `kode_pengarang` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `dikarang`
--

INSERT INTO `dikarang` (`id`, `kode_buku`, `kode_pengarang`) VALUES
(30, 'B0005', 'P0028'),
(31, 'B0005', 'P0029'),
(32, 'B0006', 'P0030'),
(33, 'B0006', 'P0031'),
(34, 'B0007', 'P0032'),
(35, 'B0007', 'P0033'),
(36, 'B0008', 'P0034'),
(37, 'B0008', 'P0035'),
(42, 'B0009', 'P0040'),
(43, 'B0010', 'P0041'),
(44, 'B0010', 'P0042'),
(49, 'B0011', 'P0047'),
(50, 'B0012', 'P0048'),
(51, 'B0013', 'P0049'),
(52, 'B0014', 'P0050'),
(53, 'B0015', 'P0051'),
(54, 'B0016', 'P0052'),
(56, 'B0017', 'P0054'),
(57, 'B0018', 'P0057'),
(58, 'B0018', 'P0058'),
(59, 'B0019', 'P0059'),
(60, 'B0019', 'P0060');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `klasifikasi_id` varchar(11) NOT NULL,
  `klasifikasi_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`klasifikasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`klasifikasi_id`, `klasifikasi_nama`) VALUES
('000', 'Karya Umum'),
('100', 'Filsafat'),
('200', 'Agama'),
('300', 'Ilmu Sosial'),
('400', 'Bahasa'),
('500', 'Ilmu Pengetahuan Murni'),
('600', 'Ilmu Pengetahuan Terapan/Teknologi'),
('700', 'Seni, Olahraga, Hiburan'),
('800', 'Kesusasteraan'),
('900', 'Biografi Ilmu Bumi, Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_kode` varchar(11) NOT NULL,
  `penerbit_nama` varchar(50) DEFAULT NULL,
  `penerbit_alamat` varchar(50) DEFAULT NULL,
  `penerbit_kota` varchar(20) DEFAULT NULL,
  `penerbit_tlp` varchar(20) DEFAULT NULL,
  `penerbit_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`penerbit_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_kode`, `penerbit_nama`, `penerbit_alamat`, `penerbit_kota`, `penerbit_tlp`, `penerbit_email`) VALUES
('P-001', 'Gava Media', 'Jl Klitren Lo Yogyakarta', 'Yogyakarta', '027745667', 'gavamedia@yahoo.com'),
('P-002', 'Andi', 'Jl Beo Demangan Yogyakarta', 'Yogyakarta', '0277717', 'andi@andipubliser.com'),
('P-003', 'Data Media', 'Jl Bima Sokowetan Yogyakarta', 'Yogyakarta', '02747191143', 'datamedia@telkom.net'),
('P-004', 'Erlangga', 'Jl Beo Demangan Baru Sleman', 'Yogyakarta', '0274552261', 'erlygy@indosat.net.id'),
('P-005', 'Bentang Pustaka', 'Jl Pandega Yogyakarta', 'Yogyakarta', '027455802', 'bentang@ekuator.com'),
('P-006', 'Andi Offset', 'Yogyakarta', 'Yogyakarta', '0819999758789', 'andiofset@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
  `kode_pengarang` varchar(12) NOT NULL,
  `nama_pengarang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`kode_pengarang`, `nama_pengarang`) VALUES
('P0017', 'Iman Samudra'),
('P0018', 'Joko Sableng'),
('P0019', 'Iman Bonjol'),
('P0020', 'Joker'),
('P0021', 'Dent'),
('P0022', 'Iman Samudra'),
('P0023', 'Rianto'),
('P0024', 'Jogianto'),
('P0025', 'Arif Januari'),
('P0026', 'Imanuel Hana'),
('P0028', 'Edi Setiawan'),
('P0029', 'Rianto'),
('P0030', 'Iwan Hartadi'),
('P0031', 'Agus Sujarwa'),
('P0032', 'Edi Setiawan'),
('P0033', 'Dwi Hujianto'),
('P0034', 'Reva Setiawa'),
('P0035', 'Styo Nurmiya'),
('P0036', 'Aidinda'),
('P0037', 'Aidinda'),
('P0038', 'Aidinda'),
('P0039', 'Aidinda'),
('P0040', 'Johan'),
('P0041', 'Rani Silvi J'),
('P0042', 'Afrida'),
('P0043', 'Ghufron'),
('P0044', 'Mila'),
('P0045', 'Ghufron'),
('P0046', 'Mila'),
('P0047', 'Husni Thoyar'),
('P0048', 'Juki'),
('P0049', 'Arya Purwadi'),
('P0050', 'Saiful'),
('P0051', 'Tyan Anwar'),
('P0052', 'Rianto'),
('P0053', 'Suthejo'),
('P0054', 'Ghufron '),
('P0055', 'Edi Setiawan'),
('P0056', 'Rianto'),
('P0057', 'Edi Setiawan'),
('P0058', 'Aisyah Maharani'),
('P0059', 'Ibu Rizka'),
('P0060', 'Bapak John'),
('P0061', 'sudjiwo tejo'),
('P0062', 'cak nun'),
('P0063', 'sabrang');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_id` int(11) NOT NULL AUTO_INCREMENT,
  `petugas_username` varchar(30) DEFAULT NULL,
  `petugas_password` varchar(32) DEFAULT NULL,
  `petugas_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`petugas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_username`, `petugas_password`, `petugas_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'joker', '21232f297a57a5a743894a0e4a801fc3', 2),
(3, 'petugas1', 'b53fe7751b37e40ff34d012c7774d65f', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `pinjam_id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(12) DEFAULT NULL,
  `anggota_nis` varchar(12) DEFAULT NULL,
  `tanggal_pinjam` varchar(20) DEFAULT NULL,
  `tanggal_harus_kembali` varchar(20) DEFAULT NULL,
  `tanggal_kembali` varchar(20) DEFAULT NULL,
  `jumlah_pinjam` int(11) DEFAULT NULL,
  `status_pinjam` int(11) DEFAULT NULL,
  PRIMARY KEY (`pinjam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`pinjam_id`, `kode_buku`, `anggota_nis`, `tanggal_pinjam`, `tanggal_harus_kembali`, `tanggal_kembali`, `jumlah_pinjam`, `status_pinjam`) VALUES
(45, 'B0018', '1563', '14-11-2015', '17-11-2015', '14-11-2015', 1, 2),
(46, 'B0011', '1563', '14-11-2015', '13-11-2015', '14-11-2015', 1, 2),
(47, 'B0012', '1563', '14-11-2015', '17-11-2015', '', 1, 1),
(48, 'B0011', '1566', '14-11-2015', '17-11-2015', '', 1, 1),
(49, 'B0012', '1566', '14-11-2015', '17-11-2015', '', 1, 1);

--
-- Triggers `pinjaman`
--
DROP TRIGGER IF EXISTS `pinjaman`;
DELIMITER //
CREATE TRIGGER `pinjaman` AFTER INSERT ON `pinjaman`
 FOR EACH ROW BEGIN
UPDATE buku
SET jumlah_akhir = jumlah_akhir - NEW.jumlah_pinjam
WHERE
kode_buku = NEW.kode_buku;
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

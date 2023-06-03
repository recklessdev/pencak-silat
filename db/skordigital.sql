-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 01:12 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skordigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `username`, `password`) VALUES
(1, 'admin', 'c8837b23ff8aaa8a2dde915473ce0991');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tanding`
--

CREATE TABLE `jadwal_tanding` (
  `id_partai` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `kelas` varchar(55) NOT NULL,
  `gelanggang` varchar(2) NOT NULL,
  `partai` varchar(4) NOT NULL,
  `nm_merah` varchar(55) NOT NULL,
  `kontingen_merah` varchar(55) NOT NULL,
  `nm_biru` varchar(55) NOT NULL,
  `kontingen_biru` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT '-',
  `pemenang` varchar(150) NOT NULL DEFAULT '-',
  `babak` varchar(55) DEFAULT NULL,
  `medali` varchar(2) NOT NULL DEFAULT '0',
  `aktif` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_tanding`
--

INSERT INTO `jadwal_tanding` (`id_partai`, `tgl`, `kelas`, `gelanggang`, `partai`, `nm_merah`, `kontingen_merah`, `nm_biru`, `kontingen_biru`, `status`, `pemenang`, `babak`, `medali`, `aktif`) VALUES
(1, '2023-06-01', 'A Putra Remaja', 'A', '1', 'muqsi', 'A', 'abdul', 'B', '-', '-', 'Penyisihan', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tgr`
--

CREATE TABLE `jadwal_tgr` (
  `id_partai` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `golongan` varchar(55) NOT NULL,
  `noundian` varchar(4) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `kontingen` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelastanding`
--

CREATE TABLE `kelastanding` (
  `ID_kelastanding` int(11) NOT NULL,
  `nm_kelastanding` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelastanding`
--

INSERT INTO `kelastanding` (`ID_kelastanding`, `nm_kelastanding`) VALUES
(1, 'KELAS A'),
(2, 'KELAS B'),
(3, 'KELAS C'),
(4, 'KELAS D'),
(5, 'KELAS E'),
(6, 'KELAS F'),
(7, 'KELAS G'),
(8, 'KELAS H'),
(9, 'KELAS I'),
(10, 'KELAS J');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `ID_konfirmasi` int(11) NOT NULL,
  `bank_tujuan` varchar(55) NOT NULL,
  `bank_pengirim` varchar(55) NOT NULL,
  `norek_pengirim` varchar(35) NOT NULL,
  `nm_pengirim` varchar(35) NOT NULL,
  `kontak` varchar(35) NOT NULL,
  `tgl_transfer` varchar(15) NOT NULL,
  `jumlah` varchar(35) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `catatan` text NOT NULL,
  `datetime` varchar(35) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'OPEN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`ID_konfirmasi`, `bank_tujuan`, `bank_pengirim`, `norek_pengirim`, `nm_pengirim`, `kontak`, `tgl_transfer`, `jumlah`, `bukti`, `catatan`, `datetime`, `status`) VALUES
(1, '0808 0883 26542 - Bank ABC - A/N Satria Salam', 'BCA', '8239231', 'muqsibagas', '081382471566', '01/06/2023', '200000', '9a0b7c262f05ce5fc34e054a79c63813PHPUnit.png', 'sadasdsa', '2023-06-01 21:19:51', 'CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `kontingen`
--

CREATE TABLE `kontingen` (
  `id` int(11) NOT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `nama_kontingen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontingen`
--

INSERT INTO `kontingen` (`id`, `kota`, `nama_kontingen`) VALUES
(1, 'Jakarta Pusat', 'SMK JP 1'),
(2, 'Jakarta Pusat', 'SMAN 4 Jakarta / SMPN 100'),
(3, 'Jakarta Pusat', 'SMAN 45 Jakarta'),
(4, 'Jakarta Pusat', 'SMAN 25 Jakarta'),
(5, 'Jakarta Pusat', 'RSCM'),
(6, 'Jakarta Pusat', 'UI'),
(7, 'Jakarta Pusat', 'MTS'),
(8, 'Jakarta Pusat', 'SMAN 25 Jakarta'),
(9, 'Jakarta Pusat', 'Kemenkeu'),
(10, 'Jakarta Pusat', 'Bintara'),
(11, 'Jakarta Utara', 'Kolat Pelatih dan Aspel MPJU'),
(12, 'Jakarta Utara', 'Kolat RSAL Mintohardjo'),
(13, 'Jakarta Utara', 'Kolat Astra International, Tbk'),
(14, 'Jakarta Utara', 'Kolat PURI'),
(15, 'Jakarta Utara', 'Kolat SMAN 40 Jakarta'),
(16, 'Jakarta Utara', 'Kolat SMAN 111 Jakarta'),
(17, 'Jakarta Utara', 'Kolat SMPN 34 Jakarta'),
(18, 'Jakarta Utara', 'Kolat SMPN 42 Jakarta'),
(19, 'Jakarta Utara', 'Kolat SMPN 82 Jakarta'),
(20, 'Jakarta Utara', 'Kolat SMPN 244 Jakarta'),
(21, 'Jakarta Utara', 'Kolat SMPN 261 Jakarta'),
(22, 'Jakarta Utara', 'Kolat SMPN 287 Jakarta'),
(23, 'Jakarta Utara', 'Kolat SDN Cilincing 02 Pg Jakarta'),
(24, 'Jakarta Utara', 'Kolat Remaja Pluit'),
(25, 'Jakarta Utara', 'Kolat SMPN 29 Jakarta'),
(26, 'Jakarta Utara', 'Kolat PLUIT'),
(27, 'Jakarta Barat', 'Padepokan Joglo'),
(28, 'Jakarta Barat', 'Kolat Univ. Bina Nusantara'),
(29, 'Jakarta Barat', 'Kolat Univ. Bakrie'),
(30, 'Jakarta Barat', 'Kolat Bakrie Telecom'),
(31, 'Jakarta Barat', 'Kolat PAM Jaya'),
(32, 'Jakarta Barat', 'Kolat Hotel Century Park'),
(33, 'Jakarta Barat', 'Kolat Balai Kota DKI Jakarta'),
(34, 'Jakarta Barat', 'Kolat Carins Studio'),
(35, 'Jakarta Barat', 'Kolat Mercedes Benz Indonesia'),
(36, 'Jakarta Barat', 'Kolat Griya Errina'),
(37, 'Jakarta Barat', 'Kolat Binus Alsut'),
(38, 'Jakarta Barat', 'Kelompok Kebugaran Essence'),
(39, 'Jakarta Barat', 'Kelompok Kebugaran The Dharmawangsa Hotel'),
(40, 'Jakarta Barat', 'Kolat SMP Yayasan 2 Mei'),
(41, 'Jakarta Barat', 'Kolat RAUM'),
(42, 'Jakarta Selatan', 'Kolat Karang Taruna Tebet'),
(43, 'Jakarta Selatan', 'Kolat Bulungan'),
(44, 'Jakarta Selatan', 'Kolat ISTN'),
(45, 'Jakarta Selatan', 'Kolat SMAN 46'),
(46, 'Jakarta Selatan', 'Kolat SMAN 32'),
(47, 'Jakarta Selatan', 'Kolat GIS'),
(48, 'Jakarta Selatan', 'Kolat Al Izhar'),
(49, 'Jakarta Selatan', 'Kolat SMP 12'),
(50, 'Jakarta Selatan', 'Kolat SMP 19'),
(51, 'Jakarta Selatan', 'Kolat SMP Pangudi Luhur'),
(52, 'Jakarta Selatan', 'Kolat SDIT RPI'),
(53, 'Jakarta Selatan', 'Kolat Mentari Citra Elementary'),
(54, 'Jakarta Selatan', 'Kolat SDN GNR (Generasi Rabbani )'),
(55, 'Jakarta Selatan', 'Kolat Permata Hijau'),
(56, 'Jakarta Selatan', 'Kolat Permata Depok'),
(57, 'Jakarta Selatan', 'Kolat Cibubur'),
(58, 'Jakarta Selatan', 'Kolat Yon Zeni-2 Ma'),
(59, 'Jakarta Selatan', 'Kolat Karang Taruna Mampang'),
(60, 'Jakarta Selatan', 'Kolat Adria Bintaro'),
(61, 'Jakarta Selatan', 'Kolat Puri Bintaro hijau'),
(62, 'Jakarta Timur', 'Kolat Universitas Gunadarma.'),
(63, 'Jakarta Timur', 'Kolat SMA Karya Darma (KD )'),
(64, 'Jakarta Timur', 'Kolat SMA Budhi Warman'),
(65, 'Jakarta Timur', 'Kolat Mustika Braja (KMB)'),
(66, 'Jakarta Timur', 'SMP 281 jakarta (ranting KMB)'),
(67, 'Jakarta Timur', 'SMK BW 1 (ranting KMB)'),
(68, 'Jakarta Timur', 'SD 06 Pinang ranti (ranting KMB)'),
(69, 'Jakarta Timur', 'Tempat latihan di jati mekar kodau, bekasi.(ranting KMB)'),
(70, 'Jakarta Timur', 'Kolat Baru'),
(71, 'Jakarta Timur', 'SMAN 54'),
(72, 'Jakarta Timur', 'SMA 34'),
(73, 'Jakarta Timur', 'Kolat LIA'),
(74, 'Jakarta Timur', 'Kolat Dewi Sartika, Cililitan'),
(75, 'Jakarta Timur', 'Kolat SMA 62'),
(76, 'Jakarta Timur', 'Kolat Amperas'),
(77, 'Jakarta Timur', 'Kolat Bukaka'),
(78, 'Jakarta Timur', 'Kolat SMAN 105'),
(79, 'Jakarta Timur', 'Kolat SMAN 104'),
(80, 'Jakarta Timur', 'Kolat IKIP/Lab School'),
(81, 'Jakarta Timur', 'Kolat STIE Rawamangun');

-- --------------------------------------------------------

--
-- Table structure for table `medali`
--

CREATE TABLE `medali` (
  `id_medali` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `kontingen` varchar(55) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `medali` varchar(25) NOT NULL,
  `id_partai_FK` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_atlet`
--

CREATE TABLE `nilai_atlet` (
  `id_nilaiatlet` int(11) NOT NULL,
  `no_partai` varchar(5) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `kontingen` varchar(100) NOT NULL,
  `hukuman` varchar(5) NOT NULL DEFAULT '0',
  `nilai` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ganda`
--

CREATE TABLE `nilai_ganda` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  `teknik_serang` int(11) NOT NULL,
  `mantap_kompak` int(11) NOT NULL,
  `serasi` int(11) NOT NULL,
  `hukum_1` int(11) NOT NULL,
  `hukum_2` int(11) NOT NULL,
  `hukum_3` int(11) NOT NULL,
  `hukum_4` int(11) NOT NULL,
  `hukum_5` int(11) NOT NULL,
  `hukum_6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_regu`
--

CREATE TABLE `nilai_regu` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  `jurus1` int(11) NOT NULL,
  `jurus2` int(11) NOT NULL,
  `jurus3` int(11) NOT NULL,
  `jurus4` int(11) NOT NULL,
  `jurus5` int(11) NOT NULL,
  `jurus6` int(11) NOT NULL,
  `jurus7` int(11) NOT NULL,
  `jurus8` int(11) NOT NULL,
  `jurus9` int(11) NOT NULL,
  `jurus10` int(11) NOT NULL,
  `jurus11` int(11) NOT NULL,
  `jurus12` int(11) NOT NULL,
  `kemantapan` int(11) NOT NULL,
  `hukum_1` int(11) NOT NULL,
  `hukum_2` int(11) NOT NULL,
  `hukum_3` int(11) NOT NULL,
  `hukum_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tanding`
--

CREATE TABLE `nilai_tanding` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` varchar(5) NOT NULL,
  `id_juri` varchar(1) NOT NULL,
  `button` varchar(55) NOT NULL,
  `nilai` int(11) NOT NULL,
  `sudut` varchar(55) NOT NULL,
  `babak` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tunggal`
--

CREATE TABLE `nilai_tunggal` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  `jurus1` int(11) NOT NULL,
  `jurus2` int(11) NOT NULL,
  `jurus3` int(11) NOT NULL,
  `jurus4` int(11) NOT NULL,
  `jurus5` int(11) NOT NULL,
  `jurus6` int(11) NOT NULL,
  `jurus7` int(11) NOT NULL,
  `jurus8` int(11) NOT NULL,
  `jurus9` int(11) NOT NULL,
  `jurus10` int(11) NOT NULL,
  `jurus11` int(11) NOT NULL,
  `jurus12` int(11) NOT NULL,
  `jurus13` int(11) NOT NULL,
  `jurus14` int(11) NOT NULL,
  `kemantapan` int(11) NOT NULL,
  `hukum_1` int(11) NOT NULL,
  `hukum_2` int(11) NOT NULL,
  `hukum_3` int(11) NOT NULL,
  `hukum_4` int(11) NOT NULL,
  `hukum_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `ID_peserta` int(11) NOT NULL,
  `nm_lengkap` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tpt_lahir` varchar(55) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tb` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `kelas` varchar(21) NOT NULL,
  `asal_sekolah` varchar(55) NOT NULL,
  `kategori_tanding` varchar(10) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `kode_gr` varchar(32) NOT NULL,
  `kelas_tanding_FK` varchar(4) NOT NULL,
  `kontingen` varchar(100) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `akta_lahir` varchar(128) NOT NULL,
  `ijazah` varchar(128) NOT NULL,
  `status` varchar(15) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`ID_peserta`, `nm_lengkap`, `jenis_kelamin`, `tpt_lahir`, `tgl_lahir`, `tb`, `bb`, `kelas`, `asal_sekolah`, `kategori_tanding`, `golongan`, `kode_gr`, `kelas_tanding_FK`, `kontingen`, `foto`, `ktp`, `akta_lahir`, `ijazah`, `status`, `role`, `email`, `password`) VALUES
(2, 'abdul', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Remaja', '', '1', 'BEKASI', '5559c214bf6c8ae3d77f20aa8a7db831PHPUnit.png', '', '5559c214bf6c8ae3d77f20aa8a7db831PHPUnit.png', '5559c214bf6c8ae3d77f20aa8a7db831PHPUnit.png', 'PAID', NULL, NULL, NULL),
(3, 'masrul', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Remaja', '', '1', 'SBY', 'fc95170ea8ef563c7f6318a98c3902e3PHPUnit.png', '', 'fc95170ea8ef563c7f6318a98c3902e3PHPUnit.png', 'fc95170ea8ef563c7f6318a98c3902e3PHPUnit.png', 'PAID', NULL, NULL, NULL),
(4, 'joji', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Usia Dini', '', '1', 'JOGJA', '2c4522a19f1b9e9ac76d4dfcc18c50abPHPUnit.png', '', '2c4522a19f1b9e9ac76d4dfcc18c50abPHPUnit.png', '2c4522a19f1b9e9ac76d4dfcc18c50abPHPUnit.png', 'PAID', NULL, NULL, NULL),
(5, 'gerry', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Remaja', '', '1', 'JKT', '6a9b23ff84c92d2cd7fd0ecccea5061aPHPUnit.png', '', '6a9b23ff84c92d2cd7fd0ecccea5061aPHPUnit.png', '6a9b23ff84c92d2cd7fd0ecccea5061aPHPUnit.png', 'PAID', '', '', 'c8837b23ff8aaa8a2dde915473ce0991'),
(6, 'gege', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Remaja', '', '1', 'BGR', 'ffd103eb72ca7726801004e22960f226PHPUnit.png', '', 'ffd103eb72ca7726801004e22960f226PHPUnit.png', 'ffd103eb72ca7726801004e22960f226PHPUnit.png', 'PAID', 'user', 'user@user.com', 'c8837b23ff8aaa8a2dde915473ce0991'),
(7, 'gagah', 'Laki-laki', 'Bekasi', '2023-06-01', 170, 65, '4', 'SMA 8', 'Tanding', 'Remaja', '', '1', 'BKS', '597290a55d624f45d90e4f692ca8f6c1PHPUnit.png', '', '597290a55d624f45d90e4f692ca8f6c1PHPUnit.png', '597290a55d624f45d90e4f692ca8f6c1PHPUnit.png', 'PAID', NULL, NULL, NULL),
(9, 'Moxie', 'Laki-laki', 'Bekasi', '1996-04-10', 170, 65, '', '', 'Tanding', 'Remaja', '', '', 'BEKASI', '59083c7e76796c9df8e733e3749b538aworkload.png', '', 'f9e175a5df168ce7f4b49a31caa9f1ecImage20230308085943.jpg', '', '', 'user', 'moxie@vip.com', 'asdf123'),
(11, 'asdf', 'Laki-laki', 'Bekasi', '3331-03-31', 170, 65, '', '', 'Tanding', 'Remaja', '', '', 'BEKASI', 'efae01b96a1c24e9b2a63d0482c95b17logo.jpg', '', 'efae01b96a1c24e9b2a63d0482c95b17logo.jpg', '', '', 'user', 'asdf@asdasd.com', '1adbb3178591fd5bb0c248518f39bf6d'),
(12, 'gerry', 'Laki-laki', 'Bekasi', '2000-09-19', 170, 65, '', '', 'Tanding', 'Remaja', '', '', 'KOLAT SMA 62', '57355bf8c5d2abb90992bcfa2a8e707flogo.jpg', '', '57355bf8c5d2abb90992bcfa2a8e707flogo.jpg', '', '', 'user', 'gerry@ok.com', '1adbb3178591fd5bb0c248518f39bf6d'),
(13, 'asdfa', 'Laki-laki', 'Bekasi', '2023-06-03', 170, 44, '', '', 'Tanding', 'Remaja', '', '2', 'UI', '0ca364bb33702ebb63f6ad939f131d66logo.jpg', '', '0ca364bb33702ebb63f6ad939f131d66logo.jpg', '', '', 'user', 'asfads@kasdk.com', '1adbb3178591fd5bb0c248518f39bf6d');

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `id_undian` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `no_undian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undian`
--

INSERT INTO `undian` (`id_undian`, `id_peserta`, `no_undian`) VALUES
(1, 2, 1),
(2, 3, 5),
(3, 5, 3),
(4, 6, 2),
(5, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `undian_tgr`
--

CREATE TABLE `undian_tgr` (
  `id_undiantgr` int(11) NOT NULL,
  `idpesertatgr` varchar(32) NOT NULL,
  `no_undian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wasit_juri`
--

CREATE TABLE `wasit_juri` (
  `id_juri` int(11) NOT NULL,
  `nm_juri` varchar(55) NOT NULL,
  `pass_juri` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wasit_juri`
--

INSERT INTO `wasit_juri` (`id_juri`, `nm_juri`, `pass_juri`) VALUES
(1, 'JURI 1', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'JURI 2', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'JURI 3', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'JURI 4', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'JURI 5', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `jadwal_tanding`
--
ALTER TABLE `jadwal_tanding`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indexes for table `jadwal_tgr`
--
ALTER TABLE `jadwal_tgr`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indexes for table `kelastanding`
--
ALTER TABLE `kelastanding`
  ADD PRIMARY KEY (`ID_kelastanding`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`ID_konfirmasi`);

--
-- Indexes for table `kontingen`
--
ALTER TABLE `kontingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medali`
--
ALTER TABLE `medali`
  ADD PRIMARY KEY (`id_medali`);

--
-- Indexes for table `nilai_atlet`
--
ALTER TABLE `nilai_atlet`
  ADD PRIMARY KEY (`id_nilaiatlet`);

--
-- Indexes for table `nilai_ganda`
--
ALTER TABLE `nilai_ganda`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_regu`
--
ALTER TABLE `nilai_regu`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_tanding`
--
ALTER TABLE `nilai_tanding`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_tunggal`
--
ALTER TABLE `nilai_tunggal`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`ID_peserta`);

--
-- Indexes for table `undian`
--
ALTER TABLE `undian`
  ADD PRIMARY KEY (`id_undian`);

--
-- Indexes for table `undian_tgr`
--
ALTER TABLE `undian_tgr`
  ADD PRIMARY KEY (`id_undiantgr`);

--
-- Indexes for table `wasit_juri`
--
ALTER TABLE `wasit_juri`
  ADD PRIMARY KEY (`id_juri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal_tanding`
--
ALTER TABLE `jadwal_tanding`
  MODIFY `id_partai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal_tgr`
--
ALTER TABLE `jadwal_tgr`
  MODIFY `id_partai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelastanding`
--
ALTER TABLE `kelastanding`
  MODIFY `ID_kelastanding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `ID_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medali`
--
ALTER TABLE `medali`
  MODIFY `id_medali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_atlet`
--
ALTER TABLE `nilai_atlet`
  MODIFY `id_nilaiatlet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_ganda`
--
ALTER TABLE `nilai_ganda`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_regu`
--
ALTER TABLE `nilai_regu`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_tanding`
--
ALTER TABLE `nilai_tanding`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_tunggal`
--
ALTER TABLE `nilai_tunggal`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `ID_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `undian`
--
ALTER TABLE `undian`
  MODIFY `id_undian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `undian_tgr`
--
ALTER TABLE `undian_tgr`
  MODIFY `id_undiantgr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wasit_juri`
--
ALTER TABLE `wasit_juri`
  MODIFY `id_juri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

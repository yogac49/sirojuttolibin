-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 10:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insan_kamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'jekichan', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ayah`
--

CREATE TABLE `tabel_ayah` (
  `nik_ayah` char(16) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `alamat_ayah` varchar(255) NOT NULL,
  `photo_ayah` varchar(255) NOT NULL,
  `no_hp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ayah`
--

INSERT INTO `tabel_ayah` (`nik_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `photo_ayah`, `no_hp`) VALUES
('3215130802950003', 'dede aja', 'Karawang', '2020-06-12', 'Diploma', 'Pegawai', 'Kopo-1-2-Dawuan-Cikampek-Karawang', 'ayah_3215130802950003.jpg', '085696254257'),
('3215130802970002', 'Jhonkar', 'Califronia', '2020-02-11', 'Diploma', 'Pegawai', 'Californiakota-3-2-Dawuan-Cikampek-Karawang', 'ayah_3215130802970002.jpg', '089501259635');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ibu`
--

CREATE TABLE `tabel_ibu` (
  `nik_ibu` char(16) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `alamat_ibu` varchar(255) NOT NULL,
  `photo_ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ibu`
--

INSERT INTO `tabel_ibu` (`nik_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `photo_ibu`) VALUES
('3215130802950004', 'Aura Kasih', 'Karawang', '2020-06-11', 'Sarjana', 'Pegawai', 'Kopo-1-2-Dawuan-Cikampel-Karawang', 'ibu_3215130802950004.jpg'),
('3215130802970003', 'Bristie', 'Karawang', '2020-06-02', 'Sarjana', 'Pegawai', 'Kopo-3-3-Dawuan-Cikampel-Karawang', 'ibu_3215130802970003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembayaran`
--

CREATE TABLE `tabel_pembayaran` (
  `no_pembayaran` char(17) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pemilik_rek` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pembayaran`
--

INSERT INTO `tabel_pembayaran` (`no_pembayaran`, `tgl_bayar`, `pemilik_rek`, `bank`, `bukti_bayar`, `status`) VALUES
('B1593507798', '2030-06-20', 'maya prili', 'mandiri', 'bukti1.png', 'Sudah Di Konfirmasi'),
('B1593572812', '2001-07-20', 'firman', 'mandiri', 'bukti2.jpg', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `no_pendaftaran` varchar(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nik_siswa` char(16) NOT NULL,
  `nik_ayah` char(16) NOT NULL,
  `nik_ibu` char(16) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `no_pembayaran` char(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`no_pendaftaran`, `tgl_daftar`, `nik_siswa`, `nik_ayah`, `nik_ibu`, `id_admin`, `no_pembayaran`) VALUES
('P01', '2030-06-20', '3215130802960002', '3215130802950003', '3215130802950004', 1, 'B1593507798'),
('P02', '2001-07-20', '3215130802970001', '3215130802970002', '3215130802970003', 1, 'B1593572812');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `nik_siswa` char(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jmlh_saudara_kandung` int(2) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`nik_siswa`, `username`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `anak_ke`, `jmlh_saudara_kandung`, `berat_badan`, `tinggi_badan`, `gol_darah`, `photo`) VALUES
('3215130802960002', 'maya08', 'maya prili', 'may', 'perempuan', 'karawang', '2020-06-01', 'islam', 'cikopo-1-2-kopo-cikopo-purwakarta', 1, 2, 52, 165, 'B', 'anak_3215130802960002.jpg'),
('3215130802970001', 'firman', 'firman', 'syah', 'laki-laki', 'krw', '2020-06-17', 'islam', 'pawarengan-1-2-dawuan-cikmpk-krw', 1, 2, 50, 165, 'A', 'anak_3215130802970001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  ADD PRIMARY KEY (`nik_ayah`);

--
-- Indexes for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  ADD PRIMARY KEY (`nik_ibu`);

--
-- Indexes for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`);

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`nik_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

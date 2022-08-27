-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2022 at 09:44 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_bismen`
--

CREATE TABLE `tb_siswa_bismen` (
  `id_siswa` int(11) NOT NULL,
  `nis_siswa` varchar(15) NOT NULL,
  `nisn_siswa` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `nama_org_tua` varchar(50) NOT NULL,
  `program_keahlian` varchar(50) NOT NULL,
  `paket_keahlian` varchar(50) NOT NULL,
  `status_kelulusan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pai` int(11) NOT NULL,
  `pkn` int(11) NOT NULL,
  `b_ind` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `sejindo` int(11) NOT NULL,
  `b_ing` int(11) NOT NULL,
  `senbud` int(11) NOT NULL,
  `pjok` int(11) NOT NULL,
  `simdig` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `produktif` int(11) NOT NULL,
  `rata_rata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_tekno`
--

CREATE TABLE `tb_siswa_tekno` (
  `id_siswa` int(11) NOT NULL,
  `nis_siswa` varchar(15) NOT NULL,
  `nisn_siswa` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `nama_org_tua` varchar(50) NOT NULL,
  `program_keahlian` varchar(50) NOT NULL,
  `paket_keahlian` varchar(50) NOT NULL,
  `status_kelulusan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pai` int(11) NOT NULL,
  `pkn` int(11) NOT NULL,
  `b_ind` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `sejindo` int(11) NOT NULL,
  `b_ing` int(11) NOT NULL,
  `senbud` int(11) NOT NULL,
  `pjok` int(11) NOT NULL,
  `simdig` int(11) NOT NULL,
  `fisika` int(11) NOT NULL,
  `kimia` int(11) NOT NULL,
  `produktif` int(11) NOT NULL,
  `rata_rata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_siswa_tekno`
--

INSERT INTO `tb_siswa_tekno` (`id_siswa`, `nis_siswa`, `nisn_siswa`, `password`, `nama_siswa`, `kelas`, `tempat_lahir`, `tgl_lahir`, `nama_org_tua`, `program_keahlian`, `paket_keahlian`, `status_kelulusan`, `status`, `pai`, `pkn`, `b_ind`, `mtk`, `sejindo`, `b_ing`, `senbud`, `pjok`, `simdig`, `fisika`, `kimia`, `produktif`, `rata_rata`) VALUES
(1, '12345', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Andi ', 'XII TKJ 1', 'Serang', '28-08-2002', 'Ando', 'Teknik Komputer dan Jaringan', 'Teknik Komputer dan Jaringan', 'LULUS', 'siswa', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_siswa_bismen`
--
ALTER TABLE `tb_siswa_bismen`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_siswa_tekno`
--
ALTER TABLE `tb_siswa_tekno`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa_bismen`
--
ALTER TABLE `tb_siswa_bismen`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa_tekno`
--
ALTER TABLE `tb_siswa_tekno`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 05:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lec`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(255) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `level` varchar(30) NOT NULL,
  `id_siswa` varchar(255) NOT NULL,
  `id_pengajar` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `status`, `tipe`, `hari`, `jam`, `pertemuan`, `level`, `id_siswa`, `id_pengajar`) VALUES
(1, 'AC133', 'aktif', 'private', 'senin', '12 - 10:30 AM', 6, '1', '23', 49);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_meta`
--

CREATE TABLE `kelas_meta` (
  `id` int(255) NOT NULL,
  `nama_meta` varchar(255) NOT NULL,
  `nilai_meta` longtext NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(255) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `status_pengumuman` varchar(20) NOT NULL,
  `id_operator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(255) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tgl_cetak` varchar(20) NOT NULL,
  `tgl_terbit` varchar(20) NOT NULL,
  `tgl_mengambil` varchar(20) NOT NULL,
  `pemberi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `tgl_lahir`, `alamat`, `telpon`, `email`, `password`, `status`, `foto`, `level`) VALUES
(1, 'admin', 'admin', '20 agustus 1992', 'jalan maluku no. 30', '08999977711', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'aktif', '', 1),
(6, 'wayan', 'wayan sutiti', '24/09/2017', 'jalan pulau komodo no.20', '3424524342432', 'wayan@gmail.com', '08ce4ddd57c3472c321c194a51ae66b0', 'aktif', '', 2),
(8, 'komang', 'Komang Sudaini', '10/28/2017', 'Denpasar', '082147483647', 'komangsudani@gmail.com', '3da015fb8727d60123f0543d2e6a63fa', 'aktif', 'http://192.168.1.2/lec/uploads/no_photo2.jpg', 2),
(13, 'komangg', 'Komang Sudaini', '03/09/2016', 'Denpasar', '082147483647', 'komangsudanii@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'tidak aktif', '', 2),
(14, 'sdfasd', 'asdf', '09/28/2017', 'sadf', '1244344325', 'sdfas@asdf.com', '21232f297a57a5a743894a0e4a801fc3', 'tidak aktif', '', 4),
(15, 'gilang', 'gilang', '07/07/1999', 'jalan mas no 29', '121212212', 'gilang@gilang.com', '4297f44b13955235245b2497399d7a93', 'tidak aktif', '', 4),
(23, 'kadek', 'gilang', '10/06/2017', 'jalan', '13243124', 'g@gilang.com', '4297f44b13955235245b2497399d7a93', 'tidak aktif', '', 4),
(48, 'uuuu', 'gilang', '09/14/2017', 'jalan pulau komodo no.20', 'admin', 'sadf@gsda.com', '21232f297a57a5a743894a0e4a801fc3', 'aktif', '', 4),
(49, 'pengajar', 'pengajar', '09/27/2017', 'jalan pulau komodo no.20', '32423424342424243', 'pengajar@penagajar.com', '4297f44b13955235245b2497399d7a93', 'aktif', 'http://192.168.1.2/lec/uploads/Jellyfish.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(255) NOT NULL,
  `nama_meta` varchar(225) NOT NULL,
  `nilai_meta` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `nama_meta`, `nilai_meta`, `id_user`) VALUES
(2, 'nik', '17001', 6),
(3, 'nik', '171001', 8),
(5, 'nik', '17001', 13),
(6, 'kode_pengajar', '34234', 49),
(7, '', 'cc444', 0),
(8, '', 'c44', 0),
(9, '', 'ssss', 0),
(10, '', 'sdfdffd', 0),
(11, '', 'cvfhgh', 0),
(12, '', 'vvvffff', 0),
(13, '', 'vvvffff', 0),
(14, '', 'cc333', 0),
(15, '', 'cc333', 0),
(16, '', 'cc333', 0),
(17, '', 'cc333', 0),
(18, '', 'ddscdfcf', 0),
(19, '', 'ddscdfcf', 0),
(20, 'kode_siswa', 'cc22', 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_meta`
--
ALTER TABLE `kelas_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas_meta`
--
ALTER TABLE `kelas_meta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

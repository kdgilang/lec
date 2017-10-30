-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 09:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lec`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `status`, `tipe`, `hari`, `jam`, `pertemuan`, `level`, `id_siswa`, `id_pengajar`) VALUES
(1, 'A172', 'aktif', 'group', 'senin,selasa,rabu', '12:00 PM - 01:30 PM', 15, '1', '62,51,52,55,56,57,58,59,60,61', 49),
(3, 'B172', 'aktif', 'group', 'kamis,jumat,sabtu', '01:00 PM - 02:30 PM', 15, '2', '65,66,67,68,69,70,71,72,73,74', 53),
(4, 'PRIVATE TEGUH', 'aktif', 'private', 'senin,selasa,rabu', '10:00 AM - 11:00 AM', 15, '5', '63', 49),
(5, 'PRIVATE JANE', 'aktif', 'private', 'selasa,rabu,kamis', '01:00 PM - 02:00 PM', 15, '5', '64', 53),
(6, 'PRIVATE GUNA', 'aktif', 'private', 'kamis,jumat,sabtu', '03:00 PM - 04:00 PM', 15, '1', '76', 53),
(7, 'PRIVATE YOGA', 'aktif', 'private', 'senin,selasa,rabu', '11:00 AM - 12:00 PM', 15, '1', '77', 49),
(8, 'PRIVATE IRENE', 'aktif', 'private', 'selasa,rabu,kamis', '01:00 PM - 02:00 PM', 15, '2', '78', 49),
(9, 'PRIVATE PASEK', 'aktif', 'private', 'senin,rabu,jumat', '06:00 PM - 06:00 PM', 15, '1', '75', 81);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_meta`
--

CREATE TABLE IF NOT EXISTS `kelas_meta` (
`id` int(255) NOT NULL,
  `nama_meta` varchar(255) NOT NULL,
  `nilai_meta` longtext NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_meta`
--

INSERT INTO `kelas_meta` (`id`, `nama_meta`, `nilai_meta`, `id_kelas`) VALUES
(1, 'absensi-0', '-1,-1', 1),
(2, 'absensi-1', '51,-1', 1),
(3, 'absensi-2', '-1,-1', 1),
(4, 'absensi-3', '-1,-1', 1),
(5, 'absensi-4', '-1,-1', 1),
(6, 'absensi-5', '-1,-1', 1),
(7, 'absensi-6', '-1,-1', 1),
(8, 'absensi-7', '-1,-1', 1),
(9, 'absensi-8', '-1,-1', 1),
(10, 'absensi-9', '-1,-1', 1),
(11, 'absensi-10', '-1,-1', 1),
(12, 'absensi-11', '-1,-1', 1),
(13, 'absensi-12', '-1,-1', 1),
(14, 'absensi-13', '-1,-1', 1),
(15, 'absensi-14', '-1,-1', 1),
(16, 'absensi-0', '52', 3),
(17, 'absensi-1', '52', 3),
(18, 'absensi-2', '52', 3),
(19, 'absensi-3', '-1', 3),
(20, 'absensi-4', '-1', 3),
(21, 'absensi-5', '-1', 3),
(22, 'absensi-6', '-1', 3),
(23, 'absensi-7', '-1', 3),
(24, 'absensi-8', '-1', 3),
(25, 'absensi-9', '-1', 3),
(26, 'absensi-10', '-1', 3),
(27, 'absensi-11', '-1', 3),
(28, 'absensi-12', '-1', 3),
(29, 'absensi-13', '-1', 3),
(30, 'absensi-14', '-1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
`id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` longtext NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_operator` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `konten`, `tanggal`, `status`, `id_operator`) VALUES
(1, 'Hari Raya Galungan', '{"ops":[{"insert":"Berkenaan dengan adanya hari raya Galungan dan Kuningan, maka pertemuan pada tanggal 9 - 11 Februari dan 8 - 10 Maret ditiadakan.\\nBagi umat yang merayakan semoga selalu diberkahi kebahagiaan dan keselamatan serta kesehatan.\\n"}]}', '08/02/2017', 'aktif', 1),
(2, 'Hari Raya Idul Fitri', '{"ops":[{"insert":"Berkenaan dengan adanya hari raya Idul Fitri 1 Syawal 1438 H, maka pertemuan pada tanggal 24 - 30 Juni di tiadakan.\\nBagi umat yang merayakan mohon maaf lahir dan batin.\\n"}]}', '11/06/2017', 'aktif', 1),
(4, 'Libur Nyepi ', '{"ops":[{"insert":"Berikut kami informasikan pengumuman Libur Hari Raya Nyepi Tahun Baru Caka 1937, Terima kasih. \\n"}]}', '03/17/2017', 'aktif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE IF NOT EXISTS `sertifikat` (
`id` int(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `tgl_cetak` varchar(20) NOT NULL,
  `tgl_terbit` varchar(20) NOT NULL,
  `tgl_ambil` varchar(20) NOT NULL,
  `id_operator` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `id_pengajar` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `status`, `level`, `tgl_cetak`, `tgl_terbit`, `tgl_ambil`, `id_operator`, `id_siswa`, `id_pengajar`) VALUES
(1, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 51, 49),
(2, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 52, 49),
(3, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 55, 49),
(4, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 56, 49),
(5, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 57, 49),
(6, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 58, 49),
(7, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 59, 49),
(8, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 60, 49),
(9, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 61, 49),
(10, 'selesai', 1, '11/05/2017', '11/13/2017', '11/18/2017', 1, 62, 49),
(11, 'selesai', 1, '11/19/2017', '11/26/2017', '12/01/2017', 1, 75, 81),
(12, 'selesai', 1, '11/19/2017', '11/26/2017', '12/01/2017', 1, 76, 53);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `tgl_lahir`, `alamat`, `telpon`, `email`, `password`, `status`, `foto`, `level`) VALUES
(1, 'admin', 'admin', '20 agustus 1992', 'jalan maluku no. 30', '08999977711', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'aktif', '', 1),
(6, 'wayan', 'Wayan Adnyana', '12/03/2017', 'Denpasar', '082147483647', 'wayanadnyana@gmail.com', '08ce4ddd57c3472c321c194a51ae66b0', 'aktif', '', 2),
(8, 'komang', 'Komang Sudani', '10/28/2017', 'Denpasar', '082147483647', 'komangsudani@gmail.com', '3da015fb8727d60123f0543d2e6a63fa', 'aktif', 'http://localhost/lec/uploads/no_profile.jpg', 2),
(49, 'alung', 'Alung Lingga', '09/27/2017', 'Denpasar 	', '+61 (0) 3 8376 6284', 'alung@gmail.com', '696ed7534349804cf5050ae88bc994ba', 'aktif', 'http://localhost/lec/uploads/alung.jpg', 3),
(51, 'purpadi', 'Ida Ayu Kadek Purpadi Sari', '03/10/1993', 'Jln. Seroja Gang Jembrana No 4 A Denpasar', '085792323113', 'dayupurpadisari6@gmail.com', '3d2a36b4d4071239e7375e91302380ef', 'aktif', '', 4),
(52, 'winata', 'Made Mardhi Winata', '05/06/1995', 'Jl. Bhuana Raya, Puri Bhuana 1 No 5', '081338758285', 'mardhiwinata23@gmail.com', '29bcb3684c6efaa7a69d88feaa0dcda9', 'aktif', 'http://localhost/lec/uploads/no_photo9.jpg', 4),
(53, 'gunawan', 'Putra Gunawan', '10/01/2017', 'Denpasar', '+61 (0) 3 8376 6284', 'gunawan@gmail.com', 'dc96b97c4ffbead46ca25ef5d4b77cbe', 'aktif', 'http://localhost/lec/uploads/putra_gunawan.jpg', 3),
(55, 'ade', 'Ade Putra Pratama', '07/19/1991', 'Jalan Nusa Kambangan', '0857 9234 0023', 'ade.p19@gmail.com', 'a562cfa07c2b1213b3a5c99b756fc206', 'aktif', 'http://localhost/lec/uploads/no_profile2.jpg', 4),
(56, 'dwi', 'Dwi Noviani ', '11/23/1994', 'Jalan Pulau Buton', '0815 5530 9688', 'noviani.dwi@yahoo.co.id', '7aa2602c588c05a93baf10128861aeb9', 'aktif', 'http://localhost/lec/uploads/no_profile3.jpg', 4),
(57, 'kiki', 'Kadek Kiki Permanan', '06/15/1992', 'jalan Tukad Yeh Aya no.20', '0899 6145 568', 'kikipermana_@gmail.com', '0d61130a6dd5eea85c2c5facfe1c15a7', 'aktif', 'http://localhost/lec/uploads/no_profile4.jpg', 4),
(58, 'eka', 'Ni Putu Eka Hermawati', '01/01/1993', 'Jalan Tukad Badung no.118', '0877 7390 9580', 'hey.ekaa@gmail.com', '79ee82b17dfb837b1be94a6827fa395a', 'aktif', 'http://localhost/lec/uploads/no_profile5.jpg', 4),
(59, 'fajar', 'Fajar Wibawa', '02/13/1994', 'Jalan Pulau Kawe no3', '0899 3148 971', 'ffajar3194@gmail.com', '24bc50d85ad8fa9cda686145cf1f8aca', 'aktif', 'http://localhost/lec/uploads/no_profile6.jpg', 4),
(60, 'arya', 'Arya Pratama Permana', '09/17/1993', 'Jalan Pulau Kawe no 26', '0812 3685 8576', 'arya.app@gmail.com', '5882985c8b1e2dce2763072d56a1d6e5', 'aktif', 'http://localhost/lec/uploads/no_profile7.jpg', 4),
(61, 'mega', 'Ni Luh Mega Yanti Dewi', '12/21/1989', 'Jalan Raya Sesetan no 60', '0821 4492 5490', 'megayanti.d@yahoo.co.id', '91805ec00ad20b85226bec0bacf843d3', 'aktif', 'http://localhost/lec/uploads/no_profile8.jpg', 4),
(62, 'tedi', 'Tedi Mahendra Jaya', '03/21/1995', 'Jalan Tukad Balian no 44', '0821 2234 5699', 'jayatediii@gmail.com', 'cc1e1887fb2c20cccc72a729c73fb73b', 'aktif', 'http://localhost/lec/uploads/no_profile9.jpg', 4),
(63, 'teguh', 'Teguh Sedana Purnama', '03/24/1994', 'Jalan Tukad Yeh Aya no 3', '0899 4328 972', 'teguhpurnama@gmail.com', 'f5cd3a020bc94866049206a7cf14e266', 'aktif', 'http://localhost/lec/uploads/no_profile10.jpg', 4),
(64, 'jane', 'Jane Adriyani Sirait', '07/13/1995', 'Jalan Tukad Banyuning H no 26', '0877 7689 9930', 'janeadriyani13@gmail.com', '5844a15e76563fedd11840fd6f40ea7b', 'aktif', 'http://localhost/lec/uploads/no_profile11.jpg', 4),
(65, 'heni', 'Luh Heni Antari ', '02/07/1995', 'Jalan Kerta Dalem', '0857 9208 0844', 'heniantari@yahoo.co.id', 'cd07a63af5f14ac0d51b5bbbf6e93ae9', 'aktif', 'http://localhost/lec/uploads/no_profile12.jpg', 4),
(66, 'ayu', 'Ayu Desy Dharmaswari', '12/13/1995', 'Jalan Hayam Wuruk no 223', '0821 4492 5590', 'ayu.cyur@gmail.com', '29c65f781a1068a41f735e1b092546de', 'aktif', 'http://localhost/lec/uploads/no_profile13.jpg', 4),
(67, 'nining', 'Nining Puspita Ningsih', '08/14/1992', 'Jalan Imam Bonjol no 45', '0813 37 9991 2488', 'nining.pn@gmail.com', 'd844d7002741826f01a93f58e67effa1', 'aktif', 'http://localhost/lec/uploads/no_profile14.jpg', 4),
(68, 'agus', 'I Gede Agus Putra Wirawan', '04/13/1994', 'Jalan Anyelir Gang Rama Asri', '0899 3321 899', 'agusputrawirawan@gmail.com', 'fdf169558242ee051cca1479770ebac3', 'aktif', 'http://localhost/lec/uploads/no_profile15.jpg', 4),
(69, 'pram', 'Pramanatha Agung', '04/26/1994', 'Jalan Kusuma Bangsa III', '0852 9831 0011', 'agungpram@gmail.com', '328b6047c62d4de24eb547db647094df', 'aktif', 'http://localhost/lec/uploads/no_profile16.jpg', 4),
(70, 'juli', 'Kadek Dewa Juli', '07/29/1995', 'Jalan Hayam Wuruk', '0812 3690 9004', 'dewajuli@gmail.com', '4c37dbfae76a9a48544d7248127d2d29', 'aktif', 'http://localhost/lec/uploads/no_profile17.jpg', 4),
(71, 'ryan', 'Gede Ryan Gunawan', '11/28/1996', 'Jalan Tukad Batanghari VII 12', '0896 1618 791', 'ryangunawan@gmail.com', '10c7ccc7a4f0aff03c915c485565b9da', 'aktif', 'http://localhost/lec/uploads/no_profile18.jpg', 4),
(72, 'putra', 'Putra Renov', '01/03/1994', 'Jalan Sedap Malam no 9', '0878 6445 7833', 'putrarenov@gmail.com', '5e0c5a0bf82decdd43b2150b622c66c5', 'aktif', 'http://localhost/lec/uploads/no_profile19.jpg', 4),
(73, 'indah', 'Ni Kadek Indah Seroja', '09/01/1996', 'Jalan Hayam Wuruk no 90', '0812 3609 0096', 'indahseroja@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', 'aktif', 'http://localhost/lec/uploads/no_profile20.jpg', 4),
(74, 'oka', 'Prawira Putra Oka', '10/17/1997', 'Jalan Tukad Balian', '0878 6457 1414', 'prawiraoka@yahoo.com', 'dcf80b2416ca823e8d807558a9310eb3', 'aktif', 'http://localhost/lec/uploads/no_profile21.jpg', 4),
(75, 'pasek', 'I Komang Pasek Antara', '12/14/1995', 'Jalan Tukad Citarum no 5', '0899 1015 991', 'pasek.antara95@gmail.com', '5316495585adc0372353dbfdb87df305', 'aktif', 'http://localhost/lec/uploads/no_profile22.jpg', 4),
(76, 'efendi', 'Guna Efendi', '03/09/1996', 'Jalan Nusa Indah no 40', '0821 6909 4754', 'gunaefendi@gmail.com', 'd09c7b7c72046ad43f3bacd7d4f54268', 'aktif', 'http://localhost/lec/uploads/no_profile23.jpg', 4),
(77, 'yoga', 'I Gst  A Ngr Yoga Aristanaya', '05/31/1995', 'Jalan Gunung Agung no 90', '0857 9214 4125', 'yogaaris@gmail.com', '807659cd883fc0a63f6ce615893b3558', 'aktif', 'http://localhost/lec/uploads/no_profile24.jpg', 4),
(78, 'irene', 'Irene Audria Sitepu', '08/17/1999', 'Jalan Gunung Angung Gang Yamuna No 3 Denpasar Bali', '087787025453', 'ireneaudr@gmail.com', '4feaf7069df098a519b1aa5c5b065ec5', 'aktif', 'http://localhost/lec/uploads/no_profile25.jpg', 4),
(81, 'galuh', 'Galuh Ginanti', '08/25/1989', 'Jalan Raya Sesetan no 45', '0833 8376 6284', 'galuhganti@gmail.com', '7e67f82b2528050191537b600c15f48e', 'aktif', 'http://localhost/lec/uploads/galuh_ginanti.jpg', 3),
(82, 'wiwik', 'Wiwik Marlia', '01/24/1990', 'Jalan Tukad Batanghari IX no 2', '0857 3898 9092', 'wiwikmarlia@gmail.com', '0fd1ec5593cd341c7c4af53276f10be6', 'aktif', 'http://localhost/lec/uploads/no_profile28.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE IF NOT EXISTS `user_meta` (
`id` int(255) NOT NULL,
  `nama_meta` varchar(225) NOT NULL,
  `nilai_meta` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `nama_meta`, `nilai_meta`, `id_user`) VALUES
(2, 'nik', '17001', 6),
(3, 'nik', '17002 	', 8),
(5, 'nik', '17001', 13),
(6, 'kode_pengajar', '171001', 49),
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
(20, 'kode_siswa', 'cc22', 48),
(21, 'pembayaran', 'belum lunas', 48),
(22, 'kode_siswa', '1017001', 51),
(23, 'pembayaran', 'lunas', 51),
(24, 'kode_siswa', 'ccaa', 14),
(25, 'pembayaran', 'belum lunas', 14),
(26, 'pembayaran', 'belum lunas', 14),
(27, 'pembayaran', 'belum lunas', 14),
(28, 'pembayaran', 'belum lunas', 14),
(29, 'pembayaran', 'belum lunas', 14),
(30, 'pembayaran', 'belum lunas', 14),
(31, 'pembayaran', 'belum lunas', 14),
(32, 'pembayaran', 'belum lunas', 14),
(33, 'pembayaran', 'belum lunas', 14),
(34, 'kode_siswa', '1017002', 52),
(35, 'pembayaran', 'Status Pembayaran', 1),
(36, 'kode_pengajar', '171002 	', 53),
(37, 'pembayaran', 'lunas', 52),
(38, 'nik', '101703', 54),
(39, 'kode_siswa', '1017003', 55),
(40, 'pembayaran', 'lunas', 55),
(41, 'kode_siswa', '1017004', 56),
(42, 'kode_siswa', '1017005', 57),
(43, 'kode_siswa', '1017006', 58),
(44, 'kode_siswa', '1017007', 59),
(45, 'kode_siswa', '1017008', 60),
(46, 'kode_siswa', '1017009', 61),
(47, 'kode_siswa', '1017010', 62),
(48, 'pembayaran', 'lunas', 56),
(49, 'pembayaran', 'lunas', 57),
(50, 'pembayaran', 'lunas', 58),
(51, 'pembayaran', 'lunas', 59),
(52, 'pembayaran', 'lunas', 60),
(53, 'pembayaran', 'lunas', 61),
(54, 'kode_siswa', '4017001', 63),
(55, 'kode_siswa', '4017002', 64),
(56, 'kode_siswa', '2017001', 65),
(57, 'kode_siswa', '2017002', 66),
(58, 'kode_siswa', '2017003', 67),
(59, 'kode_siswa', '2017004', 68),
(60, 'kode_siswa', '2017005', 69),
(61, 'kode_siswa', '2017006', 70),
(62, 'kode_siswa', '2017007', 71),
(63, 'kode_siswa', '2017008', 72),
(64, 'pembayaran', 'lunas', 71),
(65, 'pembayaran', 'lunas', 72),
(66, 'kode_siswa', '2017009', 73),
(67, 'kode_siswa', '2017010', 74),
(68, 'kode_siswa', '1017011', 75),
(69, 'kode_siswa', '1017012', 76),
(70, 'kode_siswa', '1017013', 77),
(71, 'pembayaran', 'lunas', 77),
(72, 'kode_siswa', '2017011', 78),
(73, 'pembayaran', 'lunas', 75),
(74, 'pembayaran', 'lunas', 62),
(75, 'pembayaran', 'lunas', 63),
(76, 'pembayaran', 'lunas', 64),
(77, 'pembayaran', 'lunas', 65),
(78, 'pembayaran', 'lunas', 66),
(79, 'pembayaran', 'lunas', 67),
(80, 'pembayaran', 'lunas', 68),
(81, 'pembayaran', 'lunas', 69),
(82, 'pembayaran', 'lunas', 70),
(83, 'pembayaran', 'lunas', 73),
(84, 'pembayaran', 'lunas', 74),
(85, 'pembayaran', 'lunas', 76),
(86, 'pembayaran', 'lunas', 78),
(87, 'kode_siswa', 'qq', 79),
(88, 'kode_siswa', 'wqe', 80),
(89, 'kode_pengajar', '172003', 81),
(90, 'kode_pengajar', '172004', 82),
(91, 'kode_siswa', '1232', 83);

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
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `username` (`username`);

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
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kelas_meta`
--
ALTER TABLE `kelas_meta`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

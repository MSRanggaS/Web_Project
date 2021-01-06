-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2021 at 03:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarkelas`
--

DROP TABLE IF EXISTS `daftarkelas`;
CREATE TABLE IF NOT EXISTS `daftarkelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarkelas`
--

INSERT INTO `daftarkelas` (`id`, `namakelas`, `kapasitas`, `keterangan`) VALUES
(1, 'Newton', 25, ''),
(2, 'Avicena', 50, ''),
(3, 'Da Vinci', 69, 'Kelas seni'),
(4, 'Grahambel', 10, 'Fisika'),
(5, 'Gandhi', 15, 'Sosmas');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_jawaban`
--

DROP TABLE IF EXISTS `daftar_jawaban`;
CREATE TABLE IF NOT EXISTS `daftar_jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `penjawab` varchar(50) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pertanyaan` int(11) NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_jawaban`
--

INSERT INTO `daftar_jawaban` (`id_jawaban`, `penjawab`, `jawaban`, `tgl_post`, `id_pertanyaan`) VALUES
(1, 'Murid 1', 'sesuka anda', '2021-01-03 17:37:29', 12),
(2, 'Murid 1', '', '2021-01-03 17:37:48', 12),
(3, 'Murid 1', '', '2021-01-03 17:38:02', 9),
(4, 'Murid 1', '', '2021-01-03 17:42:28', 9),
(5, 'Murid 1', 'yang jelas bukan proton', '2021-01-03 17:59:16', 10),
(6, 'Murid 1', '69 69 69', '2021-01-03 18:00:15', 11),
(7, 'Murid 1', '96 96 96', '2021-01-03 18:00:24', 11),
(8, 'Murid 1', 'yang jelas bukan neutron', '2021-01-03 18:03:01', 10),
(9, 'Murid 1', 'hasilnya ya rundingan dong gitu aja masih tanya', '2021-01-03 18:07:13', 8),
(10, 'Murid 1', 'pepek a i', '2021-01-03 18:09:38', 9),
(11, 'Murid 1', 'your PP', '2021-01-03 18:10:18', 10),
(12, 'Guru 1', 'mana pertanyaannya?', '2021-01-04 13:05:35', 13),
(13, 'Guru 1', 'S + Ving', '2021-01-05 16:23:12', 14);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_materi`
--

DROP TABLE IF EXISTS `daftar_materi`;
CREATE TABLE IF NOT EXISTS `daftar_materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(50) NOT NULL,
  `materi` varchar(10000) NOT NULL,
  `live` varchar(20) DEFAULT NULL,
  `pemateri` varchar(50) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_materi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_materi`
--

INSERT INTO `daftar_materi` (`id_materi`, `mata_pelajaran`, `materi`, `live`, `pemateri`, `tgl_post`) VALUES
(1, 'PPKN', 'Dokuritsu Junbi Coosakai adalah nama lain dari BPUPKI', 'Tidak Live', 'Guru 1', '2021-01-03 16:35:22'),
(2, 'Bahasa Inggris', 'Present tense rumusnya S + V1', NULL, 'Guru 1', '2021-01-04 17:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pertanyaan`
--

DROP TABLE IF EXISTS `daftar_pertanyaan`;
CREATE TABLE IF NOT EXISTS `daftar_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(50) NOT NULL,
  `pertanyaan` varchar(10000) NOT NULL,
  `urgent` varchar(20) DEFAULT NULL,
  `penanya` varchar(50) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pertanyaan`
--

INSERT INTO `daftar_pertanyaan` (`id_pertanyaan`, `mata_pelajaran`, `pertanyaan`, `urgent`, `penanya`, `tgl_post`) VALUES
(8, '', 'apa hasil dari KMB?', '0', 'murid 2', '2020-12-29 05:11:32'),
(7, '', 'Apa saja yang anda ketahui tentang homo sapiens?', '0', 'murid 2', '2020-12-29 05:11:07'),
(9, 'Sejarah', 'apa itu dokuritsu junbi inkai?', NULL, 'Murid 1', '2021-01-03 16:02:08'),
(10, 'Kimia', 'apa itu elektron?', 'Tidak Urgent', 'Murid 1', '2021-01-03 16:10:19'),
(11, 'Matematika', '69 x apakah sama dengan 96x?', 'Urgent', 'Murid 1', '2021-01-03 16:11:38'),
(12, 'Bahasa Indonesia', 'penggunaan titik dan koma bagaimana?', 'Urgent', 'Murid 1', '2021-01-03 16:13:58'),
(13, 'Mata Pelajaran', '', 'Tidak Urgent', 'Murid 1', '2021-01-04 02:20:49'),
(14, 'Bahasa Inggris', 'Rumus continous tense bagaimana?', 'Tidak Urgent', 'Murid 1', '2021-01-05 16:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `kelass` varchar(255) NOT NULL,
  `peran` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `user`, `kelass`, `peran`) VALUES
(8, 'murid 2', 'Newton', ''),
(9, 'murid 2', 'Da Vinci', ''),
(27, 'Murid 1', 'Avicena', 'Murid'),
(26, 'Murid 1', 'Newton', 'Murid');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `namadepan` varchar(255) NOT NULL,
  `namablkng` varchar(255) NOT NULL,
  `peran` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `namadepan`, `namablkng`, `peran`, `password`, `kelas`, `image`) VALUES
(1, 'sesuatu@gmail.com', 'Shaladin', 'Rangga', '1', 'ngwe', NULL, NULL),
(3, 'shaladin.19053@mhs.its.ac.id', 'Shaladin', 'Rangga', '2', '$2y$10$gPyblxZ5EHtdFdcZ/nTz2eh8cMNfw88x6YEJtfXxKjmSddHaEqkmm', NULL, NULL),
(5, 'ShaladinRangga@gmail.com', 'Shaladin', 'Rangga', '1', '$2y$10$GXWNcloPjZdIFxJ3gqc6suDs.s2c9AVaMfo3Ej.W7RrbmdBHPP4N2', NULL, NULL),
(6, 'rangga@gmail.com', 'rangga', 'ganteng', '1', '$2y$10$AwSc3NhNvJW97NvM3vIRUevgqEsgknpOeaIqHTolZPbWgpC30Ps4e', NULL, NULL),
(7, '', '', '', '', '$2y$10$jj9IcujFu8s37iSEPDptGurviXrjLgQnmtwbVOsIcinliEGpNyupi', NULL, NULL),
(10, 'rangga@gmail.com', 'rangga', 'rangga', '1', '$2y$10$bbb0JEH.G7JrILlzrIHp.u/bRl8fizlwtljG3YNbrG9RU/BDTIdHm', NULL, NULL),
(17, 'murid2@gmail.com', 'Murid', '2', 'Murid', '$2y$10$ZrQMJSTGp6F3p0J3QG.fDueSUVLpw1.yLBfSoeGojM3dZrcnnPj2y', NULL, NULL),
(16, 'guru1@gmail.com', 'Guru', '1', 'Guru', '$2y$10$fY5GhjZgtkYE6aT3dIipyeeSZcqCUC85PsMHZS8CCSGIbwoy.qTRu', NULL, NULL),
(13, 'cobacoba@gmail.com', 'coba', 'coba', '1', '$2y$10$mQcNvLt7eT2ZOXbTs0vrF.MSE441wgsq.3ezr/ZYZX3A5TKej2LUa', NULL, NULL),
(15, 'murid1@gmail.com', 'Murid', '1', 'Murid', '$2y$10$7ztf/xOMogEnZrnsBr6AwelA0GDtulHgqIYfHAYsX56Z3O0Tkx1A.', NULL, NULL),
(19, 'primajauhar@gmail.com', 'Prima', 'Jauhar', 'Guru', '$2y$10$hcq7JNInyohslYO7Orp5OuKvvxhwiQ2LTwol0bpeAV27Q/9rphbRq', NULL, NULL),
(20, 'christopherramadhan@gmail.com', 'christopher', 'ramadhan', 'Guru', '$2y$10$KV7Q01DMd7HagkGj9PN5te52.U6B8rjdeMWDGEjiC5GTcCuD8/3ae', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

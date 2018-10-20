-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 02:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonker`
--

-- --------------------------------------------------------

--
-- Table structure for table `it_support`
--

CREATE TABLE `it_support` (
  `nik_it_support` char(6) NOT NULL,
  `nama_it_support` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_support`
--

INSERT INTO `it_support` (`nik_it_support`, `nama_it_support`, `email`, `no_telp`, `alamat`, `password`) VALUES
('ITS001', 'Hafidz Annur F', 'hafidz.bdt@gmail.com', '081232724625', 'Surakarta', '6028ded4dbd4d2ca647374849b1bc8c4'),
('ITS002', 'Ichsan M', 'ichsan@gmail.com', '081236273232', 'Semarang', '44300b7d0a58bfc988a53ad637982cad');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik_karyawan` char(6) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik_karyawan`, `nama_karyawan`, `email`, `no_telp`, `alamat`, `password`) VALUES
('KRY001', 'Budiyana', 'budi@gmail.com', '082241213123', 'Surakarta', 'f4b4ff5692cbc281f8d8cfb0ffb38b5a'),
('KRY002', 'Sudiyanto', 'sudiyanto@gmail.com', '085213131242', 'Boyolali', '942b9186161a80c9bf255bab535096ae'),
('KRY003', 'Ismi Nur Aini', 'ismi@gmail.com', '082241213123', 'Semarang', '2939b71a5ff54934aed869100dfb9f05');

-- --------------------------------------------------------

--
-- Table structure for table `manager_it`
--

CREATE TABLE `manager_it` (
  `nik_manager_it` char(6) NOT NULL,
  `nama_manager_it` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_it`
--

INSERT INTO `manager_it` (`nik_manager_it`, `nama_manager_it`, `telepon`, `password`) VALUES
('MIT001', 'Agus Supriyanto', '08172836440', '6b46a0b25a35f5036902be819c027b5b');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_kerusakan`
--

CREATE TABLE `monitoring_kerusakan` (
  `id` int(11) NOT NULL,
  `nik_karyawan` char(6) NOT NULL,
  `tgl_time_kerusakan` datetime NOT NULL,
  `kerusakan` text NOT NULL,
  `nik_it_support` char(6) NOT NULL,
  `tgl_time_perbaikan` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring_kerusakan`
--

INSERT INTO `monitoring_kerusakan` (`id`, `nik_karyawan`, `tgl_time_kerusakan`, `kerusakan`, `nik_it_support`, `tgl_time_perbaikan`, `keterangan`, `status`) VALUES
(2, 'KRY001', '2018-10-19 10:29:31', 'Sering Terjadi Blue Screen', 'ITS002', '2018-10-20 03:01:24', 'Dilakukan instal ulang windows', 2),
(3, 'KRY002', '2018-10-19 10:38:31', 'Komputer Sering Mati Sendiri', 'ITS002', '2018-10-20 08:23:47', 'Memasang kembali RAM yang agag lepas', 2),
(4, 'KRY003', '2018-10-19 10:49:55', 'Perangkat Keyboard Susah Diketik', 'ITS002', '2018-10-20 08:22:12', 'Keyboard diganti dengan yang baru', 2),
(5, 'KRY003', '2018-10-20 02:41:33', 'Mouse tidak bisa digerakan', '', '0000-00-00 00:00:00', '', 0),
(6, 'KRY001', '2018-10-20 04:22:07', 'Microsoft Office tidak bisa dibuka', 'ITS002', '2018-10-20 04:47:57', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it_support`
--
ALTER TABLE `it_support`
  ADD PRIMARY KEY (`nik_it_support`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik_karyawan`);

--
-- Indexes for table `manager_it`
--
ALTER TABLE `manager_it`
  ADD PRIMARY KEY (`nik_manager_it`);

--
-- Indexes for table `monitoring_kerusakan`
--
ALTER TABLE `monitoring_kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring_kerusakan`
--
ALTER TABLE `monitoring_kerusakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
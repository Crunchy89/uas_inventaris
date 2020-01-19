-- phpMyAdmin SQL Dump
-- version 4.9.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2020 at 10:34 PM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.3.11-0ubuntu0.19.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inv` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_inv` varchar(15) DEFAULT NULL,
  `id_ruangan` int(5) DEFAULT NULL,
  `id_sumber` int(5) DEFAULT NULL,
  `nama_brang` varchar(100) DEFAULT NULL,
  `merek` varchar(100) DEFAULT NULL,
  `seri` varchar(100) DEFAULT NULL,
  `id_jenis` int(5) DEFAULT NULL,
  `nilai_wajar` int(5) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(150) NOT NULL,
  `ket_jenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `ket_jenis`) VALUES
(1, 'Mouse', ''),
(2, 'Monitor', ''),
(3, 'Keyboord', ''),
(4, 'CPU', ''),
(5, 'Switch', ''),
(6, 'Modem', ''),
(7, 'Printer', ''),
(8, 'UPS', ''),
(9, 'Speaker', ''),
(10, 'Meja', ''),
(11, 'Kursi', ''),
(12, 'Jam Dinding', ''),
(13, 'Karpet', ''),
(14, 'Rak Switch', ''),
(15, 'Cok Rol', ''),
(16, 'Lemari', ''),
(17, 'Dispenser', ''),
(18, 'Akses Point', ''),
(19, 'LCD Proyektor', ''),
(20, 'LCD Screen', ''),
(21, 'Gorden', ''),
(22, 'Lampu', ''),
(23, 'Laptop', ''),
(24, 'Routerboard', '');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `ket_kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `kondisi`, `ket_kondisi`) VALUES
(1, 'BAIK', ''),
(2, 'RUSAK RINGAN', ''),
(3, 'RUSAK BERAT', '');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `fungsi_ruangan` varchar(40) NOT NULL,
  `luas` varchar(25) NOT NULL,
  `gbr_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruangan`, `nama_ruangan`, `fungsi_ruangan`, `luas`, `gbr_ruangan`) VALUES
(1, 'LAB I', 'RUANG PRAKTIK KOMPUTER', '', ''),
(2, 'LAB II', 'RUANG PRAKTIK KOMPUTER', '', ''),
(3, 'KEPALA LAB', 'RUANG KEPALA LABORATORIUM', '', ''),
(4, 'GUDANG LAB', 'GUDANG LABORATORIUM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `ket_satuan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `satuan`, `ket_satuan`) VALUES
(1, 'Unit', NULL),
(2, 'Buah', NULL),
(3, 'Pasang', NULL),
(4, 'Lembar', NULL),
(5, 'Batang', NULL),
(6, 'Bungkus', NULL),
(7, 'Potong', NULL),
(8, 'Tablet', NULL),
(9, 'Ekor', NULL),
(10, 'Rim', NULL),
(11, 'Botol', NULL),
(12, 'Butir', NULL),
(13, 'Roll', NULL),
(14, 'Kilogram', NULL),
(15, 'Meter', NULL),
(16, 'Meter Persegi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(11) NOT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `ket_sumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id_sumber`, `sumber`, `ket_sumber`) VALUES
(1, 'Yayasan', NULL),
(2, 'PP-PTS', NULL),
(3, 'Hibah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(6) DEFAULT NULL,
  `ket_tahun` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`, `ket_tahun`) VALUES
(1, '2015', NULL),
(2, '2017', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1sampai8'),
(3, 'ferdy', 'minumair');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

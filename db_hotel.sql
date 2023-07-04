-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 05:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(10) NOT NULL,
  `nama_fasilitas` varchar(25) NOT NULL,
  `ket_fasilitas` text NOT NULL,
  `gambar_fasilitas` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(5) NOT NULL,
  `nama_kamar` varchar(10) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `jumlah_kamar` int(3) NOT NULL,
  `gambar_kamar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `nama_pemesan` varchar(10) NOT NULL,
  `nomor_hp` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `check_in` varchar(15) NOT NULL,
  `check_out` varchar(15) NOT NULL,
  `jumlah_kamar` int(5) NOT NULL,
  `tipe_kamar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `nomor_hp`, `email`, `nama_tamu`, `check_in`, `check_out`, `jumlah_kamar`, `tipe_kamar`) VALUES
(1, 'Fernandes', 811112121, '123444@gmail.com', 'Fernandes', '04/29/2023', '04/30/2023', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `level` enum('admin','resepsionis') NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `level`, `username`, `password`) VALUES
(3, 'admin1', 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'resepsionis', 'resepsionis', 'resepsionis', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

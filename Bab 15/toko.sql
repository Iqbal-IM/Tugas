-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `email`, `nama`, `password`) VALUES
(1, 'qwerty@edu.com', 'jojo', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `harga`, `gambar`) VALUES
(1, 'Kopi ABC', 2000, ''),
(2, 'Teh Kotak', 7000, ''),
(3, 'Sabun Mandi', 3000, ''),
(4, 'Deterjen', 5000, ''),
(5, 'Gula', 15000, ''),
(6, 'Mie Instan', 3000, ''),
(7, 'Teh Pucuk', 5000, ''),
(8, 'Minyak Goreng', 20000, ''),
(9, 'Air Mineral', 4000, ''),
(10, 'Coca cola', 5000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faktur`
--

CREATE TABLE `tb_faktur` (
  `id_faktur` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faktur`
--

INSERT INTO `tb_faktur` (`id_faktur`, `id_pelanggan`, `tanggal`) VALUES
(1001, 3, '2021-10-21'),
(1002, 2, '2021-10-24'),
(1003, 5, '2021-10-25'),
(1004, 7, '2021-10-27'),
(1005, 6, '2021-10-28'),
(1006, 5, '2021-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakturbarang`
--

CREATE TABLE `tb_fakturbarang` (
  `id_faktur` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakturbarang`
--

INSERT INTO `tb_fakturbarang` (`id_faktur`, `id_barang`) VALUES
(1001, 1),
(1001, 3),
(1001, 5),
(1002, 2),
(1002, 6),
(1002, 7),
(1003, 2),
(1003, 9),
(1003, 10),
(1004, 1),
(1004, 3),
(1004, 4),
(1005, 2),
(1005, 5),
(1005, 7),
(1006, 3),
(1006, 5),
(1006, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`) VALUES
(1, 'Budi'),
(2, 'Slamet'),
(3, 'Agus'),
(4, 'Yanto'),
(5, 'Arif'),
(6, 'Ucok'),
(7, 'Lusi'),
(8, 'Memet'),
(9, 'Vivi'),
(10, 'Yudi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_faktur`
--
ALTER TABLE `tb_faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_fakturbarang`
--
ALTER TABLE `tb_fakturbarang`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_faktur` (`id_faktur`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_faktur`
--
ALTER TABLE `tb_faktur`
  ADD CONSTRAINT `tb_faktur_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

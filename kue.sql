-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '$2y$10$y9V7QRPXaNbhMaZs.8cA..bKC6gQN3GGC6zuxwAreA.evUHMWbIsq', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `stok` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `kode`, `stok`) VALUES
(18, 'K0013', 188),
(17, 'K01', 500),
(19, 'K12234', 213);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `produk` varchar(200) NOT NULL,
  `nama_penerima` varchar(200) NOT NULL,
  `alamat_penerima` varchar(1000) NOT NULL,
  `nohp_penerima` bigint(20) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `total_bayar` varchar(200) NOT NULL,
  `status_pesanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `username`, `produk`, `nama_penerima`, `alamat_penerima`, `nohp_penerima`, `tanggal`, `total_bayar`, `status_pesanan`) VALUES
(16, 'user1', 'Kue Cucur', 'User', 'Jl. Setia Budi No.99', 829233424, '11 January 2022', '10125', 'Dalam Perjalanan\r\n                         '),
(17, 'riki', 'Kue Cucur', 'Riki', 'Jl.shghgs', 895762762, '25 January 2022', '10125', 'Sedang Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `gambar`, `tgl_produksi`, `nama`, `deskripsi`, `harga`, `status`) VALUES
(17, 'K01', '61d8189950368.jpg', '2022-01-05', 'Kue Cucur', 'Kue kering dengan adonan mentega.', 7500, 'Pre-Order'),
(18, 'K0013', '61ea62129c2e1.jpg', '2022-01-12', 'Kue Cubit', 'Kue lembut bertabur seres coklat yang manis', 12000, 'Pre-Order'),
(19, 'K12234', '61ea623db755f.jpg', '2022-01-11', 'Kue Sus', 'Kue dengan selai manis di dalamnya', 41000, 'Siap Kirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(7, 'user', '$2y$10$/j/VP850Jv.nbhYsKVDLSOImgcpsc9DUd/IPaF9tj7.Igyh77/sg6', 'User'),
(8, 'user1', '$2y$10$JmrOwvNPy.q71JaALcvshOXVJX4kN9t9doahc/.GBDtHFralwxw8i', 'User'),
(9, 'riko', '$2y$10$vVeyvxP8tFBScjXZAVPhJunjHk8IFBdp.AJw3GeE6VJWYQovFF.2S', 'Riko'),
(10, 'riki', '$2y$10$vy8/wUDUDXmEz8gCfz3wHOFEVYxu8k/z.IA6zDKVswwdSL.M5FhHu', 'Riki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `gudang_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `produk` (`kode`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

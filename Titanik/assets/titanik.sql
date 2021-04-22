-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 04:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titanik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `noHp` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(10) NOT NULL,
  `idAdmin` varchar(10) NOT NULL,
  `judulArtikel` varchar(100) NOT NULL,
  `isiArtikel` text NOT NULL,
  `tanggalRilis` datetime NOT NULL DEFAULT current_timestamp(),
  `Author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailpesanan`
--

CREATE TABLE `detailpesanan` (
  `id` varchar(10) NOT NULL,
  `idPesanan` varchar(10) NOT NULL,
  `idProduk` varchar(10) NOT NULL,
  `hargaProduk` int(100) NOT NULL,
  `jumlahProduk` tinyint(10) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` varchar(10) NOT NULL,
  `idArtikel` varchar(10) NOT NULL,
  `idPembeli` varchar(10) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `noHp` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `uniqueCode` varchar(10) NOT NULL,
  `nama` tinytext NOT NULL,
  `noHp` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleteDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` varchar(10) NOT NULL,
  `idPenjual` varchar(10) NOT NULL,
  `idPembeli` varchar(10) NOT NULL,
  `idAdmin` varchar(10) NOT NULL,
  `ongkir` int(100) NOT NULL,
  `totalHarga` int(100) NOT NULL,
  `statusPesanan` tinyint(1) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `arrivedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` varchar(10) NOT NULL,
  `idPenjual` varchar(10) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `hargaProduk` int(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stokProduk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` varchar(10) NOT NULL,
  `idProduk` varchar(10) NOT NULL,
  `idPembeli` varchar(10) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
('15791', 'yabin', 'yabi', 'yabi@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPesanan` (`idPesanan`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtikel` (`idArtikel`),
  ADD KEY `idPembeli` (`idPembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPenjual` (`idPenjual`),
  ADD KEY `idPembeli` (`idPembeli`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idPenjual` (`idPenjual`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduk` (`idProduk`),
  ADD KEY `idPembeli` (`idPembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `Artikel_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `detailpesanan`
--
ALTER TABLE `detailpesanan`
  ADD CONSTRAINT `DetailPesanan_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`),
  ADD CONSTRAINT `DetailPesanan_ibfk_2` FOREIGN KEY (`idPesanan`) REFERENCES `pesanan` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `Komentar_ibfk_1` FOREIGN KEY (`idArtikel`) REFERENCES `artikel` (`id`),
  ADD CONSTRAINT `Komentar_ibfk_2` FOREIGN KEY (`idPembeli`) REFERENCES `pembeli` (`id`);

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `Pembeli_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Constraints for table `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `Penjual_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `Pesanan_ibfk_1` FOREIGN KEY (`idPenjual`) REFERENCES `penjual` (`id`),
  ADD CONSTRAINT `Pesanan_ibfk_2` FOREIGN KEY (`idPembeli`) REFERENCES `pembeli` (`id`),
  ADD CONSTRAINT `Pesanan_ibfk_3` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `Produk_ibfk_1` FOREIGN KEY (`idPenjual`) REFERENCES `penjual` (`id`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `Ulasan_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`),
  ADD CONSTRAINT `Ulasan_ibfk_2` FOREIGN KEY (`idPembeli`) REFERENCES `pembeli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

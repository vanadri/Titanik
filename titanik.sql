-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Feb 2021 pada 23.17
-- Versi server: 10.2.36-MariaDB-cll-lve
-- Versi PHP: 7.3.23

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
-- Struktur dari tabel `User`
--

CREATE TABLE `User` (
  `id` varchar(10) NOT NULL,
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
-- Struktur dari tabel `Penjual`
--

CREATE TABLE `Penjual` (
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
-- Struktur dari tabel `Resep`
--

CREATE TABLE `Pembeli` (
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
-- Struktur dari tabel `Pesanan`
--

CREATE TABLE `Admin` (
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
-- Struktur dari tabel `Porsi`
--

CREATE TABLE `Artikel` (
  `id` varchar(10) NOT NULL,
  `idAdmin` varchar(10) NOT NULL,
  `judulArtikel` varchar(100) NOT NULL,
  `isiArtikel` text NOT NULL,
  `tanggalRilis` datetime NOT NULL DEFAULT current_timestamp(),
  `Author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Produk`
--

CREATE TABLE `Pesanan` (
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
-- Struktur dari tabel `Stok`
--

CREATE TABLE `DetailPesanan` (
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
-- Struktur dari tabel `User`
--

CREATE TABLE `Produk` (
  `idProduk` varchar(10) NOT NULL,
  `idPenjual` varchar(10) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `hargaProduk` int(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stokProduk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `User`
--

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Bahan`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueCode` (`uniqueCode`);
  -- ADD KEY `idResep` (`idResep`);

--
-- Indeks untuk tabel `Pesanan`
--
ALTER TABLE `Penjual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `Porsi`
--
ALTER TABLE `Pembeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `Produk`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `Resep`
--
ALTER TABLE `Produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idPenjual` (`idPenjual`);

--
-- Indeks untuk tabel `Stok`
--
ALTER TABLE `Pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPenjual` (`idPenjual`),
  ADD KEY `idPembeli` (`idPembeli`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indeks untuk tabel `User`
--
ALTER TABLE `Artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAdmin` (`idAdmin`);
  

--
-- Indeks untuk tabel `Bahan`
--
ALTER TABLE `DetailPesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPesanan` (`idPesanan`),
  ADD KEY `idProduk` (`idProduk`);
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Bahan`
--
ALTER TABLE `Penjual`
  ADD CONSTRAINT `Penjual_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Ketidakleluasaan untuk tabel `Pesanan`
--
ALTER TABLE `Pembeli`
  ADD CONSTRAINT `Pembeli_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Ketidakleluasaan untuk tabel `Porsi`
--
ALTER TABLE `Admin`
  ADD CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Ketidakleluasaan untuk tabel `Produk`
--
ALTER TABLE `Artikel`
  ADD CONSTRAINT `Artikel_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `Admin` (`id`);

--
-- Ketidakleluasaan untuk tabe `Resep`
--
ALTER TABLE `Pesanan`
  ADD CONSTRAINT `Pesanan_ibfk_1` FOREIGN KEY (`idPenjual`) REFERENCES `Penjual` (`id`),
  ADD CONSTRAINT `Pesanan_ibfk_2` FOREIGN KEY (`idPembeli`) REFERENCES `Pembeli` (`id`),
  ADD CONSTRAINT `Pesanan_ibfk_3` FOREIGN KEY (`idAdmin`) REFERENCES `Admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `Stok`
--
ALTER TABLE `Produk`
  ADD CONSTRAINT `Produk_ibfk_1` FOREIGN KEY (`idPenjual`) REFERENCES `Penjual` (`id`);

ALTER TABLE `DetailPesanan`
  ADD CONSTRAINT `DetailPesanan_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `Produk` (`idProduk`),
  ADD CONSTRAINT `DetailPesanan_ibfk_2` FOREIGN KEY (`idPesanan`) REFERENCES `Pesanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
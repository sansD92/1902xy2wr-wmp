-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 11.28
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wmpdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_detail`
--

CREATE TABLE `produk_detail` (
  `id_produk_detail` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama_produk_detail` varchar(50) NOT NULL,
  `deskripsi_produk_detail` text NOT NULL,
  `foto_produk_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_detail`
--

INSERT INTO `produk_detail` (`id_produk_detail`, `id_produk`, `nama_produk_detail`, `deskripsi_produk_detail`, `foto_produk_detail`) VALUES
(1, 1, 'sapi 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', '350.jpg'),
(2, 1, 'sapi 2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'livestock2.jpg'),
(3, 2, 'meat 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat1.jpg'),
(4, 1, 'sapi 3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'lv3.jpg'),
(5, 1, 'sapi 4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'lv4.jpg'),
(6, 1, 'sapi 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'lv5.jpg'),
(7, 1, 'sapi 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'live6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk_detail`
--
ALTER TABLE `produk_detail`
  ADD PRIMARY KEY (`id_produk_detail`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk_detail`
--
ALTER TABLE `produk_detail`
  MODIFY `id_produk_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

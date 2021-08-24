-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 06.48
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
(7, 1, 'sapi 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'live6.jpg'),
(8, 2, 'meat 2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat2.jpg'),
(9, 2, 'meat 3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat3.jpg'),
(10, 2, 'meat 4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat4.jpg'),
(11, 2, 'meat 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat5.jpg'),
(12, 2, 'meat 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meat6.jpg'),
(13, 3, 'produk olahan 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros1.jpg'),
(14, 3, 'produk olahan 2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros2.jpg'),
(15, 3, 'produk olahan 3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros3.jpg'),
(16, 3, 'produk olahan 4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros4.jpg'),
(17, 3, 'produk olahan 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros5.jpg'),
(18, 3, 'produk olahan 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'meatpros6.jpg'),
(19, 4, 'Leather 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather1.jpg'),
(20, 4, 'Leather  2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather2.jpg'),
(21, 4, 'Leather  3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather3.jpg'),
(22, 4, 'Leather  4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather4.jpg'),
(23, 4, 'Leather 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather5.jpg'),
(24, 4, 'Leather  6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'leather6.jpg'),
(25, 5, 'Ayam 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry1.jpg'),
(26, 5, 'Ayam 2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry2.jpg'),
(27, 5, 'Ayam 3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry3.jpg'),
(28, 5, 'Ayam 4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry4.jpg'),
(29, 5, 'Ayam 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry5.jpg'),
(30, 5, 'Ayam 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'poultry6.jpg'),
(31, 6, 'Komoditas 1', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity1.jpg'),
(32, 6, 'Komoditas 2', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity2.jpg'),
(33, 6, 'Komoditas 3', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity3.jpg'),
(34, 6, 'Komoditas 4', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity4.jpg'),
(35, 6, 'Komoditas 5', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity5.jpg'),
(36, 6, 'Komoditas 6', 'sapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi\r\nsapi sapi sapi sapi sapi sapi sapi sapi', 'comodity6.jpg');

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
  MODIFY `id_produk_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

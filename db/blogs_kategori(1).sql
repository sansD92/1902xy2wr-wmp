-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Sep 2021 pada 14.44
-- Versi server: 10.3.30-MariaDB-cll-lve
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8383312_wmpnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs_kategori`
--

CREATE TABLE `blogs_kategori` (
  `blogs_kategori_id` int(11) NOT NULL,
  `blogs_kategori_judul` varchar(220) NOT NULL,
  `blogs_kategori_judul_seo` varchar(220) NOT NULL,
  `blogs_kategori_desk` text NOT NULL,
  `blogs_kategori_keyword` varchar(220) NOT NULL,
  `blogs_kategori_meta_desk` varchar(200) NOT NULL,
  `blogs_kategori_gambar` text NOT NULL,
  `blogs_kategori_post_oleh` varchar(200) NOT NULL,
  `blogs_kategori_post_hari` varchar(20) NOT NULL,
  `blogs_kategori_post_tanggal` date NOT NULL,
  `blogs_kategori_post_jam` time NOT NULL,
  `blogs_kategori_update_oleh` varchar(200) NOT NULL,
  `blogs_kategori_update_hari` varchar(20) NOT NULL,
  `blogs_kategori_update_tanggal` date NOT NULL,
  `blogs_kategori_update_jam` time NOT NULL,
  `blogs_kategori_dibaca` int(50) NOT NULL,
  `blogs_kategori_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blogs_kategori`
--

INSERT INTO `blogs_kategori` (`blogs_kategori_id`, `blogs_kategori_judul`, `blogs_kategori_judul_seo`, `blogs_kategori_desk`, `blogs_kategori_keyword`, `blogs_kategori_meta_desk`, `blogs_kategori_gambar`, `blogs_kategori_post_oleh`, `blogs_kategori_post_hari`, `blogs_kategori_post_tanggal`, `blogs_kategori_post_jam`, `blogs_kategori_update_oleh`, `blogs_kategori_update_hari`, `blogs_kategori_update_tanggal`, `blogs_kategori_update_jam`, `blogs_kategori_dibaca`, `blogs_kategori_status`) VALUES
(1, 'Media Rilis', 'media-rilis', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '00:00:00', 0, ''),
(2, 'Kegiatan Perushaan', 'kegiatan-perusahaan', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '00:00:00', 0, ''),
(3, 'hubungan investor', 'hubungan-investor', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '00:00:00', 0, ''),
(4, 'Program Kami', 'program-kami', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '00:00:00', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs_kategori`
--
ALTER TABLE `blogs_kategori`
  ADD PRIMARY KEY (`blogs_kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs_kategori`
--
ALTER TABLE `blogs_kategori`
  MODIFY `blogs_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `produk_seo` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `bidang_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `website` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `whatsapp` int(13) NOT NULL,
  `shopee` varchar(50) NOT NULL,
  `tokopedia` varchar(50) NOT NULL,
  `bukalapak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `produk_seo`, `deskripsi_produk`, `bidang_produk`, `foto_produk`, `website`, `facebook`, `instagram`, `whatsapp`, `shopee`, `tokopedia`, `bukalapak`) VALUES
(1, 'PT. Pasir Tengah', 'pasir-tengah', 'Kemitraan Sapi Potong PT Pasir Tengah dilaksanakan untuk membantu peternak rakyat yang sering mengalami permasalahan dalam usahanya. Kendala yang sering dialami oleh peternak rakyat pada saat melakukan usaha pemeliharaan sapi potong diantaranya. kesulitan akses modal di lembaga keuangan dan bunga yang tinggi, tidak ada transfer teknologi, resiko kegagalan perkawinan, resiko kematian, harga panen yang bergantung pada tengkulak, sapi yang tidak dibayarkan, dll.', 'Sapi', '350.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(2, 'PT. Cianjur Arta Makmur', 'cianjur-arta-makmur', 'Cianjur Arta Makmur merupakan unit bisnis dari Widodo Makmur Perkasa yang bergerak di bidang perdagangan poduk daging sapi, beroperasi sejak tahun 2008 yang berbasis ‘Integrated System‘. Sapi-sapi bakalan yang didatangkan dari Australia dipelihara di Cianjur Farm PT. Pasir Tengah dan kemudian diproses oleh Cianjur Arta Makmur menjadi produk daging sapi segar berkualitas prima (premium and high quality chilled beef), beku (frozen beef) dan produk-produk sampingan.', 'Daging-Sapi', 'meat1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(3, 'PT. Prima Widodo Makmur', 'prima-widodo-makmur', 'PT Prima Widodo Makmur (PWM) bergerak di bidang produksi pangan olahan yang bersumber dari daging sapi dan ayam meliputi bakso, sosis, naget ayam dalam berbagai varian terutama untuk memenuhi kebutuhan hotel, restoran, retail dan distributor. Rumah Potong Hewan (RPH) kami berstandar Internasional dan terbesar di Indonesia yang menerapkan standar higienitas tinggi untuk menjamin kualitas produknya.', 'Produk Olahan', 'meatpros1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(4, 'PT. Garut Makmur Perkasa', 'garut-makmur-perkasa', 'PT Garut Makmur Perkasa (GMP) merupakan perusahaan yang memproduksi kulit sebagai bahan baku industri fashion, upholstery dan automotive. Berdiri pada tahun 2015 dan resmi menjadi anak perusahaan dari lini bisnis MEAT di bawah manajemen PT Cianjur Arta Makmur (CAM) yang merupakan salah satu lini bisnis di bawah manajemen PT Widodo Makmur Perkasa (WMP).', 'Leather', 'leather1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(5, 'PT. Widodo Makmur Unggas', 'widodo-makmur-unggas', 'Widodo Makmur Unggas adalah bisnis unggas yang terintegrasi secara vertikal yang mengendalikan pabrik pakan skala besar, peternakan pembibitan, pabrik pembenihan, peternakan komersial, peternakan layer, rumah potong hewan dan operasi kemitraan terkait. Di bawah dukungan penuh semangat dari tim kami yang cakap, sistem manajemen inovatif, pengetahuan pertanian yang mendalam, kolaborasi komunitas penuh, dan fasilitas serta teknologi yang patut dicontoh; kami berhasil memastikan pengiriman yang andal dari produk berkualitas tinggi kami ke seluruh Indonesia.', 'Poultry', 'poultry1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(6, 'PT. Widodofood Makmur Sejahtera', 'widodo-makmur-sejatra', 'PT WidodoFood Mkamur Sejahtera (WMS) adalah anak perusahaan yang bergerak dalam bisnis Food. WMS bergerak di bidang produksi beras kemasan. Komitmen WMP yang tercantum dalam visi, menjadi jembatan kesejahteraan petani dan peternak diwujudkan dengan menjadikan para petani lokal sebagai mitra pemasok bahan baku beras yang dibutuhkan. Sumber bahan baku diperoleh dari sentra lumbung-lumbung padi di Pulau Jawa.', 'Komoditas', 'comodity1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

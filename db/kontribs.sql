-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 09:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `kontribs`
--

CREATE TABLE `kontribs` (
  `kontribs_id` int(11) NOT NULL,
  `kontribs_judul` varchar(220) NOT NULL,
  `kontribs_judul_seo` varchar(220) NOT NULL,
  `kontribs_desk` text NOT NULL,
  `kontribs_url` varchar(255) NOT NULL,
  `kontribs_kategori_id` varchar(200) NOT NULL,
  `kontribs_keyword` varchar(220) NOT NULL,
  `kontribs_meta_desk` varchar(200) NOT NULL,
  `kontribs_gambar` text NOT NULL,
  `kontribs_post_oleh` varchar(200) NOT NULL,
  `kontribs_post_hari` varchar(20) NOT NULL,
  `kontribs_post_tanggal` date NOT NULL,
  `kontribs_post_jam` time NOT NULL,
  `kontribs_update_oleh` varchar(200) NOT NULL,
  `kontribs_update_hari` varchar(20) NOT NULL,
  `kontribs_update_tanggal` date NOT NULL,
  `kontribs_update_jam` time NOT NULL,
  `kontribs_dibaca` int(50) NOT NULL,
  `kontribs_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontribs`
--

INSERT INTO `kontribs` (`kontribs_id`, `kontribs_judul`, `kontribs_judul_seo`, `kontribs_desk`, `kontribs_url`, `kontribs_kategori_id`, `kontribs_keyword`, `kontribs_meta_desk`, `kontribs_gambar`, `kontribs_post_oleh`, `kontribs_post_hari`, `kontribs_post_tanggal`, `kontribs_post_jam`, `kontribs_update_oleh`, `kontribs_update_hari`, `kontribs_update_tanggal`, `kontribs_update_jam`, `kontribs_dibaca`, `kontribs_status`) VALUES
(1, 'Kesatriaan Entrepreneur Indonesia', 'kesatriaan-entrepreneur-indonesia', '<p style=\"text-align: justify; \"><font color=\"#888888\" face=\"Roboto, sans-serif\">Kesatriaan Entrepreneur Indonesia (KEI) yang berpusat di Joglo Tumiyono, Desa Ngerangan, Bayat, Kabupaten Klaten ini merupakan wadah komunitas bagi para petani dan peternak milenial untuk meningkatkan pengetahuan dan wawasannya di bidang pertanian dan peternakan, pengadaan workshop secara berkesinambungan dan membantu mendapatkan pendanaan dari perbankan dan lembaga keuangan dengan menjadikan Widodo Makmur sebagai off taker dari produk yang dihasilkan.</font><br></p>', '', '23', '', '', 'joglo222.jpg', 'dhawy', 'Senin', '2021-06-14', '13:33:23', 'dhawy', 'Senin', '2021-06-14', '13:39:12', 0, 'publish'),
(2, 'Kemitraan Unggas', 'kemitraan-unggas', '<h3 style=\"color: rgb(41, 43, 44); font-family: Montserrat, sans-serif;\">PT Widodo Makmur Unggas Komitmen Dukung Penguatan 10.000 UMKM</h3><p style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; text-align: justify;\">Perusahaan peternakan ayam terintegrasi, PT Widodo Makmur Unggas (WMU) menjalin kerja sama dengan Mitra Usaha Kecil Mikro dan Menengah (Mitra UMKM) Daerah guna mendukung penguatan 10.000 UMKM di Indonesia. Kerja sama ini merupakan bagian dari komitmen WMU untuk maju dan tumbuh bersama dalam menyediakan produk pangan hewani berkualitas bagi seluruh masyarakat Indonesia.</p><p style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; text-align: justify;\">Melalui kerja sama ini, WMU akan menjamin pengadaan bahan baku yang halal dan berkualitas. Tidak hanya itu, WMU akan memberikan benefit bagi UMKM seperti adanya potongan harga dan kemudahan dalam skema pembayaran.</p><p style=\"color: rgb(136, 136, 136); font-family: Roboto, sans-serif; text-align: justify;\">Seremonial penandatanganan MoU kerja sama ini dilakukan secara virtual bersama 3 mitra pengelola UMKM, yaitu Holistika Institute, The Local Enablers dan Lokalkarya. Mitra UMKM ini mayoritas bergerak di industri makanan olahan. Dengan memastikan kualitas bahan baku serta pendampingan dalam peningkatan kualitas produk yang diberikan oleh WMU bisa menjadi salah satu solusi bangkitnya UMKM di tengah era adaptasi normal baru.</p>', '', '22', '', '', '', 'dhawy', 'Senin', '2021-06-14', '13:35:24', '', '', '0000-00-00', '00:00:00', 0, 'Publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontribs`
--
ALTER TABLE `kontribs`
  ADD PRIMARY KEY (`kontribs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontribs`
--
ALTER TABLE `kontribs`
  MODIFY `kontribs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

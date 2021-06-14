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
-- Table structure for table `kontribs_kategori`
--

CREATE TABLE `kontribs_kategori` (
  `kontribs_kategori_id` int(11) NOT NULL,
  `kontribs_kategori_judul` varchar(220) NOT NULL,
  `kontribs_kategori_judul_seo` varchar(220) NOT NULL,
  `kontribs_kategori_desk` text NOT NULL,
  `kontribs_kategori_keyword` varchar(220) NOT NULL,
  `kontribs_kategori_meta_desk` varchar(200) NOT NULL,
  `kontribs_kategori_gambar` text NOT NULL,
  `kontribs_kategori_post_oleh` varchar(200) NOT NULL,
  `kontribs_kategori_post_hari` varchar(20) NOT NULL,
  `kontribs_kategori_post_tanggal` date NOT NULL,
  `kontribs_kategori_post_jam` time NOT NULL,
  `kontribs_kategori_update_oleh` varchar(200) NOT NULL,
  `kontribs_kategori_update_hari` varchar(20) NOT NULL,
  `kontribs_kategori_update_tanggal` date NOT NULL,
  `kontribs_kategori_update_jam` time NOT NULL,
  `kontribs_kategori_dibaca` int(50) NOT NULL,
  `kontribs_kategori_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontribs_kategori`
--

INSERT INTO `kontribs_kategori` (`kontribs_kategori_id`, `kontribs_kategori_judul`, `kontribs_kategori_judul_seo`, `kontribs_kategori_desk`, `kontribs_kategori_keyword`, `kontribs_kategori_meta_desk`, `kontribs_kategori_gambar`, `kontribs_kategori_post_oleh`, `kontribs_kategori_post_hari`, `kontribs_kategori_post_tanggal`, `kontribs_kategori_post_jam`, `kontribs_kategori_update_oleh`, `kontribs_kategori_update_hari`, `kontribs_kategori_update_tanggal`, `kontribs_kategori_update_jam`, `kontribs_kategori_dibaca`, `kontribs_kategori_status`) VALUES
(22, 'Kegiatan CSR', 'kegiatan-csr', '', '', '', '', 'dhawy', 'Senin', '2021-04-26', '15:11:41', 'dhawy', 'Senin', '2021-04-26', '16:09:01', 2, 'publish'),
(23, 'Kesatriaan Enterpreneur Indonesia', 'kesatriaan-enterpreneur-indonesia', '', '', '', '', 'dhawy', 'Senin', '2021-04-26', '15:12:11', 'dhawy', 'Selasa', '2021-04-27', '10:44:36', 2, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontribs_kategori`
--
ALTER TABLE `kontribs_kategori`
  ADD PRIMARY KEY (`kontribs_kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontribs_kategori`
--
ALTER TABLE `kontribs_kategori`
  MODIFY `kontribs_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

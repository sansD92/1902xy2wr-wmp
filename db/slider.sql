-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 08:49 AM
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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_judul` varchar(220) NOT NULL,
  `slider_judul_seo` varchar(220) NOT NULL,
  `slider_desk` text NOT NULL,
  `slider_keyword` varchar(220) NOT NULL,
  `slider_meta_desk` varchar(200) NOT NULL,
  `slider_gambar` text NOT NULL,
  `slider_post_oleh` varchar(200) NOT NULL,
  `slider_post_hari` varchar(20) NOT NULL,
  `slider_post_tanggal` date NOT NULL,
  `slider_post_jam` time NOT NULL,
  `slider_update_oleh` varchar(200) NOT NULL,
  `slider_update_hari` varchar(20) NOT NULL,
  `slider_update_tanggal` date NOT NULL,
  `slider_update_jam` time NOT NULL,
  `slider_dibaca` int(50) NOT NULL,
  `slider_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_judul`, `slider_judul_seo`, `slider_desk`, `slider_keyword`, `slider_meta_desk`, `slider_gambar`, `slider_post_oleh`, `slider_post_hari`, `slider_post_tanggal`, `slider_post_jam`, `slider_update_oleh`, `slider_update_hari`, `slider_update_tanggal`, `slider_update_jam`, `slider_dibaca`, `slider_status`) VALUES
(79, 'Slider sapi', 'slider-sapi', '', '', 'turunan', '1.jpg', 'dhawy', 'Senin', '2021-04-26', '13:49:23', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(80, 'slider2', 'slider2', '', '', 'active', '2.jpg', 'dhawy', 'Senin', '2021-04-26', '13:29:13', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(81, 'slider Ayam', 'slider-ayam', '', '', 'turunan', 'ayam12.jpg', 'dhawy', 'Senin', '2021-04-26', '13:49:17', '', '', '0000-00-00', '00:00:00', 0, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

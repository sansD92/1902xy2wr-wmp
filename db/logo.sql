-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 06:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

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
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_judul` varchar(220) NOT NULL,
  `logo_judul_seo` varchar(220) NOT NULL,
  `logo_desk` text NOT NULL,
  `logo_url` text NOT NULL,
  `logo_urutan` int(11) NOT NULL,
  `logo_keyword` varchar(220) NOT NULL,
  `logo_meta_desk` varchar(200) NOT NULL,
  `logo_gambar` text NOT NULL,
  `logo_post_oleh` varchar(200) NOT NULL,
  `logo_post_hari` varchar(20) NOT NULL,
  `logo_post_tanggal` date NOT NULL,
  `logo_post_jam` time NOT NULL,
  `logo_update_oleh` varchar(200) NOT NULL,
  `logo_update_hari` varchar(20) NOT NULL,
  `logo_update_tanggal` date NOT NULL,
  `logo_update_jam` time NOT NULL,
  `logo_dibaca` int(50) NOT NULL,
  `logo_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_judul`, `logo_judul_seo`, `logo_desk`, `logo_url`, `logo_urutan`, `logo_keyword`, `logo_meta_desk`, `logo_gambar`, `logo_post_oleh`, `logo_post_hari`, `logo_post_tanggal`, `logo_post_jam`, `logo_update_oleh`, `logo_update_hari`, `logo_update_tanggal`, `logo_update_jam`, `logo_dibaca`, `logo_status`) VALUES
(82, 'CAM', 'cam', '', 'www.cam.com', 1, '', '', 'logo2_cam.jpg', 'dhawy', 'Senin', '2021-08-16', '11:13:16', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(83, 'PWM', 'pwm', '', 'www.pwm.com', 2, '', '', 'logo3_pwm.jpg', 'dhawy', 'Senin', '2021-08-16', '11:13:22', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(84, 'GMP', 'gmp', '', 'www.gmp.com', 3, '', 'non', 'logo4_gmp.jpg', 'dhawy', 'Senin', '2021-08-16', '11:14:14', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(85, 'WMU', 'wmu', '', 'www.wmu.com', 4, '', 'non', 'logo5_wmu.jpg', 'dhawy', 'Senin', '2021-08-16', '11:15:20', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(86, 'WMS', 'wms', '', 'www.widodofood.com', 5, '', 'non', 'logo6_wms.jpg', 'dhawy', 'Senin', '2021-08-16', '11:16:22', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(87, 'PMP', 'pmp', '', 'www.pmp.com', 6, '', 'non', 'logo7_pmp.jpg', 'dhawy', 'Senin', '2021-08-16', '11:17:13', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(88, 'LMP', 'lmp', '', 'www.lmp.com', 7, '', 'non', 'logo8_lmp.jpg', 'dhawy', 'Senin', '2021-08-16', '11:18:04', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(89, 'KEI', 'kei', '', 'www.kei.com', 8, '', 'non', 'logo9_kei.jpg', 'dhawy', 'Senin', '2021-08-16', '11:18:43', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(90, 'Pasir Tengah', 'pasir-tengah', '', 'www.pasirtengah.com', 9, '', 'non', 'logo1_paste.jpg', 'dhawy', 'Senin', '2021-08-16', '11:19:27', '', '', '0000-00-00', '00:00:00', 0, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 09:00 AM
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
-- Table structure for table `bisnis`
--

CREATE TABLE `bisnis` (
  `bisnis_id` int(11) NOT NULL,
  `bisnis_kategori_id` int(11) NOT NULL,
  `bisnis_judul` varchar(220) NOT NULL,
  `bisnis_judul_seo` varchar(220) NOT NULL,
  `bisnis_desk` text NOT NULL,
  `bisnis_keyword` varchar(220) NOT NULL,
  `bisnis_meta_desk` varchar(200) NOT NULL,
  `bisnis_gambar` text NOT NULL,
  `bisnis_post_oleh` varchar(200) NOT NULL,
  `bisnis_post_hari` varchar(20) NOT NULL,
  `bisnis_post_tanggal` date NOT NULL,
  `bisnis_post_jam` time NOT NULL,
  `bisnis_update_oleh` varchar(200) NOT NULL,
  `bisnis_update_hari` varchar(20) NOT NULL,
  `bisnis_update_tanggal` date NOT NULL,
  `bisnis_update_jam` time NOT NULL,
  `bisnis_dibaca` int(50) NOT NULL,
  `bisnis_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bisnis`
--

INSERT INTO `bisnis` (`bisnis_id`, `bisnis_kategori_id`, `bisnis_judul`, `bisnis_judul_seo`, `bisnis_desk`, `bisnis_keyword`, `bisnis_meta_desk`, `bisnis_gambar`, `bisnis_post_oleh`, `bisnis_post_hari`, `bisnis_post_tanggal`, `bisnis_post_jam`, `bisnis_update_oleh`, `bisnis_update_hari`, `bisnis_update_tanggal`, `bisnis_update_jam`, `bisnis_dibaca`, `bisnis_status`) VALUES
(19, 0, 'Integrated Livestock', 'integrated-livestock', '<p>Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berkesinambungan . Memiliki 4 farm di Cianjur, Cariu, Cileungsi, dan Klaten dengan kapasitas total populasi 172.000 ekor sapi.<br></p>', 'Integrated Livestock', 'Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berk', 'cianjur_farm1.jpg', 'panji', 'Senin', '2021-04-26', '15:10:12', 'panji', 'Senin', '2021-04-26', '16:02:49', 3, 'publish'),
(20, 0, 'Meat Processing', 'meat-processing', '<p>Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV dari Dinas Peternakan serta sertifikasi halal MUI. Produk daging CAM berupa daging segar (chilled beef) dan daging beku (frozen beef)  menyupali berbagai industri makanan olahan, distributor daging, berbagai pasar modern, market place, dan hospitality (hotel, kafe, restoran, katering) di Indonesia. CAM juga menyediakan produk daging dengan spesifikasi khusus (custom) yang biasanya dibutuhkan oleh kafe dan restoran.<br></p>', 'Meat Processing', 'Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV da', 'camnew.jpg', 'panji', 'Senin', '2021-04-26', '15:10:43', 'dhawy', 'Senin', '2021-04-26', '16:06:49', 2, 'publish'),
(21, 0, 'Integrated Poultry', 'integrated-poultry', '<p>Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatchery), Budidaya ayam broiler (Commercial Broiler Farm). Budidaya Ayam Petelur Premium Germanium ( Layer ), Rumah Pemotongan Ayam RPA (Slaughtered House) modern terbesar di Indonesia dan memproduksi produk ayam olahan.  WMU berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan. <br></p>', 'Integrated Poultry', 'Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatcher', 'wmunew.jpg', 'panji', 'Senin', '2021-04-26', '15:11:13', 'dhawy', 'Senin', '2021-04-26', '16:07:44', 2, 'publish'),
(22, 0, 'Commodity', 'commodity', '<p>Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. PT Widodofood Makmur Sejahtera sebagai representasi Commodity juga mengembangkan bisnis komoditi gula, kedelai, soy bean meal dan bahan pakan ternak terutama ayam dan sapi.<br></p>', 'Commodity', 'Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. ', 'wms.jpg', 'panji', 'Senin', '2021-04-26', '15:11:41', 'dhawy', 'Senin', '2021-04-26', '16:09:01', 2, 'publish'),
(23, 0, 'Construction dan Energy', 'construction-dan-energy', '<p>Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  Selain itu mulai merintis program energi terbarukan yaitu energi matahari melalui instalasi solar panel dan berencana menerapkan membangun kincir sebagai sumber energi angin.  Selain penerapan efisiensi biaya produksi juga sebagai komitmen Widodo Makmur dalam turut serta mengurangi emisi gas rumah kaca.<br></p>', 'Construction & Energy', 'Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  ', 'LMP2.jpg', 'panji', 'Senin', '2021-04-26', '15:12:11', 'panji', 'Selasa', '2021-04-27', '10:44:36', 2, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`bisnis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bisnis`
--
ALTER TABLE `bisnis`
  MODIFY `bisnis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

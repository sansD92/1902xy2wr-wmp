-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 09:05 AM
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
  `bisnis_status` varchar(20) NOT NULL,
  `bisnis_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bisnis`
--

INSERT INTO `bisnis` (`bisnis_id`, `bisnis_kategori_id`, `bisnis_judul`, `bisnis_judul_seo`, `bisnis_desk`, `bisnis_keyword`, `bisnis_meta_desk`, `bisnis_gambar`, `bisnis_post_oleh`, `bisnis_post_hari`, `bisnis_post_tanggal`, `bisnis_post_jam`, `bisnis_update_oleh`, `bisnis_update_hari`, `bisnis_update_tanggal`, `bisnis_update_jam`, `bisnis_dibaca`, `bisnis_status`, `bisnis_url`) VALUES
(19, 19, 'Integrated Livestock', 'integrated-livestock', '<p style=\"text-align: justify; \">Sebagai sebuah perusahaan peternakan sapi terintegrasi terbesar di Indonesia, PT Pasir Tengah (PST) kini tercatat memenuhi kurang lebih 17% dari total kebutuhan pasar sapi potong nasional. Secara kontinu pemenuhan tersebut disuplai dari 4 fasilitas farm yang tersebar di beberapa lokasi strategis di daerah Cianjur, Cariu, Cileungsi (ketiganya berada di wilayah Jawa Barat) dan Bayat (Klaten, Jawa Tengah) dengan total kapasitas hingga 172.000 ribu ekor per tahun. Kualitas produk adalah label utama PT Pasir Tengah dalam memasuki pasar dan bertahan di tengah persaingan. Inovasi adalah kunci untuk menjaga eksistensi dan reputasi. Visi kerja berbasis Research and Development telah menjadi salah satu kultur kami. Dengan mempertahankan kualitasnya, PT Pasir Tengah berhasil menjadi salah satu dari tiga pemain besar di bidang pasokan sapi potong di Indonesia.<br></p>', 'Integrated Livestock', 'Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berk', '450-x-3001.jpg', 'panji', 'Senin', '2021-04-26', '15:10:12', 'dhawy', 'Kamis', '2021-06-10', '18:31:31', 4, 'publish', ''),
(20, 20, 'Meat Processing', 'meat-processing', '<p style=\"text-align: justify; \">Lini bisnis Meat Processing bergerak di bidang Rumah Potong Hewan, perdagangan daging sapi, produksi makanan olahan dan pabrik kulit. </p><p style=\"text-align: justify; \">Berbasis ‘Integrated System‘, sapi-sapi dipelihara di empat Farm PT Pasir Tengah ( Integrated Livestock) kemudian diproses oleh PT Cianjur Arta Makmur menjadi produk daging sapi segar (chilled beef) dan daging beku (frozen beef)<br></p>', 'Meat Processing', 'Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV da', 'camnew.jpg', 'panji', 'Senin', '2021-04-26', '15:10:43', 'dhawy', 'Kamis', '2021-06-10', '18:45:31', 4, 'delete', ''),
(21, 21, 'Integrated Poultry', 'integrated-poultry', '<p style=\"text-align: justify; \">Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi ;</p><ul><li style=\"text-align: justify;\"> Produksi pakan ternak (feedmil),</li><li style=\"text-align: justify;\">Pembibitan&nbsp; Grand Parent Stock&nbsp; (Breeding GPS) dan Pembibitan&nbsp; Parent Stock (Breeding PS), </li><li style=\"text-align: justify;\">Penetasan (Hatchery), </li><li style=\"text-align: justify;\">Budidaya ayam broiler (Commercial Broiler Farm). </li><li style=\"text-align: justify;\">Budidaya Ayam Petelur Premium Germanium ( Layer ), </li><li style=\"text-align: justify;\">Rumah Pemotongan Hewan Unggas RPHU (Slaughtered House) modern terbesar di Indonesia.&nbsp;</li></ul><p style=\"text-align: justify;\">PT Widodo Makmur Unggas (WMU) berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan.&nbsp;Untuk keterangan lebih lanjut<br></p>', 'Integrated Poultry', 'Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatcher', 'wmunew.jpg', 'panji', 'Senin', '2021-04-26', '15:11:13', 'jiung', 'Kamis', '2021-06-10', '19:01:15', 3, 'Publish', ''),
(22, 22, 'Commodity', 'commodity', '<p style=\"text-align: justify; \">Food &amp; Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dalam berbagai varian ukuran dan brand. PT Widodofood Makmur Sejahtera sebagai representasi Commodity juga mengembangkan bisnis komoditi gula, kedelai, soy bean meal dan bahan pakan ternak terutama ayam dan sapi.<br></p>', 'Commodity', 'Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. ', 'wms.jpg', 'panji', 'Senin', '2021-04-26', '15:11:41', 'jiung', 'Kamis', '2021-06-10', '16:41:15', 2, 'publish', ''),
(23, 23, 'Construction dan Energy', 'construction-dan-energy', '<p style=\"text-align: justify; \">Lini bisnis Construction &amp; Energy menjadi pendukung penyelesaian konstruksi seluruh proyek investasi dari semua lini bisnis terutama Integrated Proyek-proyek yang telah dan sedang diselesaikan diantaranya;&nbsp;&nbsp;</p><ol><li style=\"text-align: justify;\">Parent Stock Breeding Farm Tonggor</li><li style=\"text-align: justify;\">GrandParent Stock Breeding Farm Bantar Gadung dan Ngawen</li><li style=\"text-align: justify;\">Commercial Farm Wuryantoro</li><li style=\"text-align: justify;\">Hatchery Kwangen</li><li style=\"text-align: justify;\">Layer Farm Sawit</li><li style=\"text-align: justify;\">Rumah Potong Hewan Unggas (RPHU)&nbsp; Jambakan</li><li style=\"text-align: justify;\">Rumah Potong Hewan Unggas (RPHU) Giritontro, terbesar di Indonesia) Dalam tahap</li><li style=\"text-align: justify;\">FeedMill Ngawi<br></li></ol>', 'Construction & Energy', 'Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  ', 'LMP2.jpg', 'panji', 'Senin', '2021-04-26', '15:12:11', 'jiung', 'Kamis', '2021-06-10', '16:49:57', 3, 'publish', ''),
(27, 19, 'Cianjur Farm', 'cianjur-farm', '<ul><li><span style=\"font-size: 1rem;\">140 Hektar</span><br></li><li>Populasi 26.000-30.000 Ekor Sapi </li><li>Kapasitas 172.000 Ekor/Tahun </li><li>Peternakan Sapi Terbesar di Indonesia </li><li>Memenuhi 17% Market Share Nasional<br></li></ul>', '', '', '1-PST-Cianjur-edit-2.jpg', 'jiung', 'Rabu', '2021-06-09', '15:53:51', 'dhawy', 'Kamis', '2021-06-10', '14:47:58', 1, 'publish', ''),
(28, 19, 'Cariu Farm', 'cariu-farm', '<ul><li>25 Hektar</li><li>Populasi 20.000 ekor sapi</li><li>Kapasitas 60.000 ekor / tahun</li></ul>', '', '', 'Cariu-Farm-850x450.jpg', 'dhawy', 'Kamis', '2021-06-10', '14:46:25', 'dhawy', 'Kamis', '2021-06-10', '14:52:24', 0, 'publish', ''),
(29, 19, 'Cileungsi Farm', 'cileungsi-farm', '<ul><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Luas 5 hektar</span></li><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Populasi mencapai 5000 ekor sapi.</span></li><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Peternakan ini disiapkan untuk memenuhi stok pasar Jakarta, Bogor, Depok, Tangerang dan sekitarnya.</span><br></li></ul>', '', '', 'cilengsi.png', 'dhawy', 'Kamis', '2021-06-10', '14:53:26', 'dhawy', 'Kamis', '2021-06-10', '14:54:33', 0, 'delete', ''),
(30, 19, 'Klaten Farm', 'klaten-farm', '<ul><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Luas 5 hektar</span></li><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Populasi mencapai 10.000 ekor sapi.</span></li><li><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Menjadi Pusat Penelitian dan Pengembangan Strain Sapi Unggulan dan sebagai “Centre Of Excellence” bekerjasama dengan Fakultas Peternakan Universitas Gadjah Mada di bawah supervisi para ahli peternakan terkemuka tingkat nasional.</span><br></li></ul>', '', '', 'farm1-850x450.png', 'dhawy', 'Kamis', '2021-06-10', '14:56:50', 'dhawy', 'Kamis', '2021-06-10', '18:39:02', 0, 'delete', ''),
(31, 19, 'Program Sapi Unggulan', 'program-sapi-unggulan', '<p style=\"text-align: justify; \">PT Pasir Tengah secara bertahap sejak tahun 2017, telah mengembangkan beberapa varian sapi unggulan melalui program cross-breeding bekerjasama dengan Fakultas Pertenakan UGM dan Faculty of Veterinary University LIEGE ULG Belgia<br></p>', '', '', 'sapi-ung.jpg', 'dhawy', 'Kamis', '2021-06-10', '14:58:19', 'jiung', 'Kamis', '2021-06-10', '15:03:18', 0, 'publish', ''),
(32, 19, 'Pakan Ternak', 'pakan-ternak', '<ul><li>Kapasitas produksi 131.000 ton/tahun </li><li>Produksi pakan untuk konsumsi internal 85% dan konsumsi eksternal (peternak plasma) 15%</li><li>Formula pakan ramah lingkungan hasil riset internal</li><li>Formulasi pakan bernutrisi tinggi di bawah pendampingan ahli peternakan nasional.</li><li>Pengembangan bio technology&nbsp; untuk meningkatkan performa ADG secara signifikan. </li><li>Kebutuhan suplai hijauan diperoleh dari penanaman jagung untuk efisiensi biaya pakan.<br></li></ul>', '', '', 'feedmill-1.png', 'dhawy', 'Kamis', '2021-06-10', '14:59:45', 'dhawy', 'Kamis', '2021-06-10', '18:42:42', 0, 'publish', ''),
(33, 20, 'Rumah Potong Hewan', 'rumah-potong-hewan', '<ul><li>Rumah Potong Hewan (RPH) terbesar di Indonesia</li><li><span style=\"font-size: 1rem;\">Kapasitas Potong 300 ekor/hari&nbsp;</span></li><li><span style=\"font-size: 1rem;\">Kapasitas Warehouse 3.000 ton</span></li><li>Kapasitas Blast Freezer 52 Ton </li><li>Sertifikasi Halal MUI</li><li>Sertifikasi NKV</li></ul>', '', '', 'meat_product.png', 'jiung', 'Kamis', '2021-06-10', '15:04:42', 'dhawy', 'Kamis', '2021-06-10', '18:46:12', 0, 'publish', ''),
(34, 19, 'Produksi Pupuk', 'produksi-pupuk', '<p style=\"text-align: justify; \">Limbah cair dan padat diproduksi sebagai pupuk organik yang dipasarkan ke perkebunan kelapa sawit, karet atau tebu. Menjadi bentuk komitmen kami dalam melaksanakan zero waste&nbsp; untuk mereduksi efek rumah kaca (green house effect). Keberlangsungan lingkungan merupakan komitmen kami. Tahun 2020 menjadi langkah maju PT Pasir Tengah karena telah merintis limbah peternakan untuk dikonversi sebagai bahan bakar biogas yang ramah lingkungan, bekerjasama dengan pihak ke tiga dalam produksinya.&nbsp;<br></p>', '', '', 'organicfertilizer.png', 'dhawy', 'Kamis', '2021-06-10', '15:06:15', 'jiung', 'Kamis', '2021-06-10', '15:18:08', 0, 'publish', ''),
(35, 20, 'Makanan Olahan', 'makanan-olahan', '<ul><li>800 item produk <span style=\"font-size: 1rem;\">Produksi Sosis 2400 ton/tahun </span></li><li><span style=\"font-size: 1rem;\">Produksi Bakso 1440 ton/tahun </span></li><li><span style=\"font-size: 1rem;\">Produksi Naget 3600 ton/tahun </span></li><li><span style=\"font-size: 1rem;\">Produksi Roti dan Pao 240 ton/tahun</span></li></ul>', '', '', 'sosss.JPG', 'jiung', 'Kamis', '2021-06-10', '15:06:54', 'dhawy', 'Kamis', '2021-06-10', '18:54:49', 0, 'publish', ''),
(36, 20, 'Pabrik Kulit', 'pabrik-kulit', '<ul><li>Target Produksi  Kulit untuk industri  12 juta ft²/tahun, 2)</li><li>Turn Over 100 Milyar</li><li> 150 SDM  berpengalaman</li><li> Bahan baku industri otomotif, fashion & apparel, upholstery dan shoe leathery<br></li></ul>', '', '', 'kulit.jpg', 'jiung', 'Kamis', '2021-06-10', '15:07:19', 'dhawy', 'Kamis', '2021-06-10', '16:10:26', 0, 'publish', ''),
(37, 21, 'Pakan Ternak', 'pakan-ternak', '<ul><li>Nutrisi yang sangat baik untuk kemampuan bertahan hidup unggas yang lebih baik</li><li>Pakan merek W99 oleh WMU diformulasikan untuk memenuhi kebutuhan unggas di setiap fase.<br></li></ul>', '', '', 'Feedmill-2.png', 'jiung', 'Kamis', '2021-06-10', '15:08:22', 'dhawy', 'Kamis', '2021-06-10', '16:23:30', 0, 'Publish', ''),
(38, 21, 'Pembibitan', 'pembibitan', '<p style=\"text-align: justify; \">Unit usaha WMU yang memproduksi bibit ayam berkualitas. WMU memiliki unit Grand Parent Stock (GPS) serta Parent Stock (PS) Breeding Farm yang dikelola secara modern dengan fasilitas kandang closed house dengan teknologi terbaru. Menerapkan sistem pemeliharaan Good Breeding Practice (GBP) secara ketat, untuk meraih hasil produksi terbaik yang dijalankan para praktisi muda peternakan yang berpengalaman di bawah supervisi ahli dan akademisi peternakan unggas terbaik.<br></p>', '', '', 'pembibitan.png', 'jiung', 'Kamis', '2021-06-10', '15:10:12', 'jiung', 'Kamis', '2021-06-10', '16:24:14', 0, 'publish', ''),
(39, 21, 'Penetasan', 'penetasan', '<p style=\"text-align: justify; \">Unit usaha Penetasan memiliki fasilitas Cold Storage, Setting Machine, Hatchery Machine, dan menerapkan Good Manufacturing Practice (GMP) untuk menghasilkan produk Day Old Chick  (DOC) kualitas terbaik. Seleksi telur dilakukan secara rutin untuk mendapatkan telur dengan tingkat salable chick tinggi  sebelum menuju proses boxing dan delivery untuk disalurkan pada peternakan ayam komersial internal maupun eksternal.<br></p>', '', '', 'hatcherys.png', 'jiung', 'Kamis', '2021-06-10', '15:10:25', 'dhawy', 'Kamis', '2021-06-10', '16:38:07', 0, 'publish', ''),
(40, 21, 'Peternakan Komersial', 'peternakan-komersial', '<p style=\"text-align: justify; \">Unit usaha Commercial Broiler Farm fokus pada pemeliharaan Day Old Chick (ayam umur 1 hari) sampai siap panen sebagai&nbsp; livebird (ayam siap potong) yang dilakukan di beberapa lokasi Commercial Farm&nbsp; dengan menerapkan Good Breeding Practice (GBP) yang dilaksanakan para praktisi di lapangan sehingga menghasilkan ayam siap potong dengan performa terbaik.<br></p>', '', '', 'broilerr.jpg', 'jiung', 'Kamis', '2021-06-10', '15:11:03', 'dhawy', 'Selasa', '2021-06-22', '10:51:23', 0, 'publish', ''),
(41, 21, 'Peternakan Layer', 'peternakan-layer', '<ul><li>Unit Usaha Layer Farm memproduksi telur ayam konsumsi premium Germanium</li><li>Beroperasi di wilayah Jawa Tengah yang siap untuk memasok kebutuhan telur ayam terutama di wilayah Jawa Tengah, Jawa Timur dan sekitarnya.<br></li></ul>', '', '', 'Layer-Farm-ox4eklh6kghb8c7gmfkzmurw6g2bv0rpbpym0nsljk.png', 'jiung', 'Kamis', '2021-06-10', '15:11:25', 'jiung', 'Kamis', '2021-06-10', '16:33:11', 0, 'publish', ''),
(42, 21, 'Rumah Potong Hewan Unggas (RPHU)', 'rumah-potong-hewan-unggas-rphu', '<p style=\"text-align: justify; \">Unit usaha Rumah Potong Hewan Unggas (RPHU) dikelola dengan menerapkan sistem&nbsp; Good Manufacturing Practice (GMP). RPHU Giritontro merupakan RPA terbesar di Indonesia dengan kapasitas pemotongan mencapai 24.000 ekor perjam dan peralatan pemotongan tercanggih, sehingga proses pemotongan efisien dan terjamin kualitas dan higienitasnya hingga ke tangan konsumen, WMU memenuhi persyaratan yang ditetapkan dalam sertifikasi halal dan NKV.<br></p>', '', '', 'rphayam.png', 'jiung', 'Kamis', '2021-06-10', '15:11:59', 'jiung', 'Kamis', '2021-06-10', '16:35:32', 0, 'publish', ''),
(43, 21, 'Kemitraan', 'kemitraan', '', '', '', '', 'jiung', 'Kamis', '2021-06-10', '15:12:21', 'jiung', 'Kamis', '2021-06-10', '15:12:56', 0, 'delete', ''),
(44, 22, 'Produksi Beras Kemasan', 'produksi-beras-kemasan', '<ul><li>Rice Mill Tegal Trading Komoditas Bermitra dengan Petani </li><li>Kapasitas 50.000 Ton/Tahun </li><li>Sertifikasi BPOM </li><li>Sertifikasi Halal MUI<br></li></ul>', '', '', 'sdwe.JPG', 'dhawy', 'Kamis', '2021-06-10', '16:30:53', 'dhawy', 'Kamis', '2021-06-10', '16:59:29', 0, 'publish', ''),
(45, 22, 'Trading Komoditas', 'trading-komoditas', '<ul><li>Gula Pasir </li><li>Jagung </li><li>Onggok </li><li>Soy bean Meal</li><li> Gandum<br></li></ul>', '', '', 'kedelai-450-x-300.jpg', 'dhawy', 'Kamis', '2021-06-10', '16:31:02', 'dhawy', 'Kamis', '2021-06-10', '18:37:27', 0, 'publish', ''),
(46, 22, 'Kemitraan dan penanaman Jagung Secara Masif', 'kemitraan-dan-penanaman-jagung-secara-masif', '<ul><li>1.000 Mitra Budidaya Jagung </li><li>500 Mitra Budidaya Padi</li><li> Budidaya Padi dan Jagung<br></li></ul>', '', '', 'jagung.jpg', 'dhawy', 'Kamis', '2021-06-10', '16:31:12', 'dhawy', 'Kamis', '2021-06-10', '17:11:22', 0, 'publish', ''),
(47, 23, 'Konstruksi Untuk Internal', 'konstruksi-untuk-internal', '', '', '', '', 'dhawy', 'Kamis', '2021-06-10', '16:32:06', '', '', '0000-00-00', '00:00:00', 0, 'delete', ''),
(48, 23, 'Energy Terbarukan', 'energy-terbarukan', '<p style=\"text-align: justify; \">Lini Bisnis Construction & Energy juga merintis program energi terbarukan bersumber dari energi matahari melalui instalasi solar panel dan berencana membangun kincir angin sebagai sumber energi angin.  Selain sebagai penerapan efisiensi biaya produksi juga sebagai komitmen mengurangi emisi gas rumah kaca<br></p>', '', '', 'LMP21.jpg', 'dhawy', 'Kamis', '2021-06-10', '16:32:18', 'dhawy', 'Kamis', '2021-06-10', '17:06:51', 0, 'publish', '');

-- --------------------------------------------------------

--
-- Table structure for table `bisnis_kategori`
--

CREATE TABLE `bisnis_kategori` (
  `bisnis_kategori_id` int(11) NOT NULL,
  `bisnis_kategori_judul` varchar(220) NOT NULL,
  `bisnis_kategori_judul_seo` varchar(220) NOT NULL,
  `bisnis_kategori_desk` text NOT NULL,
  `bisnis_kategori_keyword` varchar(220) NOT NULL,
  `bisnis_kategori_meta_desk` varchar(200) NOT NULL,
  `bisnis_kategori_gambar` text NOT NULL,
  `bisnis_kategori_gambar_sub` text NOT NULL,
  `bisnis_kategori_gambar_icon` text NOT NULL,
  `bisnis_kategori_gambar_flip` text NOT NULL,
  `bisnis_kategori_post_oleh` varchar(200) NOT NULL,
  `bisnis_kategori_post_hari` varchar(20) NOT NULL,
  `bisnis_kategori_post_tanggal` date NOT NULL,
  `bisnis_kategori_post_jam` time NOT NULL,
  `bisnis_kategori_update_oleh` varchar(200) NOT NULL,
  `bisnis_kategori_update_hari` varchar(20) NOT NULL,
  `bisnis_kategori_update_tanggal` date NOT NULL,
  `bisnis_kategori_update_jam` time NOT NULL,
  `bisnis_kategori_dibaca` int(50) NOT NULL,
  `bisnis_kategori_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bisnis_kategori`
--

INSERT INTO `bisnis_kategori` (`bisnis_kategori_id`, `bisnis_kategori_judul`, `bisnis_kategori_judul_seo`, `bisnis_kategori_desk`, `bisnis_kategori_keyword`, `bisnis_kategori_meta_desk`, `bisnis_kategori_gambar`, `bisnis_kategori_gambar_sub`, `bisnis_kategori_gambar_icon`, `bisnis_kategori_gambar_flip`, `bisnis_kategori_post_oleh`, `bisnis_kategori_post_hari`, `bisnis_kategori_post_tanggal`, `bisnis_kategori_post_jam`, `bisnis_kategori_update_oleh`, `bisnis_kategori_update_hari`, `bisnis_kategori_update_tanggal`, `bisnis_kategori_update_jam`, `bisnis_kategori_dibaca`, `bisnis_kategori_status`) VALUES
(19, 'Livestock', 'livestock', '<p>Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berkesinambungan . Memiliki 4 farm di Cianjur, Cariu, Cileungsi, dan Klaten dengan kapasitas total populasi 172.000 ekor sapi.<br></p>', 'Integrated Livestock', 'Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berk', 'Sub_Produk.png', 'Sub_Produk.png', '', '', 'panji', 'Senin', '2021-04-26', '15:10:12', 'dhawy', 'Kamis', '2021-09-09', '10:43:32', 3, 'publish'),
(20, 'Meat Processing', 'meat-processing', '<p>Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV dari Dinas Peternakan serta sertifikasi halal MUI. Produk daging CAM berupa daging segar (chilled beef) dan daging beku (frozen beef)  menyupali berbagai industri makanan olahan, distributor daging, berbagai pasar modern, market place, dan hospitality (hotel, kafe, restoran, katering) di Indonesia. CAM juga menyediakan produk daging dengan spesifikasi khusus (custom) yang biasanya dibutuhkan oleh kafe dan restoran.<br></p>', 'Meat Processing', 'Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV da', 'camnew.jpg', '', '', '', 'panji', 'Senin', '2021-04-26', '15:10:43', 'dhawy', 'Senin', '2021-04-26', '16:06:49', 2, 'publish'),
(21, 'Poultry', 'poultry', '<p>Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatchery), Budidaya ayam broiler (Commercial Broiler Farm). Budidaya Ayam Petelur Premium Germanium ( Layer ), Rumah Pemotongan Ayam RPA (Slaughtered House) modern terbesar di Indonesia dan memproduksi produk ayam olahan.  WMU berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan. <br></p>', 'Integrated Poultry', 'Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatcher', 'wmunew.jpg', '', 'POULTRY.png', '', 'panji', 'Senin', '2021-04-26', '15:11:13', 'dhawy', 'Senin', '2021-09-13', '10:41:40', 2, 'publish'),
(22, 'Commodity', 'commodity', '<p>Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. PT Widodofood Makmur Sejahtera sebagai representasi Commodity juga mengembangkan bisnis komoditi gula, kedelai, soy bean meal dan bahan pakan ternak terutama ayam dan sapi.<br></p>', 'Commodity', 'Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. ', 'wms.jpg', '', '', '', 'panji', 'Senin', '2021-04-26', '15:11:41', 'dhawy', 'Senin', '2021-04-26', '16:09:01', 2, 'publish'),
(23, 'Construction dan Energy', 'construction-dan-energy', '<p>Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  Selain itu mulai merintis program energi terbarukan yaitu energi matahari melalui instalasi solar panel dan berencana menerapkan membangun kincir sebagai sumber energi angin.  Selain penerapan efisiensi biaya produksi juga sebagai komitmen Widodo Makmur dalam turut serta mengurangi emisi gas rumah kaca.<br></p>', 'Construction & Energy', 'Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  ', 'LMP2.jpg', '', '', '', 'panji', 'Senin', '2021-04-26', '15:12:11', 'dhawy', 'Sabtu', '2021-09-11', '14:58:34', 2, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogs_id` int(11) NOT NULL,
  `blogs_judul` varchar(220) NOT NULL,
  `blogs_judul_seo` varchar(220) NOT NULL,
  `blogs_kategori_id` int(11) NOT NULL,
  `blogs_bahasa` varchar(10) NOT NULL,
  `blogs_desk` text NOT NULL,
  `blogs_keyword` varchar(220) NOT NULL,
  `blogs_meta_desk` varchar(200) NOT NULL,
  `blogs_gambar` text NOT NULL,
  `blogs_post_oleh` varchar(200) NOT NULL,
  `blogs_post_hari` varchar(20) NOT NULL,
  `blogs_post_tanggal` date NOT NULL,
  `blogs_post_jam` time NOT NULL,
  `blogs_update_oleh` varchar(200) NOT NULL,
  `blogs_update_hari` varchar(20) NOT NULL,
  `blogs_update_tanggal` date NOT NULL,
  `blogs_update_jam` time NOT NULL,
  `blogs_dibaca` int(50) NOT NULL,
  `blogs_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogs_id`, `blogs_judul`, `blogs_judul_seo`, `blogs_kategori_id`, `blogs_bahasa`, `blogs_desk`, `blogs_keyword`, `blogs_meta_desk`, `blogs_gambar`, `blogs_post_oleh`, `blogs_post_hari`, `blogs_post_tanggal`, `blogs_post_jam`, `blogs_update_oleh`, `blogs_update_hari`, `blogs_update_tanggal`, `blogs_update_jam`, `blogs_dibaca`, `blogs_status`) VALUES
(11, 'Donor Darah Di Kantor Pusat Widodo Makmur Perkasa', 'donor-darah-di-kantor-pusat-widodo-makmur-perkasa', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Donor darah adalah sebuah kegiatan mulia, yang bertujuan untuk membantu sesama. Telah menjadi tradisi bagi Widodo Makmur Perkasa untuk memngadakan acara donor darah secara berkala. Bekerjasama dengan PMI jakarta Timur pada tanggal 25 Maret 2019 pukul 09.00-11.00 WIB telah dilaksanakan acara donor darah yang dilaksanakan di Kantor Pusat Widodo Makmur Perkasa di Graha Widodo Makmur Jl. Raya Cilangkap no 58, Cipayung, Jakarta Timur. Adapun acara ini diikuti oleh 80 orang peserta dari level Direksi hingga supporting level. Namun dari pemeriksaan pendahuluan, akhirnya 48 oranglah yang diijinkan untuk mendonorkan darahnya.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Beberapa pertimbangan seseorang diijinkan untuk mendonorkan darahnya adalah;</p><ol style=\"margin-bottom: 10px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><li>Tubuh dalam kondisi fit,</li><li>Tidak mengidap penyakit menular seperti AIDS, Hepatitis, Malaria</li><li>Tidak sedang mengkonsumsi obat-obatan seperti obat pengencer darah,</li><li>Tidak sedang menstruasi, hamil atau menyusui,</li><li>Tidak dalam kondisi darah rendah, berat badan di bawah normal,</li><li>Tidak dalam kondisi kurang tidur (begadang)</li></ol>', 'acara donor darah,donor darah,widodo makmur perkasa', 'Donor darah adalah sebuah kegiatan mulia, yang bertujuan untuk membantu sesama.', 'Backdrop-Donor-Darah-cetak-01-EDIT1.jpg', 'dhawy', 'Rabu', '2021-04-21', '15:15:01', 'dhawy', 'Rabu', '2021-04-21', '15:45:58', 2, 'publish'),
(12, 'JOSO Sebagai Juara 1 Jakarta Architecture Installation Festival (JAIF) 2019', 'joso-sebagai-juara-1-jakarta-architecture-installation-festival-jaif-2019', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">JOSO sebagai salah satu anak perusahaan di lini bisnis Properti, bergerak di bidang jasa konsultan arsitektur. Telah memenangkan berbagai kompetisi arsitektur tingkat nasional & dipercaya menangani berbagai proyek arsitektur dari pemerintah, BUMN, maupun pihak swasta.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Pada acara Jakarta Architecture Installation Festival (JAIF) 2019, salah satu karya JOSO yang berjudul ‘konkavitas’ terpilih sebagai Juara 1 pilihan pengunjung. Selamat kepada JOSO & teruslah ciptakan karya-karya terbaik ke depannya!</p>', 'arsitekindonesia,joso,jaif2019,widodomakmurperkasa', 'JOSO sebagai salah satu anak perusahaan di lini bisnis Properti, bergerak di bidang jasa konsultan arsitektur. ', 'joso-jaif-EDIT.jpg', 'dhawy', 'Rabu', '2021-04-21', '15:51:12', 'dhawy', 'Rabu', '2021-04-21', '15:51:25', 2, 'publish'),
(15, 'Santunan Anak Yatim Memperingati HUT PT Widodo Makmur Perkasa Group Yang Ke-20', 'santunan-anak-yatim-memperingati-hut-pt-widodo-makmur-perkasa-group-yang-ke20', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Perkasa merayakan Hari Ulang Tahun ke-20 pada tanggal 19 September 2019 dengan mengadakan rangkaian kegiatan peringatan berupa tasyakuran bersama seluruh keluarga besar PT Widodo Makmur Perkasa Group pada tanggal 19 September 2019 pukul 09.00-12.00 WIB di Kantor Pusat Widodo Makmur Perkasa (Graha Widodo Makmur) Jl. Raya Cilangkap no 58, Cipayung, Jakarta Timur.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Santunan pada 100 anak yatim berupa dana &amp; perlengkapan sekolah dari wilayah sekitar kantor pusat dan acara donor darah yang diikuti oleh 80 orang karyawan yang berada di kantor pusat. Bekerjasama dengan PMI Jakarta Timur telah terkumpul 40 kantong darah yang disumbangkan bagi masyarakat yang membutuhkan. WMP telah berkomitmen untuk melaksanakan kegiatan donor darah minimal 2 kali dalam setahun sebagai wujud kepedulian sosial.</p>', 'csr,santunan anak yatim,HUT WMP', 'santunan anak yatim, csr', 'Berita_3.jpg', 'panji', 'Rabu', '2021-04-28', '10:51:30', '', '', '0000-00-00', '00:00:00', 2, 'publish'),
(16, 'Rapat Kerja PT Widodo Makmur Perkasa Tahun 2020 Di JOGLO TUMIYONO (Kesatriaan Entrepreneur Indonesia) Ngerangan, Bayat, Klaten', 'rapat-kerja-pt-widodo-makmur-perkasa-tahun-2020-di-joglo-tumiyono-kesatriaan-entrepreneur-indonesia-ngerangan-bayat-klaten', 0, '', '<div class=\"entry-content\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Pada Sabtu 18 Januari 2020 PT Widodo Makmur Perkasa melakukan Rapat Kerja dan Koordinasi dengan seluruh elemen perusahaan baik dari Holding maupun subsidiaries yang diikuti seluruh managemen setingkat manager ke atas serta menyertakan rekrutmen baru agar bersosialisasi dengan seluruh jajaran WMP Group.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Rapat Kerja WMP tahun 2020 dilaksankan di Joglo Tumiyono, yang berada Ngerangan, Bayat, kabupaten Klaten, Jawa Tengah. Para partisipan sebanyak 300 orang antusias hadir tepat waktu untuk mengikuti jalannya Rapat Kerja yang dipimpin oleh Bapak Tedy M. Subekti selaku Wakil Direktur Utama WMP yang bertindak sebagai peminpin sidang.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Rapat dibuka dengan sambutan dari Bapak Raden Marlan selaku Direktur Utama WMP yang menyisipkan harapan agar Rapat Kerja menjadi jembatan pertama dalam merealisasikan Proyeksi agar terwujud dalam kinerja perusahaan satu tahun mendatang serta menggarisbawahi pentingnya koordinasi, komunikasi dan konsolidasi seluruh elemen perusahaan agar satu tujuan mewujudkan visi perusahaan sebagai penyedia Pangan dan Papan Terbesar di Asia Tenggara.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Founder WMP yang turut hadir dalam rapat kerja dalam pidato inspiratifnya mengajak seluruh elemen perusahaan agar siap menghadapi persaingan di era 4.0 yang kompetitif dan menuntut kecepatan, keefektifan dan inovasi dalam memproduksi produk-produk unggulan. Juga mengajak seluruh elemen perusahaan untuk membuka diri terhadap tatanan ekonomi baru, selalu haus untuk belajar dan siap menghadapi era disruption dimana perusahaan harus selalu update terhadap perkembangan jaman.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Pada acara Raker kali ini juga diadakan penyerahan SK pada sosok-sosok muda yang dipercaya akan menjadi lokomotif pertumbuhan dan peningkatan kinerja di WMP  Group khususnya di bidang marketing dan keuangan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Raker yang dilaksankan hingga pukul 16.00 WIB berlangsung tertib dan lancar sesuai agenda yang telah ditetapkan. Setelah Raker diadakan acara ramah tamah dan malam keakraban antara <em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">founder</em>, jajaran komisaris, jajaran direksi dan seluruh elemen perusahaan agar makin tercipta synergy yang berdampak positif pada perusahaan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">GO…….. SYNERGY ……………. BE THE WINNER……. !</p></div><footer class=\"entry-meta\" style=\"border-top: 1px solid rgb(244, 244, 244); border-bottom: 1px solid rgb(244, 244, 244); padding: 28px 0px 22px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><div class=\"row\" style=\"border: 0px none; margin: 0px -15px; outline: none 0px; padding: 0px;\"></div></footer>', 'RAKOR,RAKER,JOGLO TUMIYONO', 'RAKOR TAHUNAN WMP', 'Berita_4.jpg', 'panji', 'Rabu', '2021-04-28', '10:53:38', 'panji', 'Rabu', '2021-04-28', '10:54:15', 2, 'Publish'),
(17, 'JOSO 1st Winner Sayembara Gedung Pusat Bank Aceh Syariah', 'joso-1st-winner-sayembara-gedung-pusat-bank-aceh-syariah', 0, '', '<div class=\"entry-content\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">JOSO yang dimotori oleh para anak muda yang cerdas, beridealisme tingggi dan peduli pada issue-issue yang terkait dengan pelestarian lingkungan hidup dalam rancangannya. Selain memasukkan nilai-nilai kearifan lokal agar bangunan yang dirancang lebih bernafas Indonesia. Wawasan yang luas, semangat untuk terus belajar dan cita-cita untuk menjadikan JOSO sebagai salah satu konsultan arsitek terdepan di Indonesia.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Pada acara Sayembara Gedung Pusat Bank Aceh Syariah, salah satu karya JOSO yang berjudul Seulanga Timoh “Bunga Kenanga Yang Tumbuh” terpilih sebagai Juara 1. Kompetisi ini diikuti oleh 100 peserta dari seluruh Indonesia dan berasal dari biro-biro arsitek ternama. Penyerahan hadiah pada Jumat, 14 Februari 2020 di Hotel Hermes, Banda Aceh. Diserahkan langsung oleh Gubernur Aceh Bapak Nova Iriansyah.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Bunga Kenanga merupakan identitas masyarakat Aceh &amp; Icon Corporate Bank Syariah Aceh. Gedung “Kenanga yang tumbuh” merepresentasikan tumbuh berkembangnya Bank syariah Aceh yang akan mengiringi tumbuh kembangnya perekonomian &amp; kesejahteraan masyarakat Aceh. Gedung ini menjadi landmark yang harum &amp; mengharumkan Aceh di mata dunia, selayaknya bunga Kenanga.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Identitas kultur &amp; value korporasi disatupadukan sebagai konsep utama dalam desain gedung ini. Metafora dari bentuk tumpukan uang menjadi identitas korporasi bank sebagai wadah penyimpan uang. Dua massa yang bergerak tumbuh vertikal melambangkan pergerakan tumbuh bersama antara masyarakat &amp; korporasi Bank dalam mencapai tujuan kemakmuran bersama. Rencong sebagai simbol identitas lokal, keberanian, &amp; ketangguhan masyarakat Aceh menjadi dasar imajiner bentuk massa bangunan. Pemilihan pattern dari motif geometris puncak hiasan tulak angen &amp; motif kindang di rumah tradisional Aceh menjadi penguat &amp; pengikat bangunan dalam tampilan konteks lokal.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Kompetisi ini diikuti oleh 100 peserta dari seluruh Indonesia dan berasal dari biro-biro arsitek ternama. Penyerahan hadiah pada Jumat, 14 Februari 2020 di Hotel Hermes, Banda Aceh. Diserahkan langsung oleh Gubernur Aceh Bapak Nova Iriansyah.</p></div><footer class=\"entry-meta\" style=\"border-top: 1px solid rgb(244, 244, 244); border-bottom: 1px solid rgb(244, 244, 244); padding: 28px 0px 22px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><div class=\"row\" style=\"border: 0px none; margin: 0px -15px; outline: none 0px; padding: 0px;\"></div></footer>', 'JOSO,1st Winner Sayembara,Gedung Pusat Bank Aceh Syariah', 'JOSO 1st Winner Sayembara Gedung Pusat Bank Aceh Syariah', 'Berita_5.jpg', 'panji', 'Rabu', '2021-04-28', '10:57:27', '', '', '0000-00-00', '00:00:00', 2, 'publish'),
(18, 'PT Widodo Makmur Unggas Mendukung Pencegahan Covid-19 Di Kabupaten Klaten', 'pt-widodo-makmur-unggas-mendukung-pencegahan-covid19-di-kabupaten-klaten', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Unggas (WMU) ikut peduli terhadap wabah Covid-19. Sebagai bentuk kepedulian, pada tanggal 10 April 2020 WMU menyerahkan 500 liter disinfektan kepada Dinas Kesehatan (Dinkes) Klaten.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Secara simbolis penyerahan dilakukan Pimpinan Human Capital Development (HCD) PT Widodo Makmur Unggas, Alfian Dukhan yang diterima Kepala Bidang Kesehatan Masyarakat Dinkes Klaten, drg Em Tuti Nurharyanti. Pimpinan HCD PT Widodo Makmur Unggas, Alfian Dukhan menyampaikan, bantuan disinfektan sebanyak 500 liter berasal dari dana Corporate Social Responsibility PT Widodo Makmur Unggas.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Bantuan disinfektan dari PT Widodo Makmur Unggas akan didistribusikan ke rumah sakit dan puskesmas. Dinkes Klaten akan koordinasi dengan petugas lapangan untuk penyemprotan disinfektan ke tempat umum.</p>', 'covid-19,CSR', 'Pencegahan Covid-19 Di Kabupaten Klaten', 'Berita_6.jpg', 'panji', 'Rabu', '2021-04-28', '11:00:19', '', '', '0000-00-00', '00:00:00', 2, 'publish'),
(19, 'PT Widodo Makmur Unggas Memberikan Bantuan Telur Di Beberapa Wilayah Kabupaten Gunungkidul', 'pt-widodo-makmur-unggas-memberikan-bantuan-telur-di-beberapa-wilayah-kabupaten-gunungkidul', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Unggas (WMU) melalui program tanggung jawab sosial atau Corporate Social Responsibility (CSR), pada tanggal 17 April 2020 WMU memberikan bantuan telur ke beberapa instansi atau beberapa titik di Kabupaten Gunungkidul.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Penyerahan bantuan CSR dilakukan perwakilan PT Widodo Makmur Unggas (WMU), Sugeng Riyanto yang diterima Kepala Desa Pacarejo, Suhadi. Pemberian bantuan berupa telur ke beberapa instansi seperti Dinas Pertanian dan Pangan Kabupaten Gunungkidul, Polres Gunungkidul, RSUD Gunungkidul, Kantor Desa Pacarejo, Panti Asuhan dan lain-lain.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Program bantuan CSR telur ini bertujuan untuk memberikan&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">extra nutrition</em>&nbsp;kepada warga yang dianggap membutuhkan, petugas medis dan seluruh pihak yang membantu dalam penanganan terhadap pasien Covid-19.</p>', 'bantuan telur,CSR', ' Bantuan Telur Di Beberapa Wilayah Kabupaten Gunungkidul', 'Berita_7.jpg', 'panji', 'Rabu', '2021-04-28', '11:03:57', '', '', '0000-00-00', '00:00:00', 1, 'Publish'),
(20, 'Siapkan IPO, Widodo Makmur Group Gandeng Fuji Bangun Pabrik Pakan Rp 650 Miliar', 'siapkan-ipo-widodo-makmur-group-gandeng-fuji-bangun-pabrik-pakan-rp-650-miliar', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Anak usaha Widodo Makmur Perkasa Group, PT Widodo Makmur Unggas (WMU), Rabu (8/7), menandatangani nota kerja sama dan surat perintah kerja dengan afiliasi Fuji Electric Group asal Jepang. Kedua perusahaan sepakat membangun pabrik pakan di Ngawi, Jawa Timur, senilai Rp 650 miliar.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Nota kerja sama dan surat perintah kerja itu diteken oleh CEO PT Widodo Makmur Unggas Ali Masadi dan perwakilan afiliasi Fuji Electric Group. Pembangunan pabrik tersebut direncanakan memakan waktu selama 1,5 tahun. Pabrik ini akan berdiri di atas lahan seluas 12 hektare dengan kapasitas 140 ton per jam.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">“Kami menargetkan pembangunan tahap pertama akan selesai pada 2021,” ujar Founder Widodo Makmur Perkasa Group, Tumiyana, Rabu (8/7). Dia mengatakan, pembangunan pabrik tersebut untuk memenuhi kebutuhan pakan unggas perusahaan yang mencapai 50.000 ton per bulan. Mereka ingin melepas ketergantungan dengan pihak lain.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Lebih lanjut, Tumiyana mengatakan pembangunan pabrik tersebut turut berkontribusi pada penyerapan tenaga kerja di tanah air, khususnya di Ngawi, Jawa Timur.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Unggas adalah perusahaan yang bergerak di bidang peternakan ayam terpadu. Saat ini, perusahaan yang berbasis di Jakarta itu memiliki delapan lokasi peternakan yang tersebar di seluruh pulau Jawa.</p>', 'IPO', '', 'Berita_8.jpg', 'panji', 'Rabu', '2021-04-28', '11:05:44', '', '', '0000-00-00', '00:00:00', 1, 'publish'),
(21, 'Investasi RP 650 Miliar, Widodo Makmur Unggas Groundbreaking Pabrik Pakan Ayam Di Ngawi', 'investasi-rp-650-miliar-widodo-makmur-unggas-groundbreaking-pabrik-pakan-ayam-di-ngawi', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Unggas (WMU) mulai melakukan pekerjaan konstruksi pembangunan pabrik pakan ayam yang berlokasi di Kecamatan Widodaren, Ngawi, Jawa Timur.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Pembangunan pabrik seluas 12,7 hektar (ha) ini merupakan tindak lanjut dari nota kerjasama yang dilakukan sebelumnya dengan Fuji Electric Group asal Jepang.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Acara&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">groundbreaking</em>&nbsp;atau peletakan batu pertama pembangunan pabrik pakan ayam dilakukan pada Rabu 19 Agustus 2020.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Bagi WMU, pembangunan pabrik pakan bertujuan untuk memastikan pemenuhan kebutuhan pakan unggas WMU tetap terjaga kualitas dan konsistensinya. Pabrik tersebut juga diharapkan berkontribusi pada penyerapan tenaga kerja, terutama di wilayah Ngawi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Diberitakan sebelumnya, WMU yang diwakili oleh Direktur Utama, Ali Mas’adi, menandatangani nota kerja sama dan Surat Perintah Kerja (SPK) dengan afiliasi Fuji Electric Group untuk membangun pabrik pakan di Ngawi senilai Rp 650 miliar. “Pabrik dijadwalkan beroperasi pada 2021”, ujar Ali Mas’adi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">WMU merupakan anak perusahaan Widodo Makmur Perkasa yang bergerak di bidang peternakan ayam terintegrasi vertikal. “Dengan nilai-nilai integritas, professional, loyalitas, sinergi dan kolaborasi, saat ini, kami memiliki beberapa lokasi peternakan dan fasilitas lain yang tersebar di Pulau Jawa”, tambah Ali Mas’adi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Divisi-divisi WMU meliputi bisnis pakan, peternakan komersial, penetasan dan rumah potong ayam. Divisi hatchery menerapkan good manufacturing practice (GMP), sehingga menghasilkan produk Day Old Chick (DOC) yang berkualitas.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Sementara itu, Divisi Peternakan yang dilakukan di beberapa lokasi commercial farm, dengan menerapkan Good Farming Practice (GFP). Divisi Usaha&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">slaughter house</em>&nbsp;atau Rumah Potong Ayam (RPA) dikelola dengan menerapkan sistem Good Manufacturing Practice (GMP), “RPA WMU kami akan menjadi RPA terbesar di Indonesia”, pungkas Ali.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Divisi Feedmill WMU, memproduksi pakan ayam berkualitas tinggi. Feedmill WMU memasok kebutuhan pakan internal, kemitraan, dan pihak eksternal. “Ini semua dilakukan untuk bisa mendukung dalam misi melayani kebutuhan masyarakat Indonesia terhadap daging ayam yang berkualitas dan terjangkau”, tutup Ali</p>', 'IPO,Ground Breaking', '', 'Berita_91.png', 'panji', 'Rabu', '2021-04-28', '11:12:03', '', '', '0000-00-00', '00:00:00', 1, 'publish'),
(22, 'Peresmian Hatchery Dan Breeding Farm Widodo Makmur Unggas Di Tonggor, DIY', 'peresmian-hatchery-dan-breeding-farm-widodo-makmur-unggas-di-tonggor-diy', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Peresmian Hatchery dan Breeding Farm Widodo Makmur Unggas di Tonggor, DIY</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Yogyakarta, 25 Agustus 2020 – Gubernur Daerah Istimewa Yogyakarta (DIY) Sri Sultan Hamengkubuwono X yang diwakili oleh wakil Gubernur Sri Pakualan X meresmikan kantor PT Widodo Makmur Unggas (WMU) di Tonggor, Gunungkidul, DIY, Selasa (25/8). Kegiatan itu sekaligus meresmikan Hatchery dan Broiler Breeding Farm milik WMU.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Peresmian ditandai dengan penandatanganan prasasti oleh Gubernur DIY, yang didampingi oleh Direktur Utama WMU Ali Mas’adi dan Founder PT Widodo Makmur Perkasa (WMP), sebagai induk usaha WMU sebuah perusahaan peternakan ayam yang terintegrasi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Tempat penetasan atau hatchery milik WMU di Gunungkidul kini berkapasitas 2 juta telur per bulan.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">“Salah satu tujuan dari peresmian&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">hatchery</em>&nbsp;dan&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">breeding farm</em>&nbsp;untuk mendukung program ketahanan pangan yang dicanangkan oleh Pemerintah Provinsi DIY dan memberikan kontribusi terhadap kesejahteraan masyarakat Yogyakarta,” kata Direktur Utama WMU, Ali Mas’adi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Untuk breeding farm, WMU menyediakan bibit ayam berkualitas, hasil dari&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">Breeding Farm</em>&nbsp;yang dikelola secara modern, dengan fasilitas kandang&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">closed house</em>&nbsp;dan teknologi terbaru.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Fasilitas yang menerapkan sistem pemeliharaan Good Breeding Practice (GBP) secara ketat untuk meraih hasil produksi terbaik, yang dijalankan oleh para praktisi muda peternakan berpengalaman dan di bawah supervisi ahli serta akademisi peternakan unggas terbaik.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Sedangkan hatchery WMU memiliki fasilitas setter machine, hatcher machine, dan alat-alat vaksinasi modern dan menerapkan Good Manufacturing Practice (GMP), sehingga menghasilkan produk DOC yang berkualitas terbaik.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Seleksi telur dilakukan secara rutin untuk mendapatkan telur kualitas terbaik, dengan tingkat salable chick yang tinggi sebelum memasuki tahapan setting. Seleksi berikutnya adalah&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">grading</em>&nbsp;dan&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">sexing</em>&nbsp;sebelum menuju proses&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">boxing</em>&nbsp;dan d<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">elivery</em>&nbsp;untuk disalurkan ke peternakan ayam komersial internal maupun eksternal.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Selain&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">hatchery</em>&nbsp;dan&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">breeding farm</em>, perusahaan berbasis di Jakarta ini juga memiliki beberapa unit bisnis dengan fasilitas yang tersebar di Pulau Jawa, antara lain unit bisnis&nbsp;<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">commercial broiler farm, commercial layer farm, slaughter house,&nbsp;</em>dan<em style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">&nbsp;feedmill</em>.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Baru-baru ini, WMU melakukan groundbreaking pabrik pakan ayam di Ngawi, Jawa Timur, sebagai bagian dari pengembangan bisnis secara vertikal terintegrasi. Pabrik yang berlokasi di Desa Sidolaju, Kecamatan Widodaren tersebut seluas 12,7 hektare (ha).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Pembangunan pabrik bertujuan untuk memenuhi kebutuhan pakan unggas WMU, sehingga meniadakan ketergantungan dengan pihak lain. Pabrik tersebut juga berkontribusi pada penyerapan tenaga kerja, terutama di Ngawi.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">WMU telah menandatangani nota kerja sama dan surat perintah kerja dengan afiliasi Fuji Electric Group asal Jepang untuk membangun pabrik pakan di Ngawi pada tanggal 8 Juli 2020.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Saat ini, WMU juga memiliki pabrik pakan di Balaraja, Tangerang, Banten.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Di sisi lain, WMU dan PT Retail Komoditas Nusantara (Agretail.id) telah menandatangani perjanjian kerja sama (MoU) untuk distribusi skala nasional se-Indonesia. Hal ini sesuai dengan rencana pengembangan usaha WMU sebagai perusahaan peternakan ayam yang terintegrasi secara vertikal untuk memenuhi permintaan terhadap bahan pangan berbasis protein hewani untuk seluruh rakyat Indonesia.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Kerja sama strategis ini adalah bagian dari strategi WMU untuk memperluas jaringan pasar dan distribusi di Indonesia. Kecepatan pertumbuhan distribusi yang terintegrasi dan dioptimalisasi dengan teknologi diharapkan dapat meningkatkan efisiensi yang dampaknya akan dirasakan oleh peternak dan tentunya konsumen.</p>', 'Breeding,Hatchery', '', 'Berita_10.jpg', 'panji', 'Rabu', '2021-04-28', '11:14:26', '', '', '0000-00-00', '00:00:00', 1, 'publish'),
(23, 'PT Widodo Makmur Unggas Memberikan Bantuan Telur Ke Beberapa Wilayah Di DIY ', 'pt-widodo-makmur-unggas-memberikan-bantuan-telur-ke-beberapa-wilayah-di-diy-', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">PT Widodo Makmur Unggas (WMU) ikut peduli terhadap wabah Covid-19. Sebagai bentuk kepedulian, pada tanggal 31 Agustus sampai 4 September 2020 WMU memberikan bantuan telur sejumlah 65.000 ribu butir telur ke beberapa instansi &amp; lembaga di beberapa wilayah di DIY.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Program bantuan CSR telur ini bertujuan untuk mengikuti memberikan Extra Fooding kepada warga yang dianggap membutuhkan, petugas medis dan seluruh pihak yang membantu dalam penanganan terhadap pasien Covid-19.</p>', 'bantuan telur,CSR', '', 'Berita_11.jpg', 'panji', 'Rabu', '2021-04-28', '11:17:34', '', '', '0000-00-00', '00:00:00', 2, 'publish'),
(24, 'PT Widodo Makmur Unggas Komitmen Dukung Penguatan 10.000 UMKM', 'pt-widodo-makmur-unggas-komitmen-dukung-penguatan-10000-umkm', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Perusahaan peternakan ayam terintegrasi, PT Widodo Makmur Unggas (WMU) menjalin kerja sama dengan Mitra Usaha Kecil Mikro dan Menengah (Mitra UMKM) Daerah guna mendukung penguatan 10.000 UMKM di Indonesia. Kerja sama ini merupakan bagian dari komitmen WMU untuk maju dan tumbuh bersama dalam menyediakan produk pangan hewani berkualitas bagi seluruh masyarakat Indonesia.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Melalui kerja sama ini, WMU akan menjamin pengadaan bahan baku yang halal dan berkualitas. Tidak hanya itu, WMU akan memberikan benefit bagi UMKM seperti adanya potongan harga dan kemudahan dalam skema pembayaran.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Seremonial penandatanganan MoU kerja sama ini dilakukan secara virtual bersama 3 mitra pengelola UMKM, yaitu Holistika Institute, The Local Enablers dan Lokalkarya. Mitra UMKM ini mayoritas bergerak di industri makanan olahan. Dengan memastikan kualitas bahan baku serta pendampingan dalam peningkatan kualitas produk yang diberikan oleh WMU bisa menjadi salah satu solusi bangkitnya UMKM di tengah era adaptasi normal baru.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Tri Mahawijaya Herlambang selaku Direktur Pemasaran WMU menyampaikan, melalui unit usaha Commercial Broiler Farm dan Rumah Potong Ayam (RPA) yang dikelola dengan menerapkan sistem pemotongan modern, sertifikasi halal dan NKV (Nomor Kontrol Veteriner), proses penyediaan bahan baku daging ayam dapat terjamin kualitasnya. Ditambah WMU juga memastikan bahwa pasokan bahan baku daging ayam tersebut dapat mencapai ke pelosok Indonesia dan dengan harga terjangkau.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">“Melalui berbagai kerja sama yang dijalin dengan berbagai pihak ketiga dan Mitra UMKM, WMU akan menyediakan bahan baku berkualitas yang terjangkau guna mendukung UMKM untuk naik kelas. 10.000 UMKM ini juga akan terus berkembang jumlahnya, karena sekarang ini kita memasuki eranya kolaborasi sehingga kita harus tumbuh bersama untuk mencapai tujuan Indonesia Maju,” urai Tri dikutip dari keterangan tertulis yang diterima redaksi, Rabu (9/9/2020).</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Tingginya pelaku UMKM di Indonesia, membuat WMU juga berencana untuk memberikan literasi dan edukasi terkait peningkatan kualitas produk. Target yang dimiliki oleh WMU yaitu untuk konsisten berkontribusi terhadap negeri khususnya untuk keberlangsungan dari UMKM.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">“UMKM kini menjadi salah satu kunci pertumbuhan dan garda pertahanan dalam menjaga ekonomi nasional. Namun, Kami para pelaku UMKM juga membutuhkan booster dan pendampingan yang tepat untuk dapat naik kelas. Holistika Institute berharap dengan adanya kerjasama dengan PT Widodo Makmur Unggas dapat menjadi booster untuk mitra UMKM. Kami percaya PT WMU, sebagai perusahan yang dimiliki oleh anak bangsa, dapat merawat kunci pertumbuhan dan garda pertahanan ekonomi nasional, yaitu UMKM,” ujar Cecep selaku Ketua Holistika Institute.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Sementara Bambang Bayu selaku Ketua The Local Enablers berharap melalui kerja sama dengan PT Widodo Makmur Unggas dapat membantu memecahkan berbagai masalah yang dihadapi dan menjadi jembatan akselerasi bagi kemajuan UMKM.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Harapan lain juga disampaikan oleh Erik Dwiharta, Ketua Lokalkarya, menurutnya melalui kerja sama dan dukungan dari WMU, UMKM Indonesia khususnya yang ada di ujung timur Pulau Jawa ini menjadi lebih semangat memajukan usaha dan produksi yang berkualitas.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Sebagai catatan, PT Widodo Makmur Unggas (WMU) merupakan anak perusahaan PT Widodo Makmur Perkasa (WMP) yang berbasis di Jakarta, WMU memiliki unit-unit bisnis meliputi breeding farm, hatchery, commercial broiler farm, commercial layer farm, slaughterhouse, dan feedmill di beberapa lokasi fasilitas yang tersebar di Pulau Jawa.</p>', 'event,human resources', '', 'Berita_12.jpg', 'panji', 'Rabu', '2021-04-28', '11:20:12', '', '', '0000-00-00', '00:00:00', 2, 'publish'),
(25, 'PT Widodo Makmur Perkasa Tidak Mengadakan Rekrutmen Bersifat Berbayar. Alias FREE. Please, Be Careful !!!', 'pt-widodo-makmur-perkasa-tidak-mengadakan-rekrutmen-bersifat-berbayar-alias-free-please-be-careful-', 0, '', '<p><span style=\"font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Dengan beredarnya informasi mengenai lowongan pekerjaan yang mengatasnamakan PT Widodo Makmur Perkasa, Kami menyatakan bahwa setiap lowongan pekerjaan selalu diinfokan melalui website resmi perusahaan dan tidak dipungut biaya apapun.</span><br></p>', 'human resources', '', 'rrtrtrwwww.jpeg', 'panji', 'Rabu', '2021-04-28', '11:21:48', 'jiung', 'Rabu', '2021-04-28', '18:50:37', 3, 'Publish'),
(26, 'Job Vacancy Accounting Manager', 'job-vacancy-accounting-manager', 0, '', '<div class=\"entry-content\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Hi Young People!</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">PT Widodo Makmur Perkasa gives the opportunity to young generations in Indonesia to be the part of us. We are hiring for some positions below:</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">1. Accounting Manager</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Sent your requirements (CV, application letter, and other supported documents) to recruitment@wmp-group.co.id.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">For more information, kindly contact us:<br>Devy (HC Officer): 082122302535<br>Retno (HC Officer): 085960312846</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Notes:<br>This recruitment process is free. Please be careful from any deception on behalf of PT Widodo Makmur Perkasa. Only the best candidate will be contacted and processed to the next step.</p></div><footer class=\"entry-meta\" style=\"border-top: 1px solid rgb(244, 244, 244); border-bottom: 1px solid rgb(244, 244, 244); padding: 28px 0px 22px;\"><div class=\"row\" style=\"border: 0px none; margin: 0px -15px; outline: none 0px; padding: 0px;\"><div class=\"col-md-6 col-sm-12 col-xs-12\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px 15px; min-height: 1px; float: left; width: 438.75px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"></div><div class=\"col-md-6 col-sm-12 col-xs-12\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px 15px; min-height: 1px; float: left; width: 438.75px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"></div></div></footer>', 'hiring', '', 'Berita_14.jpg', 'panji', 'Rabu', '2021-04-28', '13:03:45', '', '', '0000-00-00', '00:00:00', 5, 'publish'),
(27, 'Job Vacancy Meat Fresh Sales Manager', 'job-vacancy-meat-fresh-sales-manager', 0, '', '<div class=\"entry-content\" style=\"border: 0px none; margin: 0px; outline: none 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">Meat Fresh Sales Manager</strong></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">Kualifikasi :</strong></p><ul style=\"margin-bottom: 10px;\"><li>Lulusan S1 Manajemen Pemasaran</li><li>Usia maksimal 45 tahun</li><li>Jujur</li><li>Komunikatif</li><li>Bertanggung jawab</li><li>Memiliki kemampuan komunikasi yang baik</li><li>Kreatif & inovatif</li><li>Energik</li><li>Memiliki kemauan belajar yang tinggi</li><li>Pekerja keras</li><li>Dapat bekerja secara tim</li><li>Memiliki kemampuan membuat perencanaan dan pengaturan kerja</li><li>Memiliki SIM A & SIM C</li><li>Diutamakan memiliki pengalaman di posisi yang sama setidaknya 5 tahun</li><li>Diutamakan memiliki pengetahuan tentang daging dan olahan daging</li></ul><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"> </p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">Uraian Tugas :</strong></p><ul style=\"margin-bottom: 10px;\"><li>Menyusun rencana / target penjualan mingguan, bulanan, & tahunan</li><li>Bersama Tim Marketing Menyusun rencana kerja / program promosi untuk mendukung penjualan</li><li>Menyusun budget expense dan pelatihan skill</li><li>Melakukan analisa market dan penjualan</li><li>Menyusun program pengembangan produk dan branding perusahaan</li><li>Menyusun program pengembangan customer dan market</li><li>Memonitor pelaksanaan program penjualan agar sesuai target</li><li>Memastikan tercapainya revenue sesuai target</li></ul></div><footer class=\"entry-meta\" style=\"border-top: 1px solid rgb(244, 244, 244); border-bottom: 1px solid rgb(244, 244, 244); padding: 28px 0px 22px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><div class=\"row\" style=\"border: 0px none; margin: 0px -15px; outline: none 0px; padding: 0px;\"></div></footer>', 'hiring', '', 'rtrtrtrtrty.jpeg', 'panji', 'Rabu', '2021-04-28', '13:05:05', 'jiung', 'Rabu', '2021-04-28', '18:49:35', 3, 'publish'),
(28, 'Pengumuman Tender Pengadaan Lembaga Atau Profesi Penunjang Untuk Pelaksanaan IPO PT WIDODO MAKMUR PERKASA', 'pengumuman-tender-pengadaan-lembaga-atau-profesi-penunjang-untuk-pelaksanaan-ipo-pt-widodo-makmur-perkasa', 0, '', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: center;\"><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">PENGUMUMAN TENDER</strong><br><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">PENGADAAN LEMBAGA/PROFESI PENUNJANG</strong><br><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">DALAM RANGKA</strong><br><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">PELAKSANAAN INITIAL PUBLIC OFFERING (IPO)</strong><br><strong style=\"font-weight: bold; border: 0px none; margin: 0px; outline: none 0px; padding: 0px;\">PT WIDODO MAKMUR PERKASA</strong></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"> </p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Dalam rangka persiapan pelaksanaan Initial Public Offering (IPO) PT Widodo Makmur Perkasa bermaksud<br>melakukan Pengadaan untuk Lembaga dan/atau Profesi Penunjang yang terdiri dari :<br>1. Penjaminan Pelaksana Emisi<br>2. Konsultan Hukum<br>3. Notaris<br>4. KJPP<br>5. Biro Administrasi Efek<br>6. Public Relation<br>7. Percetakan</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Persyaratan umum bagi peserta Pengadaan adalah sebagai berikut :<br>1.Terdaftar sebagai lembaga dan/atau profesi penunjang di Otoritas Jasa Keuangan (OJK)<br>2.Memiliki pengalaman dalam menangani Initial Public Offering/Right Issue/Penambahan Modal dengan<br>HMETD dan transaksi pasar modal lainnya.<br>3.Didukung oleh Tenaga Profesional yang cakap pada bidangnya.<br>4.Bersedia menandatangani pernyataan integritas dan kerahasiaan informasi.<br>Persyaratan khusus untuk PPE bersedia melakukan penjaminan emisi dengan komitmen penuh (full<br>commitment).<br>Lembaga dan/atau Profesi Penunjang yang berminat mengikuti Pengadaan ini harus menyerahkan Surat<br>Pernyataan Minat yang ditandatangani oleh Pimpinan Lembaga dan/atau Profesi Penunjang pada saat<br>Rapat Penjelasan/Aanwijzing yang akan dilaksanakan pada :</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif;\">Hari / Tanggal : Senin, 26 April 2021<br>Tempat :<br>Graha Widodo Makmur, Jl.<br>Raya Cilangkap No. 58<br>Cilangkap, Cipayung Jakarta<br>Timur 13870, Indonesia<br>Waktu :<br>Penjamin Pelaksana Emisi : 09.30 WIB – 11.00 WIB<br>Konsultan Hukum : 11.00 WIB – 12.00 WIB<br>Notaris : 13.00 WIB – 14.00 WIB<br>Biro Administrasi Efek : 14.00 WIB – 15.00 WIB<br>KJPP : 15..00 WIB – 16.00 WIB<br>Public Relations : 16.00 WIB – 17.00 WIB<br>Percetakan : 17.00 WIB – 18.00 WIB</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"> </p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Untuk informasi lebih lanjut dapat menghubungi.<br>email :</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">– ekoagmi.andriana@wmp-group.co.id<br>– corporate.secretary@wmp-group.co.id<br>Apabila terdapat perubahan agenda, jadwal, maupun pemberitahuan tambahan lainnya. Akan<br>diinformasikan lebih lanjut.</p>', 'hiring', '', 'rrtrtrtrtrt.jpeg', 'panji', 'Rabu', '2021-04-28', '13:06:36', 'jiung', 'Rabu', '2021-04-28', '18:48:15', 5, 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_kategori`
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

-- --------------------------------------------------------

--
-- Table structure for table `direksi`
--

CREATE TABLE `direksi` (
  `id_direksi` int(10) NOT NULL,
  `nama_direksi` varchar(50) NOT NULL,
  `jabatan_direksi` varchar(50) NOT NULL,
  `deskripsi_jabatan` text NOT NULL,
  `foto_direksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direksi`
--

INSERT INTO `direksi` (`id_direksi`, `nama_direksi`, `jabatan_direksi`, `deskripsi_jabatan`, `foto_direksi`) VALUES
(1, 'Tumiyana', 'Chairman & CEO Widodo Makmur Group', '<ul><li>Pendiri Widodo Makmur Perkasa.</li><li>Pernah menjabat sebagai CEO di BUMN ternama di Indonesia, dengan pengalaman lebih dari 30 tahun di Perusahaan BUMN Indonesia<br></li></ul>', 'Pak-tumiyana.png'),
(2, 'Teddy Mulyawan Subekti', 'Direktur Business Developmen', '<ul><li>Berpengalaman lebih dari 20 tahun Manajemen di Lembaga Keuangan.</li><li><li>Berpengalaman lebih dari 5 tahun di Widodo Makmur Perkasa.</li></li></ul>', 'Pak-Teddy.png'),
(3, 'Eko Agmi Adriana', 'Direktur Keuangan', '<ul><li>Berpengalaman lebih dari 10 tahun Manajemen di Lembaga Keuangan.</li><li><li>Berpengalaman lebih dari 5 tahun di Widodo Makmur Perkasa.</li></li></ul>', 'Pak-Eko.png'),
(4, 'Suyatmi', 'Direktur Marketing', '<ul><li>Berpengalaman lebih dari 15 tahun di Widodo Makmur Perkasa.<br></li></ul>', 'Bu-Suyatmi.png'),
(5, 'Nur Tjahjo', 'Direktur HCD', '<ul><li>Berpengalaman lebih dari 30 tahun di Perusahaan Swasta di Indonesia.</li><li>Berpengalaman lebih dari 5 tahun di Widodo Makmur Perkasa.<br></li></ul>', 'Pak-Nur-Tjahjo.png');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `divisi_id` int(11) NOT NULL,
  `divisi_judul` varchar(220) NOT NULL,
  `divisi_judul_seo` varchar(220) NOT NULL,
  `divisi_desk` text NOT NULL,
  `divisi_keyword` varchar(220) NOT NULL,
  `divisi_meta_desk` varchar(200) NOT NULL,
  `divisi_gambar` text NOT NULL,
  `divisi_post_oleh` varchar(200) NOT NULL,
  `divisi_post_hari` varchar(20) NOT NULL,
  `divisi_post_tanggal` date NOT NULL,
  `divisi_post_jam` time NOT NULL,
  `divisi_update_oleh` varchar(200) NOT NULL,
  `divisi_update_hari` varchar(20) NOT NULL,
  `divisi_update_tanggal` date NOT NULL,
  `divisi_update_jam` time NOT NULL,
  `divisi_dibaca` int(50) NOT NULL,
  `divisi_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`divisi_id`, `divisi_judul`, `divisi_judul_seo`, `divisi_desk`, `divisi_keyword`, `divisi_meta_desk`, `divisi_gambar`, `divisi_post_oleh`, `divisi_post_hari`, `divisi_post_tanggal`, `divisi_post_jam`, `divisi_update_oleh`, `divisi_update_hari`, `divisi_update_tanggal`, `divisi_update_jam`, `divisi_dibaca`, `divisi_status`) VALUES
(12, 'Informasi teknologi', 'informasi-teknologi', '<p>deskripsi IT</p>', '', 'IT', '', 'dhawy', 'Senin', '2020-12-07', '18:19:07', 'dhawy', 'Jumat', '2020-12-18', '07:17:24', 0, 'publish'),
(13, 'Human Resource Development', 'human-resource-development', '<p>ini isi hrd</p>', '', 'HRD', '', 'dhawy', 'Minggu', '2020-12-27', '10:26:58', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(15, 'Finance', 'finance', '<p>Isi Finance</p><p><br></p>', '', 'FIN', '', 'dhawy', 'Minggu', '2020-12-27', '10:28:48', 'dhawy', 'Kamis', '2021-04-22', '11:03:07', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `whatsapp` text,
  `youtube` varchar(100) DEFAULT NULL,
  `youtube_video` varchar(255) NOT NULL,
  `profil_url` varchar(255) NOT NULL,
  `profil_picture` varchar(255) NOT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `meta_deskripsi` text,
  `meta_keyword` varchar(250) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mini_logo` varchar(200) NOT NULL,
  `seo` text,
  `analytics` varchar(100) NOT NULL,
  `pixel` varchar(150) NOT NULL,
  `maps` text,
  `slogan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `instagram`, `whatsapp`, `youtube`, `youtube_video`, `profil_url`, `profil_picture`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `logo`, `mini_logo`, `seo`, `analytics`, `pixel`, `maps`, `slogan`, `alamat`, `foto`) VALUES
(1, 'Widodo Makmur Perkasa', 'widodomakmurperkasa@wmp-group.co.id', 'https://wmpnew190421.widodomakmurperkasa.co.id/', 'https://www.facebook.com/widodomakmur.perkasa.1', 'https://www.instagram.com/widodomakmurperkasa/', '', 'https://www.youtube.com/channel/UCfXFjK_ot0iaQ41TgEHneSg/featured', 'jPSzKyY5NnY', '313', 'about3.jpeg', '0218430 6787', 'PT Widodo Makmur Perkasa adalah perusahaan Holding yang membawahi lima lini bisnis yaitu <b>Integrated Livestock</b>, Meat Processing, Integrated Poultry, Food & Commodity dan Construction & Energy. Dimulai dengan usaha feedlot sejak tahun 1995 dan dikembangkan secara profesional pada tahun 1999.Usaha ini berkembang pesat dan menempatkan WMP sebagai salah satu perusahaan penyuplai sapi terbesar di Indonesia. Dengan aset total saat ini mencapai 2,5T dan akan terus berkembang dengan langkah pengembangan progresif kami.', '', '', 'wmpnews.png', '', '', '', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.688563094527!2d106.9007807!3d-6.3393324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x284be730643a5ade!2sGraha%20Widodo%20Makmur!5e0!3m2!1sen!2sid!4v1618988066478!5m2!1sen!2sid', 'Menjadi Perusahaan Pangan dan Papan Terbesar di Asia Tenggara.', 'Jl. Raya Cilangkap No. 58 Cilangkap, Cipayung Jakarta Timur 13870 Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword_nama` varchar(200) NOT NULL,
  `keyword_nama_seo` varchar(200) NOT NULL,
  `keyword_username` varchar(200) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`keyword_id`, `keyword_nama`, `keyword_nama_seo`, `keyword_username`, `count`) VALUES
(2, 'asdqwewqe aseqwewq', 'asdqwewqe-aseqwewq', 'dhawy', 0),
(3, 'kata kunci', 'kata-kunci', 'dhawy', 0),
(4, 'kata kunci2', 'kata-kunci2', 'dhawy', 0),
(5, 'kata kunci 22323', 'kata-kunci-22323', 'dhawy', 0),
(6, 'kata kunci 22323 aa', 'kata-kunci-22323-aa', 'dhawy', 0),
(7, 'asdaewqe 123213 ', 'asdaewqe-123213-', 'dhawy', 0),
(8, 'asdasdasdsasdsadas ', 'asdasdasdsasdsadas-', 'dhawy', 0),
(9, 'kata kunci dhawy', 'kata-kunci-dhawy', 'dhawy', 0),
(10, 'dhawy kunci', 'dhawy-kunci', 'dhawy', 0),
(11, 'dhawys', 'dhawys', 'dhawy', 0),
(12, 'dhawy arkan sia', 'dhawy-arkan-sia', 'dhawy', 0),
(13, 'kata kunci blogssss', 'kata-kunci-blogssss', 'dhawy', 0),
(14, 'meta gambar', 'meta-gambar', 'dhawy', 0),
(15, 'qwe', 'qwe', 'dhawy', 0),
(16, 'asddas asds', 'asddas-asds', 'dhawy', 0),
(17, 'qweweqwe', 'qweweqwe', 'dhawy', 0),
(18, '', '', 'dhawy', 0),
(19, 'asdads asdqwe', 'asdads-asdqwe', 'dhawy', 0),
(20, 'adsad', 'adsad', 'dhawy', 0),
(21, 'sdasdsad', 'sdasdsad', 'dhawy', 0),
(22, 'asdas', 'asdas', 'dhawy', 0),
(23, 'sad', 'sad', 'dhawy', 0),
(24, 'as', 'as', 'dhawy', 0),
(25, 'gambar bisa', 'gambar-bisa', 'dhawy', 0),
(26, 'gambar2', 'gambar2', 'dhawy', 0),
(27, 'katakunci', 'katakunci', 'dhawy', 0),
(28, 'ini kata kunci', 'ini-kata-kunci', 'dhawy', 0),
(29, 'kata', 'kata', 'dhawy', 0),
(30, 'asdsa', 'asdsa', 'dhawy', 0),
(31, 'bersyukur', 'bersyukur', 'dhawy', 0),
(32, 'gambar 3', 'gambar-3', 'dhawy', 0),
(33, 'gambar 1', 'gambar-1', 'dhawy', 0),
(34, 'kata gambar2', 'kata-gambar2', 'dhawy', 0),
(35, 'kata gambar3', 'kata-gambar3', 'dhawy', 0),
(36, 'rigging 1', 'rigging-1', 'dhawy', 0),
(37, 'rigging 2', 'rigging-2', 'dhawy', 0),
(38, 'rigging 3', 'rigging-3', 'dhawy', 0),
(39, 'rigging baru,rigging 5', 'rigging-barurigging-5', 'dhawy', 0),
(40, 'asdasd,2313asd', 'asdasd2313asd', 'dhawy', 0),
(41, 'asdas51231', 'asdas51231', 'dhawy', 0),
(42, 'asd12312', 'asd12312', 'dhawy', 0),
(43, 'gsdf423', 'gsdf423', 'dhawy', 0),
(44, 'rigging murah', 'rigging-murah', 'dhawy', 0),
(45, 'rigging panggung', 'rigging-panggung', 'dhawy', 0),
(46, 'baricade murah', 'baricade-murah', 'dhawy', 0),
(47, 'baricade jakarta', 'baricade-jakarta', 'dhawy', 0),
(48, 'entry gate murah', 'entry-gate-murah', 'dhawy', 0),
(49, 'entry gate jakarta', 'entry-gate-jakarta', 'dhawy', 0),
(50, 'produksi booth', 'produksi-booth', 'dhawy', 0),
(51, 'produksi booth murah', 'produksi-booth-murah', 'dhawy', 0),
(52, 'Backdrop murah', 'backdrop-murah', 'dhawy', 0),
(53, 'backdrop jakarta', 'backdrop-jakarta', 'dhawy', 0),
(54, 'meta keyword', 'meta-keyword', 'dhawy', 0),
(55, 'hahaha', 'hahaha', 'dhawy', 0),
(56, 'sd', 'sd', 'dhawy', 0),
(57, 'blog 1', 'blog-1', 'dhawy', 0),
(58, 'sliders keyword', 'sliders-keyword', 'dhawy', 0),
(59, 'Slider 23 kunci', 'slider-23-kunci', 'dhawy', 0),
(60, 'gambar 13', 'gambar-13', 'dhawy', 0),
(61, 'asdawe sada', 'asdawe-sada', 'dhawy', 0),
(62, 'gambar 233', 'gambar-233', 'dhawy', 0),
(63, 'notary public', 'notary-public', 'dhawy', 0),
(64, 'Kantor Pengacara', 'kantor-pengacara', 'dhawy', 0),
(65, 'Konsultan Perizinan', 'konsultan-perizinan', 'dhawy', 0),
(66, 'Konsultan Lingkungan', 'konsultan-lingkungan', 'dhawy', 0),
(67, 'Konsultan Arsitek', 'konsultan-arsitek', 'dhawy', 0),
(68, 'Konsultan Pajak', 'konsultan-pajak', 'dhawy', 0),
(69, 'Konsultan Bisnis Digital', 'konsultan-bisnis-digital', 'dhawy', 0),
(70, 'Pendirian PT', 'pendirian-pt', 'dhawy', 0),
(71, 'Pendirian CV', 'pendirian-cv', 'dhawy', 0),
(72, 'Pendirian Organisasi', 'pendirian-organisasi', 'dhawy', 0),
(73, 'Pendirian Firma', 'pendirian-firma', 'dhawy', 0),
(74, 'Pendirian Koperasi', 'pendirian-koperasi', 'dhawy', 0),
(75, 'Gugatan Perdata', 'gugatan-perdata', 'dhawy', 0),
(76, 'Gugatan Pidana', 'gugatan-pidana', 'dhawy', 0),
(77, 'Gugatan Cerai', 'gugatan-cerai', 'dhawy', 0),
(78, 'Perizinan SIUP', 'perizinan-siup', 'dhawy', 0),
(79, 'Perizinan TDP', 'perizinan-tdp', 'dhawy', 0),
(80, 'Perizinan NIB', 'perizinan-nib', 'dhawy', 0),
(81, 'Perizinan KITAS', 'perizinan-kitas', 'dhawy', 0),
(82, 'Perizinan Visa', 'perizinan-visa', 'dhawy', 0),
(83, 'Desain Gedung', 'desain-gedung', 'dhawy', 0),
(84, 'Desain Rumah', 'desain-rumah', 'dhawy', 0),
(85, 'Konsultan Limbah B1', 'konsultan-limbah-b1', 'dhawy', 0),
(86, 'Konsultan Limbah B2', 'konsultan-limbah-b2', 'dhawy', 0),
(87, 'Konsultan Limbah B3', 'konsultan-limbah-b3', 'dhawy', 0),
(88, 'Konsultan Pemasaran Digital', 'konsultan-pemasaran-digital', 'dhawy', 0),
(89, 'Website Developer', 'website-developer', 'dhawy', 0),
(90, 'batik kategori wanita', 'batik-kategori-wanita', 'dhawy', 0),
(91, 'batik kategori pria', 'batik-kategori-pria', 'dhawy', 0),
(92, 'Batik model sesuai keinginan', 'batik-model-sesuai-keinginan', 'dhawy', 0),
(93, 'Blus Wanita', 'blus-wanita', 'dhawy', 0),
(94, 'Gamis Wanita deskripsi', 'gamis-wanita-deskripsi', 'dhawy', 0),
(95, 'Dress Anak Wanita', 'dress-anak-wanita', 'dhawy', 0),
(96, 'Hem pria', 'hem-pria', 'dhawy', 0),
(97, 'Kemeja pria', 'kemeja-pria', 'dhawy', 0),
(98, 'Hem Anak Pria', 'hem-anak-pria', 'dhawy', 0),
(99, 'Blus wanita 1', 'blus-wanita-1', 'dhawy', 0),
(100, 'Blus wanita 2', 'blus-wanita-2', 'dhawy', 0),
(101, 'Gamis wanita 1', 'gamis-wanita-1', 'dhawy', 0),
(102, 'Gamis wanita 2', 'gamis-wanita-2', 'dhawy', 0),
(103, 'Tunik wanita 1', 'tunik-wanita-1', 'dhawy', 0),
(104, 'a', 'a', 'dhawy', 0),
(105, 'asdsadas', 'asdsadas', 'dhawy', 0),
(106, 'Gamis 3', 'gamis-3', 'dhawy', 0),
(107, 'tests2', 'tests2', 'dhawy', 0),
(108, 'eeqwesa', 'eeqwesa', 'dhawy', 0),
(109, 'Tunik 1', 'tunik-1', 'dhawy', 0),
(110, 'tunik 2', 'tunik-2', 'dhawy', 0),
(111, 'Hem pria 1', 'hem-pria-1', 'dhawy', 0),
(112, 'Hem pria 2', 'hem-pria-2', 'dhawy', 0),
(113, 'aaa', 'aaa', 'dhawy', 0),
(114, 'Wedding session', 'wedding-session', 'dhawy', 0),
(115, 'Corporate', 'corporate', 'dhawy', 0),
(116, 'qeqwewq', 'qeqwewq', 'dhawy', 0),
(117, 'dasd', 'dasd', 'dhawy', 0),
(118, 'asdsad', 'asdsad', 'dhawy', 0),
(119, 'acara donor darah', 'acara-donor-darah', 'dhawy', 0),
(120, 'donor darah', 'donor-darah', 'dhawy', 0),
(121, 'widodo makmur perkasa', 'widodo-makmur-perkasa', 'dhawy', 0),
(122, 'arsitekindonesia', 'arsitekindonesia', 'dhawy', 0),
(123, 'joso', 'joso', 'dhawy', 0),
(124, 'jaif2019', 'jaif2019', 'dhawy', 0),
(125, 'widodomakmurperkasa', 'widodomakmurperkasa', 'dhawy', 0),
(126, 'tess', 'tess', 'panji', 0),
(127, 'asdasdasd', 'asdasdasd', 'panji', 0),
(128, 'csr', 'csr', 'panji', 0),
(129, 'santunan anak yatim', 'santunan-anak-yatim', 'panji', 0),
(130, 'HUT WMP', 'hut-wmp', 'panji', 0),
(131, 'RAKOR', 'rakor', 'panji', 0),
(132, 'RAKER', 'raker', 'panji', 0),
(133, 'JOGLO TUMIYONO', 'joglo-tumiyono', 'panji', 0),
(134, '1st Winner Sayembara', '1st-winner-sayembara', 'panji', 0),
(135, 'Gedung Pusat Bank Aceh Syariah', 'gedung-pusat-bank-aceh-syariah', 'panji', 0),
(136, 'covid-19', 'covid19', 'panji', 0),
(137, 'bantuan telur', 'bantuan-telur', 'panji', 0),
(138, 'IPO', 'ipo', 'panji', 0),
(139, 'Ground Breaking', 'ground-breaking', 'panji', 0),
(140, 'Breeding', 'breeding', 'panji', 0),
(141, 'Hatchery', 'hatchery', 'panji', 0),
(142, 'event', 'event', 'panji', 0),
(143, 'human resources', 'human-resources', 'panji', 0),
(144, 'hiring', 'hiring', 'panji', 0),
(145, 'Integrated Livestock', 'integrated-livestock', 'panji', 0),
(146, 'Meat Processing', 'meat-processing', 'jiung', 0),
(147, 'Commodity', 'commodity', 'jiung', 0),
(148, 'Construction & Energy', 'construction--energy', 'jiung', 0),
(149, 'Integrated Poultry', 'integrated-poultry', 'jiung', 0);

-- --------------------------------------------------------

--
-- Table structure for table `komisaris`
--

CREATE TABLE `komisaris` (
  `id_komisaris` int(11) NOT NULL,
  `nama_komisaris` varchar(50) NOT NULL,
  `jabatan_komisaris` varchar(50) NOT NULL,
  `deskripsi_jabatan` text NOT NULL,
  `foto_komisaris` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komisaris`
--

INSERT INTO `komisaris` (`id_komisaris`, `nama_komisaris`, `jabatan_komisaris`, `deskripsi_jabatan`, `foto_komisaris`) VALUES
(1, 'Raden Marlan', 'Komisaris Utama', '<ul><li>Berpengalaman lebih dari 15 tahun di Perusahaan BUMN Indonesia</li><li>Berpengalaman lebih dari 15 tahun di Widodo Makmur Perkasa.<br></li></ul>', 'Pak-Marlan.png'),
(2, 'Warsini', 'Komisaris', '<ul><li>Berpengalaman lebih dari 20 tahun Manajemen di Widodo Makmur Perkasa.<br></li></ul>', 'Bu-Warsini.png'),
(3, 'Kom Jen. Pol (Purn), Drs. Setyo Wasisto', 'Komisaris Indepeden', '<ul><li>Mantan Ketua Satgas Pangan Nasional.</li><li>Berpengalaman lebih dari 30 tahun di Lembaga Pemerintahaan dan telah menduduki beberapa posisi strategis dalam skala Nasional.</li><li>Saat ini juga menjabat sebagai anggota Dewan Komisaris salah satu Perusahaan Ritel terbesar di Indonesia<br></li></ul>', 'Pak-Setyo-Wasisto.png');

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
(82, 'CAM', 'cam', '', 'www.cam.com', 2, '', '', '6.png', 'jiung', 'Senin', '2021-08-16', '16:27:18', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(83, 'PWM', 'pwm', '', 'www.pwm.com', 3, '', '', '13.png', 'jiung', 'Senin', '2021-08-16', '16:28:43', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(84, 'GMP', 'gmp', '', 'www.gmp.com', 4, '', '', '4.png', 'jiung', 'Senin', '2021-08-16', '16:28:58', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(85, 'WMU', 'wmu', '', 'www.wmu.com', 5, '', '', '5.png', 'jiung', 'Senin', '2021-08-16', '16:29:13', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(86, 'WMS', 'wms', '', 'www.widodofood.com', 6, '', '', '3.png', 'jiung', 'Senin', '2021-08-16', '16:29:36', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(87, 'PMP', 'pmp', '', 'www.pmp.com', 7, '', '', '2.png', 'jiung', 'Senin', '2021-08-16', '16:29:50', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(88, 'LMP', 'lmp', '', 'www.lmp.com', 8, '', '', '12.png', 'jiung', 'Senin', '2021-08-16', '16:30:12', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(89, 'KEI', 'kei', '', 'www.kei.com', 9, '', '', '1.png', 'jiung', 'Senin', '2021-08-16', '16:30:29', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(90, 'Pasir Tengah', 'pasir-tengah', '', 'www.pasirtengah.com', 1, '', '', '7.png', 'jiung', 'Senin', '2021-08-16', '16:26:43', '', '', '0000-00-00', '00:00:00', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_judul` varchar(220) NOT NULL,
  `products_judul_seo` varchar(220) NOT NULL,
  `products_desk` text NOT NULL,
  `products_keyword` varchar(220) NOT NULL,
  `products_meta_desk` varchar(200) NOT NULL,
  `products_gambar` text NOT NULL,
  `products_post_oleh` varchar(200) NOT NULL,
  `products_post_hari` varchar(20) NOT NULL,
  `products_post_tanggal` date NOT NULL,
  `products_post_jam` time NOT NULL,
  `products_update_oleh` varchar(200) NOT NULL,
  `products_update_hari` varchar(20) NOT NULL,
  `products_update_tanggal` date NOT NULL,
  `products_update_jam` time NOT NULL,
  `products_dibaca` int(50) NOT NULL,
  `products_status` varchar(20) NOT NULL,
  `products_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `products_cat_id` int(11) NOT NULL,
  `products_cat_judul` varchar(220) NOT NULL,
  `products_cat_judul_seo` varchar(220) NOT NULL,
  `products_cat_desk` text NOT NULL,
  `products_cat_keyword` varchar(220) NOT NULL,
  `products_cat_meta_desk` varchar(200) NOT NULL,
  `products_cat_gambar` text NOT NULL,
  `products_cat_post_oleh` varchar(200) NOT NULL,
  `products_cat_post_hari` varchar(20) NOT NULL,
  `products_cat_post_tanggal` date NOT NULL,
  `products_cat_post_jam` time NOT NULL,
  `products_cat_update_oleh` varchar(200) NOT NULL,
  `products_cat_update_hari` varchar(20) NOT NULL,
  `products_cat_update_tanggal` date NOT NULL,
  `products_cat_update_jam` time NOT NULL,
  `products_cat_dibaca` int(50) NOT NULL,
  `products_cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `urutan_produk` int(11) NOT NULL,
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
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `urutan_produk`, `nama_produk`, `produk_seo`, `deskripsi_produk`, `bidang_produk`, `foto_produk`, `website`, `facebook`, `instagram`, `whatsapp`, `shopee`, `tokopedia`, `bukalapak`) VALUES
(1, 1, 'PT. Pasir Tengah', 'pasir-tengah', 'Kemitraan Sapi Potong PT Pasir Tengah dilaksanakan untuk membantu peternak rakyat yang sering mengalami permasalahan dalam usahanya. Kendala yang sering dialami oleh peternak rakyat pada saat melakukan usaha pemeliharaan sapi potong diantaranya. kesulitan akses modal di lembaga keuangan dan bunga yang tinggi, tidak ada transfer teknologi, resiko kegagalan perkawinan, resiko kematian, harga panen yang bergantung pada tengkulak, sapi yang tidak dibayarkan, dll.', 'Sapi', '350.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(2, 2, 'PT. Cianjur Arta Makmur', 'pt-cianjur-arta-makmur', 'Cianjur Arta Makmur merupakan unit bisnis dari Widodo Makmur Perkasa yang bergerak di bidang perdagangan poduk daging sapi, beroperasi sejak tahun 2008 yang berbasis ‘Integrated System‘. Sapi-sapi bakalan yang didatangkan dari Australia dipelihara di Cianjur Farm PT. Pasir Tengah dan kemudian diproses oleh Cianjur Arta Makmur menjadi produk daging sapi segar berkualitas prima (premium and high quality chilled beef), beku (frozen beef) dan produk-produk sampingan.', 'Daging-Sapi', 'meat1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', '666', 0, '', '', ''),
(3, 4, 'PT. Prima Widodo Makmur', 'prima-widodo-makmur', 'PT Prima Widodo Makmur (PWM) bergerak di bidang produksi pangan olahan yang bersumber dari daging sapi dan ayam meliputi bakso, sosis, naget ayam dalam berbagai varian terutama untuk memenuhi kebutuhan hotel, restoran, retail dan distributor. Rumah Potong Hewan (RPH) kami berstandar Internasional dan terbesar di Indonesia yang menerapkan standar higienitas tinggi untuk menjamin kualitas produknya.', 'Produk Olahan', 'meatpros1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(4, 6, 'PT. Garut Makmur Perkasa', 'garut-makmur-perkasa', 'PT Garut Makmur Perkasa (GMP) merupakan perusahaan yang memproduksi kulit sebagai bahan baku industri fashion, upholstery dan automotive. Berdiri pada tahun 2015 dan resmi menjadi anak perusahaan dari lini bisnis MEAT di bawah manajemen PT Cianjur Arta Makmur (CAM) yang merupakan salah satu lini bisnis di bawah manajemen PT Widodo Makmur Perkasa (WMP).', 'Leather', 'leather1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(5, 3, 'PT. Widodo Makmur Unggas', 'widodo-makmur-unggas', 'Widodo Makmur Unggas adalah bisnis unggas yang terintegrasi secara vertikal yang mengendalikan pabrik pakan skala besar, peternakan pembibitan, pabrik pembenihan, peternakan komersial, peternakan layer, rumah potong hewan dan operasi kemitraan terkait. Di bawah dukungan penuh semangat dari tim kami yang cakap, sistem manajemen inovatif, pengetahuan pertanian yang mendalam, kolaborasi komunitas penuh, dan fasilitas serta teknologi yang patut dicontoh; kami berhasil memastikan pengiriman yang andal dari produk berkualitas tinggi kami ke seluruh Indonesia.', 'Daging ayam', 'poultry1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', ''),
(6, 5, 'PT. Widodofood Makmur Sejahtera', 'widodo-makmur-sejatra', 'PT WidodoFood Mkamur Sejahtera (WMS) adalah anak perusahaan yang bergerak dalam bisnis Food. WMS bergerak di bidang produksi beras kemasan. Komitmen WMP yang tercantum dalam visi, menjadi jembatan kesejahteraan petani dan peternak diwujudkan dengan menjadikan para petani lokal sebagai mitra pemasok bahan baku beras yang dibutuhkan. Sumber bahan baku diperoleh dari sentra lumbung-lumbung padi di Pulau Jawa.', 'Komoditas', 'comodity1.jpg', 'widodomakmurperkasa.co.id', 'https://www.facebook.com/widodomakmurofficial/', 'https://www.instagram.com/widodomakmurperkasa/?hl=', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk_detail`
--

CREATE TABLE `produk_detail` (
  `id_produk_detail` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama_produk_detail` varchar(50) NOT NULL,
  `deskripsi_produk_detail` text NOT NULL,
  `foto_produk_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_detail`
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
(79, 'Meat Processing', 'meat-processing', 'PT Cianjur Arta Makmur memiliki Rumah Potong Hewan (RPH) modern dan terbesar di Indonesia ini telah memiliki sertifikasi NKV dari Dinas Peternakan serta sertifikasi halal MUI.', '', 'turunan', 'RPHd.png', 'jiung', 'Kamis', '2021-07-29', '12:26:29', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(80, 'Livestock', 'livestock', 'PT Pasir Tengah memenuhi kurang lebih 15% dari total kebutuhan pasar sapi potong nasional. Secara kontinu pemenuhan tersebut disuplai dari 4 fasilitas farm yang tersebar di beberapa lokasi strategis di daerah Cianjur, Cariu, Cileungsi (ketiganya berada di wilayah Jawa Barat) dan Bayat (Klaten, Jawa Tengah) dengan total kapasitas hingga 135 ribu ekor per tahun.', '', 'active', 'Ricemill.jpg', 'dhawy', 'Kamis', '2021-09-09', '10:35:46', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(81, 'Poultry', 'pultry', 'PT Widodo Makmur Unggas Tbk adalah bisnis unggas yang terintegrasi secara vertikal yang mengendalikan pabrik pakan skala besar, peternakan pembibitan, pabrik penetasan, peternakan komersial, peternakan layer, rumah potong hewan dan operasi kemitraan terkait.', '', 'turunan', 'DOxc.png', 'jiung', 'Kamis', '2021-07-29', '12:26:06', '', '', '0000-00-00', '00:00:00', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `tatakelola`
--

CREATE TABLE `tatakelola` (
  `tatakelola_id` int(11) NOT NULL,
  `tatakelola_cat_id` int(11) NOT NULL,
  `tatakelola_judul` varchar(220) NOT NULL,
  `tatakelola_judul_seo` varchar(220) NOT NULL,
  `tatakelola_desk` text NOT NULL,
  `tatakelola_gambar` text NOT NULL,
  `tatakelola_post_oleh` varchar(200) NOT NULL,
  `tatakelola_post_hari` varchar(20) NOT NULL,
  `tatakelola_post_tanggal` date NOT NULL,
  `tatakelola_post_jam` time NOT NULL,
  `tatakelola_update_oleh` varchar(200) NOT NULL,
  `tatakelola_update_hari` varchar(20) NOT NULL,
  `tatakelola_update_tanggal` date NOT NULL,
  `tatakelola_update_jam` time NOT NULL,
  `tatakelola_dibaca` int(50) NOT NULL,
  `tatakelola_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tatakelola_kategori`
--

CREATE TABLE `tatakelola_kategori` (
  `tatakelola_cat_id` int(11) NOT NULL,
  `tatakelola_cat_judul` varchar(220) NOT NULL,
  `tatakelola_cat_judul_seo` varchar(220) NOT NULL,
  `tatakelola_cat_desk` text NOT NULL,
  `tatakelola_cat_gambar` text NOT NULL,
  `tatakelola_cat_post_oleh` varchar(200) NOT NULL,
  `tatakelola_cat_post_hari` varchar(20) NOT NULL,
  `tatakelola_cat_post_tanggal` date NOT NULL,
  `tatakelola_cat_post_jam` time NOT NULL,
  `tatakelola_cat_update_oleh` varchar(200) NOT NULL,
  `tatakelola_cat_update_hari` varchar(20) NOT NULL,
  `tatakelola_cat_update_tanggal` date NOT NULL,
  `tatakelola_cat_update_jam` time NOT NULL,
  `tatakelola_cat_dibaca` int(50) NOT NULL,
  `tatakelola_cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tatakelola_kategori`
--

INSERT INTO `tatakelola_kategori` (`tatakelola_cat_id`, `tatakelola_cat_judul`, `tatakelola_cat_judul_seo`, `tatakelola_cat_desk`, `tatakelola_cat_gambar`, `tatakelola_cat_post_oleh`, `tatakelola_cat_post_hari`, `tatakelola_cat_post_tanggal`, `tatakelola_cat_post_jam`, `tatakelola_cat_update_oleh`, `tatakelola_cat_update_hari`, `tatakelola_cat_update_tanggal`, `tatakelola_cat_update_jam`, `tatakelola_cat_dibaca`, `tatakelola_cat_status`) VALUES
(3, 'Sekilas GCG', 'sekilas-gcg', '', '', 'dhawy', 'Senin', '2021-09-13', '16:04:59', '', '', '0000-00-00', '00:00:00', 0, ''),
(4, 'Pedoman Kerja', 'pedoman-kerja', '', '', 'dhawy', 'Senin', '2021-09-13', '16:05:15', '', '', '0000-00-00', '00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `user_post_hari` varchar(20) NOT NULL,
  `user_post_tanggal` date NOT NULL,
  `user_post_jam` time NOT NULL,
  `user_update_hari` varchar(20) NOT NULL,
  `user_update_tanggal` date NOT NULL,
  `user_update_jam` time NOT NULL,
  `user_gambar` text NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_login_tanggal` date NOT NULL,
  `user_login_jam` time NOT NULL,
  `user_login_status` varchar(20) NOT NULL,
  `user_stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `level`, `id_session`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_update_hari`, `user_update_tanggal`, `user_update_jam`, `user_gambar`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'dhawy', 'dhawy arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20210422105518', 'Kamis', '2020-06-25', '15:14:48', 'Kamis', '2021-04-22', '21:11:05', 'user-profile-avatar-job-social-businessman-profession-user-profile-png-512_512.png', '1', '2021-09-14', '10:43:52', 'online', 'Publish'),
(30, 'jiung', 'jiung', 'adjiesans@gmail.com', '24c05ce1409afb5dad4c5bddeb924a4bc3ea00f5', '1', '1d00fc6c047a79e4473a253bbb47d62e-20210608140714', 'Kamis', '2021-04-22', '10:52:42', 'Selasa', '2021-06-08', '14:07:14', 'luffy.jpg', '1', '2021-09-07', '10:25:22', 'online', 'publish'),
(31, 'panji', 'Panji', 'panji@gmail.com', '847e04007f984790744ed34d7c5ed34fc178242c', '3', '73845d4bc9599b7e24578f97e79634dc-20210426102014', 'Kamis', '2021-04-22', '11:23:01', 'Senin', '2021-04-26', '10:20:14', '', '1', '2021-05-19', '08:32:04', 'online', 'publish'),
(33, 'shita', 'shita', '', '9f07348a2c5f6f34562739558fcb1f0105fcb719', '2', 'd41d8cd98f00b204e9800998ecf8427e-20210609223640', 'Selasa', '2021-06-08', '14:18:08', 'Rabu', '2021-06-09', '22:36:40', '', '1', '2021-06-09', '22:36:55', 'online', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `user_agama`
--

CREATE TABLE `user_agama` (
  `user_agama_id` int(2) NOT NULL,
  `user_agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_agama`
--

INSERT INTO `user_agama` (`user_agama_id`, `user_agama_nama`) VALUES
(1, ''),
(2, 'Islam'),
(3, 'Kristen'),
(4, 'Katolik'),
(5, 'Hindu'),
(6, 'Buddha'),
(7, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_detail_no_telp` varchar(20) NOT NULL,
  `user_detail_jekel` varchar(20) NOT NULL,
  `user_detail_agama` varchar(50) NOT NULL,
  `user_detail_tempatlahir` varchar(50) NOT NULL,
  `user_detail_tgllahir` date NOT NULL,
  `user_detail_perkawinan` varchar(100) NOT NULL,
  `user_detail_pendidikan` varchar(100) NOT NULL,
  `user_detail_divisi` int(3) NOT NULL,
  `user_detail_ktp` varchar(50) NOT NULL,
  `user_detail_tempattinggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `id_user`, `user_detail_no_telp`, `user_detail_jekel`, `user_detail_agama`, `user_detail_tempatlahir`, `user_detail_tgllahir`, `user_detail_perkawinan`, `user_detail_pendidikan`, `user_detail_divisi`, `user_detail_ktp`, `user_detail_tempattinggal`) VALUES
(25, 6, '1231312313', 'Pria', 'Islam', 'jakarta', '2021-01-29', 'Lajang', 's1', 12, '12312313123', 'bogor'),
(39, 30, '01231312312', 'Pria', 'Islam', 'Jakarta', '1945-12-08', 'Menikah', 'S3', 12, '088888888', 'Jakarta'),
(40, 31, '01231312312', 'Pria', 'Islam', 'Jakarta', '2021-04-05', 'Lajang', 'S3', 12, '2132131312', 'Jakarta'),
(42, 33, '', '', '', '', '0000-00-00', ' ', '', 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `user_jabatan_id` int(2) NOT NULL,
  `user_jabatan_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jabatan`
--

INSERT INTO `user_jabatan` (`user_jabatan_id`, `user_jabatan_nama`) VALUES
(1, 'Onboarding'),
(2, 'Training'),
(3, 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `user_jam`
--

CREATE TABLE `user_jam` (
  `user_jam_id` tinyint(1) NOT NULL,
  `user_jam_judul` varchar(220) NOT NULL,
  `user_jam_judul_seo` varchar(220) NOT NULL,
  `user_jam_mulai` time NOT NULL,
  `user_jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jam`
--

INSERT INTO `user_jam` (`user_jam_id`, `user_jam_judul`, `user_jam_judul_seo`, `user_jam_mulai`, `user_jam_selesai`) VALUES
(7, 'Lembur', 'lembur', '19:01:00', '21:00:00'),
(8, 'Pulang', 'pulang', '17:00:00', '19:00:00'),
(9, 'Masuk', 'masuk', '06:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_kelamin`
--

CREATE TABLE `user_kelamin` (
  `user_kelamin_id` int(2) NOT NULL,
  `user_kelamin_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_kelamin`
--

INSERT INTO `user_kelamin` (`user_kelamin_id`, `user_kelamin_nama`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_nama`) VALUES
(1, 'Super Admin'),
(2, 'Administrator'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_perkawinan`
--

CREATE TABLE `user_perkawinan` (
  `user_perkawinan_id` int(2) NOT NULL,
  `user_perkawinan_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_perkawinan`
--

INSERT INTO `user_perkawinan` (`user_perkawinan_id`, `user_perkawinan_nama`) VALUES
(1, ' '),
(2, 'Lajang'),
(3, 'Menikah'),
(4, 'Cerai'),
(5, 'Belum jelas');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `user_status_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_nama`) VALUES
(1, 'Active'),
(2, 'Suspend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`bisnis_id`);

--
-- Indexes for table `bisnis_kategori`
--
ALTER TABLE `bisnis_kategori`
  ADD PRIMARY KEY (`bisnis_kategori_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogs_id`);

--
-- Indexes for table `blogs_kategori`
--
ALTER TABLE `blogs_kategori`
  ADD PRIMARY KEY (`blogs_kategori_id`);

--
-- Indexes for table `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`id_direksi`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `komisaris`
--
ALTER TABLE `komisaris`
  ADD PRIMARY KEY (`id_komisaris`);

--
-- Indexes for table `kontribs`
--
ALTER TABLE `kontribs`
  ADD PRIMARY KEY (`kontribs_id`);

--
-- Indexes for table `kontribs_kategori`
--
ALTER TABLE `kontribs_kategori`
  ADD PRIMARY KEY (`kontribs_kategori_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`products_cat_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_detail`
--
ALTER TABLE `produk_detail`
  ADD PRIMARY KEY (`id_produk_detail`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tatakelola`
--
ALTER TABLE `tatakelola`
  ADD PRIMARY KEY (`tatakelola_id`);

--
-- Indexes for table `tatakelola_kategori`
--
ALTER TABLE `tatakelola_kategori`
  ADD PRIMARY KEY (`tatakelola_cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_agama`
--
ALTER TABLE `user_agama`
  ADD PRIMARY KEY (`user_agama_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indexes for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  ADD PRIMARY KEY (`user_jabatan_id`);

--
-- Indexes for table `user_jam`
--
ALTER TABLE `user_jam`
  ADD PRIMARY KEY (`user_jam_id`);

--
-- Indexes for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  ADD PRIMARY KEY (`user_kelamin_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indexes for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  ADD PRIMARY KEY (`user_perkawinan_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bisnis`
--
ALTER TABLE `bisnis`
  MODIFY `bisnis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `bisnis_kategori`
--
ALTER TABLE `bisnis_kategori`
  MODIFY `bisnis_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs_kategori`
--
ALTER TABLE `blogs_kategori`
  MODIFY `blogs_kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direksi`
--
ALTER TABLE `direksi`
  MODIFY `id_direksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `kontribs`
--
ALTER TABLE `kontribs`
  MODIFY `kontribs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontribs_kategori`
--
ALTER TABLE `kontribs_kategori`
  MODIFY `kontribs_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `products_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk_detail`
--
ALTER TABLE `produk_detail`
  MODIFY `id_produk_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tatakelola`
--
ALTER TABLE `tatakelola`
  MODIFY `tatakelola_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tatakelola_kategori`
--
ALTER TABLE `tatakelola_kategori`
  MODIFY `tatakelola_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_agama`
--
ALTER TABLE `user_agama`
  MODIFY `user_agama_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  MODIFY `user_jabatan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_jam`
--
ALTER TABLE `user_jam`
  MODIFY `user_jam_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  MODIFY `user_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  MODIFY `user_perkawinan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

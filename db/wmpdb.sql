-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 05.35
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
-- Struktur dari tabel `bisnis`
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
  `bisnis_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bisnis`
--

INSERT INTO `bisnis` (`bisnis_id`, `bisnis_kategori_id`, `bisnis_judul`, `bisnis_judul_seo`, `bisnis_desk`, `bisnis_keyword`, `bisnis_meta_desk`, `bisnis_gambar`, `bisnis_post_oleh`, `bisnis_post_hari`, `bisnis_post_tanggal`, `bisnis_post_jam`, `bisnis_update_oleh`, `bisnis_update_hari`, `bisnis_update_tanggal`, `bisnis_update_jam`, `bisnis_dibaca`, `bisnis_status`, `bisnis_url`) VALUES
(19, 19, 'Integrated Livestock', 'integrated-livestock', '<p style=\"text-align: justify; \">Sebagai sebuah perusahaan peternakan sapi terintegrasi terbesar di Indonesia, PT Pasir Tengah (PST) kini tercatat memenuhi kurang lebih 17% dari total kebutuhan pasar sapi potong nasional. Secara kontinu pemenuhan tersebut disuplai dari 4 fasilitas farm yang tersebar di beberapa lokasi strategis di daerah Cianjur, Cariu, Cileungsi (ketiganya berada di wilayah Jawa Barat) dan Bayat (Klaten, Jawa Tengah) dengan total kapasitas hingga 172.000 ribu ekor per tahun. Kualitas produk adalah label utama PT Pasir Tengah dalam memasuki pasar dan bertahan di tengah persaingan. Inovasi adalah kunci untuk menjaga eksistensi dan reputasi. Visi kerja berbasis Research and Development telah menjadi salah satu kultur kami. Dengan mempertahankan kualitasnya, PT Pasir Tengah berhasil menjadi salah satu dari tiga pemain besar di bidang pasokan sapi potong di Indonesia.<br></p>', 'Integrated Livestock', 'Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berk', 'cianjur_farm1.jpg', 'panji', 'Senin', '2021-04-26', '15:10:12', 'jiung', 'Kamis', '2021-06-10', '14:14:24', 4, 'publish', 'https://widodomakmurperkasa.co.id'),
(20, 20, 'Meat Processing', 'meat-processing', '<p style=\"text-align: justify; \">Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,&nbsp; Produk olahan (Food Processing), dan Pabrik Kulit (Tannery).&nbsp; Dilengkapi sertifikasi NKV dari Dinas Peternakan serta sertifikasi halal MUI. Produk daging PT Cianjur Arta Makmur (CAM)&nbsp; berupa daging segar (chilled beef) dan daging beku (frozen beef)&nbsp; menyupali berbagai industri makanan olahan, distributor daging, berbagai pasar modern, market place, dan hospitality (hotel, kafe, restoran, katering) di Indonesia. CAM juga menyediakan produk daging dengan spesifikasi khusus (custom) yang biasanya dibutuhkan oleh kafe dan restoran.&nbsp;Untuk keterangan lebih lanjut<br></p>', 'Meat Processing', 'Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV da', 'camnew.jpg', 'panji', 'Senin', '2021-04-26', '15:10:43', 'jiung', 'Rabu', '2021-06-09', '15:43:23', 4, 'publish', ''),
(21, 21, 'Integrated Poultry', 'integrated-poultry', '<p style=\"text-align: justify; \">Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatchery), Budidaya ayam broiler (Commercial Broiler Farm). Budidaya Ayam Petelur Premium Germanium ( Layer ), Rumah Pemotongan Ayam RPA (Slaughtered House) modern terbesar di Indonesia dan memproduksi produk ayam olahan.  PT Widodo Makmur Unggas (WMU) berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan. Untuk keterangan lebih lanjut<br></p>', 'Integrated Poultry', 'Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatcher', 'wmunew.jpg', 'panji', 'Senin', '2021-04-26', '15:11:13', 'jiung', 'Rabu', '2021-06-09', '16:12:17', 4, 'publish', ''),
(22, 22, 'Commodity', 'commodity', '<p style=\"text-align: justify; \">Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. PT Widodofood Makmur Sejahtera (WMS) sebagai representasi Commodity juga mengembangkan bisnis komoditi gula, kedelai, soy bean meal dan bahan pakan ternak terutama ayam dan sapi. Untuk keterangan lebih lanjut<br></p>', 'Commodity', 'Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. ', 'wms.jpg', 'panji', 'Senin', '2021-04-26', '15:11:41', 'jiung', 'Rabu', '2021-06-09', '16:12:00', 2, 'publish', ''),
(23, 19, 'Construction dan Energy', 'construction-dan-energy', '<p style=\"text-align: justify; \">Construction & Energy di bawah bendera PT Langgeng Makmur Perkasa (LMP) beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  Selain itu mulai merintis program energi terbarukan yaitu energi matahari melalui instalasi solar panel dan berencana menerapkan membangun kincir sebagai sumber energi angin.  Selain penerapan efisiensi biaya produksi juga sebagai komitmen Widodo Makmur dalam turut serta mengurangi emisi gas rumah kaca. Untuk keterangan lebih lanjut<br></p>', 'Construction & Energy', 'Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  ', 'LMP2.jpg', 'panji', 'Senin', '2021-04-26', '15:12:11', 'jiung', 'Kamis', '2021-06-10', '13:26:14', 3, 'publish', ''),
(27, 19, 'Cianjur Farm', 'cianjur-farm', '<p>Feed Mill • Partnership • Bio Fertilizer • Bio Energy • 140 Hektar • Populasi 26.000-30.000 Ekor Sapi • Kapasitas 172.000 Ekor/Tahun • Peternakan Sapi Terbesar di Indonesia • Memenuhi 17% Market Share Nasional<br></p>', '', '', '1-PST-Cianjur-edit-2.jpg', 'jiung', 'Rabu', '2021-06-09', '15:53:51', '', '', '0000-00-00', '00:00:00', 2, 'publish', ''),
(28, 19, 'Caria Farm', 'caria-farm', '<p style=\"text-align: justify; \">Limbah cair dan padat diproduksi sebagai pupuk organik yang dipasarkan ke perkebunan skala besar seperti perkebunan kelapa sawit, karet atau tebu. Menjadi solusi cerdas dan bentuk komitmen kami dalam melaksanakan zero waste  untuk mereduksi efek rumah kaca (green house effect). Keberlangsungan lingkungan merupakan komitmen kami. Tahun 2020 menjadi langkah maju PT Pasir Tengah karena telah merintis limbah peternakan untuk dikonversi sebagai bahan bakar biogas yang ramah lingkungan, bekerjasama dengan pihak ke tiga dalam produksinya.  Green industry  ke depan akan menjadi tren dan solusi bagi pemeliharaan bumi  yang berkelanjutan</p>', '', '', 'VS1.png', 'jiung', 'Kamis', '2021-06-10', '13:59:28', 'jiung', 'Kamis', '2021-06-10', '14:14:50', 0, 'publish', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bisnis_kategori`
--

CREATE TABLE `bisnis_kategori` (
  `bisnis_kategori_id` int(11) NOT NULL,
  `bisnis_kategori_judul` varchar(220) NOT NULL,
  `bisnis_kategori_judul_seo` varchar(220) NOT NULL,
  `bisnis_kategori_desk` text NOT NULL,
  `bisnis_kategori_keyword` varchar(220) NOT NULL,
  `bisnis_kategori_meta_desk` varchar(200) NOT NULL,
  `bisnis_kategori_gambar` text NOT NULL,
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
-- Dumping data untuk tabel `bisnis_kategori`
--

INSERT INTO `bisnis_kategori` (`bisnis_kategori_id`, `bisnis_kategori_judul`, `bisnis_kategori_judul_seo`, `bisnis_kategori_desk`, `bisnis_kategori_keyword`, `bisnis_kategori_meta_desk`, `bisnis_kategori_gambar`, `bisnis_kategori_post_oleh`, `bisnis_kategori_post_hari`, `bisnis_kategori_post_tanggal`, `bisnis_kategori_post_jam`, `bisnis_kategori_update_oleh`, `bisnis_kategori_update_hari`, `bisnis_kategori_update_tanggal`, `bisnis_kategori_update_jam`, `bisnis_kategori_dibaca`, `bisnis_kategori_status`) VALUES
(19, 'Integrated Livestock', 'integrated-livestock', '<p>Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berkesinambungan . Memiliki 4 farm di Cianjur, Cariu, Cileungsi, dan Klaten dengan kapasitas total populasi 172.000 ekor sapi.<br></p>', 'Integrated Livestock', 'Integrated Livestock, bergerak di bidang peternakan sapi terintegrasi dimana bidang fattening, breeding, feedmill production, waste management termasuk organic fertilizer berada dalam satu lokasi berk', 'cianjur_farm1.jpg', 'panji', 'Senin', '2021-04-26', '15:10:12', 'panji', 'Senin', '2021-04-26', '16:02:49', 3, 'publish'),
(20, 'Meat Processing', 'meat-processing', '<p>Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV dari Dinas Peternakan serta sertifikasi halal MUI. Produk daging CAM berupa daging segar (chilled beef) dan daging beku (frozen beef)  menyupali berbagai industri makanan olahan, distributor daging, berbagai pasar modern, market place, dan hospitality (hotel, kafe, restoran, katering) di Indonesia. CAM juga menyediakan produk daging dengan spesifikasi khusus (custom) yang biasanya dibutuhkan oleh kafe dan restoran.<br></p>', 'Meat Processing', 'Meat Processing terdiri dari rangkaian bisnis Rumah Potong Hewan (Modern Abattoir) terbesar di Indonesia,  Produk olahan (Food Processing), dan Pabrik Kulit (Tannery). .  Dilengkapi sertifikasi NKV da', 'camnew.jpg', 'panji', 'Senin', '2021-04-26', '15:10:43', 'dhawy', 'Senin', '2021-04-26', '16:06:49', 2, 'publish'),
(21, 'Integrated Poultry', 'integrated-poultry', '<p>Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatchery), Budidaya ayam broiler (Commercial Broiler Farm). Budidaya Ayam Petelur Premium Germanium ( Layer ), Rumah Pemotongan Ayam RPA (Slaughtered House) modern terbesar di Indonesia dan memproduksi produk ayam olahan.  WMU berkomitmen menyediakan produk pangan hewani untuk seluruh masyarakat dunia dengan memaksimalkan kualitas produk dan pelayanan yang terjangkau bagi konsumen. WMU juga berkomitmen pada integritas, profesionalitas, loyalitas, sinergi dan kolaborasi demi menjadi yang terbaik dalam bisnis perunggasan. <br></p>', 'Integrated Poultry', 'Integrated Poultry bergerak di bidang peternakan ayam terintegrasi meliputi  Divisi Pembibitan  Grand Parent Stock  (Breeding GPS) dan Pembibitan  Parent Stock (Breeding PS), Divisi Penetasan (Hatcher', 'wmunew.jpg', 'panji', 'Senin', '2021-04-26', '15:11:13', 'dhawy', 'Senin', '2021-04-26', '16:07:44', 2, 'publish'),
(22, 'Commodity', 'commodity', '<p>Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. PT Widodofood Makmur Sejahtera sebagai representasi Commodity juga mengembangkan bisnis komoditi gula, kedelai, soy bean meal dan bahan pakan ternak terutama ayam dan sapi.<br></p>', 'Commodity', 'Food & Commodity memproduksi beras kemasan untuk pasar domestik, pasar modern dan menyuplai horeka melalui produk-produk beras premium dan menengah dalam berbagai varian ukuran dan brand. ', 'wms.jpg', 'panji', 'Senin', '2021-04-26', '15:11:41', 'dhawy', 'Senin', '2021-04-26', '16:09:01', 2, 'publish'),
(23, 'Construction dan Energy', 'construction-dan-energy', '<p>Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  Selain itu mulai merintis program energi terbarukan yaitu energi matahari melalui instalasi solar panel dan berencana menerapkan membangun kincir sebagai sumber energi angin.  Selain penerapan efisiensi biaya produksi juga sebagai komitmen Widodo Makmur dalam turut serta mengurangi emisi gas rumah kaca.<br></p>', 'Construction & Energy', 'Construction & Energy beroperasi sebagai pelaksana seluruh proyek-proyek internal Widodo Makmur dari berbagai lini bisnis terutama Poultry yang sedang membangun investas dalam jumlah besar .  ', 'LMP2.jpg', 'panji', 'Senin', '2021-04-26', '15:12:11', 'panji', 'Selasa', '2021-04-27', '10:44:36', 2, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `blogs_id` int(11) NOT NULL,
  `blogs_judul` varchar(220) NOT NULL,
  `blogs_judul_seo` varchar(220) NOT NULL,
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
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`blogs_id`, `blogs_judul`, `blogs_judul_seo`, `blogs_desk`, `blogs_keyword`, `blogs_meta_desk`, `blogs_gambar`, `blogs_post_oleh`, `blogs_post_hari`, `blogs_post_tanggal`, `blogs_post_jam`, `blogs_update_oleh`, `blogs_update_hari`, `blogs_update_tanggal`, `blogs_update_jam`, `blogs_dibaca`, `blogs_status`) VALUES
(11, 'Donor Darah Di Kantor Pusat Widodo Makmur Perkasa', 'donor-darah-di-kantor-pusat-widodo-makmur-perkasa', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Donor darah adalah sebuah kegiatan mulia, yang bertujuan untuk membantu sesama. Telah menjadi tradisi bagi Widodo Makmur Perkasa untuk memngadakan acara donor darah secara berkala. Bekerjasama dengan PMI jakarta Timur pada tanggal 25 Maret 2019 pukul 09.00-11.00 WIB telah dilaksanakan acara donor darah yang dilaksanakan di Kantor Pusat Widodo Makmur Perkasa di Graha Widodo Makmur Jl. Raya Cilangkap no 58, Cipayung, Jakarta Timur. Adapun acara ini diikuti oleh 80 orang peserta dari level Direksi hingga supporting level. Namun dari pemeriksaan pendahuluan, akhirnya 48 oranglah yang diijinkan untuk mendonorkan darahnya.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Beberapa pertimbangan seseorang diijinkan untuk mendonorkan darahnya adalah;</p><ol style=\"margin-bottom: 10px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><li>Tubuh dalam kondisi fit,</li><li>Tidak mengidap penyakit menular seperti AIDS, Hepatitis, Malaria</li><li>Tidak sedang mengkonsumsi obat-obatan seperti obat pengencer darah,</li><li>Tidak sedang menstruasi, hamil atau menyusui,</li><li>Tidak dalam kondisi darah rendah, berat badan di bawah normal,</li><li>Tidak dalam kondisi kurang tidur (begadang)</li></ol>', 'acara donor darah,donor darah,widodo makmur perkasa', 'Donor darah adalah sebuah kegiatan mulia, yang bertujuan untuk membantu sesama.', 'Backdrop-Donor-Darah-cetak-01-EDIT1.jpg', 'dhawy', 'Rabu', '2021-04-21', '15:15:01', 'dhawy', 'Rabu', '2021-04-21', '15:45:58', 1, 'publish'),
(12, 'JOSO Sebagai Juara 1 Jakarta Architecture Installation Festival (JAIF) 2019', 'joso-sebagai-juara-1-jakarta-architecture-installation-festival-jaif-2019', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">JOSO sebagai salah satu anak perusahaan di lini bisnis Properti, bergerak di bidang jasa konsultan arsitektur. Telah memenangkan berbagai kompetisi arsitektur tingkat nasional & dipercaya menangani berbagai proyek arsitektur dari pemerintah, BUMN, maupun pihak swasta.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Pada acara Jakarta Architecture Installation Festival (JAIF) 2019, salah satu karya JOSO yang berjudul ‘konkavitas’ terpilih sebagai Juara 1 pilihan pengunjung. Selamat kepada JOSO & teruslah ciptakan karya-karya terbaik ke depannya!</p>', 'arsitekindonesia,joso,jaif2019,widodomakmurperkasa', 'JOSO sebagai salah satu anak perusahaan di lini bisnis Properti, bergerak di bidang jasa konsultan arsitektur. ', 'joso-jaif-EDIT.jpg', 'dhawy', 'Rabu', '2021-04-21', '15:51:12', 'dhawy', 'Rabu', '2021-04-21', '15:51:25', 1, 'publish'),
(13, 'tesss tessss2', 'tesss-tessss2', '<p>tessss1231 asdsadqweqweqwe</p>', 'tess', 'tesad12312', '', 'panji', 'Kamis', '2021-04-22', '11:33:59', 'jiung', 'Kamis', '2021-04-22', '11:41:25', 0, 'delete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
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
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`divisi_id`, `divisi_judul`, `divisi_judul_seo`, `divisi_desk`, `divisi_keyword`, `divisi_meta_desk`, `divisi_gambar`, `divisi_post_oleh`, `divisi_post_hari`, `divisi_post_tanggal`, `divisi_post_jam`, `divisi_update_oleh`, `divisi_update_hari`, `divisi_update_tanggal`, `divisi_update_jam`, `divisi_dibaca`, `divisi_status`) VALUES
(12, 'Informasi teknologi', 'informasi-teknologi', '<p>deskripsi IT</p>', '', 'IT', '', 'dhawy', 'Senin', '2020-12-07', '18:19:07', 'dhawy', 'Jumat', '2020-12-18', '07:17:24', 0, 'publish'),
(13, 'Human Resource Development', 'human-resource-development', '<p>ini isi hrd</p>', '', 'HRD', '', 'dhawy', 'Minggu', '2020-12-27', '10:26:58', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(15, 'Finance', 'finance', '<p>Isi Finance</p><p><br></p>', '', 'FIN', '', 'dhawy', 'Minggu', '2020-12-27', '10:28:48', 'dhawy', 'Kamis', '2021-04-22', '11:03:07', 0, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
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
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `instagram`, `whatsapp`, `youtube`, `youtube_video`, `profil_url`, `profil_picture`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `logo`, `mini_logo`, `seo`, `analytics`, `pixel`, `maps`, `slogan`, `alamat`, `foto`) VALUES
(1, 'Widodo Makmur Perkasa', 'widodomakmurperkasa@wmp-group.co.id', 'https://wmpnew190421.widodomakmurperkasa.co.id/', 'https://www.facebook.com/', 'https://www.instagram.com/', '', 'https://www.youtube.com/', 'jPSzKyY5NnY', '313', 'about3.jpeg', '0218430 6787', 'PT Widodo Makmur Perkasa adalah perusahaan Holding yang membawahi lima lini bisnis yaitu <b>Integrated Livestock</b>, Meat Processing, Integrated Poultry, Food &amp; Commodity dan Construction &amp; Energy. Dimulai dengan usaha feedlot sejak tahun 1995 dan dikembangkan secara profesional pada tahun 1999.Usaha ini berkembang pesat dan menempatkan WMP sebagai salah satu perusahaan penyuplai sapi terbesar di Indonesia. Dengan aset total saat ini mencapai 2,5T dan akan terus berkembang dengan langkah pengembangan progresif kami.', '', 'wmp_favicon_big.png', 'wmp_p.png', '', '', '', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.688563094527!2d106.9007807!3d-6.3393324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x284be730643a5ade!2sGraha%20Widodo%20Makmur!5e0!3m2!1sen!2sid!4v1618988066478!5m2!1sen!2sid', 'Menjadi Perusahaan Pangan dan Papan Terbesar di Asia Tenggara.', 'Jl. Raya Cilangkap No. 58 Cilangkap, Cipayung Jakarta Timur 13870 Indonesia', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword_nama` varchar(200) NOT NULL,
  `keyword_nama_seo` varchar(200) NOT NULL,
  `keyword_username` varchar(200) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keyword`
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
(127, 'Integrated Livestock', 'integrated-livestock', 'jiung', 0),
(128, 'Meat Processing', 'meat-processing', 'jiung', 0),
(129, 'Integrated Poultry', 'integrated-poultry', 'jiung', 0),
(130, 'Commodity', 'commodity', 'jiung', 0),
(131, 'Construction & Energy', 'construction--energy', 'jiung', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
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

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`products_id`, `products_judul`, `products_judul_seo`, `products_desk`, `products_keyword`, `products_meta_desk`, `products_gambar`, `products_post_oleh`, `products_post_hari`, `products_post_tanggal`, `products_post_jam`, `products_update_oleh`, `products_update_hari`, `products_update_tanggal`, `products_update_jam`, `products_dibaca`, `products_status`, `products_cat_id`) VALUES
(53, 'RPC Pudding Cake', 'rpc-pudding-cake', '<p> </p>', '', 'RPC Pudding Cake', 'rpc1.jpg', 'dhawy', 'Selasa', '2021-01-19', '12:39:03', 'dhawy', 'Selasa', '2021-01-19', '12:47:41', 0, 'publish', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_category`
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

--
-- Dumping data untuk tabel `products_category`
--

INSERT INTO `products_category` (`products_cat_id`, `products_cat_judul`, `products_cat_judul_seo`, `products_cat_desk`, `products_cat_keyword`, `products_cat_meta_desk`, `products_cat_gambar`, `products_cat_post_oleh`, `products_cat_post_hari`, `products_cat_post_tanggal`, `products_cat_post_jam`, `products_cat_update_oleh`, `products_cat_update_hari`, `products_cat_update_tanggal`, `products_cat_update_jam`, `products_cat_dibaca`, `products_cat_status`) VALUES
(17, 'Engagement Event', 'engagement-event', '<p>Engagement Event<br></p>', 'Engagement Event', 'Engagement Event', '', 'dhawy', 'Rabu', '2021-01-27', '08:07:46', '', '', '0000-00-00', '00:00:00', 0, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
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
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_judul`, `slider_judul_seo`, `slider_desk`, `slider_keyword`, `slider_meta_desk`, `slider_gambar`, `slider_post_oleh`, `slider_post_hari`, `slider_post_tanggal`, `slider_post_jam`, `slider_update_oleh`, `slider_update_hari`, `slider_update_tanggal`, `slider_update_jam`, `slider_dibaca`, `slider_status`) VALUES
(79, 'Slider sapi', 'slider-sapi', '', '', 'turunan', '1.jpg', 'dhawy', 'Senin', '2021-04-26', '13:49:23', '', '', '0000-00-00', '00:00:00', 0, 'delete'),
(80, 'slider2', 'slider2', '', '', 'active', 'revisi-1.jpg', 'jiung', 'Selasa', '2021-04-27', '13:42:56', '', '', '0000-00-00', '00:00:00', 0, 'publish'),
(81, 'slider Ayam', 'slider-ayam', '', '', 'turunan', 'ayam12.jpg', 'dhawy', 'Senin', '2021-04-26', '13:49:17', '', '', '0000-00-00', '00:00:00', 0, 'delete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `level`, `id_session`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_update_hari`, `user_update_tanggal`, `user_update_jam`, `user_gambar`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'dhawy', 'dhawy arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20210422105518', 'Kamis', '2020-06-25', '15:14:48', 'Kamis', '2021-04-22', '21:11:05', 'user-profile-avatar-job-social-businessman-profession-user-profile-png-512_512.png', '1', '2021-04-26', '13:02:54', 'online', 'Publish'),
(30, 'jiung', 'jiung', 'adjiesans@gmail.com', '24c05ce1409afb5dad4c5bddeb924a4bc3ea00f5', '1', '1d00fc6c047a79e4473a253bbb47d62e-20210426130305', 'Kamis', '2021-04-22', '10:52:42', 'Senin', '2021-04-26', '13:03:05', 'luffy.jpg', '1', '2021-06-10', '13:23:51', 'online', 'publish'),
(31, 'panji', 'Panji', 'panji@gmail.com', '847e04007f984790744ed34d7c5ed34fc178242c', '3', '73845d4bc9599b7e24578f97e79634dc-20210422164714', 'Kamis', '2021-04-22', '11:23:01', 'Kamis', '2021-04-22', '16:47:14', '', '1', '2021-04-22', '21:11:57', 'offline', 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_agama`
--

CREATE TABLE `user_agama` (
  `user_agama_id` int(2) NOT NULL,
  `user_agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_agama`
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
-- Struktur dari tabel `user_detail`
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
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `id_user`, `user_detail_no_telp`, `user_detail_jekel`, `user_detail_agama`, `user_detail_tempatlahir`, `user_detail_tgllahir`, `user_detail_perkawinan`, `user_detail_pendidikan`, `user_detail_divisi`, `user_detail_ktp`, `user_detail_tempattinggal`) VALUES
(25, 6, '1231312313', 'Pria', 'Islam', 'jakarta', '2021-01-29', 'Lajang', 's1', 12, '12312313123', 'bogor'),
(39, 30, '01231312312', 'Pria', 'Islam', 'Jakarta', '1945-12-08', 'Menikah', 'S3', 12, '088888888', 'Jakarta'),
(40, 31, '01231312312', 'Pria', 'Islam', 'Jakarta', '2021-04-05', 'Lajang', 'S3', 12, '2132131312', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `user_jabatan_id` int(2) NOT NULL,
  `user_jabatan_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_jabatan`
--

INSERT INTO `user_jabatan` (`user_jabatan_id`, `user_jabatan_nama`) VALUES
(1, 'Onboarding'),
(2, 'Training'),
(3, 'Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jam`
--

CREATE TABLE `user_jam` (
  `user_jam_id` tinyint(1) NOT NULL,
  `user_jam_judul` varchar(220) NOT NULL,
  `user_jam_judul_seo` varchar(220) NOT NULL,
  `user_jam_mulai` time NOT NULL,
  `user_jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_jam`
--

INSERT INTO `user_jam` (`user_jam_id`, `user_jam_judul`, `user_jam_judul_seo`, `user_jam_mulai`, `user_jam_selesai`) VALUES
(7, 'Lembur', 'lembur', '19:01:00', '21:00:00'),
(8, 'Pulang', 'pulang', '17:00:00', '19:00:00'),
(9, 'Masuk', 'masuk', '06:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kelamin`
--

CREATE TABLE `user_kelamin` (
  `user_kelamin_id` int(2) NOT NULL,
  `user_kelamin_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_kelamin`
--

INSERT INTO `user_kelamin` (`user_kelamin_id`, `user_kelamin_nama`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_nama`) VALUES
(1, 'Super Admin'),
(2, 'Administrator'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_perkawinan`
--

CREATE TABLE `user_perkawinan` (
  `user_perkawinan_id` int(2) NOT NULL,
  `user_perkawinan_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_perkawinan`
--

INSERT INTO `user_perkawinan` (`user_perkawinan_id`, `user_perkawinan_nama`) VALUES
(1, ' '),
(2, 'Lajang'),
(3, 'Menikah'),
(4, 'Cerai'),
(5, 'Belum jelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `user_status_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_nama`) VALUES
(1, 'Active'),
(2, 'Suspend');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`bisnis_id`);

--
-- Indeks untuk tabel `bisnis_kategori`
--
ALTER TABLE `bisnis_kategori`
  ADD PRIMARY KEY (`bisnis_kategori_id`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogs_id`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indeks untuk tabel `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`products_cat_id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `user_agama`
--
ALTER TABLE `user_agama`
  ADD PRIMARY KEY (`user_agama_id`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indeks untuk tabel `user_jabatan`
--
ALTER TABLE `user_jabatan`
  ADD PRIMARY KEY (`user_jabatan_id`);

--
-- Indeks untuk tabel `user_jam`
--
ALTER TABLE `user_jam`
  ADD PRIMARY KEY (`user_jam_id`);

--
-- Indeks untuk tabel `user_kelamin`
--
ALTER TABLE `user_kelamin`
  ADD PRIMARY KEY (`user_kelamin_id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indeks untuk tabel `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  ADD PRIMARY KEY (`user_perkawinan_id`);

--
-- Indeks untuk tabel `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bisnis`
--
ALTER TABLE `bisnis`
  MODIFY `bisnis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `bisnis_kategori`
--
ALTER TABLE `bisnis_kategori`
  MODIFY `bisnis_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `products_category`
--
ALTER TABLE `products_category`
  MODIFY `products_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user_agama`
--
ALTER TABLE `user_agama`
  MODIFY `user_agama_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user_jabatan`
--
ALTER TABLE `user_jabatan`
  MODIFY `user_jabatan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_jam`
--
ALTER TABLE `user_jam`
  MODIFY `user_jam_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_kelamin`
--
ALTER TABLE `user_kelamin`
  MODIFY `user_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  MODIFY `user_perkawinan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

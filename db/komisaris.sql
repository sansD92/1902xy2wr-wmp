-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 06.23
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
-- Struktur dari tabel `komisaris`
--

CREATE TABLE `komisaris` (
  `id_komisaris` int(11) NOT NULL,
  `nama_komisaris` varchar(50) NOT NULL,
  `jabatan_komisaris` varchar(50) NOT NULL,
  `deskripsi_jabatan` text NOT NULL,
  `foto_komisaris` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komisaris`
--

INSERT INTO `komisaris` (`id_komisaris`, `nama_komisaris`, `jabatan_komisaris`, `deskripsi_jabatan`, `foto_komisaris`) VALUES
(1, 'Raden Marlan', 'President Commissioner', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'FOTO-7.png'),
(2, 'Warsini', 'Commissioner', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'FOTO-8.png'),
(3, 'Drs.Setyo Wasisto SH', 'Commissioner', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'FOTO-6.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komisaris`
--
ALTER TABLE `komisaris`
  ADD PRIMARY KEY (`id_komisaris`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 11.01
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
-- Struktur dari tabel `direksi`
--

CREATE TABLE `direksi` (
  `id_direksi` int(10) NOT NULL,
  `nama_direksi` varchar(50) NOT NULL,
  `jabatan_direksi` varchar(50) NOT NULL,
  `deskripsi_jabatan` text NOT NULL,
  `foto_direksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `direksi`
--

INSERT INTO `direksi` (`id_direksi`, `nama_direksi`, `jabatan_direksi`, `deskripsi_jabatan`, `foto_direksi`) VALUES
(1, 'Tumiyana', 'Chairman & CEO Widodo Makmur Group', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'Tumiyana.png'),
(2, 'Teddy M Subekti', 'Direktur Business Development', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'teddy.png'),
(3, 'Eko Agmi Adriana', 'Direktur Keuangan', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'eko.png'),
(4, 'Suyatmi', 'Direktur Marketing', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'suyatmi.png'),
(5, 'Nur Tjahjo', 'Direktur HCD', 'Tumiyono is an eminent figure in Indonesia’s construction industry. He studied civil engineering at Borobudur University and earned a Masters degree in Business Administration at JIMS. He started his professional career at PT PP Persero and owing to his incisive talent, he became the youngest project manager in the company. He was Finance Director of PT PP (Persero) from 2008 to 2016 and President Director of the same company from 2016 to 2018) and was then President Director of PT Wika Persero (2018 – 2020). In the same period he was also President Commissioner of PT Kereta Cepat China Indonesia 2018 – 2020).', 'nur.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`id_direksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `direksi`
--
ALTER TABLE `direksi`
  MODIFY `id_direksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Jan 2023 pada 15.42
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seleksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `leader_email` varchar(255) NOT NULL,
  `leader_img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `project`, `client`, `leader_name`, `leader_email`, `leader_img`, `start_date`, `end_date`, `progress`) VALUES
(1, 'Pembuatan SI Keuangan', 'Bakeuda Prov. Kalsel', 'Indra Setiawan', 'indra.setiawan@gmail.com', 'https://randomuser.me/api/portraits/men/18.jpg', '2022-01-14', '2022-07-14', 30),
(2, 'Learning Management System', 'Ruang Guru', 'Hilman Syaputra', 'hilman.syah@gmail.com', 'https://randomuser.me/api/portraits/men/20.jpg', '2022-01-30', '2022-03-10', 80),
(3, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', 'febri.gunawan@gmail.com', 'https://randomuser.me/api/portraits/men/21.jpg', '2022-02-02', '2022-05-30', 40),
(4, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'Handoko Aji', 'handoko.aji@gmail.com', 'https://randomuser.me/api/portraits/men/22.jpg', '2021-09-02', '2022-01-15', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

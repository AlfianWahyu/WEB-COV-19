-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2020 pada 08.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `relo`
--

CREATE TABLE `relo` (
  `id` int(6) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relo`
--

INSERT INTO `relo` (`id`, `Username`, `Password`, `Dibuat`) VALUES
(1, 'farisdwi', 'faris2810', '2020-04-25 18:22:39'),
(4, 'al', 'al', '2020-04-26 13:14:23'),
(5, 'mutia', 'mutial', '2020-04-26 13:25:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `relo`
--
ALTER TABLE `relo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `relo`
--
ALTER TABLE `relo`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

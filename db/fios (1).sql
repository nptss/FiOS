-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2018 pada 13.39
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fios`
--
CREATE DATABASE IF NOT EXISTS `fios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fios`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fios_ujicoba`
--

CREATE TABLE `fios_ujicoba` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `uang` float NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fios_ujicoba_gambar`
--

CREATE TABLE `fios_ujicoba_gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `uang` float NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `fios_ujicoba_gambar`
--

INSERT INTO `fios_ujicoba_gambar` (`id`, `nama`, `alamat`, `uang`, `gambar`) VALUES
(19, 'Ari Anggoro Gustianto', 'Somagede, Banyumas', 200000, '2018-02-22-06-09-38.png'),
(21, 'Fatimah Isnaeni', 'Banyumas, Jawa Tengah', 200000, '2018-02-22-06-59-09.png'),
(22, 'Nanda Sagita', 'Sokaraja', 1000, '2018-02-22-06-56-38.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fios_ujicoba`
--
ALTER TABLE `fios_ujicoba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fios_ujicoba_gambar`
--
ALTER TABLE `fios_ujicoba_gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fios_ujicoba`
--
ALTER TABLE `fios_ujicoba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fios_ujicoba_gambar`
--
ALTER TABLE `fios_ujicoba_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

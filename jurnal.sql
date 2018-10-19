-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.14
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nama` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `tgl_lhr` varchar(255) NOT NULL,
  `j_kelamin` varchar(30) NOT NULL,
  `p_studi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto_hidup` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nama`, `nim`, `tgl_lhr`, `j_kelamin`, `p_studi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('php', 111, '2018-10-10', 'Laki-laki', 'D3 Sistem Informasi', 'fkb', 'oooooo', 'eee'),
('fitri', 123, '2018-10-10', 'Laki-laki', 'D3 Sistem Informasi', 'fit', 'sdsdf', 'ghgfj'),
('aku', 321, '2018-10-03', 'Laki-laki', 'D3 Sistem Informasi', 'fit', 'dg', 'gh'),
('ya', 567, '2018-10-03', 'Laki-laki', 'D3 Sistem Informasi', 'fit', 'sdsdf', 'gh'),
('pqp', 999, '2018-10-02', 'Perempuan', 'D3 Teknik Komputer', 'fik', 'oooooo', 'eee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

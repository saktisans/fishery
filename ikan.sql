-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 19.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kapal`
--

CREATE TABLE `data_kapal` (
  `id_kapal` int(10) NOT NULL,
  `nama_kapal` varchar(50) NOT NULL,
  `tahun_pembuatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kapal`
--

INSERT INTO `data_kapal` (`id_kapal`, `nama_kapal`, `tahun_pembuatan`) VALUES
(1001, 'DFFU', '2013'),
(1002, 'RESTO', '2012'),
(1003, 'DRWE', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penangkapan`
--

CREATE TABLE `penangkapan` (
  `nomer` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `nama_kapal` varchar(50) NOT NULL,
  `jumlah_tangkapan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penangkapan`
--

INSERT INTO `penangkapan` (`nomer`, `tgl`, `id_kapal`, `nama_kapal`, `jumlah_tangkapan`) VALUES
(1, '2020-05-04', 1001, 'DFFU', '2'),
(2, '2020-05-23', 1002, 'RESTO', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_login`
--

CREATE TABLE `tabel_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_login`
--

INSERT INTO `tabel_login` (`username`, `password`) VALUES
('gilang', 'admin'),
('naufal', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kapal`
--
ALTER TABLE `data_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `penangkapan`
--
ALTER TABLE `penangkapan`
  ADD PRIMARY KEY (`nomer`);

--
-- Indeks untuk tabel `tabel_login`
--
ALTER TABLE `tabel_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penangkapan`
--
ALTER TABLE `penangkapan`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

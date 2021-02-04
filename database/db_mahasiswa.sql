-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2021 pada 06.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idi` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idi`, `username`, `password`, `status`) VALUES
(1, 'admin', 'zidan', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `NPM` varchar(8) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Alamat` text NOT NULL,
  `Kode_Pos` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `web`
--

INSERT INTO `web` (`id`, `NPM`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `Kode_Pos`) VALUES
(8, '19630578', 'Muhammad Daffa Naufal', 'Banjarmasin', '2000-10-06', 'L', 'Jalan Sultan Adam', '70121'),
(9, '19630033', 'Muhammad Nazarudin Amir', 'Banjarmasin', '2000-01-08', 'L', 'Jalan Sungai Jingah', '70121'),
(19, '19630021', 'Yupi ', 'Barabai ', '2000-02-09', 'L', 'Jalan Pahlawan', '70191'),
(20, '19630909', 'Putri Andini', 'Surabaya', '2001-12-12', 'P', 'Jalan Gatot', '70121'),
(21, '19630571', 'Muhammad Zidan Ramadhani', 'Banjarmasin', '2001-12-01', 'L', 'Jalan Sungai Andai', '70121'),
(22, '19630801', 'Alya Mutiara', 'Malang', '2001-12-20', 'P', 'Jalan Sungai Andai', '70121');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idi`);

--
-- Indeks untuk tabel `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

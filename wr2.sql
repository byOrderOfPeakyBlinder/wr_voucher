-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2023 pada 05.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wr2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_cabang`
--

CREATE TABLE `data_cabang` (
  `kode_cabang` varchar(20) NOT NULL,
  `cabang` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_cabang`
--

INSERT INTO `data_cabang` (`kode_cabang`, `cabang`) VALUES
('R15', 'MALANG'),
('R67', 'SIDOARJO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klaim_voucher`
--

CREATE TABLE `klaim_voucher` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `kode_voucher` varchar(20) NOT NULL,
  `id_kasir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klaim_voucher`
--

INSERT INTO `klaim_voucher` (`id`, `nama`, `no_hp`, `alamat`, `tanggal`, `foto`, `kode_voucher`, `id_kasir`) VALUES
(10, 'Rich Brian', '082255271821', 'Jl pahlawan sudirman', 1703437200, 'AXRDN0.jpg', 'AXRDN0', 3),
(11, 'Dimas', '12222222222', 'Jl Semangkaa ', 1703005200, 'OFDA2W.PNG', 'OFDA2W', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL,
  `kode_cabang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `kode_cabang`) VALUES
(1, 'admin', '$2y$10$HVVggolYtcmlr1iKmJBnvepZuqTtgY1qpowVXbxgMk9QoxQ.eDU8O', 1, ''),
(3, 'Rio', '$2y$10$HVVggolYtcmlr1iKmJBnvepZuqTtgY1qpowVXbxgMk9QoxQ.eDU8O', 2, 'R15'),
(5, 'Guntur', '$2y$10$kJ8ieogGLy/xlaYDWFBrVuyyZ0wuf3RuKLdgC3vnSd4DvNjiqu3Q.', 2, 'R67'),
(7, 'Aceng', '$2y$10$ojUA3UyYKWNTV1EEdjFaJuanYJlqBr6Q16wC5Woon1.9HUtvSscNe', 2, 'R15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher`
--

CREATE TABLE `voucher` (
  `kode_voucher` varchar(128) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `expired` int(11) NOT NULL,
  `status` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `voucher`
--

INSERT INTO `voucher` (`kode_voucher`, `nominal`, `created`, `expired`, `status`) VALUES
('AXRDN0', 50000, 1703490952, 1703955600, 1),
('E8T7ZG', 100000, 1703492231, 1703437200, 0),
('OFDA2W', 150000, 1703344343, 1703437200, 1),
('YL3292', 50000, 1703469112, 1703437200, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_cabang`
--
ALTER TABLE `data_cabang`
  ADD PRIMARY KEY (`kode_cabang`);

--
-- Indeks untuk tabel `klaim_voucher`
--
ALTER TABLE `klaim_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`kode_voucher`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `klaim_voucher`
--
ALTER TABLE `klaim_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

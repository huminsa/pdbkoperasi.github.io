-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2023 pada 11.35
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdbkoperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `no_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat_anggota` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `no_anggota`, `nama_anggota`, `alamat_anggota`, `email`, `telepon`, `kode_pos`, `jenis_kelamin`, `pekerjaan`) VALUES
(23, 1, 'Huminsa Nainggolan', 'Medan', 'medan@gmail.com', '089690889', '09990', 'L', 'Swasta'),
(24, 2, 'Kevin Rajagukguk', 'Medan', 'makka@gmail.com', '086387803245', '909090', 'L', 'Swasta'),
(25, 3, 'Ria Sinaga', 'Medan', 'Riameedan@gmail.com', '085243567890', '909090', 'P', 'Swasta'),
(26, 4, 'Jesika Simanjuntak', 'Medan', 'jess23@gmail.com', '089087655674', '909090', 'P', 'Swasta'),
(27, 5, 'rahmad hulu', 'Medan', 'mad@gmail.com', '089078989867', '909090', 'L', 'Guru'),
(28, 6, 'Winwin str', 'Medan', 'Win23@gmail.com', '082345678900', '909090', 'P', 'Swasta'),
(29, 7, 'Ardi gl', 'Medan', 'radi23242@gmail.com', '089034244902', '909090', 'L', 'Pns'),
(30, 8, 'Tiurma prb', 'Medan', 'trma234@gmail.com', '082390909078', '909090', 'P', 'Gamer'),
(31, 9, 'Edward kim', 'Johor', '3dwardkim@gmail.com', '082387653456', '909090', 'L', 'Swasta'),
(32, 10, 'Ivan Hasg', 'Medan', 'Ivancntk@gmail.com', '082390876758', '909090', 'L', 'Pns'),
(33, 11, 'Barian Lingga', 'Sidikalang', 'Linggaaa@gmail.com', '0856473465', '222283', 'L', 'Petani'),
(37, 12, 'Huminsa Roganda Nainggolan', 'Medan', 'huminsa@gmail.com', '0890878909', '909090', 'L', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cicilan`
--

CREATE TABLE `cicilan` (
  `jlh_cicilan` int(11) NOT NULL,
  `tgl_cicilan` int(11) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `denda_cicil` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(5) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `telepon_karyawan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `telepon_karyawan`) VALUES
(2, 'Examina Silaban', 'Batubara', '081234567675'),
(3, 'Omaina Simanjuntak', 'Medan', '089908765452'),
(4, 'Angel Marpaung', 'Medan', '089078908990'),
(5, 'Pudidi Krn', 'Medan', '089689076578');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjam` varchar(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_transaksi` varchar(5) NOT NULL,
  `jumlah_pinjam` varchar(255) NOT NULL,
  `id_karyawan` int(5) NOT NULL,
  `jangka_pinjam` varchar(50) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `bunga_pinjam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjam`, `tgl_pinjam`, `id_transaksi`, `jumlah_pinjam`, `id_karyawan`, `jangka_pinjam`, `id_anggota`, `bunga_pinjam`) VALUES
('1', '2023-01-02', '1', '23000', 1, '12 Bulan', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id_anggota` int(5) NOT NULL,
  `jlh_saldo` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jumlah_simpan` varchar(50) NOT NULL,
  `jumlah_pinjam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpan` int(11) NOT NULL,
  `tgl_simpan` date NOT NULL,
  `no_anggota` varchar(12) NOT NULL,
  `id_karyawan` varchar(5) NOT NULL,
  `jumlah_simpan` varchar(50) NOT NULL,
  `bunga_simpan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpan`, `tgl_simpan`, `no_anggota`, `id_karyawan`, `jumlah_simpan`, `bunga_simpan`) VALUES
(11, '2023-01-31', '7', '2', '500000', '2%'),
(12, '2023-01-31', '1', '2', '1000000', '2%'),
(13, '2023-01-31', '2', '2', '1000000', '2%'),
(14, '2023-01-31', '3', '2', '1500000', '2%'),
(15, '2023-01-31', '1', '2', '1500000', '2%'),
(16, '2023-02-02', '5', '2', '500000', '2%'),
(17, '2023-01-31', '4', '2', '1000000', '2%'),
(18, '2023-01-31', '6', '2', '1000000', '2%'),
(19, '2023-01-31', '8', '2', '1500000', '2%'),
(21, '2023-01-13', '11', '2', '1000000', '2%'),
(22, '2023-02-07', '10', '2', '2000000', '2%'),
(23, '2023-02-02', '5', '2', '1000000', '2%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'admin', 'admin@gmail.com', '123'),
(1, 'Yan Aquatic', 'yan@gmail.com', 'admin'),
(0, 'Operator', 'operator@gmail.com', 'operator'),
(4, 'pdbkoperasi', 'pdbkoperasi@gmail.com', 'pdbkoperasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `cicilan`
--
ALTER TABLE `cicilan`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

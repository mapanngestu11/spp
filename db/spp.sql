-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 06.42
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `nama_jurusan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`, `tanggal`, `waktu`) VALUES
(1, 'perawat', '2021-06-09', '08:51:52'),
(3, 'farmasi', '2021-06-09', '08:53:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `nama_jurusan` varchar(15) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jen_kel` varchar(10) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `foto`, `nama_siswa`, `nama_jurusan`, `kelas`, `jen_kel`, `nama_ayah`, `nama_ibu`, `no_hp_ortu`, `tanggal`, `waktu`) VALUES
(4, '669-gambar 1.png', '$nama_siswa', 'perawat', 'x', 'Perempuan', 'ayah', '$nama_ibu', '$no_hp_ortu', '2021-06-13', '12:37:20'),
(5, '604-WhatsApp Image 2019-12-09 at 08.59.25.jpeg', 'maulana', 'farmasi', 'X', 'Perempuan', 'a', 'b', '012', '2021-06-09', '10:14:04'),
(7, '496-5272.jpg', 'maulana', 'perawat', 'XI', 'Laki-Laki', 'a', 'b', '0000', '2021-06-13', '01:02:35'),
(8, '518-4089639.jpg', 'maul', 'farmasi', 'XI', 'Laki-Laki', 'a', 'b12', '123', '2021-06-13', '01:07:33'),
(9, '105-528.jpg', 'maul', 'perawat', 'XI', 'Laki-Laki', 'a', 'b', '012', '2021-06-13', '01:08:58'),
(10, '', 'maul', 'farmasi', 'xi', 'Laki-Laki', 'A', 'B', '1', '2021-06-13', '01:10:03'),
(12, '76-WhatsApp Image 2019-08-30 at 15.26.46.jpeg', 'maulana', 'farmasi', 'XII', 'Laki-Laki', 'a', 'b', '123', '2021-06-13', '01:28:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `tanggal`, `waktu`) VALUES
(1, 'admin', 'admin', '2021-06-09', '08:40:41'),
(5, 'admin', 'admin', '2021-06-09', '08:10:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2022 pada 18.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nampung jabar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_creation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_creation`) VALUES
(2, 'Geri Panca', 'geri@gmail.com', '$2y$10$jWuCSfDI8j5R1aVSZMrsw.YYhC9uDUJ0pN8G7utGhZpFcQo1aD9sa', 'default.jpg', 1, 1, 1669968666),
(3, 'Rizqi Anu', 'rizqianugrah@upi.edu', '$2y$10$pzbh6HxB.MlygsmGo3Clte6ok/kXIREmI9xkaVnkHtvjybiHvwCv.', 'default.jpg', 2, 1, 1669968982),
(4, 'Yuni', 'Yuni@yopmail.com', '$2y$10$mxiKUatHkIkriZLcp658kOmhOhfHUkrEbJm5fl7fLJgt/eIUlf9x.', 'default.jpg', 3, 1, 1669969107),
(5, 'Anu', 'anu@gmail.com', '$2y$10$i0XJIiLnSpwh.ETjSrMWHuVj86uXkI3r.Y.TLp9WL3x3.NLEnRABi', 'default.jpg', 2, 1, 1670253880),
(6, 'jojo', 'jojo@gmail.com', '$2y$10$wXbxxZ2AMzZ9lUH1pAKCC.9b1Dn8anV2ZPD4mu88V/k/jGGbYuruq', 'default.jpg', 3, 1, 1670253942);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_menu`
--

CREATE TABLE `akun_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_menu`
--

INSERT INTO `akun_menu` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_role`
--

CREATE TABLE `akun_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_role`
--

INSERT INTO `akun_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` int(11) NOT NULL,
  `poster_artikel` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `name`, `alamat`, `deskripsi`, `date`, `poster_artikel`) VALUES
(1, 'Desa Cisande', 'Jl. Rock', '<p>Mantap</p>', 1671775353, 'melihat1.jpg'),
(2, 'Desa Macan', 'Jl. Lorem', '<p>Mantap</p>', 1671779936, 'meluk1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desacisande`
--

CREATE TABLE `desacisande` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_tambahan`
--

CREATE TABLE `kategori_tambahan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_tambahan`
--

INSERT INTO `kategori_tambahan` (`id`, `name`) VALUES
(1, 'Rumah_Sakit'),
(2, 'SPBU'),
(3, 'Destinasi_Wisata'),
(4, 'Toko'),
(5, 'Rumah_Makan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `tentang` varchar(128) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`id`, `name`, `img`, `tentang`, `id_artikel`) VALUES
(4, 'Desa Cisande', 'character_1.jpeg', 'Desa Terbaik di dunia', 0),
(5, 'Desa Munamuna', 'belakang.jpg', 'kjskjksjs', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `name`, `img`, `deskripsi`, `id_artikel`) VALUES
(3, 'Desa Cisande', 'ditawar1.jpg', 'Mantap Bjorka', 1),
(5, 'Desa Macan', 'kehujanan3.jpg', 'mantap bjorka', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahan`
--

CREATE TABLE `tambahan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_kategori_tambahan` int(11) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_menu`
--
ALTER TABLE `akun_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_role`
--
ALTER TABLE `akun_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desacisande`
--
ALTER TABLE `desacisande`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_tambahan`
--
ALTER TABLE `kategori_tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambahan`
--
ALTER TABLE `tambahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `akun_menu`
--
ALTER TABLE `akun_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `akun_role`
--
ALTER TABLE `akun_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `desacisande`
--
ALTER TABLE `desacisande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_tambahan`
--
ALTER TABLE `kategori_tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tambahan`
--
ALTER TABLE `tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

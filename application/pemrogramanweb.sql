-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2022 pada 12.47
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemrogramanweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datadiri`
--

CREATE TABLE `tbl_datadiri` (
  `id_datadiri` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `sandi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_datadiri`
--

INSERT INTO `tbl_datadiri` (`id_datadiri`, `nama`, `no_hp`, `email`, `deskripsi`, `sandi`) VALUES
(1, 'Alwi Nopriansa', '085367332976', 'akhyalwi@gmail.com', 'Saya sedang belajar untuk menjadi seorang Web Developer untuk mencari Skill dan Bakat saya. Saya pernah mengembangkan Website Sekolah, Website Desa, hingga saat ini saya sedang merancang Iot untuk Tugas Akhir Kuliah.\r\n\r\n\r\nPada saat ini keseharian saya sedang menempuh kuliah D3 Teknik Informatika, dan diluar kampus saya olahraga seperti Lari dan Bermain Bola Volly.', '123345678.Alwi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(5) NOT NULL,
  `tahun_galeri` year(4) NOT NULL,
  `label` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `tahun_galeri`, `label`, `gambar`) VALUES
(1, 2021, 'Id Card', ''),
(2, 2021, 'GIS Politeknik ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keahlian`
--

CREATE TABLE `tbl_keahlian` (
  `id_keahlian` int(5) NOT NULL,
  `nama_skills` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keahlian`
--

INSERT INTO `tbl_keahlian` (`id_keahlian`, `nama_skills`) VALUES
(1, 'Product Desain'),
(2, 'Web Desain'),
(3, 'Animator'),
(4, 'Editor Image');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id_organisasi` int(5) NOT NULL,
  `nama_organisasi` varchar(30) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id_organisasi`, `nama_organisasi`, `jabatan`, `periode`, `deskripsi`) VALUES
(1, 'Pramuka', 'Ketua', '2014-2017', 'Nothing'),
(2, 'Osis SMK Negeri 1 Tanah Abang', 'Ketua Osis', '2019', 'Nothing'),
(3, 'HIMA TEKNIK INFORMATIKA', 'Anggota', '2021-Sekar', 'Nothing\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_datadiri`
--
ALTER TABLE `tbl_datadiri`
  ADD PRIMARY KEY (`id_datadiri`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_datadiri`
--
ALTER TABLE `tbl_datadiri`
  MODIFY `id_datadiri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  MODIFY `id_keahlian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id_organisasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

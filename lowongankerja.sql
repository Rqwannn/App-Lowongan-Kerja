-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 17.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongankerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'Halimah', 'Halimah@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id_formulir` int(11) NOT NULL,
  `kode_formulir` varchar(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pengalaman_kerja` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Kongucu','Budha','Hindu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id_formulir`, `kode_formulir`, `nama`, `email`, `ttl`, `alamat`, `pengalaman_kerja`, `umur`, `jk`, `agama`) VALUES
(6, 's10fff10aZ12IPPIafIf', 'Ahmad Yoza', 'Yamin@gmail.com', '2021-05-17', 'Jln. Banjaran Pucung', 'Belum Ada', 20, 'Laki-Laki', 'Islam'),
(9, 'kLZvPfLgv1210vf7kg8', 'Halimah', 'halimah@gmail.com', '2021-05-26', 'Banjaran Pucung', 'Pernah Kerja Alphabet', 19, 'Perempuan', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_lamaran`
--

CREATE TABLE `surat_lamaran` (
  `id` int(11) NOT NULL,
  `surat_lamaran` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `portofolio` varchar(100) NOT NULL,
  `fotokopi_ijazah` varchar(100) NOT NULL,
  `fotokopi_ktp` varchar(100) NOT NULL,
  `fotokopi_kk` varchar(100) NOT NULL,
  `pas_foto` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `skck` varchar(100) NOT NULL,
  `fotokopi_surat_pengalaman_kerja` varchar(100) NOT NULL,
  `surat_keterangan_sehat` varchar(100) NOT NULL,
  `formulir_dari_perusahaan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_lamaran`
--

INSERT INTO `surat_lamaran` (`id`, `surat_lamaran`, `cv`, `portofolio`, `fotokopi_ijazah`, `fotokopi_ktp`, `fotokopi_kk`, `pas_foto`, `sertifikat`, `skck`, `fotokopi_surat_pengalaman_kerja`, `surat_keterangan_sehat`, `formulir_dari_perusahaan`, `status`) VALUES
(4, '60a3f6ec5f30f.png', '60a39e19c796b.png', '60a39e19c8492.png', '60a39e19c8c6a.png', '60a39e19c93a3.png', '60a39e19c9c8d.png', '60a39e19ca6dd.png', '60a39e19cb306.png', '60a39e19cbaa9.png', '60a39e19cc8a1.png', '60a39e19cd555.png', '6', 1),
(7, '60ae0b221bec9.png', '60ae0b221d057.png', '60ae0b221e3cb.png', '60ae0b221f043.png', '60ae0b221fc2e.png', '60ae0b22209d3.png', '60ae0b2221caf.png', '60ae0b2222dc4.png', '60ae0b2223d9e.png', '60ae0b2224ae5.png', '60ae0b22261ad.png', '9', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indeks untuk tabel `surat_lamaran`
--
ALTER TABLE `surat_lamaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `surat_lamaran`
--
ALTER TABLE `surat_lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

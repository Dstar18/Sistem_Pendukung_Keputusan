-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Jan 2021 pada 21.31
-- Versi server: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id`, `nama`, `alamat`) VALUES
(9, 'Sekolah Tinggi Teknologi Adisutjipto', 'Jl. Amarta Blok R, Karang Janbe, Banguntapan'),
(10, 'Universitas Gadjah Mada', 'Bulaksumur, Caturtunggal'),
(11, 'Universitas Teknologi Yogyakarta', 'Jl. Ring Road Utara, Jombor Lor, Sendangadi'),
(12, 'Universitas Amikom Yogyakarta', 'Jl. Ring Road Utara, Ngringin, Condongcatur'),
(13, 'STMIK Akakom Yogyakarta', 'Jl. Janti No.143, Jaranan, Banguntapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kt` varchar(10) NOT NULL,
  `nama_kt` varchar(100) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kt`, `nama_kt`, `bobot`) VALUES
('kt01', 'Sarana cuci tangan atau hand sanitizer setiap ruangan', 0.2),
('kt02', 'Menyediakan thermogun setiap ruangan', 0.1),
('kt03', 'Menyediakan masker untuk mahasiswa', 0.1),
('kt04', 'Kebersihan dan pemetaan ruang belajar', 0.3),
('kt05', 'Terjadwal jam aktif kuliah sesuai aturan kemendikbud', 0.3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kt`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

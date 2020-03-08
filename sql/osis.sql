-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2020 pada 05.28
-- Versi server: 10.1.36-MariaDB
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
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `token`) VALUES
(1, 'SMK5PASTIBISA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_osis`
--

CREATE TABLE `data_osis` (
  `nis` int(11) NOT NULL,
  `nama_osis` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `motto` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_osis`
--

INSERT INTO `data_osis` (`nis`, `nama_osis`, `ttl`, `kelas`, `alamat`, `email`, `visi`, `misi`, `motto`, `gambar`) VALUES
(102222312, 'Muhammad Maliki', '31, Januari 2002', 'XI RPL 1', 'Jln. Anggrek', 'maliki@gmail.com', 'Tes Visi', 'Tes Misi', 'Tes Motto', ''),
(108110214, 'Agung Suslia', 'Bekasi, 31 Januari 2003', 'XI RPL 1', 'Jln. Mawar', 'ageng12@gmail.com', 'Menjadikan sekolah yang makmurs', 'Menjadikan murid murid yang berguna di masa depan', 'Unggul, Kompetitif, Karakter', ''),
(108110215, 'Fikri Dzakir', 'Bekasi, 13 April 2003', 'XI RPL 1', 'Jln. Anggrek', 'fikri12@gmail.com', 'Menjadikan sekolah yang berguna dan menjadikan panutan sekolah lain', 'Menciptakan suasana yang adem', 'Unggul, Kompetitif, Karakter', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nis` int(50) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `kelas`) VALUES
(1, 'Zamzam Saputra', 108201209, 'XI RPL 1'),
(2, 'Ahmad Miqo', 108201208, 'XI RPL 1'),
(3, 'Muhammad Raihan', 123112231, 'XI RPL 1'),
(4, 'Eka Ariya Mutiara', 181910188, 'XI RPL 1'),
(5, 'Stephanus Jowan Agung Saputra', 181910209, 'XI RPL 1'),
(6, 'Dwi Ayu Indah Lestari', 181910187, 'XI RPL 1'),
(7, 'sultan mudrika', 181999111, 'x1 rpl 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_total_osis`
--

CREATE TABLE `data_total_osis` (
  `nis_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas_siswa` varchar(100) NOT NULL,
  `nama_osis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_total_osis`
--

INSERT INTO `data_total_osis` (`nis_siswa`, `nama_siswa`, `kelas_siswa`, `nama_osis`) VALUES
(108201208, 'Ahmad Miqo', 'XI RPL 1', 'Muhammad Maliki'),
(108201209, 'Zamzam Saputra', 'XI RPL 1', 'Muhammad Maliki'),
(123112231, 'Muhammad Raihan', 'XI RPL 1', 'Fikri Dzakir'),
(181910187, 'Dwi Ayu Indah Lestari', 'XI RPL 1', 'Agung Suslia'),
(181910188, 'Eka Ariya Mutiara', 'XI RPL 1', 'Agung Suslia'),
(181910209, 'Stephanus Jowan Agung Saputra', 'XI RPL 1', 'Agung Suslia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_total_waketos`
--

CREATE TABLE `data_total_waketos` (
  `nis_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas_siswa` varchar(100) NOT NULL,
  `nama_waketos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_total_waketos`
--

INSERT INTO `data_total_waketos` (`nis_siswa`, `nama_siswa`, `kelas_siswa`, `nama_waketos`) VALUES
(108201208, 'Ahmad Miqo', 'XI RPL 1', 'Teuku Williansyah'),
(108201209, 'Zamzam Saputra', 'XI RPL 1', 'Teuku Williansyah'),
(123112231, 'Muhammad Raihan', 'XI RPL 1', 'Mawar Aprilia'),
(181910187, 'Dwi Ayu Indah Lestari', 'XI RPL 1', 'Teuku Williansyah'),
(181910188, 'Eka Ariya Mutiara', 'XI RPL 1', 'Teuku Williansyah'),
(181910209, 'Stephanus Jowan Agung Saputra', 'XI RPL 1', 'Novi Rahma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_waketos`
--

CREATE TABLE `data_waketos` (
  `nis` int(11) NOT NULL,
  `nama_waketos` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `motto` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_waketos`
--

INSERT INTO `data_waketos` (`nis`, `nama_waketos`, `ttl`, `kelas`, `alamat`, `email`, `visi`, `misi`, `motto`, `gambar`) VALUES
(102113120, 'Teuku Williansyah', 'Aceh, 21 Desember 2003', 'XI RPL 1', 'Jln. Bintang', 'wilwillove@gmail.com', 'gk punya visi misi', 'gk punya misi', 'Kepo..', ''),
(108201211, 'Novi Rahma', 'Bekasi, 13 Januari 2003', 'XI PB 2', 'Jln. Kenangan', 'novnov@gmail.com', 'Menjadikan sekolah yang unggul', 'Mensejahterakan rakyat sekolah', 'Unggul, Kompetitif, Berkaraketer', ''),
(108201212, 'Mawar Aprilia', 'Bekasi, 12 Desember 2003', 'XI Kimia 2', 'Jln. Kemangi', 'mawar12@gmail.com', 'Menjadikan dan menjalani bla bla bla..', 'Misinya adalah kepo...', 'Menjadi kepribadian yg lebih baik', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_osis`
--
ALTER TABLE `data_osis`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `data_total_osis`
--
ALTER TABLE `data_total_osis`
  ADD PRIMARY KEY (`nis_siswa`);

--
-- Indeks untuk tabel `data_total_waketos`
--
ALTER TABLE `data_total_waketos`
  ADD PRIMARY KEY (`nis_siswa`);

--
-- Indeks untuk tabel `data_waketos`
--
ALTER TABLE `data_waketos`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Sep 2020 pada 06.06
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kas_smkmp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
('adm01', 'Indra Mualana Yusuf', 'indramaulanayusuf', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bendahara`
--

CREATE TABLE IF NOT EXISTS `bendahara` (
  `id_bendahara` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bendahara`
--

INSERT INTO `bendahara` (`id_bendahara`, `nama`, `nis`, `username`, `password`, `id_kelas`) VALUES
('bdxiirpl2', 'Indra Maulana Yusuf', '0011223344', 'indramaulanayusuf', 'bdxiirpl2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE IF NOT EXISTS `kas` (
  `id_kas` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(30) NOT NULL,
  `nis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `username`, `password`, `id_kelas`) VALUES
('11223344', 'Abdul Rahman', 'abdulrahman', 'abdulrahman123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE IF NOT EXISTS `walikelas` (
  `id_walikelas` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `nama`, `username`, `password`) VALUES
('wkxiirpl2', 'Demi Damayanti Rachman', 'demidamayanti', 'wkxiirpl2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bendahara`
--
ALTER TABLE `bendahara`
 ADD PRIMARY KEY (`id_bendahara`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
 ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
 ADD PRIMARY KEY (`id_walikelas`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `bendahara` (`id_bendahara`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

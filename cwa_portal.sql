-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mar 2018 pada 07.27
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwa_portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_rutin`
--

CREATE TABLE `agenda_rutin` (
  `id_agenda` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_training`
--

CREATE TABLE `biaya_training` (
  `id_biaya` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'CW1'),
(2, 'CW2'),
(3, 'CW3'),
(4, 'CW4'),
(5, 'CW5'),
(6, 'CW6'),
(7, 'CW7'),
(8, 'CW8'),
(9, 'CW9'),
(10, 'CW10'),
(11, 'CW11'),
(12, 'CW12'),
(13, 'CW13'),
(14, 'CW14'),
(15, 'CW15'),
(16, 'CW16'),
(17, 'CW17'),
(18, 'CW18'),
(19, 'CW19'),
(20, 'CW20'),
(21, 'Office'),
(22, 'Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_nilai`
--

CREATE TABLE `kategori_nilai` (
  `id_kat` int(11) NOT NULL,
  `nama_test` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_nilai`
--

INSERT INTO `kategori_nilai` (`id_kat`, `nama_test`) VALUES
(1, 'Gelombang 1'),
(2, 'Gelombang 2'),
(3, 'Gelombang 3'),
(4, 'Gelombang 4'),
(5, 'Leader'),
(6, 'Ass. Supervisor'),
(7, 'Supervisor'),
(8, 'Admin'),
(9, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_peserta` varchar(30) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `qa_kategori`
--

CREATE TABLE `qa_kategori` (
  `id_qa` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quality_assurance`
--

CREATE TABLE `quality_assurance` (
  `id_quality` int(11) NOT NULL,
  `id_qa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jumlah_file` varchar(255) NOT NULL,
  `temuan` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'mt@cwabali.com', 'de84b07ebb72a1d458a30f0e66232cceb5edbde2', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_rutin`
--
ALTER TABLE `agenda_rutin`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `biaya_training`
--
ALTER TABLE `biaya_training`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `kategori_nilai`
--
ALTER TABLE `kategori_nilai`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `qa_kategori`
--
ALTER TABLE `qa_kategori`
  ADD PRIMARY KEY (`id_qa`);

--
-- Indexes for table `quality_assurance`
--
ALTER TABLE `quality_assurance`
  ADD PRIMARY KEY (`id_quality`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_rutin`
--
ALTER TABLE `agenda_rutin`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biaya_training`
--
ALTER TABLE `biaya_training`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kategori_nilai`
--
ALTER TABLE `kategori_nilai`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qa_kategori`
--
ALTER TABLE `qa_kategori`
  MODIFY `id_qa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quality_assurance`
--
ALTER TABLE `quality_assurance`
  MODIFY `id_quality` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

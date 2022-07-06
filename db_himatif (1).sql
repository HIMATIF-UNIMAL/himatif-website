-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himatif`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `foto_anggota` text NOT NULL,
  `jabatan_anggota` varchar(50) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `foto_barang` text NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` double NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `ndd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(255) NOT NULL,
  `konten_blog` text NOT NULL,
  `foto_blog` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `proker_divisi` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `gambar_event` text NOT NULL,
  `waktu_event` datetime NOT NULL,
  `lokasi_event` varchar(50) NOT NULL,
  `link_event` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(50) NOT NULL,
  `foto_galeri` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_himatif`
--

CREATE TABLE `tbl_himatif` (
  `foto_himatif` text NOT NULL,
  `visi_himatif` text NOT NULL,
  `misi_himatif` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `email_komentar` varchar(100) NOT NULL,
  `isi_komentar` text NOT NULL,
  `create_ip` varchar(15) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `nohp_kontak` varchar(15) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `lokasi_kontak` text NOT NULL,
  `koordinat_kontak` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` enum('Admin','Penulis','Admin Shop') NOT NULL,
  `deskripsi_level` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medsos`
--

CREATE TABLE `tbl_medsos` (
  `fb_medsos` varchar(50) NOT NULL,
  `ig_medsos` varchar(50) NOT NULL,
  `yt_medsos` varchar(50) NOT NULL,
  `tt_medsos` varchar(50) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pesan` varchar(50) NOT NULL,
  `email_pesan` varchar(100) NOT NULL,
  `subjek_pesan` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL,
  `create_ip` varchar(15) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `tgl_prestasi` datetime NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nim_user` int(9) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `nohp_user` varchar(14) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `mdb` int(11) NOT NULL,
  `mdb_name` varchar(50) NOT NULL,
  `mdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `fk_anggota_divisi` (`id_divisi`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD CONSTRAINT `fk_anggota_divisi` FOREIGN KEY (`id_divisi`) REFERENCES `tbl_divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_user_level` FOREIGN KEY (`id_level`) REFERENCES `tbl_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

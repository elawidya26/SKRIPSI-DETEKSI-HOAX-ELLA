-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 05:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deteksi_hoax`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `id_profile` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `label` varchar(50) NOT NULL,
  `visible` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id_dataset` int(10) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal_dataset` date NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `visible` varchar(1000) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq_detail`
--

CREATE TABLE `faq_detail` (
  `id_faq_detail` int(10) NOT NULL,
  `id_faq` int(10) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(10) NOT NULL,
  `id_preprocessing` int(10) NOT NULL,
  `label` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lapor_hoax`
--

CREATE TABLE `lapor_hoax` (
  `id_lapor_hoax` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `label` varchar(50) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `bukti` varchar(1000) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `preprocessing`
--

CREATE TABLE `preprocessing` (
  `id_preprocessing` int(10) NOT NULL,
  `id_dataset` int(10) NOT NULL,
  `hasil` varchar(1000) NOT NULL,
  `label` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` blob NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uji_user`
--

CREATE TABLE `uji_user` (
  `id_uji` int(10) NOT NULL,
  `ip` int(20) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggapan` varchar(1000) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `faq_detail`
--
ALTER TABLE `faq_detail`
  ADD PRIMARY KEY (`id_faq_detail`),
  ADD KEY `id_faq` (`id_faq`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD KEY `id_preprocessing` (`id_preprocessing`);

--
-- Indexes for table `lapor_hoax`
--
ALTER TABLE `lapor_hoax`
  ADD PRIMARY KEY (`id_lapor_hoax`);

--
-- Indexes for table `preprocessing`
--
ALTER TABLE `preprocessing`
  ADD PRIMARY KEY (`id_preprocessing`),
  ADD KEY `id_dataset` (`id_dataset`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `uji_user`
--
ALTER TABLE `uji_user`
  ADD PRIMARY KEY (`id_uji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id_dataset` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_detail`
--
ALTER TABLE `faq_detail`
  MODIFY `id_faq_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lapor_hoax`
--
ALTER TABLE `lapor_hoax`
  MODIFY `id_lapor_hoax` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preprocessing`
--
ALTER TABLE `preprocessing`
  MODIFY `id_preprocessing` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uji_user`
--
ALTER TABLE `uji_user`
  MODIFY `id_uji` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Constraints for table `faq_detail`
--
ALTER TABLE `faq_detail`
  ADD CONSTRAINT `faq_detail_ibfk_1` FOREIGN KEY (`id_faq`) REFERENCES `faq` (`id_faq`);

--
-- Constraints for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `klasifikasi_ibfk_1` FOREIGN KEY (`id_preprocessing`) REFERENCES `preprocessing` (`id_preprocessing`);

--
-- Constraints for table `preprocessing`
--
ALTER TABLE `preprocessing`
  ADD CONSTRAINT `preprocessing_ibfk_1` FOREIGN KEY (`id_dataset`) REFERENCES `dataset` (`id_dataset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

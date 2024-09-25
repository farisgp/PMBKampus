-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 03:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmbkampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `daya_tampung` int DEFAULT NULL,
  `syarat_lulusan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_prodi`, `daya_tampung`, `syarat_lulusan`) VALUES
(1, 'Teknik Informatika', 150, 'SMA IPA'),
(2, 'Sistem Informasi', 150, 'SMA IPA'),
(3, 'Teknik Komputer', 125, 'SMA IPA'),
(4, 'Sistem Operasi', 125, 'SMA IPA'),
(5, 'Keamanan SIber', 100, 'SMA IPA');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`) VALUES
(1, 'andi', 'admin1@gmail.com', 'admin1', '0eb4e14e3a0af58fa476', 'admin'),
(2, 'budi', 'admin2@gmail.com', 'admin2', '0eb4e14e3a0af58fa476', 'manager'),
(3, 'citra', 'admin3@gmail.com', 'admin3', '0eb4e14e3a0af58fa476', 'staff'),
(4, 'dodi', 'admin@gmail.com', 'admin', 'af7e0928fcba501d8ed0385c794e690fe151bf16', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_pendaftaran`
--

CREATE TABLE `panitia_pendaftaran` (
  `id` int NOT NULL,
  `nama_panitia` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `umur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `panitia_pendaftaran`
--

INSERT INTO `panitia_pendaftaran` (`id`, `nama_panitia`, `jenis_kelamin`, `alamat`, `umur`) VALUES
(12453, 'Desi Cahya', 'Perempuan', 'Semarang', 32),
(12523, 'Bunga Citra', 'Perempuan', 'Sukoharjo', 30),
(12663, 'Bangun Andi', 'Laki-laki', 'Boyolali', 35),
(34562, 'Sucipto Utomo', 'Laki-laki', 'Sukoharjo', 40),
(64212, 'Samsudin', 'Laki-laki', 'Salatiga', 42);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nisn` int NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `asal_sekolah` varchar(45) NOT NULL,
  `umur` int NOT NULL,
  `prodi_pilihan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `jenis_kelamin`, `alamat`, `asal_sekolah`, `umur`, `prodi_pilihan`) VALUES
(3, 'Andi', 11872378, 'Laki-laki', 'Jakarta Utara', 'Jakarta', 17, 1),
(4, 'Budi', 82717233, 'Laki-laki', 'kabupaten semarang', 'Semarang', 18, 2),
(5, 'Citra', 32647267, 'Perempuan', 'Jl. Melati Surabaya', 'Surabaya', 18, 3),
(6, 'Dedi', 62746265, 'Laki-laki', 'Banyumas', 'Purwokerto', 19, 4),
(7, 'Edi', 72846265, 'Laki-laki', 'slawi kab tegal', 'Tegal', 20, 5),
(9, 'Farah', 72637483, 'Perempuan', 'Surakarta jawa tengah', 'Surakarta', 18, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia_pendaftaran`
--
ALTER TABLE `panitia_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `prodi_pilihan` (`prodi_pilihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_prodi_jurusan` FOREIGN KEY (`prodi_pilihan`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

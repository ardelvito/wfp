-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 09:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_wfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_reservasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peserta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_file` bigint(20) NOT NULL,
  `waktu_mulai` timestamp NULL DEFAULT NULL,
  `nomor_studion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `kode_reservasi`, `nama_peserta`, `kode_file`, `waktu_mulai`, `nomor_studion`, `created_at`, `updated_at`) VALUES
(1, 'b99cRXZmes', 'HyaLTu7BIf', 6712, '2023-04-03 23:44:46', 2, NULL, NULL),
(2, 'UgAhSNBTND', 'q9iUxRpRko', 2864, '2023-04-03 23:44:46', 10, NULL, NULL),
(3, 'CpOV7IWbMC', '6kGb2mWuv3', 1475, '2023-04-03 23:44:46', 7, NULL, NULL),
(4, '80AfgGXGBF', 'ByaVRflWWZ', 6125, '2023-04-03 23:44:46', 3, NULL, NULL),
(5, 'KeRBSglQds', 'X44yWQ3eQD', 3048, '2023-04-03 23:44:46', 5, NULL, NULL),
(6, 'jUud5a7zXu', 'Qxk2t2HPQS', 8739, '2023-04-03 23:44:46', 3, NULL, NULL),
(7, '7MAkKTUsDU', 'PGBjCvdqfZ', 8746, '2023-04-03 23:44:46', 5, NULL, NULL),
(8, 'FTS0l1479j', 'yv0K7tRmWY', 2168, '2023-04-03 23:44:46', 10, NULL, NULL),
(9, 'UgHJxIXplR', 'uJ07yBGcqk', 2712, '2023-04-03 23:44:46', 2, NULL, NULL),
(10, 'mcDq5p9q40', '5thawIkFZ7', 9557, '2023-04-03 23:44:46', 8, NULL, NULL),
(11, 'sXW1TUgPlE', 'YXj5EriIJ5', 5149, '2023-04-03 23:44:46', 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reservations_kode_reservasi_unique` (`kode_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

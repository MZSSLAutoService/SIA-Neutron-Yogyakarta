-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 08:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sianeutron`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mzsusilo@gmail.com', '$2y$10$hlSRXV2tGIoIHB8E.KOYAeYWSCL6KNgH6QWT67KXHRrtHUJOUp5Ia', '2019-10-21 23:59:19'),
('mohammadsusilo99@gmail.com', '$2y$10$cyTql0X22APKUTrwmYvfXuWkuSA7chXvhrgnoxDVNz8biTAqlCh2q', '2019-10-22 00:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `sia_absensi`
--

CREATE TABLE `sia_absensi` (
  `id` int(10) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `hari` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_absensi`
--

INSERT INTO `sia_absensi` (`id`, `id_siswa`, `tgl`, `hari`, `time`, `created_at`, `updated_at`) VALUES
(2, '12345', '2019-01-12', 'Kamis', '13:00:00', '2019-10-15 21:55:02', '2019-10-16 04:55:02'),
(5, '12346', '1978-06-02', 'Sabtu', '07:26:00', '2019-10-19 03:08:15', '2019-10-19 03:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `sia_cabang`
--

CREATE TABLE `sia_cabang` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_cabang`
--

INSERT INTO `sia_cabang` (`id`, `name`, `loc`, `created_at`, `updated_at`) VALUES
(1, 'Yogyakarta-1', 'Yogyakarta', '2019-10-17 06:08:15', '0000-00-00 00:00:00'),
(2, 'Yogyakarta-2', 'Yogyakarta', '2019-10-17 07:37:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sia_event`
--

CREATE TABLE `sia_event` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `loc` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_event`
--

INSERT INTO `sia_event` (`id`, `id_cbg`, `name`, `desc`, `tgl`, `jam`, `loc`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(2, '2', 'TES', 'YK 1', '2019-10-20', '08:00:00', 'YK 2', '-7.768314340840236', '110.37738094189456', '2019-10-19 04:15:07', '2019-10-17 07:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `sia_jadwal`
--

CREATE TABLE `sia_jadwal` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `ruang` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_jadwal`
--

INSERT INTO `sia_jadwal` (`id`, `id_cbg`, `kelas`, `mapel`, `from`, `to`, `ruang`, `created_at`, `updated_at`) VALUES
(83, '1', 'IPA 3', 'MTK', '17:00:00', '20:00:00', 5, '2019-10-20 20:48:32', '2019-10-21 03:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `sia_kelas`
--

CREATE TABLE `sia_kelas` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_kelas`
--

INSERT INTO `sia_kelas` (`id`, `id_cbg`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', 'IPA 2', '2019-10-18 04:25:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sia_mapel`
--

CREATE TABLE `sia_mapel` (
  `id` int(10) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_mapel`
--

INSERT INTO `sia_mapel` (`id`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'MTK', '2019-10-14 08:54:14', '0000-00-00 00:00:00'),
(2, 'BING', '2019-10-14 08:54:26', '0000-00-00 00:00:00'),
(3, 'BIND', '2019-10-14 08:56:27', '0000-00-00 00:00:00'),
(4, 'FISIKA', '2019-10-14 08:54:59', '0000-00-00 00:00:00'),
(5, 'BIO', '2019-10-14 08:55:08', '0000-00-00 00:00:00'),
(6, 'KIM', '2019-10-14 08:55:30', '0000-00-00 00:00:00'),
(7, 'SEJARAH', '2019-10-14 08:55:41', '0000-00-00 00:00:00'),
(8, 'GEO', '2019-10-14 08:55:51', '0000-00-00 00:00:00'),
(9, 'SOS', '2019-10-14 08:56:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sia_nilai`
--

CREATE TABLE `sia_nilai` (
  `id` int(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `jenis_tes` varchar(50) DEFAULT NULL,
  `bidang` varchar(50) DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_nilai`
--

INSERT INTO `sia_nilai` (`id`, `id_siswa`, `tgl`, `jenis_tes`, `bidang`, `nilai`, `created_at`, `updated_at`) VALUES
(3, '12345', '10 August 2019', 'EVALUASI', 'BINDO', 70.5, '2019-10-19 06:47:42', '2019-10-16 08:27:04'),
(4, '12346', '22 August 2019', 'SIMULASI UN', 'B Ind', 80, '2019-10-16 19:31:59', '2019-10-17 02:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `sia_ringmat`
--

CREATE TABLE `sia_ringmat` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `id_kls` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `file` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_ringmat`
--

INSERT INTO `sia_ringmat` (`id`, `id_cbg`, `id_kls`, `name`, `desc`, `file`, `created_at`, `updated_at`) VALUES
(2, '1', '1', 'Genevieve Emerson', 'Iusto ea proident q', 'file_upload/ringmat/UU 19 Tahun 2016.pdf', '2019-10-19 00:40:47', '2019-10-19 07:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `sia_role`
--

CREATE TABLE `sia_role` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_role`
--

INSERT INTO `sia_role` (`id`, `kode`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'admin', '2019-10-20 21:59:21', '2019-10-21 04:59:21'),
(2, 'A2', 'cabang', '2019-10-20 21:59:32', '2019-10-21 04:59:32'),
(3, 'A3', 'siswa', '2019-10-20 21:59:36', '2019-10-21 04:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `sia_siswa`
--

CREATE TABLE `sia_siswa` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `id_kls` varchar(10) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `ttl` date DEFAULT NULL,
  `agama` int(5) DEFAULT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jenis_kelamin` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_siswa`
--

INSERT INTO `sia_siswa` (`id`, `id_cbg`, `id_kls`, `nis`, `password`, `name`, `ttl`, `agama`, `asal_sekolah`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '12345', '$2y$10$CXVkdYQuYf6QUhT4iD4KoOCSi.EFB8uZQTHc2yAo5ZNSniS4qaRwi', 'Susilo', '1998-02-22', 0, 'SMK N 1 KLATEN', 0, '2019-11-07 03:54:56', '2019-10-21 02:52:10'),
(2, '2', '1', '12346', '', 'Fani', '1998-07-07', 0, 'SMK N 1 KLATEN', 1, '2019-10-29 03:51:35', '2019-10-21 02:53:01'),
(3, '2', '1', '123457', '$2y$10$djX9K3y0Vbv.jsdFx3rBm.RYW1PNB1eUu6ulTxgYien/xNiVaykxG', 'Uyok', '1997-09-12', 0, 'SMK N 1 YOGYAKARTA', 0, '2019-11-07 03:55:01', '2019-10-26 04:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `sia_tugas`
--

CREATE TABLE `sia_tugas` (
  `id` int(10) NOT NULL,
  `id_cbg` varchar(10) NOT NULL,
  `id_kls` varchar(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `file` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `id_role` varchar(10) NOT NULL,
  `id_cabang` varchar(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `id_cabang`, `name`, `email`, `email_verified_at`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'A1', NULL, 'mohammad susilo', 'mohammadsusilo99@gmail.com', '2019-10-23 04:18:14', 'susilo', '$2y$10$XkH2CrP2jRdo490vJfswjuuMJXEn4LiZH072SYZE4VRsHEYq4Usb6', 'gy8AW9FNYlDYOsUfIVEoGMLJHAaCBqz772iL8iz33yIA9KzE8pwPFNaZpYkn', '2019-10-23 04:18:14', '2019-10-22 07:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `usersku`
--

CREATE TABLE `usersku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sia_absensi`
--
ALTER TABLE `sia_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_cabang`
--
ALTER TABLE `sia_cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_event`
--
ALTER TABLE `sia_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_jadwal`
--
ALTER TABLE `sia_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_kelas`
--
ALTER TABLE `sia_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_mapel`
--
ALTER TABLE `sia_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_nilai`
--
ALTER TABLE `sia_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_ringmat`
--
ALTER TABLE `sia_ringmat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sia_role`
--
ALTER TABLE `sia_role`
  ADD PRIMARY KEY (`id`,`kode`);

--
-- Indexes for table `sia_siswa`
--
ALTER TABLE `sia_siswa`
  ADD PRIMARY KEY (`id`,`nis`);

--
-- Indexes for table `sia_tugas`
--
ALTER TABLE `sia_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_verified_at` (`email_verified_at`);

--
-- Indexes for table `usersku`
--
ALTER TABLE `usersku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sia_absensi`
--
ALTER TABLE `sia_absensi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sia_cabang`
--
ALTER TABLE `sia_cabang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sia_event`
--
ALTER TABLE `sia_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sia_jadwal`
--
ALTER TABLE `sia_jadwal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `sia_kelas`
--
ALTER TABLE `sia_kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sia_mapel`
--
ALTER TABLE `sia_mapel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sia_nilai`
--
ALTER TABLE `sia_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sia_ringmat`
--
ALTER TABLE `sia_ringmat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sia_role`
--
ALTER TABLE `sia_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sia_siswa`
--
ALTER TABLE `sia_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sia_tugas`
--
ALTER TABLE `sia_tugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usersku`
--
ALTER TABLE `usersku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

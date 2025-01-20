-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xcode_asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_16_133521_create_ruangan_table', 1),
(5, '2024_12_16_133546_create_asset_table', 1),
(6, '2024_12_23_045637_create_xcode_admin_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eGBJ2ZeGDujPhRVoMi8KQ1mjYgqO7BHMOwUx5GSp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidU9tZ2xaemdQdGcwcGhkeGtSaXJJMXE4d09sMlYxeWU5Yk5VRldPayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1736398769);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xcode_admin`
--

CREATE TABLE `xcode_admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xcode_admin`
--

INSERT INTO `xcode_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin1', 'admin1@gmail.com', '$2y$12$fr.fSJHrMbM.4CR9A19ovu.lY05WQ38eJYmQt7djNus2qvFXUa1G2', NULL, '2024-12-22 22:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `xcode_asset`
--

CREATE TABLE `xcode_asset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pc` varchar(191) NOT NULL,
  `processor` varchar(191) NOT NULL,
  `ram` enum('2GB','4GB','8GB','16GB','32GB') NOT NULL,
  `vga` varchar(191) NOT NULL,
  `kapasitas_penyimpanan` varchar(191) NOT NULL,
  `tipe_penyimpanan` enum('hdd','ssd') NOT NULL,
  `monitor` varchar(191) NOT NULL,
  `status` enum('active','inActive') NOT NULL,
  `createdBy` varchar(191) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ruangan` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xcode_asset`
--

INSERT INTO `xcode_asset` (`id`, `nama_pc`, `processor`, `ram`, `vga`, `kapasitas_penyimpanan`, `tipe_penyimpanan`, `monitor`, `status`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`, `created_at`, `updated_at`, `id_ruangan`) VALUES
(1, 'PC 1', 'Intel Core i7', '4GB', 'NVIDIA GTX 1080', '1TB', 'hdd', 'Dell 24 Inch', 'active', '', '2024-12-17 14:29:51', 'admin1', '2025-01-06 02:51:36', NULL, NULL, 1),
(2, 'PC 2', 'AMD Ryzen 7', '8GB', 'NVIDIA GTX 1080', '1TB', 'ssd', 'Dell 24 Inch', 'active', '', '2024-12-17 14:32:54', 'admin', '2024-12-30 04:48:44', NULL, NULL, 2),
(3, 'PC 3', 'Intel Core i9', '16GB', 'NVIDIA GTX 1080', '2TB', 'ssd', 'Dell 24 Inch', 'active', '', '2024-12-17 14:32:54', 'admin', '2024-12-30 04:51:59', NULL, NULL, 3),
(7, 'PC 4', 'Intel Core i7', '4GB', 'NVIDIA GTX 1080', '512GB', 'hdd', 'Dell 24 Inch', 'active', '', '2024-12-17 14:39:48', 'admin', '2024-12-30 04:52:17', NULL, NULL, 4),
(8, 'PC 10', 'AMD', '8GB', 'NVIDIA', '256GB', 'hdd', 'LG', 'active', 'admin', '2024-12-18 03:58:48', 'admin', '2024-12-29 14:04:08', NULL, NULL, 1),
(17, 'PC 2C', 'Intel core i9', '8GB', 'NVIDIA', '1TB', 'hdd', 'LG', 'active', 'admin', '2024-12-30 04:05:48', 'admin', '2024-12-30 04:05:48', NULL, NULL, 1),
(18, 'PC 2D', 'Intel', '4GB', 'NVIDIA', '1TB', 'hdd', 'LG', 'active', 'admin', '2024-12-30 04:11:38', 'admin', '2024-12-30 04:11:38', NULL, NULL, 1),
(19, 'PC 2E', 'amd', '2GB', 'NVIDIA', '1TB', 'hdd', 'Dell', 'active', 'admin', '2024-12-30 04:15:31', 'admin', '2024-12-30 04:15:31', NULL, NULL, 2),
(20, 'PC 2E', 'amd', '8GB', 'NVIDIA', '512GB', 'hdd', 'LG', 'active', 'admin', '2024-12-30 04:20:56', 'admin', '2024-12-30 04:20:56', NULL, NULL, 2),
(21, 'PC 2F', 'amd', '4GB', 'NVIDIA', '1TB', 'ssd', 'Dell', 'active', 'admin', '2024-12-30 04:26:30', 'admin', '2024-12-30 04:26:30', NULL, NULL, 2),
(22, 'PC 3F', 'amd', '2GB', 'NVIDIA', '1TB', 'hdd', 'LG', 'active', 'admin', '2024-12-30 04:30:39', 'admin', '2024-12-30 04:30:39', NULL, NULL, 3),
(23, 'PC 1E', 'amd', '2GB', 'NVIDIA', '1TB', 'hdd', 'Dell', 'active', 'admin', '2024-12-30 04:34:54', 'admin', '2024-12-30 04:34:54', NULL, NULL, 1),
(24, 'PC 4a', 'amd', '4GB', 'NVIDIA', '1TB', 'hdd', 'LG', 'active', 'admin', '2024-12-30 04:38:52', 'admin', '2024-12-30 04:38:52', NULL, NULL, 4),
(25, 'sasa', 'sA', '8GB', 'as', 'SA', 'hdd', 'saA', 'active', 'admin', '2024-12-30 04:40:00', 'admin', '2024-12-30 04:40:00', NULL, NULL, 2),
(26, 'asdsd', 'dadaw', '8GB', 'adadwd', 'awdwa', 'hdd', 'dwa', 'active', 'admin', '2024-12-30 04:40:33', 'admin', '2024-12-30 04:40:33', NULL, NULL, 3),
(27, 'PC 1Z', 'amd', '4GB', 'NVIDIA', '1Tb', 'ssd', 'LG', 'active', 'admin', '2024-12-30 05:38:54', 'admin', '2024-12-30 05:38:54', NULL, NULL, 1),
(28, 'PC 001', 'amd', '4GB', 'NVIDIA', '1TB', 'ssd', 'LG', 'active', 'admin', '2025-01-06 02:35:39', 'admin', '2025-01-06 02:36:18', NULL, NULL, 1),
(29, 'PC 007', 'amd', '4GB', 'NVIDIA', '1TB', 'hdd', 'LG', 'active', 'admin1', '2025-01-06 02:51:01', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xcode_ruangan`
--

CREATE TABLE `xcode_ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruangan` varchar(191) NOT NULL,
  `status` enum('active','inActive') NOT NULL,
  `createdBy` varchar(191) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` varchar(191) NOT NULL,
  `updatedDate` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xcode_ruangan`
--

INSERT INTO `xcode_ruangan` (`id`, `nama_ruangan`, `status`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`, `created_at`, `updated_at`) VALUES
(1, 'Ruang 1', 'active', '', '2024-12-17 14:27:09', '', '2024-12-17 14:27:09', NULL, NULL),
(2, 'Ruang 2', 'active', '', '2024-12-17 14:28:10', '', '2024-12-17 14:28:10', NULL, NULL),
(3, 'Ruang 3', 'active', '', '2024-12-17 14:28:10', '', '2024-12-17 14:28:10', NULL, NULL),
(4, 'Ruang 4', 'active', '', '2024-12-17 14:28:44', '', '2024-12-17 14:28:44', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `xcode_admin`
--
ALTER TABLE `xcode_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `xcode_admin_username_unique` (`username`),
  ADD UNIQUE KEY `xcode_admin_email_unique` (`email`);

--
-- Indexes for table `xcode_asset`
--
ALTER TABLE `xcode_asset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xcode_asset_id_ruangan_foreign` (`id_ruangan`);

--
-- Indexes for table `xcode_ruangan`
--
ALTER TABLE `xcode_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xcode_admin`
--
ALTER TABLE `xcode_admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xcode_asset`
--
ALTER TABLE `xcode_asset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `xcode_ruangan`
--
ALTER TABLE `xcode_ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `xcode_asset`
--
ALTER TABLE `xcode_asset`
  ADD CONSTRAINT `xcode_asset_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `xcode_ruangan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

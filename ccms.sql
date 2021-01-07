-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 12:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccms`
--

-- --------------------------------------------------------

--
-- Table structure for table `dawati_claims`
--

CREATE TABLE `dawati_claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'contact person',
  `dclaim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL COMMENT '0=inactive, 1=active, 2=deleted',
  `user_modified` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_04_135537_create_dawati_claims_table', 2),
(5, '2021_01_05_084417_create_sex_claims_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sex_claims`
--

CREATE TABLE `sex_claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'contact person',
  `sclaim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL COMMENT '0=inactive, 1=active, 2=deleted',
  `user_modified` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sex_claims`
--

INSERT INTO `sex_claims` (`id`, `name`, `category`, `institution`, `cp`, `sclaim`, `active`, `user_modified`, `created_at`, `updated_at`) VALUES
(1, 'i;ooif', '2', 'ypuyp', 'ypoyo', '<p>op;oip</p>', 1, 1, '2021-01-05 06:54:47', '2021-01-05 06:54:47'),
(2, 'i;ooif', '2', 'ypuyp', 'ypoyo', '<p>op;oip</p>', 1, 1, '2021-01-05 06:56:55', '2021-01-05 06:56:55'),
(3, 'i;ooif', '2', 'ypuyp', 'ypoyo', '<p>op;oip</p>', 1, 1, '2021-01-05 06:58:02', '2021-01-05 06:58:02'),
(4, 'i;ooifk,', '2', 'ypuyp', 'ypoyou,lu', '<p>op;oip</p>', 1, 1, '2021-01-05 07:27:10', '2021-01-05 07:27:10'),
(5, 'Jackson Prosper', '2', 'hj', 'jh', '<p>hjmhj</p>', 1, 1, '2021-01-05 07:40:04', '2021-01-05 07:40:04'),
(6, 'Jackson Prosper', '2', 'hj', 'jh', '<p>hjmhj</p>', 1, 1, '2021-01-05 07:47:19', '2021-01-05 07:47:19'),
(7, 'Jackson Prosper', '4', 'RRBRTGBHRGH', 'RBGTRGRTGRTGR', '<p>RGBRGBRGBRGBR</p>', 1, 1, '2021-01-05 07:52:33', '2021-01-05 07:52:33'),
(8, 'Jackson Prosper', '4', 'RRBRTGBHRGH', 'RBGTRGRTGRTGR', '<p>RGBRGBRGBRGBR</p>', 1, 1, '2021-01-05 08:08:52', '2021-01-05 08:08:52'),
(9, 'tukt', '3', 'tyjtyj', 'tkt', '<p>utktuktik1`2121</p>', 1, 1, '2021-01-06 04:53:17', '2021-01-06 04:53:17'),
(10, 'tuuu', '2', 'tutut', 'tututu', '<p>rurururu</p>', 1, 1, '2021-01-06 06:01:56', '2021-01-06 06:01:56'),
(11, 'fmj', '3', 'fgmk', 'jmgj', '<p>gfmghm</p>', 1, 1, '2021-01-07 07:42:04', '2021-01-07 07:42:04'),
(12, 'Jordan', '1', 'ddd', 'ddd', '<p>dddd</p>', 1, 1, '2021-01-07 07:43:51', '2021-01-07 07:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jackson Prosper', 'softwaredeveloper03@gmail.com', NULL, '$2y$10$B5uPoVY3tjrfOQpgBtzaFeRNHu584f2tkJqWGjXsmOPN3ehAbEshG', '9kboGNvNvAUFMyWuo83AzwQSkM3kMFJWLTQBo4WjByhPmH4ogk7d2fRUQaJp', '2021-01-04 08:11:07', '2021-01-04 08:11:07'),
(2, 'Ethical Programmers', 'Ethical@gmail.com', NULL, '$2y$10$IPHkrYQsEVGDSSWU6JGKAeYj5JOACQ6eisl8u5z5y4seVpwknkM1O', NULL, '2021-01-04 08:11:23', '2021-01-04 08:11:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dawati_claims`
--
ALTER TABLE `dawati_claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `sex_claims`
--
ALTER TABLE `sex_claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dawati_claims`
--
ALTER TABLE `dawati_claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sex_claims`
--
ALTER TABLE `sex_claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

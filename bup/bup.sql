-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 06:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bup`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_items`
--

CREATE TABLE `breakfast_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfast_items`
--

INSERT INTO `breakfast_items` (`id`, `item`, `created_at`, `updated_at`) VALUES
(1, 'Porota', NULL, NULL),
(2, 'Dal', NULL, NULL),
(3, 'Puri', NULL, NULL),
(4, 'Ruti', NULL, NULL),
(5, 'Vegetables', NULL, NULL),
(6, 'Khicuri', NULL, NULL),
(7, 'Alur Dom', NULL, NULL),
(8, 'Chicken Curry', NULL, NULL),
(9, 'Begun Vaji', NULL, NULL),
(10, 'Tomato Chatni', NULL, NULL),
(11, 'Suji', NULL, NULL),
(12, 'Egg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_menus`
--

CREATE TABLE `breakfast_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfast_menus`
--

INSERT INTO `breakfast_menus` (`id`, `day_id`, `item_id`, `created_at`, `updated_at`) VALUES
(7, 2, 4, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(8, 2, 6, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(13, 4, 2, '2020-05-15 09:32:54', '2020-05-15 09:32:54'),
(14, 4, 5, '2020-05-15 09:32:54', '2020-05-15 09:32:54'),
(15, 4, 6, '2020-05-15 09:32:54', '2020-05-15 09:32:54'),
(16, 5, 3, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(17, 5, 4, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(18, 6, 3, '2020-05-15 09:33:59', '2020-05-15 09:33:59'),
(19, 6, 2, '2020-05-15 09:33:59', '2020-05-15 09:33:59'),
(22, 3, 1, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(23, 3, 2, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(24, 3, 5, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(25, 7, 4, '2020-05-19 03:50:09', '2020-05-19 03:50:09'),
(26, 7, 2, '2020-05-19 03:50:09', '2020-05-19 03:50:09'),
(28, 1, 1, '2020-05-21 08:08:21', '2020-05-21 08:08:21'),
(29, 1, 3, '2020-05-21 08:08:21', '2020-05-21 08:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_orders`
--

CREATE TABLE `breakfast_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfast_orders`
--

INSERT INTO `breakfast_orders` (`id`, `date`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-05-13', 2, 1, NULL, NULL),
(2, '2020-05-10', 1, 1, NULL, NULL),
(3, '2020-05-21', 3, 0, NULL, NULL),
(4, '2020-05-13', 5, 1, NULL, NULL),
(5, '2020-05-29', 1, 1, NULL, NULL),
(12, '2020-05-30', 1, 1, '2020-05-29 23:03:13', '2020-05-29 23:03:13'),
(13, '2020-05-30', 6, 1, '2020-05-30 09:46:13', '2020-05-30 09:46:13'),
(14, '2020-05-30', 2, 1, '2020-05-30 11:32:02', '2020-05-30 11:32:02'),
(16, '2020-05-31', 1, 1, '2020-05-31 08:05:54', '2020-05-31 08:05:54'),
(19, '2020-06-01', 3, 1, '2020-06-01 10:52:23', '2020-06-01 10:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', NULL, NULL),
(2, 'Sunday', NULL, NULL),
(3, 'Monday', NULL, NULL),
(4, 'Tuesday', NULL, NULL),
(5, 'Wednesday', NULL, NULL),
(6, 'Thursday', NULL, NULL),
(7, 'Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dinner_items`
--

CREATE TABLE `dinner_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinner_items`
--

INSERT INTO `dinner_items` (`id`, `item`, `created_at`, `updated_at`) VALUES
(1, 'Polau', NULL, NULL),
(2, 'Rice', NULL, NULL),
(3, 'Egg', NULL, NULL),
(4, 'Teheri', NULL, NULL),
(5, 'Vegetables', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dinner_menus`
--

CREATE TABLE `dinner_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinner_menus`
--

INSERT INTO `dinner_menus` (`id`, `day_id`, `item_id`, `created_at`, `updated_at`) VALUES
(5, 2, 1, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(6, 2, 3, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(11, 4, 2, '2020-05-15 09:32:54', '2020-05-15 09:32:54'),
(12, 4, 1, '2020-05-15 09:32:54', '2020-05-15 09:32:54'),
(13, 5, 2, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(14, 5, 3, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(15, 6, 3, '2020-05-15 09:33:59', '2020-05-15 09:33:59'),
(17, 3, 1, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(18, 3, 5, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(19, 7, 1, '2020-05-19 04:01:09', '2020-05-19 04:01:09'),
(20, 7, 5, '2020-05-19 04:01:09', '2020-05-19 04:01:09'),
(22, 1, 4, '2020-05-30 09:59:17', '2020-05-30 09:59:17'),
(23, 1, 3, '2020-05-30 09:59:17', '2020-05-30 09:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `dinner_orders`
--

CREATE TABLE `dinner_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinner_orders`
--

INSERT INTO `dinner_orders` (`id`, `date`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-05-29', 2, 1, NULL, NULL),
(2, '2020-05-30', 1, 1, '2020-05-29 23:27:46', '2020-05-29 23:27:46'),
(4, '2020-05-31', 1, 1, '2020-05-31 08:00:37', '2020-05-31 08:00:37'),
(6, '2020-06-01', 1, 1, '2020-06-01 08:15:14', '2020-06-01 08:15:14');

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
-- Table structure for table `lunch_items`
--

CREATE TABLE `lunch_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunch_items`
--

INSERT INTO `lunch_items` (`id`, `item`, `created_at`, `updated_at`) VALUES
(1, 'Rice', NULL, NULL),
(2, 'Beaf', NULL, NULL),
(3, 'Dal', NULL, NULL),
(4, 'Polau', NULL, NULL),
(5, 'Khicuri', NULL, NULL),
(6, 'Egg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lunch_menus`
--

CREATE TABLE `lunch_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunch_menus`
--

INSERT INTO `lunch_menus` (`id`, `day_id`, `item_id`, `created_at`, `updated_at`) VALUES
(5, 2, 3, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(6, 2, 6, '2020-05-15 09:31:19', '2020-05-15 09:31:19'),
(13, 5, 3, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(14, 5, 3, '2020-05-15 09:33:31', '2020-05-15 09:33:31'),
(15, 6, 4, '2020-05-15 09:33:59', '2020-05-15 09:33:59'),
(16, 6, 5, '2020-05-15 09:33:59', '2020-05-15 09:33:59'),
(19, 3, 1, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(20, 3, 2, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(21, 3, 3, '2020-05-18 00:44:28', '2020-05-18 00:44:28'),
(22, 7, 2, '2020-05-19 03:53:05', '2020-05-19 03:53:05'),
(24, 4, 1, '2020-05-19 12:27:14', '2020-05-19 12:27:14'),
(25, 4, 3, '2020-05-19 12:27:14', '2020-05-19 12:27:14'),
(26, 1, 2, '2020-05-21 08:08:35', '2020-05-21 08:08:35'),
(27, 1, 5, '2020-05-21 08:08:35', '2020-05-21 08:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_orders`
--

CREATE TABLE `lunch_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunch_orders`
--

INSERT INTO `lunch_orders` (`id`, `date`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-05-29', 2, 1, NULL, NULL),
(2, '2020-05-30', 1, 1, '2020-05-29 23:27:40', '2020-05-29 23:27:40'),
(3, '2020-05-30', 6, 1, '2020-05-30 09:46:47', '2020-05-30 09:46:47'),
(5, '2020-06-01', 1, 1, '2020-06-01 08:15:14', '2020-06-01 08:15:14'),
(6, '2020-06-01', 3, 1, '2020-06-01 10:52:25', '2020-06-01 10:52:25');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_07_055852_breakfast_items', 1),
(5, '2020_05_07_063533_lunch_items', 2),
(6, '2020_05_07_063552_dinner_items', 2),
(7, '2020_05_07_181013_create_breakfast_menus_table', 3),
(8, '2020_05_08_070128_create_lunch_menus_table', 4),
(9, '2020_05_08_070306_create_dinner_menus_table', 4),
(10, '2020_05_15_043428_create_days_table', 5),
(11, '2020_05_15_052318_create_breakfast_menus_table', 6),
(12, '2020_05_15_052340_create_lunch_menus_table', 6),
(13, '2020_05_15_052400_create_dinner_menus_table', 6),
(14, '2020_05_25_160255_create_breakfast_orders_table', 7),
(15, '2020_05_29_174430_create_lunch_orders_table', 8),
(16, '2020_05_29_174818_create_dinner_orders_table', 8),
(17, '2020_05_30_162352_create_users_table', 9),
(18, '2020_05_30_165814_create_users_table', 10);

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
('musaddik.habib07@gmail.com', '$2y$10$mt4GH2DSXc0wBmjw4iStCeYTbua3qb.4T1LIBRPhEFQmdQjfiLCgm', '2020-05-18 14:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `dept`, `batch`, `roll`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Munna Khandakar', 'munnashisad@gmail.com', NULL, 1, 'ICT', 'BICE 18', '18511075', 1794807577, '$2y$10$fntPdwb2YKNP.WlhMNRheeImOcV4I19ysA4MUG2v9aA6N/Cv2KP.i', 'ycSPRHTw8qG9bz30UD3M2MtXY2EXAMUf480yawgIZlK9U19TVeDFQuzdWfMy', NULL, '2020-05-30 11:01:52'),
(2, 'Afifa Marowa Anha', 'anhaiqra4772marowa@gmail.com', NULL, 0, 'ICT', 'BICE 18', '18511057', 1795609189, '$2y$10$yKjRtn9sqnn6sWIQtOuY8ezn/oTC44mrHdFfiuR0PXwMX1XsVnaBi', NULL, '2020-05-30 11:28:37', '2020-06-01 10:44:05'),
(3, 'Fouzia Kabir', 'faoziakabir@gmail.com', NULL, 0, 'ICT', 'BICE 18', '18511066', 1741300550, '$2y$10$bGKNXwM7iLI7yFhQfcOcC.p.ZKha.9muGovfuBogz/W/vVYqcvLUW', NULL, '2020-05-30 11:39:40', '2020-05-30 11:39:40'),
(4, 'Ragib Aseb', 'ragib.aseb@gmail.com', NULL, 0, 'ICT', 'BICE 18', '18511086', 1869831718, '$2y$10$l5L6/0ZnKD.soEiWvhN39eZ1qRS0Br1Td5kGJoQzL7jCpj.AQxdrG', NULL, '2020-05-30 11:53:58', '2020-06-01 10:42:47'),
(5, 'Musaddik Habib', 'musaddik.habib07@gmail.com', NULL, 1, 'ICT', 'BICE 18', '185110110', 1822989649, '$2y$10$iSv8mCe5f5qZsy/sklc35.6rPw6.JcGYWvew1oNa2kYFcShn/jLKm', NULL, '2020-05-30 11:56:30', '2020-05-30 11:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfast_items`
--
ALTER TABLE `breakfast_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast_menus`
--
ALTER TABLE `breakfast_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast_orders`
--
ALTER TABLE `breakfast_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner_items`
--
ALTER TABLE `dinner_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner_menus`
--
ALTER TABLE `dinner_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner_orders`
--
ALTER TABLE `dinner_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_items`
--
ALTER TABLE `lunch_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_menus`
--
ALTER TABLE `lunch_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_orders`
--
ALTER TABLE `lunch_orders`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakfast_items`
--
ALTER TABLE `breakfast_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `breakfast_menus`
--
ALTER TABLE `breakfast_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `breakfast_orders`
--
ALTER TABLE `breakfast_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dinner_items`
--
ALTER TABLE `dinner_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dinner_menus`
--
ALTER TABLE `dinner_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dinner_orders`
--
ALTER TABLE `dinner_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lunch_items`
--
ALTER TABLE `lunch_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lunch_menus`
--
ALTER TABLE `lunch_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lunch_orders`
--
ALTER TABLE `lunch_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

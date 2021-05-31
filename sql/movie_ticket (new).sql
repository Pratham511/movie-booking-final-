-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 05:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActorBio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ActorBirth` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `m_id`, `ActorName`, `ActorBio`, `ActorBirth`, `created_at`, `updated_at`) VALUES
(9, '6', 'tiger jacky shroff', 'dancer,gamer,blogger', '1991-09-08', NULL, '2021-05-22 13:19:42'),
(10, '7', 'deepika padkon', 'stylist', '1995-05-11', NULL, NULL),
(11, '8', 'salman', 'dancer,gamer', '1991-09-08', NULL, NULL),
(12, '6', 'ranbeer', 'stylist', '1995-05-11', NULL, NULL),
(15, '7', 'akshay', 'dancer', '1980-08-06', '2021-05-22 23:31:05', '2021-05-22 23:31:05'),
(16, '8', 'allu arjun', 'villian', '1985-09-01', '2021-05-23 00:40:57', '2021-05-23 00:40:57'),
(17, '10', 'ranbeer', 'singer', '1890-08-09', '2021-05-23 12:38:39', '2021-05-23 12:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `addmovies`
--

CREATE TABLE `addmovies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MovieName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoviePoster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MovieDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DirectorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addmovies`
--

INSERT INTO `addmovies` (`id`, `MovieName`, `MoviePoster`, `MovieDescription`, `DirectorName`, `Rate`, `created_at`, `updated_at`) VALUES
(6, 'adhm', 'adhm.jpg', 'fun movie ever', 'k l', 9, '2021-05-20 23:52:42', '2021-05-20 23:53:16'),
(7, 'Radhe', 'radhe.JPG', 'best movie of 2021', 'prabhu deva', 8, '2021-05-21 02:30:39', '2021-05-21 02:30:39'),
(8, 'reddy', 'reddy.jpg', 'fun movie of 2014', 'dhoni', 9, '2021-05-21 02:31:49', '2021-05-21 02:31:49'),
(10, 'rockstar', 'rockstar.jpg', 'fun unlimited', 'raju shah', 10, '2021-05-23 12:37:00', '2021-05-23 12:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `contact`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'krishna modi', 9825721611, 'krishna18@gmail.com', NULL, '$2y$10$biZDwN/cDaCIfk4MfrluZ.elM8e67lQksqOxxopY/AbEKw3me4wl6', NULL, '2021-05-18 12:17:55', '2021-05-18 12:17:55'),
(2, 'ansh mehta', 9998289869, 'ansh123@gmail.com', NULL, '$2y$10$96BPOub9sDsZtPZRg7q3l.Vh2XlczntZr.HrpGSpJAYZxDl8FX3Za', NULL, '2021-05-20 12:24:15', '2021-05-20 12:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `book_movie_tickets`
--

CREATE TABLE `book_movie_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TotalPerson` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `addmovie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `casters`
--

CREATE TABLE `casters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `addmovie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bholu modi', 7874696594, 'Bholu5@gmail.com', NULL, '$2y$10$flx6NFzzl0xnS9U1qREKjuP7D7fMLyAzDAbfLUs6CgbSnXyZqqz76', NULL, '2021-05-18 12:13:36', '2021-05-18 12:13:36'),
(2, 'hytang patel', 7874696594, 'hits@gmail.com', NULL, '$2y$10$o581e0mdpPpNPEkHiorsv.YEGCzRFTkPCNISrDCul0/FHtHcGUpNO', NULL, '2021-05-20 12:22:16', '2021-05-20 12:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2021_05_17_052016_create_customers_table', 1),
(32, '2021_05_17_091426_create_admins_table', 1),
(48, '2021_05_20_171448_create_addmovies_table', 2),
(49, '2021_05_20_171506_create_actors_table', 2),
(50, '2021_05_20_171515_create_casters_table', 2),
(51, '2021_05_20_171523_create_theatres_table', 2),
(52, '2021_05_20_171529_create_book_movie_tickets_table', 2),
(53, '2021_05_20_175744_add_poster_to_movie', 3),
(54, '2021_05_21_093456_add_runtime_to_thetre', 4),
(56, '2021_05_22_065923_add_actor', 5),
(57, '2021_05_22_081957_addmoviecolumn', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TheatreName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheatreCity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RunTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `addmovie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`id`, `TheatreName`, `TheatreCity`, `RunTime`, `created_at`, `updated_at`, `addmovie_id`) VALUES
(13, 'frame', 'bharuch', '9pm', NULL, NULL, 8),
(14, 'inox', 'ankleshwar', '9 pm', '2021-05-22 22:02:57', '2021-05-22 22:02:57', 7),
(15, 'fun cinema', 'bharuch', '6 pm', '2021-05-22 22:11:25', '2021-05-22 22:11:25', 8),
(16, 'ragini', 'ankleshwar', '12 pm', '2021-05-23 00:43:28', '2021-05-23 00:43:28', 6),
(17, 'ragini', 'ankleshwar', '12 pm', '2021-05-23 12:37:59', '2021-05-23 12:37:59', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmovies`
--
ALTER TABLE `addmovies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `book_movie_tickets`
--
ALTER TABLE `book_movie_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_movie_tickets_customer_id_foreign` (`customer_id`),
  ADD KEY `book_movie_tickets_addmovie_id_foreign` (`addmovie_id`);

--
-- Indexes for table `casters`
--
ALTER TABLE `casters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casters_actor_id_foreign` (`actor_id`),
  ADD KEY `casters_addmovie_id_foreign` (`addmovie_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theatres_addmovie_id_foreign` (`addmovie_id`);

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
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `addmovies`
--
ALTER TABLE `addmovies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_movie_tickets`
--
ALTER TABLE `book_movie_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `casters`
--
ALTER TABLE `casters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `theatres`
--
ALTER TABLE `theatres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_movie_tickets`
--
ALTER TABLE `book_movie_tickets`
  ADD CONSTRAINT `book_movie_tickets_addmovie_id_foreign` FOREIGN KEY (`addmovie_id`) REFERENCES `addmovies` (`id`),
  ADD CONSTRAINT `book_movie_tickets_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `casters`
--
ALTER TABLE `casters`
  ADD CONSTRAINT `casters_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `casters_addmovie_id_foreign` FOREIGN KEY (`addmovie_id`) REFERENCES `addmovies` (`id`);

--
-- Constraints for table `theatres`
--
ALTER TABLE `theatres`
  ADD CONSTRAINT `theatres_addmovie_id_foreign` FOREIGN KEY (`addmovie_id`) REFERENCES `addmovies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

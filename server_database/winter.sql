-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 11:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winter`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `added_by`, `created_at`, `updated_at`) VALUES
(50, 'dddddd', 20, '2020-12-28 08:36:00', NULL),
(51, 'ctg cox', 20, '2020-12-28 08:36:04', NULL),
(52, 'ctg coxlll', 25, '2020-12-29 07:09:19', NULL),
(53, 'Abdullah Al Noman', 25, '2020-12-29 07:46:42', NULL),
(54, 'ctg coxfffff', 25, '2020-12-29 08:10:14', NULL),
(55, 'ddddddgggggggg', 25, '2020-12-29 08:10:21', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_13_122713_create_categories_table', 2),
(5, '2020_12_23_151225_create_subcategories_table', 3);

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
('abdullahalnomanme@gmail.com', '$2y$10$vN9P1gitlPyncVKEmwga/.8EvqCnaHT6AYXdomOb49zlhSJTTQ5US', '2020-12-09 04:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(27, 51, 'fff', '2020-12-28 08:36:13', NULL),
(28, 51, 'fffccccccc', '2020-12-28 08:55:07', NULL),
(29, 51, 'fffff', '2020-12-28 08:56:05', NULL),
(30, 50, 'fffccccccc', '2020-12-28 08:56:10', NULL),
(31, 49, 'fffccccccc', '2020-12-28 09:01:37', NULL),
(32, 51, 'eeeeeeee', '2020-12-28 09:09:00', NULL),
(33, 51, 'nomanaaaa', '2020-12-28 09:09:13', NULL),
(34, 52, 'kkkkkk', '2020-12-29 07:42:37', NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Abdullah Al Noman', 'ab@aba.ab', NULL, '$2y$10$igL8WsBzwLuR4v54vqKC.OuK/GMlyJLpK7SJBvExH.xli4Znx1flq', NULL, '2020-12-13 14:18:44', '2020-12-13 14:18:44'),
(12, 'Abdullah Al Noman', 'qqq@qqq.qqq', NULL, '$2y$10$xY8TOoAbPnIBsQbbmiBfc.YzHVq3D9XIkRkLzGIqEFRyCvIo4g/B.', NULL, '2020-12-20 17:53:43', '2020-12-20 17:53:43'),
(13, 'MD ABDULL', 'aa@aa.aaa1', NULL, '$2y$10$2VGNSoOBd9vQvKLoWzziKuVSZlEwvXTfMlqn8QziEIRTFAgch/z1a', NULL, '2020-12-21 04:45:39', '2020-12-21 04:45:39'),
(14, 'coxs bazar', 'coxs@bazar.com', NULL, '$2y$10$ZBNcZBzfKp1eOGynnWEyxu6XGcuaXGmRHtob4bn1FYAjfhGy4fl0e', NULL, '2020-12-21 06:46:48', '2020-12-21 06:46:48'),
(15, 'MD ABDULLAHxxxx', 'MDABDULLAHxxxx@www.ww', NULL, '$2y$10$dmrQ11cvX4RU3Q2WAKijkumfRENTJwpGXmONlELElnNbFaH0pmFWW', NULL, '2020-12-21 09:13:38', '2020-12-21 09:13:38'),
(16, 'Abdullah Al Noman2', 'noman@noman.com2', NULL, '$2y$10$0dd3Ra7MYn9PQ0C5ESAFq.xcbEaM5tS00pu9bG2OgaKFfVDs4mMcu', 'q4XyhVIGIe2DoJg37Q7FkXCEVssQqTs5gMUJyH4rHVP7nkKrkQsUbwmtO64Y', '2020-12-21 09:33:30', '2020-12-21 09:33:30'),
(17, 'MD ABDULL', 'aa@aa.aaa12', NULL, '$2y$10$pE8vUj1q7RZp4d/tXjkHpuSzDwfiDH5tukQsft9wO/H1yCRd1rstC', NULL, '2020-12-23 07:05:14', '2020-12-23 07:05:14'),
(18, 'coxs bazar', 'aa@aa.aaaqwq', NULL, '$2y$10$aCYKa1cc13eWS/B0B5zGPuOCpC6LHIK/cBOreVQ07CiadUj/3C.f6', NULL, '2020-12-23 19:43:17', '2020-12-23 19:43:17'),
(19, 'Abdullah Al Noman', 'aa@aa.aaa333', NULL, '$2y$10$bDwHVErFQ.ac660GrjtSGevps4mWA1MGSl5fUqGGj85NR1/Q1qz7.', NULL, '2020-12-28 04:44:36', '2020-12-28 04:44:36'),
(20, 'Abdullah Al Noman', 'noman@noman.comq', NULL, '$2y$10$cVhSK67PPlVCXhui9X1ZaOsQdwmbD1smWUh..RARLK8WdjfRbKLFy', NULL, '2020-12-28 08:15:33', '2020-12-28 08:15:33'),
(21, 'Abdullah Al Noman', 'aa@aa.aaa', NULL, '$2y$10$Zh9RsspvqMV/zOppIOdk3OZueR7T3z6NwEGXDu5Mzi1p9e4jbCwO6', NULL, '2020-12-28 15:31:23', '2020-12-28 15:31:23'),
(22, 'Abdullah Al Noman', 'aa@aa.aaasss', NULL, '$2y$10$aOURtN/kQna0..Ts1/uip..w/OHNtrHNa2Y7YWa9mYgEWUuJisvJe', NULL, '2020-12-28 15:34:05', '2020-12-28 15:34:05'),
(23, 'Abdullah Al Noman', 'ami@ami.im', NULL, '$2y$10$HHSzdqogAoQ6wXon/oShdebmu/Q0it1n9ukJ3VQ1Wj0R2.Y5ezKha', NULL, '2020-12-28 16:05:22', '2020-12-28 16:05:22'),
(24, 'Abdullah Al Noman', 'aa@aa.aaaaaaaaaaa', NULL, '$2y$10$EHBx2pnSIxunojENxHFe8.34/5NYrRYnUq2f/RgVSansEwnPWv5w.', NULL, '2020-12-28 16:30:58', '2020-12-28 16:30:58'),
(25, 'Abdullah Al Noman', 'aa@aa.aaaddd', NULL, '$2y$10$Cu5nxdiLfjmLZ5d77GUHe.t1yPIMhf17EPekWJPOEm3uoxb3OwNE2', NULL, '2020-12-29 06:54:53', '2020-12-29 06:54:53'),
(26, 'Abdullah Al Noman', 'aa@aa.aaadddddddddd', NULL, '$2y$10$uuYqjE9db3cyyXOKQt3epu4SRSoAWqe1O4qEQ6XzBtWB2XNcGAEii', NULL, '2020-12-29 20:56:46', '2020-12-29 20:56:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

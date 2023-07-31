-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2023 at 09:13 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Animal', '2022-11-14 07:06:38', '2023-07-07 04:28:16'),
(14, 'Bird', '2022-11-15 08:13:38', '2023-06-21 05:28:52'),
(10, 'Fish', '2022-11-14 07:20:19', '2023-06-21 05:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Qila Didar Singh', 3, '2023-07-09 05:15:18', '2023-07-12 03:25:05'),
(2, 'Gujranwala', 3, '2023-07-10 02:27:06', '2023-07-12 03:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pakistan', '2023-07-07 05:44:33', '2023-07-07 05:44:33'),
(4, 'England', '2023-07-12 03:12:24', '2023-07-12 03:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_29_050133_create_categories_table', 1),
(6, '2022_07_29_050447_create_sub_categories_table', 1),
(7, '2022_07_29_050532_create_countries_table', 1),
(8, '2022_07_29_050606_create_states_table', 1),
(9, '2022_07_29_050648_create_streets_table', 1),
(10, '2022_07_29_050720_create_adresses_table', 1),
(11, '2022_07_29_055525_create_products_table', 1),
(12, '2022_07_29_075316_create_cities_table', 1),
(37, '2022_11_11_122300_create_cartitems_table', 21),
(15, '2022_11_14_070754_create_cart_products_table', 2),
(16, '2023_06_09_182211_create_profiles_table', 3),
(17, '2023_06_11_094628_add_to_users_table', 4),
(18, '2023_06_12_083822_add_to_users_table', 5),
(19, '2023_07_07_080708_add_to_image_table', 6),
(21, '2023_07_10_075051_add_to_product_table', 7),
(22, '2023_07_10_105306_add_city_id_to_products_table', 8),
(23, '2023_07_10_105438_add_country_id_to_products_table', 9),
(24, '2023_07_10_105526_add_state_id_to_products_table', 10),
(25, '2023_07_10_105613_add_user_id_to_products_table', 11),
(26, '2023_07_10_105638_add_cat_id_to_products_table', 11),
(27, '2023_07_10_105721_add_subcat_id_to_products_table', 11),
(28, '2023_07_10_105912_add_user_id_to_products_table', 12),
(29, '2023_07_13_094103_add_street_id_to_products_table', 13),
(30, '2023_07_17_105319_create_multi_images_table', 14),
(31, '2023_07_17_111635_create_multi_images_table', 15),
(32, '2023_07_19_183959_create_multi_images_table', 16),
(33, '2023_07_20_185041_create_multi_images_table', 17),
(34, '2023_07_20_192200_create_multi_images_table', 18),
(35, '2023_07_20_203301_create_multi_images_table', 19),
(36, '2023_07_20_204612_create_multi_images_table', 20),
(38, '2023_07_21_150125_create_products_images_table', 21),
(39, '2023_07_21_154720_create_product_images_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ali@gmail.com', '$2y$10$70V7pFNODB1E4kNz0LQyUe4bhH/jJ4ZPHHskMtR1JO96e.9jF88zG', '2023-06-21 03:45:42'),
('hasharkamran123@gmail.com', '$2y$10$GzxP3kYEOxj0RJANmGYc2.z60NgD.A9arkpUhLH2LaFWeBdYFVo.O', '2023-06-26 03:26:22'),
('hasharkamran@gmail.com', '$2y$10$rbXgeJAAJjB2f5el0GAg3u.4XU3W.kMw9X2xIkB/IUJtTqMpMZy/y', '2023-06-26 03:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `street_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=198 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `created_at`, `updated_at`, `image`, `age`, `description`, `price`, `type`, `city_id`, `country_id`, `state_id`, `cat_id`, `subcat_id`, `user_id`, `street_id`) VALUES
(195, 'Noman', '2023-07-29 10:32:17', '2023-07-29 10:32:17', '/uploads/thumbimage/1690644737.jpg', 12, 'fghjkl', 12022, 'hakk', 2, 1, 3, NULL, NULL, 17, 1),
(194, 'Noman', '2023-07-29 10:30:24', '2023-07-29 10:30:24', '/uploads/thumbimage/1690644624.jpg', 12, 'jklhkk', 3500, 'as', 2, 1, 3, NULL, NULL, NULL, 2),
(193, 'Noman', '2023-07-29 10:27:35', '2023-07-29 10:27:35', '/uploads/thumbimage/1690644455.png', 48, 'dfghjk', 1200122, 'sdaa', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(192, 'Noman', '2023-07-29 10:25:20', '2023-07-29 10:25:20', '/uploads/thumbimage/1690644320.jpg', 48, 'dfghjk', 1200122, 'sdaa', 2, 1, 3, NULL, NULL, NULL, 2),
(191, 'noman', '2023-07-29 10:24:22', '2023-07-29 10:24:22', '/uploads/thumbimage/1690644262.jpg', 48, 'dfghjk', 1200122, 'sdaa', 2, 1, 3, NULL, NULL, NULL, 1),
(190, 'Ahmad Rasheed Rasheed', '2023-07-26 07:02:06', '2023-07-26 07:02:06', '/uploads/thumbimage/1690372926.png', 12, 'dfghjkl', 110066, 'hello', 2, 1, 3, NULL, NULL, 17, 1),
(189, 'Hashar kamran Amin', '2023-07-25 04:57:38', '2023-07-25 04:57:38', '/uploads/thumbimage/1690279058.jpg', 12, 'sdfgh', 1200122, 'as', 2, 1, 3, NULL, NULL, 17, 1),
(188, 'Hashar kamran Amin', '2023-07-25 04:46:55', '2023-07-25 04:46:55', '/uploads/thumbimage/1690278415.png', 12, 'dfghjk', 1180000666, 'kasvdkj', 2, 1, 3, NULL, NULL, NULL, 1),
(196, 'hashar', '2023-07-31 02:10:08', '2023-07-31 02:10:08', '/uploads/thumbimage/1690787407.png', 12, 'dfghjkl', 12022, 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'Ahmad Rasheed Rasheed', '2023-07-25 04:43:03', '2023-07-25 04:43:03', '/uploads/thumbimage/1690278183.jpg', 12, 'dfghjkl', 12022, 'hakk', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'sir', '2023-07-31 02:30:22', '2023-07-31 02:30:22', '/uploads/thumbimage/1690788622.png', 35, 'hashar', 100096, 'Abcd', 2, 1, 3, NULL, NULL, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`) VALUES
(58, 188, 'uploads/multi_image//QdRs2pQaQvKMkygKUJP1TbBNHUnNiv4AJK8v15R4.jpg', '2023-07-25 04:46:55', '2023-07-25 04:46:55'),
(57, 187, 'uploads/multi_image//sqFtalJ9gMB8nj2bN2PRWGp1Ww1PuyYsbE3s8hk6.jpg', '2023-07-25 04:44:11', '2023-07-25 04:44:11'),
(56, 187, 'uploads/multi_image//LGwBq2C3V1GNidinyuGx7QweScDsq1VpqkaEyz9D.png', '2023-07-25 04:44:11', '2023-07-25 04:44:11'),
(55, 186, 'uploads/multi_image//UYDN5gwJjGwe1W1snDPekgUEuOY8DtpD5Q6SbgRL.jpg', '2023-07-25 04:43:04', '2023-07-25 04:43:04'),
(54, 186, 'uploads/multi_image//PQGZnNAyQwWx22bocHUYa1AuPZlnynXdz3sbwwUW.png', '2023-07-25 04:43:04', '2023-07-25 04:43:04'),
(53, 185, 'uploads/multi_image//WGuUdbJDN8akVupwSCUY13pErGrZFjpSIrpUldEc.jpg', '2023-07-25 04:05:52', '2023-07-25 04:05:52'),
(52, 185, 'uploads/multi_image//r9xLLKO6mn9iOmOf6vm1PazJ8u9DGmLi7TpDP9ex.png', '2023-07-25 04:05:52', '2023-07-25 04:05:52'),
(51, 184, 'uploads/multi_image//GYPTDKA3VCW2yrnO7f2T3ff1Q8ZgFqYBJWhTj9Bp.jpg', '2023-07-24 23:33:39', '2023-07-24 23:33:39'),
(50, 183, 'uploads/multi_image//6fCmvmtPhCIjPqfcmgyr1xE6HH4hP2UWm1vge2uw.jpg', '2023-07-24 09:05:08', '2023-07-24 09:05:08'),
(49, 182, 'uploads/multi_image//uWvQx0cz51Ntpq8OufxwTzGvpXEcxg9HtZBdLzEA.jpg', '2023-07-24 09:03:58', '2023-07-24 09:03:58'),
(48, 181, 'uploads/multi_image//V93E4iWJGcv9iitQUQTiRnd6DYVfXgzMQTVuOG1b.jpg', '2023-07-24 09:02:37', '2023-07-24 09:02:37'),
(47, 180, 'uploads/multi_image//keDVNJdelvXLIW2JdUEJ8mYLkMvAR7Dxon9htmuU.jpg', '2023-07-24 09:00:50', '2023-07-24 09:00:50'),
(46, 179, 'uploads/multi_image//NfmgR19dmgG34BcKTTirs3Bj2woK6kyCCkrN63qR.jpg', '2023-07-24 08:59:53', '2023-07-24 08:59:53'),
(45, 178, 'uploads/multi_image//GVNQOyJczc9mHXlJSvOayGbfyFGiydFjS4lGxPpb.png', '2023-07-24 08:49:36', '2023-07-24 08:49:36'),
(44, 177, 'uploads/multi_image//8qSvEOSRlN6kpo5bDp83VbKY06yDPtfKqvJiq0Dx.png', '2023-07-24 08:45:16', '2023-07-24 08:45:16'),
(43, 176, 'uploads/multi_image//vk5L3H12yZgxgb8zhDJa3NTruuMpZgxjPkpkFnpN.jpg', '2023-07-24 08:42:58', '2023-07-24 08:42:58'),
(42, 175, 'uploads/multi_image//ryZhtc0Jz6nEIk6PfOnYxXkTrcYEDILi3DVZJnaH.png', '2023-07-24 08:40:40', '2023-07-24 08:40:40'),
(41, 174, 'uploads/multi_image//gYcRiN7o6E3smJwASCbp0QWIJ9ticIae4Z3mji3B.png', '2023-07-23 13:34:08', '2023-07-23 13:34:08'),
(40, 174, 'uploads/multi_image//8Wy95pFi2VP2bfveB5ArdRU0Mk8Q23pDmevK2XPO.jpg', '2023-07-23 13:34:08', '2023-07-23 13:34:08'),
(39, 173, 'uploads/multi_image//FdzzfRPg92yQsLPdsnALn86hn63vLC3XyH284pzx.png', '2023-07-23 13:33:56', '2023-07-23 13:33:56'),
(38, 173, 'uploads/multi_image//mrKn51YTb0Lwwyh2uytMq0b2gbhsSg9uiMCSYQhY.jpg', '2023-07-23 13:33:56', '2023-07-23 13:33:56'),
(37, 172, 'uploads/multi_image//hoxP3dnVlQ3wJgBXZEM69OqBu3gXcDaUu15rxjig.png', '2023-07-23 13:32:46', '2023-07-23 13:32:46'),
(36, 172, 'uploads/multi_image//pJ5A4vcDrFDI8YuHUTGqGylMVPvbBDB20w5C8N2R.jpg', '2023-07-23 13:32:46', '2023-07-23 13:32:46'),
(35, 171, 'uploads/multi_image//wkKdIFHT7amlYFuq7U4N80JzrDCcx1ETCu16mPyP.jpg', '2023-07-23 13:30:25', '2023-07-23 13:30:25'),
(34, 171, 'uploads/multi_image//DkfpXqG9Fub2GeiOeagn0OFX7xeTgnPuNPTXMUSW.png', '2023-07-23 13:30:25', '2023-07-23 13:30:25'),
(33, 170, 'uploads/multi_image//L6dWUdGDcyPVt0Hv1EtYG66F63PwoT6fUMkyj0GW.jpg', '2023-07-23 13:29:08', '2023-07-23 13:29:08'),
(32, 170, 'uploads/multi_image//xQfnopVIdzFlMBhpLI0F2kb3KeCxFtKdlI3bEmi0.png', '2023-07-23 13:29:08', '2023-07-23 13:29:08'),
(31, 169, 'uploads/multi_image//I7bUvCf0gXwGrf0Cjm0H3yZoFJWxNyJ57ZdZ9Ccz.jpg', '2023-07-23 12:35:12', '2023-07-23 12:35:12'),
(30, 169, 'uploads/multi_image//Mcxb2D9MMOI9PckArIIiSar4esqEWwUXUZHH1nfz.png', '2023-07-23 12:35:12', '2023-07-23 12:35:12'),
(59, 188, 'uploads/multi_image//OOLrzdIXtghM9IbL6pJB56QKJogXYUSJ7PHmrMog.jpg', '2023-07-25 04:46:55', '2023-07-25 04:46:55'),
(60, 189, 'uploads/multi_image//mRS93WoB3Rdeb4lSaRkdGQs1s351vAKSCXCmM4IW.jpg', '2023-07-25 04:57:38', '2023-07-25 04:57:38'),
(61, 189, 'uploads/multi_image//WhfK77dD8L5gqDDmBa8wV1mVzsf9QJzMFuzKJOB5.jpg', '2023-07-25 04:57:38', '2023-07-25 04:57:38'),
(62, 190, 'uploads/multi_image//cJGClrGVYNYZGgu2zrENAqJu6M4H7VErzvUj4LUq.jpg', '2023-07-26 07:02:07', '2023-07-26 07:02:07'),
(63, 191, 'uploads/multi_image//m8UCDzqVXvnUMTZv26q9Sw8M74l40roneRy1rwhS.jpg', '2023-07-29 10:24:23', '2023-07-29 10:24:23'),
(64, 191, 'uploads/multi_image//3lqeoslZfTdCAMisDDxD7dvXHT46sBheR9qemf4o.jpg', '2023-07-29 10:24:23', '2023-07-29 10:24:23'),
(65, 192, 'uploads/multi_image//LvUjFnebxrKaFsZOo7q3LIeLpF0LCCbHtjlhnvd8.jpg', '2023-07-29 10:25:20', '2023-07-29 10:25:20'),
(66, 192, 'uploads/multi_image//BJHQbY7Wdko2z7hKytvP7nHBJqc9oOg04jRVooCi.jpg', '2023-07-29 10:25:20', '2023-07-29 10:25:20'),
(67, 193, 'uploads/multi_image//VmRSHtAiWPJdHZSj0LFHoclcVsr9rZYAtFWivm4o.jpg', '2023-07-29 10:27:35', '2023-07-29 10:27:35'),
(68, 193, 'uploads/multi_image//PZ74hgK0AjR9yXzro9swFZIZFCYm8d4lnQqTaJms.jpg', '2023-07-29 10:27:35', '2023-07-29 10:27:35'),
(69, 194, 'uploads/multi_image//gxhR7Xh2qFbcuCX9KLKjCpax093UGC9Iz7i0KH5M.jpg', '2023-07-29 10:30:24', '2023-07-29 10:30:24'),
(70, 194, 'uploads/multi_image//UANFRTAqmr1SQJZauvOjLOZT8xAMUVEFNw16j3Ui.jpg', '2023-07-29 10:30:24', '2023-07-29 10:30:24'),
(71, 195, 'uploads/multi_image//SNV7OxJtDmVJMPXQkx38AdV8vfkV37JVWUPiCVp0.jpg', '2023-07-29 10:32:17', '2023-07-29 10:32:17'),
(72, 195, 'uploads/multi_image//UnHNCfupdXH8r0nwFbWGjVYJVVw8fVcFyPehl3za.jpg', '2023-07-29 10:32:17', '2023-07-29 10:32:17'),
(73, 196, 'uploads/multi_image//pkvCNYz1ghFHIQmJ4QH1nYZL87Cbft7rvqHogqOu.jpg', '2023-07-31 02:10:13', '2023-07-31 02:10:13'),
(74, 197, 'uploads/multi_image//DLX1ZSVXAgnBktAWOfms3UzbRzIOBJXnDyi2o0PP.jpg', '2023-07-31 02:30:22', '2023-07-31 02:30:22'),
(75, 197, 'uploads/multi_image//cA5lS8HuvO8uLD5KjU1FGvyfo18Ze3PSFMIlZQ6d.jpg', '2023-07-31 02:30:22', '2023-07-31 02:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(4, 'Sindh', 1, '2023-07-12 03:21:58', '2023-07-12 03:23:14'),
(3, 'Punjab', 1, '2023-07-11 12:53:34', '2023-07-11 12:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `streets`
--

DROP TABLE IF EXISTS `streets`;
CREATE TABLE IF NOT EXISTS `streets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `streets`
--

INSERT INTO `streets` (`id`, `name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'UBL bank', 2, '2022-11-13 08:58:06', '2023-07-12 05:55:10'),
(2, 'Allied Bank', 2, '2023-07-12 05:55:34', '2023-07-12 05:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 'aaa', 14, '2023-07-25 06:39:14', '2023-07-25 06:39:14'),
(36, 'aaa', 10, '2023-07-25 06:41:53', '2023-07-25 06:41:53'),
(33, 'aaa', 14, '2023-07-25 06:26:25', '2023-07-25 06:26:25'),
(34, 'aaa', 14, '2023-07-25 06:32:14', '2023-07-25 06:32:14'),
(32, 'Hashar kamran Amin', 3, '2023-07-25 06:25:22', '2023-07-25 06:25:22'),
(31, 'daim', 10, '2023-07-25 06:25:01', '2023-07-25 06:25:01'),
(30, 'Some Name', 3, '2023-07-25 06:24:26', '2023-07-25 06:24:26'),
(29, 'hashar', 14, '2023-07-25 06:21:58', '2023-07-25 06:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`, `gender`, `phone`, `address`, `last_name`, `date_of_birth`) VALUES
(15, 'Ahmad Rasheed', 'ahmadrasheed8455@gmail.com', NULL, '$2y$10$zqMLskmCClPCuSN9KGiqF.TyATENv6FbuaUkp4CHADeQM7ziJ09O2', NULL, '2023-06-17 04:27:58', '2023-06-17 04:32:57', NULL, NULL, '03051632525', 'Mohallah Muhammad Pora Qila Didar Singh', 'Rasheed', '2023-06-23'),
(12, 'daim', 'daim@gmail.com', NULL, '$2y$10$0Pb8jA.7MFf7MJH5gCTu/ekyklt.ETY7e6ydFiv/49IUel3TY.UNq', NULL, '2023-06-13 02:08:25', '2023-06-13 02:08:25', NULL, 'male', '0310 4078651', 'Q.D.S', 'ali', '2023-03-22'),
(11, 'Hashar', 'hasharkamran@gmail.com', NULL, '$2y$10$vhZggqsgexWrb.xmoyATk./FRXQFRcJJB.4.svDqp0kFTqTLFhxg2', NULL, '2023-06-13 01:53:37', '2023-06-13 04:56:11', NULL, 'male', '03104086137', 'Mohallah Muhammad Pora Qila Didar Singh', 'Amin', '2023-06-20'),
(18, 'Khuzaima', 'khuzaima@gmail.com', NULL, '$2y$10$aBikrDgfkdNt.b0kX91U7.XITZOBYO6vhZsl.oIQr44yVfu/f563S', NULL, '2023-07-02 03:28:07', '2023-07-02 03:38:44', '1688286785.png', NULL, '03104086137', 'Mohallah Muhammad Pora Qila Didar Singh', 'Amin', NULL),
(17, 'Hashar kamran Amin', 'hasharkamran123@gmail.com', NULL, '$2y$10$JaC1RF9X7m/VZ7MZxFsvMekg.mX4rMkbtiS.4PN6OaBZESOw/g0ge', NULL, '2023-06-26 03:25:03', '2023-07-12 03:14:31', '1688322109.png', NULL, NULL, NULL, NULL, NULL),
(20, 'jameel', 'jameelheider@gmail.com', NULL, '$2y$10$SO3qf.THCjmyfWLcnOb14.Yb4fTuOKIA2DKVzaAfNqkkeaKQY.Ncm', NULL, '2023-07-31 04:11:30', '2023-07-31 04:11:30', NULL, 'male', '03051632525', 'Mohallah Muhammad Pora Qila Didar Singh', 'haider', '2023-07-13'),
(19, 'Hashar kamran', 'daimali12@gmail.com', NULL, '$2y$10$EYRk7Tffb0G5YBqSyOUhsO29b7DbnVcUhZVIq2kK2grNmumjopok.', NULL, '2023-07-02 03:39:40', '2023-07-02 04:49:15', '1688291355.jpg', NULL, '03104086137', 'Mohallah Muhammad Pora Qila Didar Singh', 'Amin', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

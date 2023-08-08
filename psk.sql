-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 07:53 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(39, '2023_07_21_154720_create_product_images_table', 22),
(40, '2023_07_31_101159_add_url_to_products_table', 23),
(41, '2023_08_08_154201_add_image_to_sub_categories_table', 24);

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
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `created_at`, `updated_at`, `image`, `age`, `description`, `price`, `type`, `city_id`, `country_id`, `state_id`, `cat_id`, `subcat_id`, `user_id`, `street_id`, `url`) VALUES
(240, 'Hen', '2023-08-08 12:45:19', '2023-08-08 12:45:19', '/uploads/thumbimage/1691516719.png', 12, 'hashar', 12022, 'xcz', 2, 1, 3, 3, 51, 24, 2, NULL),
(241, 'Some Name', '2023-08-08 13:01:11', '2023-08-08 13:01:11', '/uploads/thumbimage/1691517671.png', 12, 'hashar', 12022, 'sdaa', 2, 1, 3, 10, 50, 24, 2, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`) VALUES
(152, 241, 'uploads/multi_image//ouAw3nS00MrlpZ5MrAZjrJ9ocHRldFGY6grBKLX7.jpg', '2023-08-08 13:01:11', '2023-08-08 13:01:11'),
(151, 241, 'uploads/multi_image//c6BeJCLO703zbF3Aimh0PUYG5vLA1Ugmw1xcHsga.jpg', '2023-08-08 13:01:11', '2023-08-08 13:01:11'),
(150, 240, 'uploads/multi_image//aN3GT2LUtVO7MTSpbrXlXbQaMmE0v8aSroWN5SvH.jpg', '2023-08-08 12:45:19', '2023-08-08 12:45:19'),
(149, 240, 'uploads/multi_image//7124X2TY9GmckQTP7rFw8Sks2FQr4BEfLC50wwqa.jpg', '2023-08-08 12:45:19', '2023-08-08 12:45:19'),
(148, 239, 'uploads/multi_image//NjHZvmzg2TAHUatllIkCuCDY6c02fYMvnvMuLlX0.jpg', '2023-08-08 04:55:33', '2023-08-08 04:55:33'),
(147, 239, 'uploads/multi_image//5HpAU2M4K3MGbcpnKyMBUWqoKqUMcupeBnIGloY1.jpg', '2023-08-08 04:55:33', '2023-08-08 04:55:33'),
(146, 238, 'uploads/multi_image//Lr9coiYZcK0l3puvEm0uYM4dO5PW858ud10GdBcl.jpg', '2023-08-07 05:44:56', '2023-08-07 05:44:56'),
(145, 238, 'uploads/multi_image//73kRioYNIxc9k4m50nd3OzDS4I3nbaHF0ftnxurN.png', '2023-08-07 05:44:56', '2023-08-07 05:44:56'),
(144, 237, 'uploads/multi_image//n0RaZ6ptDX4Te2cSeUD5zdBR26XsOmxRQg0Lyzyg.jpg', '2023-08-07 05:42:29', '2023-08-07 05:42:29'),
(143, 237, 'uploads/multi_image//meygV5KicQdWJHT9Yk2jZSohKnCzMz251M00uzMU.png', '2023-08-07 05:42:29', '2023-08-07 05:42:29'),
(142, 236, 'uploads/multi_image//heCbZxfTCLyqjA4phUwPDtc5rF5b0z0hE2TSWZod.jpg', '2023-08-07 05:07:17', '2023-08-07 05:07:17'),
(141, 236, 'uploads/multi_image//ZpzvijobNz0GXrkT2HoNBagPW0OAJmsx22YGMkam.jpg', '2023-08-07 05:07:17', '2023-08-07 05:07:17'),
(140, 235, 'uploads/multi_image//XTOHB9zAFtUzIp7nlHOh9ygeRD1Eo4IWS4aZ6xkI.jpg', '2023-08-05 12:37:02', '2023-08-05 12:37:02'),
(139, 235, 'uploads/multi_image//nHEzYAn47O7EPUkOhV9pyzRaEvB2cRrmRUVn2QsZ.jpg', '2023-08-05 12:37:02', '2023-08-05 12:37:02');

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
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`, `image`) VALUES
(74, 'Sparrow', 14, '2023-08-08 14:44:54', '2023-08-08 14:44:54', '/uploads/subcategory/bcba1521598b87373f02cdec7178bde525a71760.jpg'),
(73, 'parrot', 14, '2023-08-08 14:44:19', '2023-08-08 14:44:19', '/uploads/subcategory/02392134ef20438c8555124a21a8a96a59820977.jpeg'),
(72, 'Lion', 3, '2023-08-08 14:43:36', '2023-08-08 14:43:36', '/uploads/subcategory/f0a4955f79773b6d67c497789e63292b42c0f944.jpeg'),
(71, 'Goat', 3, '2023-08-08 14:42:56', '2023-08-08 14:42:56', '/uploads/subcategory/3c0d851fb74c5659c045752a64979e1c7b8f67fa.jpg'),
(70, 'Fish', 10, '2023-08-08 14:42:15', '2023-08-08 14:42:15', '/uploads/subcategory/c1a3caac4e37067770180e983dae0b9491d4abd7.jpeg'),
(69, 'Dog', 3, '2023-08-08 14:41:35', '2023-08-08 14:41:35', '/uploads/subcategory/6779bd933d7819b6ec983f252166fc23838f67dc.jpeg'),
(68, 'Cat', 3, '2023-08-08 14:40:59', '2023-08-08 14:40:59', '/uploads/subcategory/aac8d9e811685d55b7c5b0cadcdc83524af829f6.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`, `gender`, `phone`, `address`, `last_name`, `date_of_birth`) VALUES
(26, 'jameel', 'jameelhaider@gmail.com', NULL, '$2y$10$x/bZjUcxH8O8X/CQsyiDYu6JaFj1S2rjKceJ7JR.Q5wRX0R.Armmu', NULL, '2023-08-08 03:24:32', '2023-08-08 03:24:32', NULL, 'male', '03051632525', 'Mohallah Muhammad Pora Qila Didar Singh', 'haider', '2023-08-24'),
(24, 'Hashar', 'hasharkamran123@gmail.com', NULL, '$2y$10$4PB2OLOPt/xsgF3YzGHHWefVXJZLdh8ISqpSX5pRUyZ2RKokHMS2K', NULL, '2023-08-05 12:22:08', '2023-08-05 12:22:49', '1691256169.jpeg', NULL, NULL, NULL, 'Amin', NULL),
(25, 'Diam', 'daim9898@gmail.com', NULL, '$2y$10$hJ/GTFW2KIT1gjYZGribre0DErWOrMc3SfWQDbeYNGd8wk1oBo8oK', NULL, '2023-08-07 07:11:57', '2023-08-07 07:52:07', '1691412727.jpeg', NULL, NULL, NULL, 'Mehar', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

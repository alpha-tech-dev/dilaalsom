-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2020 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dllsom`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id_advert` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `free` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condetion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `date_posted` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_picture` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_id` int(30) NOT NULL,
  `id_category` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `ad_type` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_center` int(11) DEFAULT 1,
  `contact_byphone` int(11) DEFAULT 1,
  `ad_views` int(11) DEFAULT 0,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `picture1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id_advert`, `title`, `description`, `price`, `free`, `deal`, `condetion`, `transection`, `owner`, `status`, `date_posted`, `updated_at`, `deleted_at`, `district`, `main_picture`, `last_id`, `id_category`, `id_user`, `ad_type`, `message_center`, `contact_byphone`, `ad_views`, `county`, `picture1`, `picture2`, `picture3`, `picture4`) VALUES
(74, 'Test title', ' SAAAA', '1200.00', NULL, NULL, NULL, NULL, NULL, 'approved', '2020-08-07 11:56:35', NULL, NULL, '1', 'ads-1596801395.png', 1588327225, '1', 20, 'S', 1, 1, 31, '7', 'ads-1596801395.jpeg', 'ads-1596801395.png', NULL, NULL),
(75, 'Samsung  S9', ' Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9Samsung  S9', '12000.00', NULL, NULL, NULL, NULL, NULL, 'approved', '2020-08-08 20:24:38', NULL, NULL, '2', 'majeed-1596918278.jpeg', 868266650, '1', 8, 'S', 1, 1, 25, '6', 'ads-1596918278.png', 'majeed-1596918278.jpeg', NULL, NULL),
(76, 'd`', ' echo $queryupd1;echo $queryupd1;echo $queryupd1;', '2.00', NULL, NULL, NULL, NULL, NULL, 'pending', '2020-08-08 20:36:29', NULL, NULL, '1', 'ads-1596918989.jpeg', 2113824045, '1', 8, 'S', 1, 1, 0, '2', 'ads-1596918989.jpeg', NULL, NULL, NULL),
(77, 'eeeeeee', ' dddddddd', '1111111.00', NULL, NULL, NULL, NULL, NULL, 'pending', '2020-08-08 22:13:59', NULL, NULL, '1', 'adss-1596924839.jpeg', 1334482745, '1', 8, 'S', 1, 1, 0, '7', 'adss-1596924839.jpeg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_category`
--

CREATE TABLE `advertisement_category` (
  `advertisement_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisement_category`
--

INSERT INTO `advertisement_category` (`advertisement_id`, `category_id`) VALUES
(37, 2),
(38, 2);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_location`
--

CREATE TABLE `advertisement_location` (
  `advertisement_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(1, 'PC'),
(2, 'Laptops'),
(3, 'Smartphones'),
(4, 'Cars'),
(5, 'Kids toys'),
(6, 'Instruments'),
(7, 'Books'),
(8, 'Motorbikes');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id_county` int(11) UNSIGNED NOT NULL,
  `county` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id_county`, `county`) VALUES
(1, 'Dublin'),
(2, 'Galway'),
(3, 'Cork'),
(4, 'Drogheda'),
(5, 'Kilkenny'),
(6, 'Limerick'),
(7, 'Waterford');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `county_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `county_id`) VALUES
(1, 'North Mogadishu', NULL, NULL, NULL, 7),
(2, 'District waterfood1', NULL, NULL, NULL, 7),
(3, 'Distric1', NULL, NULL, NULL, 1),
(4, 'Distric1', NULL, NULL, NULL, 1),
(5, 'Distric1a', NULL, NULL, NULL, 1),
(6, 'Distric1', NULL, NULL, NULL, 1),
(7, 'Distric3', NULL, NULL, NULL, 1),
(8, 'Distric5', NULL, NULL, NULL, 1),
(9, 'Distric5', NULL, NULL, NULL, 1),
(10, 'Distric6', NULL, NULL, NULL, 1),
(11, 'Distric6', NULL, NULL, NULL, 1),
(12, 'Distric7', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_09_28_000000_create_permissions_table', 1),
(8, '2019_09_28_000001_create_roles_table', 1),
(9, '2019_09_28_000002_create_users_table', 1),
(10, '2019_09_28_000003_create_permission_role_pivot_table', 1),
(11, '2019_09_28_000004_create_role_user_pivot_table', 1),
(12, '2020_07_07_180631_create_advertisements_table', 1),
(13, '2020_07_07_180711_create_categories_table', 1),
(14, '2020_07_07_180806_create_locations_table', 1),
(15, '2020_07_07_180916_create_advertisement_category_pivot_table', 1),
(16, '2020_07_07_180956_create_advertisement_location_pivot_table', 1),
(17, '2020_07_09_080802_create_media_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'permission_create', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(2, 'permission_edit', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(3, 'permission_show', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(4, 'permission_delete', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(5, 'permission_access', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(6, 'role_create', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(7, 'role_edit', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(8, 'role_show', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(9, 'role_delete', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(10, 'role_access', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(11, 'user_management_access', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(12, 'user_create', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(13, 'user_edit', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(14, 'user_show', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(15, 'user_delete', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(16, 'user_access', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(17, 'advertisement_create', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(18, 'advertisement_edit', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(19, 'advertisement_show', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(20, 'advertisement_delete', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(21, 'advertisement_access', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(22, 'category_create', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(23, 'category_edit', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(24, 'category_show', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(25, 'category_delete', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(26, 'category_access', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(27, 'location_create', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(28, 'location_edit', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(29, 'location_show', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(30, 'location_delete', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(31, 'location_access', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL),
(32, 'profile_password_edit', '2020-07-28 16:22:15', '2020-07-28 16:22:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL),
(2, 'User', '2019-09-28 12:22:15', '2019-09-28 12:22:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `firstname`, `lastname`, `phone`, `profile_pic`, `county`, `id_county`) VALUES
(8, 'a@gmail.com', NULL, 'a@gmail.com', NULL, '2020-08-07 11:01:30', NULL, NULL, 'FN', 'LN', '0997173749', 'img/users/202008082203358.png', NULL, '4'),
(20, 'ali@gmail.com', NULL, 'ali@gmail.com', NULL, '2020-08-07 12:17:08', NULL, NULL, 'ALi', 'bak', '129991000', NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id_advert`);

--
-- Indexes for table `advertisement_category`
--
ALTER TABLE `advertisement_category`
  ADD KEY `advertisement_id_fk_1752873` (`advertisement_id`),
  ADD KEY `category_id_fk_1752873` (`category_id`);

--
-- Indexes for table `advertisement_location`
--
ALTER TABLE `advertisement_location`
  ADD KEY `advertisement_id_fk_1753115` (`advertisement_id`),
  ADD KEY `location_id_fk_1753115` (`location_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id_county`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6874` (`role_id`),
  ADD KEY `permission_id_fk_6874` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id_advert` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id_county` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 06:07 PM
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
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Jani', 'Jln Bali', NULL, NULL),
(2, 'Ode', 'Jln Aja', NULL, NULL),
(3, 'Sandi', 'Jln Purwajadi no 32', '2023-06-04 04:49:06', '2023-06-04 04:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`, `description`) VALUES
(1, 'T-shirts', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(2, 'Trousers', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(3, 'Tops', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(4, 'Bottoms', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(5, 'Socks', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(6, 'Cardigans', '2023-03-20 21:37:16', '2023-03-20 21:37:16', NULL),
(7, 'Bandana', '2023-05-30 00:01:22', '2023-05-30 00:01:22', NULL),
(8, 'Celana Pendek', '2023-05-30 00:05:48', '2023-05-30 00:05:48', NULL),
(9, 'Kaos Lengan Panjang', '2023-05-30 00:16:59', '2023-05-30 00:16:59', NULL),
(10, 'Flanel', '2023-05-30 00:29:14', '2023-05-30 00:29:14', NULL),
(11, 'Celana Jeans', '2023-05-30 00:57:08', '2023-05-30 00:57:08', NULL),
(15, 'Sepatu Lari', '2023-06-04 06:39:41', '2023-06-04 06:39:41', 'Sepatu khusus untuk lari, ringan dan nyaman'),
(16, 'Baju Olahraga', '2023-06-04 09:07:09', '2023-06-04 09:07:09', 'Baju olahraga, bahan mudah menyerap keringat');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_13_135540_create_products_table', 1),
(6, '2023_03_13_140215_create_categories_table', 1),
(7, '2023_03_13_141327_add_categoryid_column', 1),
(8, '2023_03_13_154124_add_production_price_column', 1),
(9, '2023_03_16_195858_create_suppliers_table', 1),
(10, '2023_03_16_200300_add_supplierid_column', 1),
(11, '2023_03_20_155846_add_image_column', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_stok` int(11) NOT NULL DEFAULT 0,
  `harga_jual` double(8,2) NOT NULL,
  `produk_ditambahkan` timestamp NOT NULL DEFAULT current_timestamp(),
  `produk_diubah` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `harga_produksi` bigint(20) NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `jumlah_stok`, `harga_jual`, `produk_ditambahkan`, `produk_diubah`, `created_at`, `updated_at`, `category_id`, `harga_produksi`, `supplier_id`, `image`) VALUES
(1, '7YmQAXMd2o', 5, 32358.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 1, 4288, 1, '6'),
(2, '1We8VWI4Gn', 5, 18570.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 1, 8855, 4, '2'),
(3, 'Cw1mZjP1a5', 17, 21653.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 4, 7184, 3, '4'),
(4, 'gkg0MNPU9q', 19, 35308.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 2, 5904, 3, '1'),
(5, 'EqwgWRU23l', 2, 47250.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 6642, 3, '3'),
(6, 'xW9fYcqzxk', 19, 47284.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 8465, 1, '6'),
(7, '0Ckwv0vkwv', 19, 38410.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 7406, 5, '6'),
(8, '4FQQhqIEZv', 16, 37496.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 5208, 2, '2'),
(9, 'FdXonhAro5', 13, 23825.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 5030, 2, '5'),
(10, 'GOCx5BvGje', 4, 27390.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 9593, 1, '5'),
(11, 'T1tYCK8CEd', 13, 45484.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 1208, 6, '2'),
(12, '1XKvC23xP9', 9, 33270.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 2759, 3, '1'),
(13, 'C8YKVc5YHc', 11, 17070.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 5712, 6, '2'),
(14, 'F4Sv1wYDLr', 3, 18893.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 4, 5468, 2, '6'),
(15, '5OJ1T5kk6u', 2, 49177.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 1802, 4, '5'),
(16, 'kunxa7ILIu', 18, 19958.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 1, 2860, 1, '3'),
(17, 'KS6c6e5hls', 5, 18825.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 4, 1500, 5, '6'),
(18, 'MmI3PJ56qx', 13, 17666.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 7768, 1, '1'),
(19, 'nsBja58Xx0', 18, 47326.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 4, 8650, 4, '4'),
(20, 'pwfM2OIfNI', 12, 44615.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 6, 3589, 3, '2'),
(21, 'oAzvZ5uYp6', 11, 23779.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 2, 5475, 3, '6'),
(22, 'ex1Mza8on7', 4, 20285.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 5, 7156, 3, '2'),
(23, '5C9rDiOj1L', 15, 18413.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 6, 7158, 5, '5'),
(24, 'GmxRSPlovO', 4, 25618.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 2, 8369, 3, '6'),
(25, 'UZN9BlXD93', 1, 23278.00, '2023-03-21 04:37:16', '2023-03-21 04:37:16', '2023-03-28 07:25:36', '2023-03-28 07:25:36', 3, 8378, 5, '1'),
(26, 'Celana Jeans Uniqlo', 33, 230000.00, '2023-06-04 06:34:39', '2023-06-04 06:34:39', '2023-06-04 06:34:39', '2023-06-04 06:34:39', 11, 100000, 1, '5'),
(27, 'Kemeja Kotak Merah', 25, 100000.00, '2023-06-04 06:36:03', '2023-06-04 06:36:03', '2023-06-04 06:36:03', '2023-06-04 06:36:03', 10, 40000, 6, '1'),
(28, 'Celana Casual', 41, 33000.00, '2023-06-04 09:05:03', '2023-06-04 09:05:03', '2023-06-04 09:05:03', '2023-06-04 09:05:03', 8, 10000, 6, '5');

-- --------------------------------------------------------

--
-- Table structure for table `product_transaction`
--

CREATE TABLE `product_transaction` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_transaction`
--

INSERT INTO `product_transaction` (`product_id`, `transaction_id`, `quantity`, `price`) VALUES
(2, 2, 10, 9000),
(4, 4, 10, 50000),
(5, 5, 10, 2100),
(6, 6, 11, 14000),
(7, 1, 10, 80000),
(7, 7, 10, 12000),
(9, 9, 10, 310000),
(10, 10, 15, 12000),
(11, 11, 10, 12000),
(12, 12, 15, 21000);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, '2AhCC', 'hSoQE5hbJcIofiR', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(2, '57Bjm', '896rBiSRhmxX3zp', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(3, 'erpHs', 'iR9tthBbBD4VuDb', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(4, 'BonhQ', 't7SzF55AstUmH1I', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(5, '7pgSR', 'kH03Pu1Kb3lpBbW', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(6, 'xwm7E', 'JBri6RvdOIRfDyM', '2023-03-28 07:25:09', '2023-03-28 07:25:09'),
(7, '10xBm', '9isCHtHRTuoqoLJ', '2023-03-28 07:25:09', '2023-03-28 07:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `buyer_id`, `user_id`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-05-27 11:25:12', NULL, NULL),
(2, 2, 2, '2023-05-27 11:25:12', NULL, NULL),
(3, 1, 1, '2023-06-04 14:45:17', '2023-06-04 07:45:17', '2023-06-04 07:45:17'),
(4, 3, 3, '2023-06-04 15:19:22', '2023-06-04 08:19:22', '2023-06-04 08:19:22'),
(5, 1, 3, '2023-06-04 15:26:03', '2023-06-04 08:26:03', '2023-06-04 08:26:03'),
(6, 2, 1, '2023-06-04 15:29:09', '2023-06-04 08:29:09', '2023-06-04 08:29:09'),
(7, 1, 1, '2023-06-04 15:34:56', '2023-06-04 08:34:56', '2023-06-04 08:34:56'),
(8, 2, 1, '2023-06-04 15:36:10', '2023-06-04 08:36:10', '2023-06-04 08:36:10'),
(9, 2, 3, '2023-06-04 15:37:49', '2023-06-04 08:37:49', '2023-06-04 08:37:49'),
(10, 3, 3, '2023-06-04 15:47:10', '2023-06-04 08:47:10', '2023-06-04 08:47:10'),
(11, 1, 3, '2023-06-04 15:47:36', '2023-06-04 08:47:36', '2023-06-04 08:47:36'),
(12, 3, 1, '2023-06-04 15:48:52', '2023-06-04 08:48:52', '2023-06-04 08:48:52');

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
(1, 'Alonso', '1KhEsIt2wX@gmail.com', NULL, '$2y$10$VWKHxCr.WTgZ0E33Hgk...VnIZRbeNJq5Gx47jiOopbDaWY72fAAS', NULL, NULL, NULL),
(2, 'Pereira', 'FPpHRoypIJ@gmail.com', NULL, '$2y$10$nw7VLYv1oSicOWHFwRgQoOrfQHbTfR4.BaF8lM4Ye20zAiMWvNjJi', NULL, NULL, NULL),
(3, 'Mustafi', 'nxJd3e1YCj@gmail.com', NULL, '$2y$10$77oEmqbtKArYQc2bCOrSV.8XUXaUQqJKtrswAn3CiYvhge1WDlI2y', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `product_transaction`
--
ALTER TABLE `product_transaction`
  ADD PRIMARY KEY (`product_id`,`transaction_id`),
  ADD KEY ` product_transaction_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_buyer_id_foreign` (`buyer_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `product_transaction`
--
ALTER TABLE `product_transaction`
  ADD CONSTRAINT `product_transaction_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_transaction_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

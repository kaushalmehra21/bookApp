-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'IIM', 'IIM', NULL, '2018-02-16 12:11:59', '2018-02-16 12:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `created_at`) VALUES
(1, 'Hindi', '2018-02-16 12:12:13');

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2017_07_10_085519_create_categories_table', 1),
(56, '2018_01_28_030430_create_sliders_table', 1),
(57, '2018_01_30_094205_create_products_table', 1),
(58, '2018_01_30_111051_create_taxes_table', 1),
(59, '2018_01_30_111152_create_languages_table', 1),
(60, '2018_01_30_111309_create_product_ratings_table', 1),
(61, '2018_01_30_111332_create_product_images_table', 1),
(62, '2018_02_07_100621_create_product_categories_table', 1),
(63, '2018_02_12_155717_create_tags_table', 1),
(64, '2018_02_12_161714_create_product_tags_table', 1),
(65, '2018_02_15_165249_create_site_options_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `SKU` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double(8,2) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `avg_rate` int(11) NOT NULL DEFAULT '0',
  `tax_id` int(11) NOT NULL DEFAULT '0' COMMENT '0=no tax, +ve=tax excluded',
  `user_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `SKU`, `title`, `slug`, `sub_title`, `description`, `regular_price`, `sale_price`, `avg_rate`, `tax_id`, `user_id`, `language_id`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'first product', 'first-product', 'Vali User Image Kaushal Frontend Developer Dashboard\r\nProductsCategoriesTagsLanguagesOrdersVendorsUsersPostsSlidersContact s QuesriesSite Options DashboardA fr', 'Vali\r\n \r\n User Image\r\nKaushal\r\n\r\nFrontend Developer\r\n\r\nDashboard\r\nProducts\r\nCategories\r\nTags\r\nLanguages\r\nOrders\r\nVendors\r\nUsers\r\nPosts\r\nSliders\r\nContact Us Quesries\r\nSite Options\r\n Dashboard\r\nA free and modular admin template\r\n\r\n Dashboard\r\nBasic Detail\r\nTitle \r\nfirst product\r\nSlug \r\nfirst-product\r\nSub Title \r\nDescription \r\nPricing Detail\r\nRegular Price \r\nTitle\r\nSale Price \r\nTitle\r\nDiscount Price \r\n400\r\nAdd Categories\r\n\r\nAdd Tags\r\n\r\nSelect Language\r\n\r\n     Vali\r\n \r\n User Image\r\nKaushal\r\n\r\nFrontend Developer\r\n\r\nDashboard\r\nProducts\r\nCategories\r\nTags\r\nLanguages\r\nOrders\r\nVendors\r\nUsers\r\nPosts\r\nSliders\r\nContact Us Quesries\r\nSite Options\r\n Dashboard\r\nA free and modular admin template\r\n\r\n Dashboard\r\nBasic Detail\r\nTitle \r\nfirst product\r\nSlug \r\nfirst-product\r\nSub Title \r\nDescription \r\nPricing Detail\r\nRegular Price \r\nTitle\r\nSale Price \r\nTitle\r\nDiscount Price \r\n400\r\nAdd Categories\r\n\r\nAdd Tags\r\n\r\nSelect Language\r\n\r\n     Vali\r\n \r\n User Image\r\nKaushal\r\n\r\nFrontend Developer\r\n\r\nDashboard\r\nProducts\r\nCategories\r\nTags\r\nLanguages\r\nOrders\r\nVendors\r\nUsers\r\nPosts\r\nSliders\r\nContact Us Quesries\r\nSite Options\r\n Dashboard\r\nA free and modular admin template\r\n\r\n Dashboard\r\nBasic Detail\r\nTitle \r\nfirst product\r\nSlug \r\nfirst-product\r\nSub Title \r\nDescription \r\nPricing Detail\r\nRegular Price \r\nTitle\r\nSale Price \r\nTitle\r\nDiscount Price \r\n400\r\nAdd Categories\r\n\r\nAdd Tags\r\n\r\nSelect Language', 500.00, 200.00, 0, 0, 1, 1, 0, '2018-02-16 12:15:59', '2018-02-16 12:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_ratings`
--

CREATE TABLE `product_ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_key` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `option_key`, `option_value`, `created_at`, `updated_at`) VALUES
(1, 'title', 'BooksStocks', '2018-02-16 11:38:54', '2018-02-16 12:52:21'),
(2, 'slogan', 'online books store', '2018-02-16 11:42:02', '2018-02-16 12:54:33'),
(3, 'email_1', 'info@booksstocks.com', '2018-02-16 11:42:16', '2018-02-16 12:55:02'),
(4, 'contact_number_1', '+91-838-791-915', '2018-02-16 11:42:25', '2018-02-16 12:55:47'),
(5, 'logo', NULL, '2018-02-16 11:43:21', '2018-02-16 11:43:21'),
(6, 'site_url', NULL, '2018-02-16 11:43:28', '2018-02-16 11:43:28'),
(7, 'fb_url', NULL, '2018-02-16 11:43:34', '2018-02-16 11:43:34'),
(8, 'gplus_url', NULL, '2018-02-16 11:43:42', '2018-02-16 11:43:42'),
(9, 'yt_url', NULL, '2018-02-16 11:43:49', '2018-02-16 11:43:49'),
(10, 'insta_url', NULL, '2018-02-16 11:43:59', '2018-02-16 11:43:59'),
(11, 'linkedin_url', NULL, '2018-02-16 11:44:08', '2018-02-16 11:44:08'),
(12, 'tumblur_url', NULL, '2018-02-16 11:44:18', '2018-02-16 11:44:18'),
(13, 'before_body', NULL, '2018-02-16 11:44:26', '2018-02-16 11:44:26'),
(14, 'after_body', NULL, '2018-02-16 11:44:34', '2018-02-16 11:44:34'),
(15, 'address_1', NULL, '2018-02-16 11:44:45', '2018-02-16 11:44:45'),
(16, 'geo_location', NULL, '2018-02-16 11:44:55', '2018-02-16 11:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created_at`) VALUES
(1, 'IIM', '2018-02-16 12:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `tax` double(2,2) NOT NULL DEFAULT '0.00',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kaushal', 'kaushal@eduncle.com', '$2y$10$D9mEQkyMrDq0fmzTnobqa.oDwuJnHLpIZ41QtSWGn1BWg5STqJhV2', NULL, '2018-02-16 11:20:57', '2018-02-16 11:20:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_ratings`
--
ALTER TABLE `product_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_ratings`
--
ALTER TABLE `product_ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_options`
--
ALTER TABLE `site_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

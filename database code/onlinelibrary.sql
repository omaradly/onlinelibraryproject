-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2021 at 02:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookdescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keysale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `newprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookname`, `bookdescription`, `bookprice`, `keysale`, `newprice`, `bookimage`, `created_at`, `updated_at`) VALUES
(13, 'book1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '200', 'true', '150', '5ff230ef58555.jpeg', '2021-01-03 19:02:39', '2021-01-03 19:04:54'),
(12, 'book2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '130', 'false', '', '5ff22b41c5e3f.jpeg', '2021-01-03 18:38:25', '2021-01-03 19:05:01'),
(14, 'book3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '200', 'false', '', '5ff231415d4ae.jpeg', '2021-01-03 19:04:01', '2021-01-03 19:04:01'),
(15, 'book 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '140', 'false', '', '5ff2316c9bd6b.jpeg', '2021-01-03 19:04:44', '2021-01-03 19:04:44'),
(16, 'book5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '310', 'true', '210', '5ff231a5e17b8.jpeg', '2021-01-03 19:05:41', '2021-01-03 19:05:41'),
(17, 'book6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '130', 'true', '100', '5ff231cf7cd13.jpeg', '2021-01-03 19:06:23', '2021-01-03 19:06:23'),
(18, 'book7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '40', 'false', '', '5ff231f47e88e.jpeg', '2021-01-03 19:07:00', '2021-01-03 19:07:00'),
(19, 'book8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '60', 'false', '', '5ff2321b90941.jpeg', '2021-01-03 19:07:39', '2021-01-03 19:07:39'),
(20, 'book 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '70', 'true', '50', '5ff2324cf0592.jpeg', '2021-01-03 19:08:28', '2021-01-03 19:08:28'),
(21, 'book 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '200', 'false', '', '5ff23276e3154.jpeg', '2021-01-03 19:09:10', '2021-01-03 19:09:10'),
(22, 'book 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '300', 'true', '150', '5ff2329f76165.jpeg', '2021-01-03 19:09:51', '2021-01-03 19:09:51'),
(23, 'book12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '140', 'false', '', '5ff232e868389.jpeg', '2021-01-03 19:10:31', '2021-01-03 19:11:04'),
(24, 'book13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '500', 'false', '', '5ff2332539264.jpeg', '2021-01-03 19:12:05', '2021-01-03 19:12:05'),
(25, 'book14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '140', 'false', '', '5ff239100f94e.jpg', '2021-01-03 19:37:20', '2021-01-03 19:37:20'),
(26, 'book 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor bibendum ipsum id dignissim. Phasellus diam sapien, eleifend eu magna non, semper venenatis ligula. Vestibulum suscipit lectus sed porttitor efficitur. Maecenas id faucibus tellus.', '130', 'false', '', '5ff239260c5ec.jpg', '2021-01-03 19:37:42', '2021-01-03 19:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

DROP TABLE IF EXISTS `book_category`;
CREATE TABLE IF NOT EXISTS `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_category_book_id_foreign` (`Book_id`),
  KEY `book_category_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `Book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 12, 14, NULL, NULL),
(11, 12, 13, NULL, NULL),
(10, 12, 12, NULL, NULL),
(13, 12, 17, NULL, NULL),
(14, 12, 23, NULL, NULL),
(15, 13, 18, NULL, NULL),
(16, 13, 19, NULL, NULL),
(17, 13, 20, NULL, NULL),
(18, 14, 12, NULL, NULL),
(19, 14, 14, NULL, NULL),
(20, 14, 15, NULL, NULL),
(21, 14, 16, NULL, NULL),
(22, 14, 17, NULL, NULL),
(23, 15, 12, NULL, NULL),
(24, 15, 15, NULL, NULL),
(25, 15, 17, NULL, NULL),
(26, 15, 19, NULL, NULL),
(27, 15, 23, NULL, NULL),
(28, 16, 12, NULL, NULL),
(29, 16, 13, NULL, NULL),
(30, 16, 14, NULL, NULL),
(31, 16, 15, NULL, NULL),
(32, 16, 16, NULL, NULL),
(33, 16, 17, NULL, NULL),
(34, 16, 18, NULL, NULL),
(35, 16, 19, NULL, NULL),
(36, 16, 20, NULL, NULL),
(37, 16, 21, NULL, NULL),
(38, 16, 22, NULL, NULL),
(39, 16, 23, NULL, NULL),
(40, 17, 12, NULL, NULL),
(41, 18, 13, NULL, NULL),
(42, 18, 14, NULL, NULL),
(43, 19, 13, NULL, NULL),
(44, 19, 16, NULL, NULL),
(45, 19, 20, NULL, NULL),
(46, 19, 23, NULL, NULL),
(47, 20, 13, NULL, NULL),
(48, 20, 14, NULL, NULL),
(49, 20, 15, NULL, NULL),
(50, 20, 16, NULL, NULL),
(51, 20, 17, NULL, NULL),
(52, 20, 18, NULL, NULL),
(53, 20, 19, NULL, NULL),
(54, 20, 20, NULL, NULL),
(55, 20, 21, NULL, NULL),
(56, 20, 22, NULL, NULL),
(57, 21, 12, NULL, NULL),
(58, 21, 23, NULL, NULL),
(59, 22, 12, NULL, NULL),
(60, 22, 13, NULL, NULL),
(61, 22, 14, NULL, NULL),
(62, 22, 15, NULL, NULL),
(63, 22, 17, NULL, NULL),
(64, 22, 18, NULL, NULL),
(65, 22, 19, NULL, NULL),
(66, 23, 12, NULL, NULL),
(67, 23, 13, NULL, NULL),
(68, 23, 14, NULL, NULL),
(69, 23, 15, NULL, NULL),
(70, 23, 16, NULL, NULL),
(71, 23, 17, NULL, NULL),
(72, 23, 18, NULL, NULL),
(73, 23, 19, NULL, NULL),
(74, 23, 20, NULL, NULL),
(75, 23, 21, NULL, NULL),
(76, 23, 22, NULL, NULL),
(77, 24, 12, NULL, NULL),
(78, 24, 13, NULL, NULL),
(79, 24, 17, NULL, NULL),
(80, 24, 19, NULL, NULL),
(81, 24, 21, NULL, NULL),
(82, 25, 13, NULL, NULL),
(83, 26, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(12, 'uncateogrized', '2021-01-03 18:32:12', '2021-01-03 18:32:12'),
(13, 'cateogry1', '2021-01-03 18:32:22', '2021-01-03 18:32:22'),
(14, 'cateogry2', '2021-01-03 18:32:26', '2021-01-03 18:32:26'),
(15, 'cateogry3', '2021-01-03 18:32:31', '2021-01-03 18:32:31'),
(16, 'cateogry4', '2021-01-03 18:32:36', '2021-01-03 18:32:36'),
(17, 'cateogry5', '2021-01-03 18:32:41', '2021-01-03 18:32:41'),
(18, 'cateogry6', '2021-01-03 18:32:48', '2021-01-03 18:32:48'),
(19, 'cateogry7', '2021-01-03 18:32:53', '2021-01-03 18:32:53'),
(20, 'cateogry8', '2021-01-03 18:33:00', '2021-01-03 18:33:00'),
(21, 'cateogry9', '2021-01-03 18:33:06', '2021-01-03 18:33:06'),
(22, 'cateogry10', '2021-01-03 18:33:12', '2021-01-03 18:33:12'),
(23, 'test Cateogry', '2021-01-03 18:33:30', '2021-01-03 18:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_29_215708_create_books_table', 1),
(2, '2020_12_29_220032_create_categories_table', 1),
(3, '2020_12_29_221211_create__book__category_table', 1),
(4, '2020_12_29_222840_create_users_table', 1),
(5, '2020_12_31_212619_create__book__category_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `access_token`, `created_at`, `updated_at`) VALUES
(1, 'omar adly', 'omaradly@gmail.com', '$2y$10$OxBVjdLDu3ClDzkAKVT5qurhi5P6UoT30mxQcnfeWwkH8m7LknK7G', 0, NULL, '2021-01-02 21:15:34', '2021-01-02 21:15:34'),
(3, 'ammar elzaiem', 'elzaem.ammar12@gmail.com', '$2y$10$J7QSaLzQ5JhbotI6X0pRx.QRL6llcEo3O1en3RAGoQv7t4SH47ESm', 0, NULL, '2021-01-03 12:59:25', '2021-01-05 12:22:25'),
(4, 'Admin', 'admin@admin.com', '$2y$10$TfCsfo5deEZET4Qd.R7l5ObjPsHd/LlWVxa.GaWyWmntIQLmmLyES', 1, NULL, '2021-01-03 18:00:49', '2021-01-03 18:00:49'),
(5, 'Omar', 'omaradly2020@gmail.com', '$2y$10$6Ho69XF0oweRxMU.e4rk4uAchvQ747iNbupW9JxE3v9AsedW2xsg2', 0, NULL, '2021-01-05 12:23:08', '2021-01-05 12:46:29'),
(6, 'test user', 'testuser@gmail.com', '$2y$10$reKYxfj./bcTud1RMQB/6eiiQ2mJQpy4K83w33cYlA5MaXS9udgNO', 0, NULL, '2021-01-05 12:50:21', '2021-01-05 12:50:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

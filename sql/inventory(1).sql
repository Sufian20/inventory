-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 01:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_salaries`
--

CREATE TABLE `advanced_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advanced_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advanced_salaries`
--

INSERT INTO `advanced_salaries` (`id`, `emp_id`, `month`, `year`, `advanced_salary`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 9, 'November', '2021', '466', NULL, '2021-01-18 08:31:08', NULL),
(2, 9, 'November', '2021', '466', NULL, '2021-01-18 08:37:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attandences`
--

CREATE TABLE `attandences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `att_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `att_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_date` int(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quntity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_ip`, `product_quntity`, `created_at`, `updated_at`) VALUES
(27, 1, '127.0.0.1', '3', '2021-06-24 17:22:01', '2021-06-24 17:22:14'),
(28, 7, '127.0.0.1', '2', '2021-06-24 17:22:21', '2021-07-28 00:21:59'),
(30, 1, '::1', '1', '2021-06-29 20:57:20', NULL),
(31, 2, '::1', '1', '2021-06-29 20:57:24', NULL),
(32, 5, '::1', '1', '2021-06-29 20:57:27', NULL),
(33, 7, '::1', '1', '2021-06-29 20:57:31', NULL),
(34, 8, '::1', '1', '2021-06-29 20:57:35', NULL),
(35, 9, '::1', '1', '2021-06-29 20:57:42', NULL),
(36, 5, '127.0.0.1', '3', '2021-07-28 00:21:55', '2021-07-28 00:22:20'),
(37, 10, '127.0.0.1', '1', '2021-07-28 00:22:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Melamain 2', NULL, '2021-01-20 10:17:35', '2021-01-20 11:03:26'),
(3, 'Sports', NULL, '2021-01-20 14:57:48', NULL),
(4, 'Child', NULL, '2021-01-20 14:58:02', NULL),
(5, 'Car Pars', NULL, '2021-01-25 17:08:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coustomers`
--

CREATE TABLE `coustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coustomers`
--

INSERT INTO `coustomers` (`id`, `name`, `email`, `phone`, `address`, `shop_name`, `photo`, `account_holder`, `account_no`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Rahin Fan', 'korim@gmail.com', '24678', 'Dhaka', 'KK shop', 'Rahin Fan-zv9.jpg', NULL, '3456.46788.578', 'Pubali', 'Uthora', 'Dhaka', '2021-01-14 17:22:35', '2021-06-29 19:53:19', NULL),
(7, 'A Korim', 'jalalims41@yahoo.com', '24678', 'Gongga Nogro, Sylhet', 'KK shop', 'A Korim-e4l.jpg', 'Ar Jak', '3456.46788.578', 'Pubali', 'Uthora', 'Dhaka', '2021-01-15 12:28:25', NULL, NULL),
(8, 'Muhit', 'muhit@gmial.com', '45678-0987456', 'Guyala Bazer', 'MA shop', 'Muhit-97q.jpg', 'A Korim', '36886.678', 'South Est', 'Guyala Bazer', 'Khulna', '2021-01-18 13:36:02', NULL, NULL),
(9, 'A Korim', 'kk@gmail.com', '34567864323456', 'danmondi', 'KK shop', 'A Korim-ibj.png', 'ar Sudkn', '45667.6.7.', 'South Est', 'Uthora', 'Dhaka', '2021-01-28 05:05:30', NULL, NULL),
(10, 'Rayhan', 'rayhan@gmail.com', '3308r8', 'danmondi', 'RA shop', 'Rayhan-bb4.jpg', 'KS Cox', '3456.46788.578', 'Uthora', 'Mohakhaili', 'Dhaka', '2021-01-28 05:10:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `experience`, `photo`, `nid_no`, `salary`, `vacation`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sakib Ahmed', 'sakib@gmail.com', '34567864323456', 'Gongga Nogro, Sylhet', '6 years', 'Sakib Ahmed-bgl.jpg', NULL, '42345', '3 months', 'Sylhedt', '2021-01-19 12:56:07', NULL, NULL),
(2, 'Sufian', 'jalalims41@yahoo.com', '13349078598067', 'gulapgonj, Sylhet', '7 years', 'Sufian-1pw.jpg', '5799778', '40000', '4 months', 'Sylhet', '2021-01-19 13:04:25', NULL, NULL),
(3, 'Sabbir Jer', 'sabbur33@gmil.com', '34567864323456', 'Gongga Nogro, Sylhet', '6 years', 'Sabbir Jer-kew.jpg', '3468956', '42345', '3 months', 'Dhaka', '2021-01-19 13:06:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `month`, `year`, `date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Today has buy a computer with 20000 taka and also 2 printer with 15000 tk', '350000', 'January', '2021', '21/01/21', NULL, '2021-01-21 12:20:21', NULL),
(2, 'internet', '1000', 'January', '2021', '21/01/21', NULL, '2021-01-21 12:21:48', NULL),
(3, '2 laptops 420000', '420000', 'January', '2021', '21/01/21', NULL, '2021-01-21 12:23:28', NULL),
(5, 'Monitor 2 pice 8000', '8000', 'January', '2021', '21/01/21', NULL, '2021-01-21 17:44:12', NULL),
(6, 'Monitor 2 pic 8000', '8000', 'January', '2021', '21/01/21', NULL, '2021-01-21 17:44:58', NULL),
(7, 'Table 2 pic 8000', '8000', 'January', '2021', '21/01/21', NULL, '2021-01-21 17:45:52', NULL),
(8, 'Monitor 2 pice 8000', '8000', 'January', '2021', '21/01/21', NULL, '2021-01-21 17:48:09', NULL),
(9, 'Tea', '200', 'January', '2021', '22/01/21', NULL, '2021-01-22 14:49:41', NULL);

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
(8, '2021_01_12_060259_create_employesses_table', 2),
(9, '2021_01_14_080013_create_coustomers_table', 3),
(10, '2021_01_15_022348_create_supliers_table', 4),
(13, '2021_01_17_202047_create_salaries_table', 5),
(17, '2021_01_17_225825_create_advanced_salaries_table', 6),
(18, '2021_01_19_044805_create_employees_table', 7),
(19, '2021_01_19_202912_create_salaries_table', 8),
(20, '2021_01_20_012112_create_categoris_table', 9),
(21, '2021_01_20_012645_create_categories_table', 10),
(22, '2021_01_20_030544_create_products_table', 11),
(23, '2021_01_21_030013_create_expenses_table', 12),
(26, '2021_01_23_060957_create_attandences_table', 13),
(28, '2021_01_24_202917_create_settings_table', 14),
(30, '2021_01_29_075348_create_carts_table', 15),
(43, '2021_01_31_062350_create_order_ditails_table', 16),
(44, '2021_01_31_062440_create_orders_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coustomer_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `coustomer_id`, `order_date`, `month`, `year`, `order_status`, `total_products`, `sub_total`, `vat`, `total`, `payment_status`, `pay`, `due`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, '01/02/21', 'February', '2021', 'success', '6', '5200', '780', '5980', 'Cash', '5980', '000', NULL, NULL, '2021-02-05 11:05:50'),
(2, 10, '03/02/21', 'February', '2021', 'success', '6', '5200', '780', '5980', 'Cash', '56327', '791', NULL, NULL, '2021-02-05 11:11:32'),
(3, 10, '05/02/21', 'February', '2021', 'success', '1', '660', '99', '759', 'Cash', '700', '59', NULL, NULL, '2021-02-05 11:38:55'),
(4, 9, '05/02/21', 'February', '2021', 'success', '2', '1320', '198', '1518', 'Cash', '1518', '00', NULL, NULL, '2021-02-05 12:06:33'),
(5, 7, '05/02/21', 'February', '2021', 'success', '2', '2080', '312', '2392', 'Cash', '2300', '92', NULL, NULL, '2021-03-03 13:42:04'),
(6, 8, '06/02/21', 'February', '2021', 'success', '2', '2080', '312', '2392', 'Cash', '$2392', '2392', NULL, NULL, '2021-02-06 11:20:41'),
(7, 10, '06/02/21', 'February', '2021', 'success', '2', '10860', '1629', '12489', 'Cash', '12400', '00', NULL, NULL, '2021-02-23 17:57:47'),
(8, 9, '07/02/21', 'February', '2021', 'success', '3', '11720', '1758', '13478', 'Cheque', '13478', NULL, NULL, NULL, '2021-05-21 16:04:18'),
(9, 8, '23/02/21', 'February', '2021', 'success', '3', '11720', '1758', '13478', 'Cash', '388', '4', NULL, NULL, '2021-06-24 17:23:39'),
(10, 7, '03/03/21', 'March', '2021', 'success', '3', '11720', '1758', '13478', 'Cash', '13478', '21137', NULL, NULL, '2021-07-28 00:24:15'),
(11, 6, '21/05/21', 'May', '2021', 'pending', '8', '15820', '2373', '18193', 'Cash', '13478', '58', NULL, NULL, NULL),
(12, 8, '24/06/21', 'June', '2021', 'pending', '4', '3440', '516', '3956', 'Cash', '17777', '45', NULL, NULL, NULL),
(13, 7, '29/06/21', 'June', '2021', 'pending', '10', '8760', '1314', '10074', 'Cash', '13478', NULL, NULL, NULL, NULL),
(14, 7, '27/07/21', 'July', '2021', 'pending', '15', '21600', '3240', '24840', 'Cash', '13478', '1000', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_ditails`
--

CREATE TABLE `order_ditails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `total_products` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ditails`
--

INSERT INTO `order_ditails` (`id`, `order_id`, `product_id`, `total_products`, `sub_total`, `total`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 16, '6', '5200', '5980', NULL, NULL, NULL),
(2, 1, 17, '6', '5200', '5980', NULL, NULL, NULL),
(3, 1, 18, '6', '5200', '5980', NULL, NULL, NULL),
(4, 1, 16, '6', '5200', '5980', NULL, NULL, NULL),
(5, 1, 17, '6', '5200', '5980', NULL, NULL, NULL),
(6, 1, 18, '6', '5200', '5980', NULL, NULL, NULL),
(7, 1, 19, '1', '660', '759', NULL, NULL, NULL),
(8, 1, 20, '2', '1320', '1518', NULL, NULL, NULL),
(9, 1, 21, '2', '2080', '2392', NULL, NULL, NULL),
(10, 1, 22, '2', '2080', '2392', NULL, NULL, NULL),
(11, 1, 21, '2', '2080', '2392', NULL, NULL, NULL),
(12, 1, 22, '2', '2080', '2392', NULL, NULL, NULL),
(13, 1, 23, '2', '10860', '12489', NULL, NULL, NULL),
(14, 1, 24, '2', '10860', '12489', NULL, NULL, NULL),
(15, 1, 23, '3', '11720', '13478', NULL, NULL, NULL),
(16, 1, 24, '3', '11720', '13478', NULL, NULL, NULL),
(17, 1, 25, '3', '11720', '13478', NULL, NULL, NULL),
(18, 1, 23, '3', '11720', '13478', NULL, NULL, NULL),
(19, 1, 24, '3', '11720', '13478', NULL, NULL, NULL),
(20, 1, 25, '3', '11720', '13478', NULL, NULL, NULL),
(21, 1, 23, '3', '11720', '13478', NULL, NULL, NULL),
(22, 1, 24, '3', '11720', '13478', NULL, NULL, NULL),
(23, 1, 25, '3', '11720', '13478', NULL, NULL, NULL),
(24, 1, 23, '8', '15820', '18193', NULL, NULL, NULL),
(25, 1, 24, '8', '15820', '18193', NULL, NULL, NULL),
(26, 1, 25, '8', '15820', '18193', NULL, NULL, NULL),
(27, 1, 26, '8', '15820', '18193', NULL, NULL, NULL),
(28, 1, 27, '4', '3440', '3956', NULL, NULL, NULL),
(29, 1, 28, '4', '3440', '3956', NULL, NULL, NULL),
(30, 1, 27, '10', '8760', '10074', NULL, NULL, NULL),
(31, 1, 28, '10', '8760', '10074', NULL, NULL, NULL),
(32, 1, 30, '10', '8760', '10074', NULL, NULL, NULL),
(33, 1, 31, '10', '8760', '10074', NULL, NULL, NULL),
(34, 1, 32, '10', '8760', '10074', NULL, NULL, NULL),
(35, 1, 33, '10', '8760', '10074', NULL, NULL, NULL),
(36, 1, 34, '10', '8760', '10074', NULL, NULL, NULL),
(37, 1, 35, '10', '8760', '10074', NULL, NULL, NULL),
(38, 1, 27, '15', '21600', '24840', NULL, NULL, NULL),
(39, 1, 28, '15', '21600', '24840', NULL, NULL, NULL),
(40, 1, 30, '15', '21600', '24840', NULL, NULL, NULL),
(41, 1, 31, '15', '21600', '24840', NULL, NULL, NULL),
(42, 1, 32, '15', '21600', '24840', NULL, NULL, NULL),
(43, 1, 33, '15', '21600', '24840', NULL, NULL, NULL),
(44, 1, 34, '15', '21600', '24840', NULL, NULL, NULL),
(45, 1, 35, '15', '21600', '24840', NULL, NULL, NULL),
(46, 1, 36, '15', '21600', '24840', NULL, NULL, NULL),
(47, 1, 37, '15', '21600', '24840', NULL, NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `sup_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_garage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cat_id`, `sup_id`, `product_code`, `product_garage`, `product_route`, `product_img`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Shirt SM', 1, 9, '457753444', 'HB tcs 8/07/10', '3', '-fvi.jpg', '2021-01-06', '2021-07-29', '765', '860', NULL, '2021-01-20 14:26:42', '2021-07-07 23:30:26'),
(2, 'Cocaris', 1, 10, '457753455', 'URT', '6', '-gmg.jpg', '2021-01-06', '2022-01-18', '420', '580', NULL, '2021-01-20 14:54:41', NULL),
(4, 'Lution', 4, 9, '123', 'B', '3', '-blk.jpg', '2021-01-13', '2022-01-05', '550', '660', NULL, '2021-01-20 14:59:14', NULL),
(5, 'toys', 4, 9, '123', 'B', '3', '-iz4.jpg', '2021-01-13', '2022-01-05', '550', '660', NULL, '2021-01-20 15:01:36', NULL),
(7, 'OIls s', 4, 10, '145433', 'H', '3', '-bpx.jpg', '2021-01-06', '2022-01-04', '420', '860', NULL, '2021-01-21 04:55:05', NULL),
(8, 'OIls s', 4, 10, '145433', 'H', '3', '-gmg.jpg', '2021-01-06', '2022-01-04', '420', '860', NULL, '2021-01-21 04:55:43', NULL),
(9, 'shos', 3, 9, '1234', 'A', '2', '-tw5.jpg', '2021-01-05', '2026-01-11', '990', '1500', NULL, '2021-01-21 07:12:00', NULL),
(10, 'Electric Moror', 5, 9, '4567', '13000', 'B', 'electricmotor.jpg', '2021-01-15', '44211', '44990', '10000', NULL, '2021-01-25 18:00:01', '2021-01-25 18:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` bigint(20) UNSIGNED NOT NULL,
  `salary_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_zipecode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_address`, `company_email`, `company_phone`, `company_logo`, `company_mobile`, `company_city`, `company_country`, `company_zipecode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'softmattrix', 'Zindabazer', 'softmatrix@gmail.com', '1235', 'softmattrix-n3o.jpg', '4788544688', 'Sylhet', 'Bbangladesh', '3100', NULL, NULL, '2021-01-25 07:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `name`, `email`, `phone`, `address`, `type`, `shop_name`, `photo`, `account_holder`, `account_no`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Sakib Ahmed', 'sakib@gmail.com', '13567', 'Gongga Nogro, Sylhet', 'Whole Seller', 'KK shop', 'Sakib Ahmed-4dt.jpg', 'ar Sudkn', '3456.46788.578', 'Pubali', 'Uthora', 'Dhaka', '2021-01-16 14:17:19', NULL, NULL),
(10, 'Rahin Ahmed Stc', 'admin@gmail.com', '24678', 'Gongga Nogro, Sylhet', 'Broker', 'KK shop', 'Rahin Ahmed Stv-ef0.jpg', 'ar Sudkn', '45667.6.7.', 'Pubali', 'Uthora', 'Sylhedt', '2021-01-16 14:45:23', '2021-01-16 16:12:26', NULL);

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
(1, 'Sufian', 'jalalims41@yahoo.com', NULL, '$2y$10$lpOsEYFkVOO2Dsw2wM1ozuL7Fezq1VW6E0AdSNwHCescukdF3bg9O', 'wG8WBE6a71YW7TDwjxLINOPvKps0SfOiRg25yEufflfyMth1m70RK4Vgk4gH', '2021-01-11 13:03:25', '2021-01-11 13:03:25'),
(2, 'Sabbir', 'sabbr@gmail.com', NULL, '$2y$10$yjFwtmk1tjKLn1gerrRO7u27PI4TfgHq31SAWPe0M882b4ENnpufC', NULL, '2021-03-03 16:30:55', '2021-03-03 16:30:55'),
(3, 'Abc', 'abc@gmail.com', NULL, '$2y$10$vJcmFEVADBHhJeERw8MHPuIfpR/0W82eGwgN765FVArTyRBb8tzv.', NULL, '2021-03-03 16:38:42', '2021-03-03 16:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_salaries`
--
ALTER TABLE `advanced_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attandences`
--
ALTER TABLE `attandences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomers`
--
ALTER TABLE `coustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_ditails`
--
ALTER TABLE `order_ditails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
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
-- AUTO_INCREMENT for table `advanced_salaries`
--
ALTER TABLE `advanced_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attandences`
--
ALTER TABLE `attandences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coustomers`
--
ALTER TABLE `coustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_ditails`
--
ALTER TABLE `order_ditails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

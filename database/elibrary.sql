-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 12:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `a2z_databases`
--

CREATE TABLE `a2z_databases` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `a2z_subject_id` int(10) UNSIGNED NOT NULL,
  `a2z_type_id` int(10) UNSIGNED NOT NULL,
  `a2z_vendor_id` int(10) UNSIGNED NOT NULL,
  `a2zTitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a2zDescription` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial` tinyint(1) DEFAULT NULL,
  `lock` tinyint(1) DEFAULT NULL,
  `redirectLink` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isVisible` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a2z_hit_counters`
--

CREATE TABLE `a2z_hit_counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `a2z_database_id` int(10) UNSIGNED NOT NULL,
  `currentDate` datetime NOT NULL,
  `hitCount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a2z_subjects`
--

CREATE TABLE `a2z_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `a2zSubjectName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a2z_types`
--

CREATE TABLE `a2z_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `a2zTypeName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a2z_vendors`
--

CREATE TABLE `a2z_vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `a2zVendorName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add2_favourites`
--

CREATE TABLE `add2_favourites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `auditTime` datetime NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `objectReference` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infoDisplay` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqlCmd` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `authorName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author_item`
--

CREATE TABLE `author_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `departmentName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deptShortName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_item`
--

CREATE TABLE `department_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download_quotas`
--

CREATE TABLE `download_quotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_trackings`
--

CREATE TABLE `issue_trackings` (
  `id` int(10) UNSIGNED NOT NULL,
  `rating_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comments` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isCompleted` tinyint(1) DEFAULT NULL,
  `assignTo` int(11) DEFAULT NULL,
  `assignBy` int(11) DEFAULT NULL,
  `unread2initiator` tinyint(1) DEFAULT NULL,
  `unread2handler` tinyint(1) DEFAULT '0',
  `createdTime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_tracking_details`
--

CREATE TABLE `issue_tracking_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `actionComments` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_tracking_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `publisher_id` int(10) UNSIGNED NOT NULL,
  `service_category_id` int(10) UNSIGNED NOT NULL,
  `item_standard_number_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemStandardNumberValue` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageUrl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdfUrl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPublished` tinyint(1) DEFAULT '0',
  `publicationYear` date DEFAULT NULL,
  `placeOfPublication` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_standard_numbers`
--

CREATE TABLE `item_standard_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `itemStandardName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_resets_table', 1),
(32, '2018_03_10_050014_create_sister_concerns_table', 1),
(33, '2018_03_10_062151_create_roles_table', 1),
(34, '2018_03_11_064345_create_user_role_table', 1),
(35, '2018_03_12_034941_create_service_categories_table', 1),
(36, '2018_03_12_035409_create_services_table', 1),
(37, '2018_03_12_035412_create_role_service', 1),
(38, '2018_03_12_041345_create_service_user_table', 1),
(39, '2018_03_14_035024_create_departments_table', 1),
(40, '2018_03_14_035352_create_publishers_table', 1),
(41, '2018_03_14_035616_create_authors_table', 1),
(42, '2018_03_14_035930_create_item_standard_numbers_table', 1),
(43, '2018_03_14_035940_create_items_table', 1),
(44, '2018_03_14_035942_create_add2_favourites_table', 1),
(45, '2018_03_14_035942_create_author_item_table', 1),
(46, '2018_03_14_035944_create_department_item_table', 1),
(47, '2018_03_14_042423_create_ratings_table', 1),
(48, '2018_03_14_042722_create_issue_trackings_table', 1),
(49, '2018_03_14_042730_create_issue_tracking_details_table', 1),
(50, '2018_03_14_044612_create_a2z_types_table', 1),
(51, '2018_03_14_045004_create_a2z_subjects_table', 1),
(52, '2018_03_14_045301_create_a2z_vendors_table', 1),
(53, '2018_03_14_045735_create_a2z_databases_table', 1),
(54, '2018_03_14_051039_create_a2z_hit_counters_table', 1),
(55, '2018_03_14_053117_create_sys_configs_table', 1),
(56, '2018_03_14_054913_create_download_quotas_table', 1),
(57, '2018_03_15_040832_create_audit_logs_table', 1),
(58, '2018_03_27_045717_create_alter_users_table', 1);

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
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(10) UNSIGNED NOT NULL,
  `publisherName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisherPhone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisherEmail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisherAddress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `ratingName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2018-04-17 00:30:57', '2018-04-17 00:30:57'),
(2, 'Admin', 'admin', '2018-04-17 00:30:57', '2018-04-17 00:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_service`
--

CREATE TABLE `role_service` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_service`
--

INSERT INTO `role_service` (`id`, `role_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(2, 1, 2, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(3, 1, 3, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(4, 1, 4, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(5, 1, 5, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(6, 1, 6, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(7, 1, 7, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(8, 1, 8, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(9, 1, 9, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(10, 1, 10, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(11, 1, 11, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(12, 1, 12, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(13, 1, 13, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(14, 1, 14, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(15, 1, 15, '2018-04-17 00:31:40', '2018-04-17 00:31:40'),
(16, 1, 16, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(17, 1, 17, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(18, 1, 18, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(19, 1, 19, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(20, 1, 20, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(21, 1, 21, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(22, 1, 22, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(23, 1, 23, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(24, 1, 24, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(25, 1, 25, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(26, 1, 26, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(27, 1, 27, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(28, 1, 28, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(29, 1, 29, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(30, 1, 30, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(31, 1, 31, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(32, 1, 32, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(33, 1, 33, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(34, 1, 34, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(35, 1, 35, '2018-04-17 01:52:24', '2018-04-17 01:52:24'),
(36, 1, 36, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(37, 1, 37, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(38, 1, 38, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(39, 1, 39, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(40, 1, 40, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(41, 1, 41, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(42, 1, 42, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(43, 1, 43, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(44, 1, 44, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(45, 1, 45, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(46, 1, 46, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(47, 1, 47, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(48, 1, 48, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(49, 1, 49, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(50, 1, 50, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(51, 1, 51, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(52, 1, 52, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(53, 1, 53, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(54, 1, 54, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(55, 1, 55, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(56, 1, 56, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(57, 1, 57, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(58, 1, 58, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(59, 1, 59, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(60, 1, 60, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(61, 1, 61, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(62, 1, 62, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(63, 1, 63, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(64, 1, 64, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(65, 1, 65, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(66, 1, 66, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(67, 1, 67, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(68, 1, 68, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(69, 1, 69, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(70, 1, 70, '2018-04-17 01:52:25', '2018-04-17 01:52:25'),
(71, 1, 71, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(72, 1, 72, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(73, 1, 73, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(74, 1, 74, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(75, 1, 75, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(76, 1, 76, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(77, 1, 77, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(78, 1, 78, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(79, 1, 79, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(80, 1, 80, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(81, 1, 81, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(82, 1, 82, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(83, 1, 83, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(84, 1, 84, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(85, 1, 85, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(86, 1, 86, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(87, 1, 87, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(88, 1, 88, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(89, 1, 89, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(90, 1, 90, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(91, 1, 91, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(92, 1, 92, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(93, 1, 93, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(94, 1, 94, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(95, 1, 95, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(96, 1, 96, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(97, 1, 97, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(98, 1, 98, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(99, 1, 99, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(100, 1, 100, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(101, 1, 101, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(102, 1, 102, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(103, 1, 103, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(104, 1, 104, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(105, 1, 105, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(106, 1, 106, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(107, 1, 107, '2018-04-17 01:52:26', '2018-04-17 01:52:26'),
(108, 1, 108, '2018-04-17 01:52:27', '2018-04-17 01:52:27'),
(109, 1, 109, '2018-04-17 01:52:27', '2018-04-17 01:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `login_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2018-04-17 00:31:52', '2018-04-17 00:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_category_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` enum('GET','POST','PUT','DELETE','PATCH') COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_category_id`, `namespace`, `controller`, `method`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Http\\Controllers\\Admin', 'HomeController', 'GET', 'index', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(2, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'GET', 'index', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(3, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'GET', 'create', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(4, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'GET', 'show', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(5, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'GET', 'edit', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(6, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'POST', 'store', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(7, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'PUT', 'update', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(8, 2, 'App\\Http\\Controllers\\Admin', 'RolesController', 'DELETE', 'destroy', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(9, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'GET', 'index', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(10, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'GET', 'create', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(11, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'GET', 'show', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(12, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'GET', 'edit', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(13, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'POST', 'store', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(14, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'PUT', 'update', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(15, 3, 'App\\Http\\Controllers\\Admin', 'UsersController', 'DELETE', 'destroy', '2018-04-17 00:31:20', '2018-04-17 00:31:20'),
(16, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(17, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(18, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(19, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(20, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(21, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(22, 4, 'App\\Http\\Controllers\\Admin', 'DepartmentController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(23, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(24, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(25, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(26, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(27, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(28, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(29, 5, 'App\\Http\\Controllers\\Admin', 'AuthorController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(30, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(31, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(32, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(33, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(34, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(35, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(36, 6, 'App\\Http\\Controllers\\Admin', 'PublisherController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(37, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(38, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(39, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(40, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(41, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(42, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(43, 7, 'App\\Http\\Controllers\\Admin', 'ServiceCategoryController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(44, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(45, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(46, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(47, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(48, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(49, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(50, 8, 'App\\Http\\Controllers\\Admin', 'ItemStandardNumberController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(51, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(52, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(53, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(54, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(55, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(56, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(57, 9, 'App\\Http\\Controllers\\Admin', 'ItemController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(58, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(59, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(60, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(61, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(62, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(63, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(64, 10, 'App\\Http\\Controllers\\Admin', 'SisterConcernController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(65, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(66, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(67, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(68, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(69, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(70, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(71, 11, 'App\\Http\\Controllers\\Admin', 'RatingController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(72, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(73, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(74, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(75, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(76, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(77, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(78, 12, 'App\\Http\\Controllers\\Admin', 'A2zTypeController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(79, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(80, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(81, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(82, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(83, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(84, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(85, 13, 'App\\Http\\Controllers\\Admin', 'A2zVendorController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(86, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(87, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(88, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(89, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(90, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(91, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(92, 14, 'App\\Http\\Controllers\\Admin', 'A2zSubjectController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(93, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(94, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(95, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(96, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(97, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(98, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(99, 15, 'App\\Http\\Controllers\\Admin', 'A2zDatabaseController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(100, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'GET', 'index', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(101, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'GET', 'create', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(102, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'GET', 'show', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(103, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'GET', 'edit', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(104, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'POST', 'store', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(105, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'POST', 'feedback', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(106, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'POST', 'assignTo', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(107, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'PUT', 'update', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(108, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'PUT', 'rating', '2018-04-17 01:45:01', '2018-04-17 01:45:01'),
(109, 16, 'App\\Http\\Controllers\\Admin', 'IssueTrackingController', 'DELETE', 'destroy', '2018-04-17 01:45:01', '2018-04-17 01:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `serviceCategory` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceCategoryShort` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessibilityWithoutAuthentication` tinyint(1) DEFAULT NULL,
  `externalUrl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isVisible` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `serviceCategory`, `image`, `serviceCategoryShort`, `accessibilityWithoutAuthentication`, `externalUrl`, `isVisible`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard Controller', NULL, 'dashboard', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(2, 'Roles Controller', NULL, 'roles', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(3, 'Users Controller', NULL, 'users', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(4, 'Departments', NULL, 'department', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(5, 'Authors', NULL, 'author', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(6, 'Publishers', NULL, 'publisher', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(7, 'Service Categories', NULL, 'service-category', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(8, 'Item Standard Number', NULL, 'item-standard-number', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(9, 'Items', NULL, 'item', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(10, 'Sister Concern', NULL, 'sister-concern', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(11, 'Ratings', NULL, 'rating', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(12, 'A2Z Database Types', NULL, 'a2z-type', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(13, 'A2Z Database Vendors', NULL, 'a2z-vendor', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(14, 'A2Z Database Subject', NULL, 'a2z-subject', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(15, 'A2Z Database', NULL, 'a2z-database', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08'),
(16, 'Issue Tracking', NULL, 'issue-tracking', 0, NULL, 0, '2018-04-17 00:31:08', '2018-04-17 00:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE `service_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `isRoleService` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_user`
--

INSERT INTO `service_user` (`id`, `user_id`, `service_id`, `login_id`, `isRoleService`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(2, 1, 2, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(3, 1, 3, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(4, 1, 4, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(5, 1, 5, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(6, 1, 6, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(7, 1, 7, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(8, 1, 8, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(9, 1, 9, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(10, 1, 10, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(11, 1, 11, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(12, 1, 12, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(13, 1, 13, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(14, 1, 14, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(15, 1, 15, NULL, 1, '2018-04-17 00:31:52', '2018-04-17 00:31:52'),
(16, 1, 16, NULL, 1, NULL, NULL),
(17, 1, 17, NULL, 1, NULL, NULL),
(18, 1, 18, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sister_concerns`
--

CREATE TABLE `sister_concerns` (
  `id` int(10) UNSIGNED NOT NULL,
  `concernName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailDomain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concernAuthorityEmail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sys_configs`
--

CREATE TABLE `sys_configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `__POPULAR_MIN__` int(11) DEFAULT NULL,
  `__POPULAR_TOTAL__` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `sister_concern_id` int(10) UNSIGNED DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `securityKey` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagePP` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageIcon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referenceId` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sister_concern_id`, `username`, `displayName`, `securityKey`, `imagePP`, `imageIcon`, `referenceId`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'admin', NULL, NULL, NULL, NULL, 'admin', 'admin@localhost.com', '$2y$10$84quyiDyt9/lfMpDV4NIO.iMA6a74m4F0TZKs.tGYDVZlnjak6Gtq', NULL, '2018-04-17 00:31:52', '2018-04-17 04:20:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a2z_databases`
--
ALTER TABLE `a2z_databases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a2z_databases_user_id_foreign` (`user_id`),
  ADD KEY `a2z_databases_a2z_subject_id_foreign` (`a2z_subject_id`),
  ADD KEY `a2z_databases_a2z_type_id_foreign` (`a2z_type_id`),
  ADD KEY `a2z_databases_a2z_vendor_id_foreign` (`a2z_vendor_id`);

--
-- Indexes for table `a2z_hit_counters`
--
ALTER TABLE `a2z_hit_counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a2z_hit_counters_a2z_database_id_foreign` (`a2z_database_id`);

--
-- Indexes for table `a2z_subjects`
--
ALTER TABLE `a2z_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a2z_types`
--
ALTER TABLE `a2z_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a2z_vendors`
--
ALTER TABLE `a2z_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add2_favourites`
--
ALTER TABLE `add2_favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add2_favourites_user_id_foreign` (`user_id`),
  ADD KEY `add2_favourites_item_id_foreign` (`item_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audit_logs_user_id_foreign` (`user_id`),
  ADD KEY `audit_logs_service_id_foreign` (`service_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `author_item`
--
ALTER TABLE `author_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_item_author_id_foreign` (`author_id`),
  ADD KEY `author_item_item_id_foreign` (`item_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_item`
--
ALTER TABLE `department_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_item_department_id_foreign` (`department_id`),
  ADD KEY `department_item_item_id_foreign` (`item_id`);

--
-- Indexes for table `download_quotas`
--
ALTER TABLE `download_quotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `download_quotas_user_id_foreign` (`user_id`);

--
-- Indexes for table `issue_trackings`
--
ALTER TABLE `issue_trackings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_trackings_rating_id_foreign` (`rating_id`),
  ADD KEY `issue_trackings_user_id_foreign` (`user_id`);

--
-- Indexes for table `issue_tracking_details`
--
ALTER TABLE `issue_tracking_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_tracking_details_issue_tracking_id_foreign` (`issue_tracking_id`),
  ADD KEY `issue_tracking_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_publisher_id_foreign` (`publisher_id`),
  ADD KEY `items_service_category_id_foreign` (`service_category_id`),
  ADD KEY `items_item_standard_number_id_foreign` (`item_standard_number_id`);

--
-- Indexes for table `item_standard_numbers`
--
ALTER TABLE `item_standard_numbers`
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
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publishers_publisherphone_unique` (`publisherPhone`),
  ADD UNIQUE KEY `publishers_publisheremail_unique` (`publisherEmail`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_service`
--
ALTER TABLE `role_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_service_role_id_foreign` (`role_id`),
  ADD KEY `role_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`),
  ADD KEY `services_namespace_index` (`namespace`),
  ADD KEY `services_controller_index` (`controller`),
  ADD KEY `services_method_index` (`method`),
  ADD KEY `services_action_index` (`action`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_user_user_id_foreign` (`user_id`),
  ADD KEY `service_user_service_id_foreign` (`service_id`);

--
-- Indexes for table `sister_concerns`
--
ALTER TABLE `sister_concerns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sister_concerns_concernauthorityemail_unique` (`concernAuthorityEmail`);

--
-- Indexes for table `sys_configs`
--
ALTER TABLE `sys_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_sister_concern_id_foreign` (`sister_concern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a2z_databases`
--
ALTER TABLE `a2z_databases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a2z_hit_counters`
--
ALTER TABLE `a2z_hit_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a2z_subjects`
--
ALTER TABLE `a2z_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a2z_types`
--
ALTER TABLE `a2z_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a2z_vendors`
--
ALTER TABLE `a2z_vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add2_favourites`
--
ALTER TABLE `add2_favourites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `author_item`
--
ALTER TABLE `author_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_item`
--
ALTER TABLE `department_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_quotas`
--
ALTER TABLE `download_quotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_trackings`
--
ALTER TABLE `issue_trackings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_tracking_details`
--
ALTER TABLE `issue_tracking_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_standard_numbers`
--
ALTER TABLE `item_standard_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_service`
--
ALTER TABLE `role_service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sister_concerns`
--
ALTER TABLE `sister_concerns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_configs`
--
ALTER TABLE `sys_configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a2z_databases`
--
ALTER TABLE `a2z_databases`
  ADD CONSTRAINT `a2z_databases_a2z_subject_id_foreign` FOREIGN KEY (`a2z_subject_id`) REFERENCES `a2z_subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `a2z_databases_a2z_type_id_foreign` FOREIGN KEY (`a2z_type_id`) REFERENCES `a2z_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `a2z_databases_a2z_vendor_id_foreign` FOREIGN KEY (`a2z_vendor_id`) REFERENCES `a2z_vendors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `a2z_databases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `a2z_hit_counters`
--
ALTER TABLE `a2z_hit_counters`
  ADD CONSTRAINT `a2z_hit_counters_a2z_database_id_foreign` FOREIGN KEY (`a2z_database_id`) REFERENCES `a2z_databases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `add2_favourites`
--
ALTER TABLE `add2_favourites`
  ADD CONSTRAINT `add2_favourites_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add2_favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD CONSTRAINT `audit_logs_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `audit_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `author_item`
--
ALTER TABLE `author_item`
  ADD CONSTRAINT `author_item_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `author_item_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department_item`
--
ALTER TABLE `department_item`
  ADD CONSTRAINT `department_item_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_item_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `download_quotas`
--
ALTER TABLE `download_quotas`
  ADD CONSTRAINT `download_quotas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `issue_trackings`
--
ALTER TABLE `issue_trackings`
  ADD CONSTRAINT `issue_trackings_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issue_trackings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `issue_tracking_details`
--
ALTER TABLE `issue_tracking_details`
  ADD CONSTRAINT `issue_tracking_details_issue_tracking_id_foreign` FOREIGN KEY (`issue_tracking_id`) REFERENCES `issue_trackings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issue_tracking_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_item_standard_number_id_foreign` FOREIGN KEY (`item_standard_number_id`) REFERENCES `item_standard_numbers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_service`
--
ALTER TABLE `role_service`
  ADD CONSTRAINT `role_service_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_user`
--
ALTER TABLE `service_user`
  ADD CONSTRAINT `service_user_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_sister_concern_id_foreign` FOREIGN KEY (`sister_concern_id`) REFERENCES `sister_concerns` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

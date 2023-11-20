-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 12:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhamshedfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Javascript', NULL, NULL),
(2, 'HTML & CSS', NULL, NULL),
(3, 'WordPress', NULL, NULL),
(4, 'HTML & CSS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `till` int NOT NULL DEFAULT '0' COMMENT '1-till/0-not',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `institute`, `start_date`, `end_date`, `till`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bachelor', 'pabna', '2023-05-01', '2023-06-21', 0, 'Update', NULL, '2023-06-22 00:04:14'),
(2, 'Bachelor', 'pabna', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', NULL, NULL),
(3, 'Bachelor', 'pabna', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', NULL, NULL),
(4, 'Bachelor', 'pabna', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', NULL, NULL),
(5, 'Bachelor', 'pabna', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', NULL, NULL),
(6, 'Bachelor', 'pabna', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', NULL, NULL),
(7, 'das', 'dsa', '2023-06-15', '2023-06-13', 0, 'adasd', '2023-06-21 23:38:47', '2023-06-21 23:38:47'),
(8, 'fsds', 'fdsf', '2023-06-06', '2023-06-22', 1, 'fdsfd', '2023-06-21 23:44:30', '2023-06-21 23:44:30'),
(9, 'ds', 'sd', '2023-06-20', '2023-06-21', 0, 'dsds', '2023-06-24 22:54:57', '2023-06-24 22:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `till` int NOT NULL DEFAULT '0' COMMENT '1-till/0-not',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `designation`, `company`, `start_date`, `end_date`, `till`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Engineer', 'envato', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', '2023-06-07 11:43:14', NULL),
(4, 'Engineer', 'envato', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', '2023-06-07 11:43:14', NULL),
(5, 'Engineer', 'envato', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', '2023-06-07 11:43:14', NULL),
(6, 'Engineer', 'envato', '2023-06-07 ', '2023-06-07 ', 0, 'Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. ', '2023-06-07 11:43:14', NULL),
(8, 'fdsfds', 'fsdfds', '14 June 2023', NULL, 1, 'dfsfdsf', '2023-06-20 23:31:27', '2023-06-20 23:31:27'),
(9, 'hfdsf', 'fdsf', '07 June 2023', '14 June 2023', 1, 'sdfdsf', '2023-06-20 23:55:38', '2023-06-20 23:55:38'),
(10, 'fghgf', 'fghgf', '14 June 2023', '05 June 2023', 0, 'hgfhf', '2023-06-20 23:56:00', '2023-06-20 23:56:00'),
(12, 'f', 'df', '13 June 2023', '23 June 2023', 0, 'dsfds', '2023-06-20 23:57:37', '2023-06-20 23:57:37'),
(14, 'sadsad', 'dsadsa', '15 June 2023', '2023-06-14', 0, 'dsad', '2023-06-21 00:25:22', '2023-06-21 00:25:22'),
(15, 'new', 'fdsf', '07 June 2023', '30 June 2023', 0, 'fdsfds', '2023-06-21 00:27:05', '2023-06-21 00:27:05'),
(16, 'sdfds', 'fdsf', '08 June 2023', '2023-06-21', 0, 'fdsfds', '2023-06-21 00:29:53', '2023-06-21 00:29:53'),
(17, 'gfd', 'gfd', '21 June 2023', '2023-06-28', 0, 'dgfd', '2023-06-21 00:34:01', '2023-06-21 00:34:01'),
(19, 'dsaa', 'dsa', NULL, '2023-06-14', 0, 'das', '2023-06-21 00:36:03', '2023-06-21 00:36:03'),
(21, 'gfd', 'fd', '2023-06-01', '2023-06-21', 1, 'fd', '2023-06-21 02:18:49', '2023-06-21 02:18:49'),
(22, 'newdgdfg', 'dfgfdgfd', '2023-06-01', '2023-06-21', 1, 'dfgfdgd', '2023-06-21 02:19:09', '2023-06-21 02:19:09'),
(23, 'gdfgdgd', 'dgfdgdgfd', '2023-01-01', '2023-06-21', 1, 'gfdgdf', '2023-06-21 02:19:50', '2023-06-21 02:19:50'),
(24, 'ds', 'ds', '2023-05-31', '2023-06-22', 0, 'dsadasa', '2023-06-24 22:54:37', '2023-06-24 22:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_06_14_170143_create_services_table', 2),
(18, '2023_06_14_171320_create_categories_table', 3),
(22, '2023_06_14_171432_create_projects_table', 4),
(23, '2023_06_15_090515_create_protfolios_table', 4),
(26, '2023_06_15_090526_create_portfolios_table', 5),
(27, '2023_06_15_095224_create_skills_table', 5),
(28, '2023_06_15_113441_create_education_table', 6),
(29, '2023_06_15_113527_create_experiences_table', 6),
(30, '2023_06_15_163326_create_testimonials_table', 7),
(31, '2023_06_15_165111_create_pricings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `link`, `category_id`, `image`, `file`, `created_at`, `updated_at`) VALUES
(1, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(2, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(3, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(4, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(5, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(6, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(7, 're', 're', 're', 1, 'portfolio/main-1687678898.png', NULL, NULL, NULL),
(8, 'rrewr', 'wrwrwerwe', NULL, 1, 'portfolio/main-1687678898.png', NULL, '2023-06-17 23:59:10', '2023-06-17 23:59:10'),
(10, 'gd', 'g', NULL, 2, 'portfolio/main-1687678898.png', '$files', '2023-06-19 04:42:14', '2023-06-19 04:42:14'),
(11, 'fdsfds', 'update', NULL, 2, 'portfolio/main-1687678898.png', 'portfolio/portfolio-01687172995.png,portfolio/portfolio-11687172995.png,portfolio/portfolio-21687172995.png,portfolio/portfolio-31687172995.png,portfolio/portfolio-41687172995.png', '2023-06-19 05:09:55', '2023-06-19 05:55:42'),
(12, 'dasas', 'update', NULL, 1, 'portfolio/main-1687678898.png', 'portfolio/portfolio-01687175868.png,portfolio/portfolio-11687175868.png,portfolio/portfolio-21687175868.png,portfolio/portfolio-31687175868.png', '2023-06-19 05:57:48', '2023-06-19 05:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint UNSIGNED NOT NULL,
  `package` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `service` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `package`, `amount`, `service`, `created_at`, `updated_at`) VALUES
(1, 'update', 1500.00, '<li><i class=\"fa fa-check\"></i> Lorem ipsum dolor sit a</li>\r\n                                <li><i class=\"fa fa-check\"></i> Met, consecttetur adipisicing</li>\r\n                                <li><i class=\"fa fa-check\"></i> Elit sed do eiusmod</li>\r\n                                <li><i class=\"fa fa-check\"></i> Empor incididunt ut labore</li>', NULL, '2023-06-22 05:53:56'),
(2, 'prime', 1500.00, '<li><i class=\"fa fa-check\"></i> Lorem ipsum dolor sit a</li>\r\n                                <li><i class=\"fa fa-check\"></i> Met, consecttetur adipisicing</li>\r\n                                <li><i class=\"fa fa-check\"></i> Elit sed do eiusmod</li>\r\n                                <li><i class=\"fa fa-check\"></i> Empor incididunt ut labore</li>', NULL, NULL),
(4, 'sa', 32.00, '<li><i class=\"fa fa-check\"></i> Lorem ipsum dolor sit a</li>\r\n                                <li><i class=\"fa fa-check\"></i> Met, consecttetur adipisicing</li>\r\n                                <li><i class=\"fa fa-check\"></i> Elit sed do eiusmod</li>\r\n                                <li><i class=\"fa fa-check\"></i> Empor incididunt ut labore</li>', '2023-06-22 05:41:04', '2023-06-23 22:44:24'),
(7, 'dfds', 432.00, 'fsdfsf', '2023-06-24 22:55:13', '2023-06-24 22:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'icon-anchor', 'Web develop', 'Neque porro quisquam est quisit dolorem ipsum quia dolor sit amet consectetur\r\n                                    velit.', NULL, NULL),
(4, 'icon-anchor', 'Web Design', 'Neque porro quisquam est quisit dolorem ipsum quia dolor sit amet consectetur\r\n                                    velit.', NULL, NULL),
(5, 'icon-anchor', 'Web Design', 'Neque porro quisquam est quisit dolorem ipsum quia dolor sit amet consectetur\r\n                                    velit.', NULL, NULL),
(11, 'fds', 'fds', 'fdsfds', '2023-06-17 23:19:14', '2023-06-17 23:19:14'),
(12, 'sdfds', 'fdsfds', 'sdfdsfds', '2023-06-17 23:26:22', '2023-06-17 23:26:22'),
(13, 'adsa', 'asdas', 'dasdasadadaqewqeq24234', '2023-06-17 23:40:52', '2023-06-17 23:40:52'),
(14, 'dad', 'asd', 'das', '2023-06-24 22:48:52', '2023-06-24 22:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Lumion', 95, NULL, NULL),
(3, 'Lumion', 95, NULL, NULL),
(4, 'Lumion', 95, NULL, NULL),
(5, 'Lumion', 95, NULL, NULL),
(6, 'Lumion', 95, NULL, NULL),
(7, 'Lumion', 95, NULL, NULL),
(11, 'ddfgfd', 44, '2023-06-19 23:51:38', '2023-06-19 23:51:38'),
(12, 'sfdsfds', 49, '2023-06-19 23:53:19', '2023-06-19 23:53:19'),
(13, 'fsdfds', 51, '2023-06-19 23:54:16', '2023-06-19 23:54:16'),
(14, 'sdfdsf', 46, '2023-06-19 23:55:10', '2023-06-19 23:55:10'),
(15, 'dsdsgd', 58, '2023-06-19 23:57:02', '2023-06-19 23:57:02'),
(16, 'fdsfds', 54, '2023-06-19 23:57:31', '2023-06-19 23:57:31'),
(17, 'gdfg', 51, '2023-06-19 23:57:49', '2023-06-19 23:57:49'),
(18, 'sadsa', 38, '2023-06-19 23:58:30', '2023-06-19 23:58:30'),
(19, 'fdsfds', 41, '2023-06-20 00:42:56', '2023-06-20 00:42:56'),
(20, 'fdsfds', 51, '2023-06-20 00:43:50', '2023-06-20 00:43:50'),
(21, 'adas', 75, '2023-06-24 22:49:17', '2023-06-24 22:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `quote`, `image`, `designation`, `company`, `client`, `created_at`, `updated_at`) VALUES
(2, 're', 're', 're', 're', 're', NULL, NULL),
(3, 're', 're', 're', 're', 're', NULL, NULL),
(4, 're', 're', 're', 're', 're', NULL, NULL),
(5, 're', 're', 're', 're', 're', NULL, NULL),
(6, 're', 're', 're', 're', 're', NULL, NULL),
(7, 'update', '', 'update', 'update', 'update c', '2023-06-24 01:08:05', '2023-06-24 04:51:33'),
(8, 'update', '', 'dsa', 'adasd', 'dsad', '2023-06-24 22:56:20', '2023-06-24 23:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_bio` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `designation`, `email`, `phone`, `email_verified_at`, `password`, `image`, `resume`, `address`, `short_bio`, `long_bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anwar Jamshed', 'Civil Engineer', 'jamshed@gmail.com', '0199999999', NULL, '$2a$12$3b3ZESQLhjJUGNfmEcr7euAmqDUJgdCs0u6qly0YI14yGmU63IEk.', 'profile/1687762254.png', 'profile/main-1687678898.pdf', 'Cox\'s Bazar', 'sdfdssfds', 'What is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nWhy do we use it?\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL, '2023-06-26 00:50:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

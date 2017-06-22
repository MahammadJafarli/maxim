-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2017 at 02:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maxim`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_text`, `about_image`, `created_at`, `updated_at`) VALUES
(1, '   We live with creativity', '   Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.    ', '1497780955.png', '2017-06-17 17:22:00', '2017-06-18 05:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'News', '2017-06-21 11:55:04', '2017-06-21 11:55:04'),
(3, 'Tips', '2017-06-21 11:56:31', '2017-06-21 11:56:31'),
(4, 'Tutorial', '2017-06-21 11:58:30', '2017-06-21 11:58:30'),
(6, 'Blog', '2017-06-21 12:55:39', '2017-06-21 12:55:39'),
(7, 'Design', '2017-06-21 15:05:52', '2017-06-21 15:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_12_120017_create_categories_table', 1),
('2017_06_12_120138_create_posts_table', 1),
('2017_06_12_120237_create_post_categories_table', 1),
('2017_06_12_121331_create_works_table', 1),
('2017_06_12_121350_create_portfolios_table', 1),
('2017_06_12_121908_create_services_table', 1),
('2017_06_12_122039_create_positions_table', 1),
('2017_06_12_122040_create_teams_table', 1),
('2017_06_12_122722_create_abouts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `image`, `work_id`, `created_at`, `updated_at`) VALUES
(2, 'Facebook', '1498120493.png', 2, '2017-06-22 03:34:53', '2017-06-22 03:34:53'),
(3, 'Apple', '1498120521.png', 4, '2017-06-22 03:35:21', '2017-06-22 03:35:21'),
(4, 'Solution', '1498120545.png', 3, '2017-06-22 03:35:45', '2017-06-22 03:35:45'),
(5, 'Iphone', '1498120560.png', 5, '2017-06-22 03:36:00', '2017-06-22 03:36:00'),
(6, 'Maxim', '1498120574.png', 4, '2017-06-22 03:36:14', '2017-06-22 03:36:14'),
(7, 'Baku City', '1498120599.png', 2, '2017-06-22 03:36:39', '2017-06-22 03:36:39'),
(8, 'Formula1', '1498120616.png', 4, '2017-06-22 03:36:56', '2017-06-22 03:36:56'),
(10, 'HTP', '1498120667.png', 5, '2017-06-22 03:37:47', '2017-06-22 03:37:47'),
(11, 'Experiment', '1498120728.png', 2, '2017-06-22 03:38:48', '2017-06-22 03:38:48'),
(12, 'Safaroff', '1498120747.png', 5, '2017-06-22 03:39:07', '2017-06-22 03:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `position_name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position_name`, `created_at`, `updated_at`) VALUES
(2, 'Digital imaging', '2017-06-18 07:36:48', '2017-06-18 07:36:48'),
(3, 'UI designer', '2017-06-18 07:37:01', '2017-06-18 07:37:01'),
(4, 'Web designer', '2017-06-18 07:37:12', '2017-06-18 07:37:12'),
(5, 'Web developer', '2017-06-18 07:37:22', '2017-06-18 07:37:22'),
(6, 'Art director', '2017-06-18 07:37:32', '2017-06-18 07:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_text`, `post_image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Random String-lərin yaradılması', 'Bir çox saytlarda serverə yüklənən faylların adı öz adları kimi yox, heç bir məna daşımayan simvol yığını ilə yenidən adlandırırlar. Misal üçün YouTube linklərini göstərmək olar: https://www.youtube.com/watch?v=iQP6sRLdwZ8\r\nMən Python ilə bunu yazılma mən', '1498072653.png', 4, '2017-06-21 14:17:33', '2017-06-21 14:17:33'),
(4, ' PHP ilə HTML formalardan istifadə  !', ' Demək olar ki, bütün saytlarda formalardan istifadə olunur. Ən azından hesaba daxil olma və ya axtarış əməliyyatları üçün formalardan istifadə olunur. Bəs bu formaları doldurub göndərdikdən sonra PHP bunlarla nə edir?Bildiyimiz kimi HTML formaları for ', '1498075881.jpeg', 0, '2017-06-21 15:07:53', '2017-06-21 15:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_title` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `service_image`, `created_at`, `updated_at`) VALUES
(4, 'Ecommerce', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1497780769.png', '2017-06-18 05:12:49', '2017-06-18 05:12:49'),
(5, 'Photography', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1497781230.png', '2017-06-18 05:20:30', '2017-06-18 05:20:30'),
(6, 'Web development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1497781266.png', '2017-06-18 05:21:06', '2017-06-18 05:21:06'),
(7, 'Web design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1497781296.png', '2017-06-18 05:21:36', '2017-06-18 05:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `avatar`, `name`, `surname`, `position_id`, `created_at`, `updated_at`) VALUES
(2, '1497792966.jpeg', '   Stephen', '  B', 2, '2017-06-18 08:14:35', '2017-06-18 08:36:15'),
(3, '1497793059.jpeg', 'Mark', 'Joe', 3, '2017-06-18 08:37:39', '2017-06-18 08:37:39'),
(4, '1497793105.jpeg', 'Neil', 'Doe', 4, '2017-06-18 08:38:25', '2017-06-18 08:38:25'),
(5, '1497793317.jpeg', ' Mike', ' Doe', 5, '2017-06-18 08:39:07', '2017-06-18 08:41:57'),
(6, '1497793193.jpeg', 'John', 'Dow', 6, '2017-06-18 08:39:53', '2017-06-18 08:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'mahammad.c@code.edu.aze', '$2y$10$nSKHgoTCY77be0ff1G9ZY.zLZ4VA82MDYjK5FzSz90YKTOKXVy7g6', 'geIs6ZuzVk0BxeEO5SioQ4yUL06c9IOHSZCL465Nsq9uy46NZWrixVJlwmc9', '2017-06-14 01:43:12', '2017-06-21 07:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `work_name`, `created_at`, `updated_at`) VALUES
(2, 'Print', '2017-06-18 12:38:57', '2017-06-18 12:38:57'),
(3, 'Design', '2017-06-18 12:39:08', '2017-06-18 12:39:08'),
(4, 'Photography', '2017-06-18 12:39:28', '2017-06-18 12:39:28'),
(5, 'Web', '2017-06-21 14:05:13', '2017-06-21 14:05:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_work_id_index` (`work_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_position_id_index` (`position_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

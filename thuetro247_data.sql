-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 05:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuetro247_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `city`) VALUES
(1, 'Hoàn Kiếm', 'Hà Nội'),
(2, 'Tây Hồ', 'Hà Nội'),
(3, 'Ba Đình', 'Hà Nội'),
(4, 'Long Biên', 'Hà Nội'),
(5, 'Cầu Giấy', 'Hà Nội'),
(6, 'Đống Đa', 'Hà Nội'),
(7, 'Hai Bà Trưng', 'Hà Nội'),
(8, 'Hoàng Mai', 'Hà Nội'),
(9, 'Thanh Xuân', 'Hà Nội'),
(10, 'Sóc Sơn', 'Hà Nội'),
(11, 'Đông Anh', 'Hà Nội'),
(12, 'Gia Lâm', 'Hà Nội'),
(13, 'Nam Từ Liêm', 'Hà Nội'),
(14, 'Bắc Từ Liêm', 'Hà Nội'),
(15, 'Yên Mỹ', 'Hưng Yên'),
(16, 'Văn Giang', 'Hưng Yên');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phòng trọ', '2020-02-18 02:25:30', '2020-02-18 02:25:30'),
(2, 'Nhà nguyên căn', '2020-02-18 02:26:09', '2020-02-18 02:26:09'),
(3, 'Chung cư mini', '2020-02-18 02:26:09', '2020-02-18 02:26:09'),
(4, 'Ký túc xá', '2020-02-18 02:26:09', '2020-02-18 02:26:09'),
(5, 'Homestay', '2020-02-18 02:26:09', '2020-02-18 02:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `motelroom_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `motelroom_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'phongtro.jpg\r\n', '2020-02-18 02:51:54', '2020-02-18 02:51:54'),
(2, 1, 'phongtro1.jpg\r\n', '2020-02-18 02:51:59', '2020-02-18 02:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `list_uti`
--

CREATE TABLE `list_uti` (
  `motelroom_id` int(10) UNSIGNED NOT NULL,
  `utility_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_uti`
--

INSERT INTO `list_uti` (`motelroom_id`, `utility_id`, `quantity`) VALUES
(1, 2, 1),
(1, 3, 1),
(1, 7, 1);

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motelroom`
--

CREATE TABLE `motelroom` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `price` float NOT NULL,
  `area` tinyint(3) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `view` int(10) NOT NULL DEFAULT 0,
  `num_change` int(2) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motelroom`
--

INSERT INTO `motelroom` (`id`, `title`, `type_id`, `form_id`, `user_id`, `price`, `area`, `content`, `district_id`, `address`, `phone`, `view`, `num_change`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cho Thuê Phòng Trọ Giá Rẻ', 1, 1, 1, 1500000, 25, 'Nhà trọ mới xây, đẹp gọn .\r\nKhu vực an ninh tốt , không chung chủ\r\nGiờ giấc thoải mái.', 13, 'Số 13 - Phố Nhổn - Nam Từ Liêm - Hà Nội', 376521198, 0, 0, 0, '2020-02-18 02:49:21', '2020-02-18 02:49:21'),
(2, 'Cho Thuê Phòng Trọ Giá Rẻ', 1, 1, 1, 1500000, 25, 'Nhà trọ mới xây, đẹp gọn .\r\nKhu vực an ninh tốt , không chung chủ\r\nGiờ giấc thoải mái.', 13, 'Số 13 - Phố Nhổn - Nam Từ Liêm - Hà Nội', 376521198, 0, 0, 1, '2020-02-18 02:49:24', '2020-02-18 02:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`id`, `name`, `title`, `content`, `status`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Hà Văn Tú', 'Cần Sửa Phần giao diện ', 'Giao diện cần trực quan hơn', 0, 'hatu1998hy@gmail.com', '2020-02-17 04:57:03', '2020-02-17 04:57:03');

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
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cho thuê', '2020-02-18 02:28:43', '2020-02-18 02:28:43'),
(2, 'Ở ghép', '2020-02-18 02:29:03', '2020-02-18 02:29:03'),
(3, 'Tìm phòng', '2020-02-18 02:29:14', '2020-02-18 02:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `vip` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `role`, `status`, `vip`, `phone`, `avatar`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tú Hà Văn', 'hatu1998hy@gmail.com', NULL, 'Hoàn Long- Yên Mỹ- hưng Yên', 0, 1, 1, '01676521198', NULL, 'GOOGLE', '110187003478403466710', '2a4vZb2t2aTufYLBXBRbW50TnRU4ELWFqbaEQHZPThvxDdHDgzPbEzKCiKmJ', '2020-02-06 19:50:11', '2020-02-06 19:50:11'),
(2, 'Tú Hà', 'hatu14398@gmail.com', NULL, '', 0, 1, 0, NULL, NULL, 'GOOGLE', '108387055386409552623', 'dyXpKqbVCXFT65ZWy5zzOnCJjGMwFSth5GRaEYDPxAeOPkIr2kfI2xIX4P9o', '2020-02-06 20:04:10', '2020-02-06 20:04:10'),
(3, 'Hà Văn Tú', 'thuetro247@gmail.com', '$2y$10$J6A7JACNXlfOeaW2cAjldeKGa4bqUD3.HDJUn8FRVKJB7jHBwaqnG', '', 1, 1, 2, '0376521198', NULL, NULL, NULL, NULL, '2020-02-06 21:23:52', '2020-02-06 21:23:52'),
(4, 'Hà Văn Tú', 'hatu1@gmail.com', '$2y$10$fmglj4LDp/.OUr8ceOJEluylI1.8WK4K.6DASOYCW9Z9UplFofqTi', '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2020-02-07 00:00:55', '2020-02-07 00:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gác lửng', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(2, 'Wifi', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(3, 'Bình nóng lạnh', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(4, 'Điều hòa', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(5, 'Kệ bếp', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(6, 'Ban công', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(7, 'Bãi xe', '2020-02-18 02:38:19', '2020-02-18 02:38:19'),
(8, 'Camera an ninh ', '2020-02-18 02:38:19', '2020-02-18 02:38:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motelroom_id` (`motelroom_id`);

--
-- Indexes for table `list_uti`
--
ALTER TABLE `list_uti`
  ADD PRIMARY KEY (`motelroom_id`,`utility_id`),
  ADD KEY `utility_id` (`utility_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motelroom`
--
ALTER TABLE `motelroom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motelroom_ibfk_4` (`user_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_uti`
--
ALTER TABLE `list_uti`
  MODIFY `motelroom_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motelroom`
--
ALTER TABLE `motelroom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utility`
--
ALTER TABLE `utility`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`motelroom_id`) REFERENCES `motelroom` (`id`);

--
-- Constraints for table `list_uti`
--
ALTER TABLE `list_uti`
  ADD CONSTRAINT `list_uti_ibfk_1` FOREIGN KEY (`motelroom_id`) REFERENCES `motelroom` (`id`),
  ADD CONSTRAINT `list_uti_ibfk_2` FOREIGN KEY (`utility_id`) REFERENCES `utility` (`id`);

--
-- Constraints for table `motelroom`
--
ALTER TABLE `motelroom`
  ADD CONSTRAINT `motelroom_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `motelroom_ibfk_5` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `motelroom_ibfk_6` FOREIGN KEY (`form_id`) REFERENCES `form` (`id`),
  ADD CONSTRAINT `motelroom_ibfk_7` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

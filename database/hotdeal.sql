-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2018 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotdeal`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advertises`
--

CREATE TABLE `advertises` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `order` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_filter_city` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `order`, `status`, `is_filter_city`, `created_at`, `updated_at`) VALUES
(1, 0, 'Fitness', 'fitness', 1, 1, 0, '2018-04-08 11:00:21', '2018-04-08 11:00:21'),
(2, 0, 'Đồ tập gym - yoga', 'do-tap-gym-yoga', 2, 1, 0, '2018-04-08 11:00:21', '2018-04-08 11:00:21'),
(3, 0, 'Bể bơi', 'be-boi', 3, 1, 0, '2018-04-08 11:01:23', '2018-04-08 11:01:23'),
(4, 0, 'Khu vui chơi - giải trí', 'khu-vui-choi-giai-tri', 4, 1, 0, '2018-04-08 11:01:23', '2018-04-08 11:01:23'),
(5, 0, 'Thực phẩm giảm cân', 'thuc-pham-giam-can', 5, 1, 0, '2018-04-08 11:02:39', '2018-04-08 11:02:39'),
(6, 0, 'Khóa học online', 'khoa-hoc-online', 6, 1, 0, '2018-04-08 11:02:39', '2018-04-08 11:02:39'),
(7, 0, 'Mỹ phẩm & Làm đẹp', 'my-pham-lam-dep', 7, 1, 0, '2018-04-08 11:03:50', '2018-04-08 11:03:50'),
(8, 0, 'Spa & Thư giãn', 'spa-thu-gian', 8, 1, 0, '2018-04-08 11:03:50', '2018-04-08 11:03:50'),
(9, 1, 'Tập gym', 'tap-gym', 1, 1, 0, '2018-04-08 11:05:19', '2018-04-08 11:05:19'),
(10, 1, 'Tập yoga', 'tap-yoga', 2, 1, 0, '2018-04-08 11:05:19', '2018-04-08 11:05:19'),
(11, 1, 'Zumba', 'zumba', 3, 1, 0, '2018-04-08 11:06:24', '2018-04-08 11:06:24'),
(12, 1, 'Sexy dance', 'sexy-dance', 4, 1, 0, '2018-04-08 11:06:24', '2018-04-08 11:06:24'),
(13, 1, 'Kpop dance', 'kpop-dance', 5, 1, 0, '2018-04-08 11:06:51', '2018-04-08 11:06:51'),
(14, 2, 'Quần áo & Phụ kiện gym', 'quan-ao-phu-kien-gym', 1, 1, 0, '2018-04-08 11:08:36', '2018-04-08 11:08:36'),
(15, 2, 'Quần áo yoga - zumba', 'quan-ao-yoga-zumba', 2, 1, 0, '2018-04-08 11:08:36', '2018-04-08 11:08:36'),
(16, 3, 'Vé bơi', 've-boi', 1, 1, 0, '2018-04-08 11:12:12', '2018-04-08 11:12:12'),
(17, 3, 'Học bơi', 'hoc-boi', 2, 1, 0, '2018-04-08 11:12:12', '2018-04-08 11:12:12'),
(18, 3, 'Đồ tập bơi', 'do-tap-boi', 3, 1, 0, '2018-04-08 11:12:30', '2018-04-08 11:12:30'),
(19, 4, 'Thỏa thích vui chơi', 'thoa-thich-vui-choi', 1, 1, 0, '2018-04-08 11:15:46', '2018-04-08 11:15:46'),
(20, 4, 'Trọn gói quay phim - chụp ảnh', 'tron-goi-quay-phim-chup-anh', 2, 1, 0, '2018-04-08 11:15:46', '2018-04-08 11:15:46'),
(21, 5, 'Thảo dược giẩm cân', 'thao-duoc-giam-can', 1, 1, 0, '2018-04-08 11:16:42', '2018-04-08 11:16:42'),
(22, 5, 'Dinh dưỡng tập luyện', 'dinh-duong-tap-luyen', 2, 1, 0, '2018-04-08 11:16:42', '2018-04-08 11:16:42'),
(23, 6, 'Khóa học yoga', 'khoa-hoc-yoga', 1, 1, 0, '2018-04-08 11:17:29', '2018-04-08 11:17:29'),
(24, 6, 'Khóa học zumba', 'khoa-hoc-zumba', 2, 1, 0, '2018-04-08 11:17:29', '2018-04-08 11:17:29'),
(25, 7, 'Trang điểm', 'trang-diem', 1, 1, 0, '2018-04-08 11:18:02', '2018-04-08 11:18:02'),
(26, 7, 'Dưỡng da', 'duong-da', 2, 1, 0, '2018-04-08 11:18:02', '2018-04-08 11:18:02'),
(27, 8, 'Hair salon', 'hair-salon', 1, 1, 0, '2018-04-08 11:18:31', '2018-04-08 11:18:31'),
(28, 8, 'Spa', 'spa', 2, 1, 0, '2018-04-08 11:18:31', '2018-04-08 11:18:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `logo` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `time_work` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `general_info`
--

CREATE TABLE `general_info` (
  `intro` text,
  `policy_delivery` text,
  `policy_payment` text,
  `policy_security` text,
  `shopping_guide` text,
  `term_of_use` text,
  `recruitment` text,
  `sale_new` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `order` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `fulltext` text,
  `image` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `sub_amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `amount` decimal(15,4) DEFAULT '0.0000',
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_info` text,
  `message` text,
  `note` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(15,4) DEFAULT '0.0000',
  `discount` int(10) NOT NULL DEFAULT '0',
  `promo1` varchar(255) DEFAULT NULL,
  `promo2` varchar(255) DEFAULT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `is_feature` tinyint(1) NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(10) DEFAULT NULL,
  `size` varchar(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_city`
--

CREATE TABLE `product_city` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_seo`
--

CREATE TABLE `product_seo` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province_city`
--

CREATE TABLE `province_city` (
  `id` int(11) NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`) VALUES
(1, 'Superadmin', 1),
(2, 'Admin', 0),
(3, 'User', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `confirmation_code` text,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '1',
  `jwt_token` text,
  `remember_token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `fullname`, `email`, `avatar`, `password`, `mobile`, `address`, `birthday`, `sex`, `bio`, `status`, `confirmation_code`, `is_confirmed`, `jwt_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'superadmin', 'SuperAdmin', 'admin@admin.com', NULL, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, '3tqGaj12TXrIZs74h53z22sp71Tzrjl3OU54n2vhhtssgGbg7ahc5rgC48vb', '2018-04-08 03:19:28', '2018-04-08 03:19:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_city`
--
ALTER TABLE `product_city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_seo`
--
ALTER TABLE `product_seo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `province_city`
--
ALTER TABLE `province_city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_city`
--
ALTER TABLE `product_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_seo`
--
ALTER TABLE `product_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `province_city`
--
ALTER TABLE `province_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

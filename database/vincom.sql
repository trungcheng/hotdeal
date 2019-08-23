-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 12:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vincom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Khối Vận hành', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-van-hanh', NULL, 1, '2019-04-01 02:21:04', '2019-08-22 20:15:30'),
(2, 1, 'Miền Bắc 1', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-bac-1', NULL, 1, '2019-04-01 22:02:08', '2019-04-01 22:02:08'),
(3, 1, 'Miền Bắc 2', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-bac-2', NULL, 1, '2019-04-18 09:02:05', '2019-04-18 09:02:05'),
(4, 0, 'Khối Xây Dựng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-xay-dung', NULL, 1, '2019-04-23 03:32:59', '2019-08-22 20:16:00'),
(5, 0, 'Tài chính – Hành chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'tai-chinh-hanh-chinh', NULL, 1, '2019-08-15 18:04:37', '2019-08-22 20:16:16'),
(6, 4, 'BQL Xây Dựng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'bql-xay-dung', NULL, 1, '2019-08-22 09:43:02', '2019-08-22 20:18:08'),
(7, 4, 'Văn Phòng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'van-phong', NULL, 1, '2019-08-22 09:43:17', '2019-08-22 20:18:23'),
(8, 5, 'Tài chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'tai-chinh', NULL, 1, '2019-08-22 09:43:30', '2019-08-22 20:18:39'),
(9, 5, 'Hành chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'hanh-chinh', NULL, 1, '2019-08-22 09:43:42', '2019-08-22 20:18:54'),
(10, 0, 'Khối phòng ban khác', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-phong-ban-khac', NULL, 1, '2019-08-22 20:16:45', '2019-08-22 20:16:45'),
(11, 1, 'Miền Nam 1', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-nam-1', NULL, 1, '2019-08-22 20:17:05', '2019-08-22 20:17:05'),
(12, 1, 'Miền Nam 2', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-nam-2', NULL, 1, '2019-08-22 20:17:22', '2019-08-22 20:17:22'),
(13, 10, 'Nhân sự đào tạo', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'nhan-su-dao-tao', NULL, 1, '2019-08-22 20:19:15', '2019-08-22 20:19:15'),
(14, 10, 'An ninh an toàn', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'an-ninh-an-toan', NULL, 1, '2019-08-22 20:19:42', '2019-08-22 20:20:22'),
(15, 10, 'Công nghệ thông tin', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'cong-nghe-thong-tin', NULL, 1, '2019-08-22 20:20:04', '2019-08-22 20:20:04'),
(16, 10, 'Sales & Marketing', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'sales-marketing', NULL, 1, '2019-08-22 20:20:41', '2019-08-22 20:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `round_id` int(11) DEFAULT NULL,
  `user_vote` int(11) DEFAULT NULL,
  `vote_for` int(11) DEFAULT NULL,
  `vote_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `round_id`, `user_vote`, `vote_for`, `vote_count`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 3, 1, '2019-08-20 14:59:57', '2019-08-20 14:59:57'),
(2, 1, 8, 5, 1, '2019-08-20 15:00:05', '2019-08-20 15:00:05'),
(3, 1, 8, 6, 1, '2019-08-20 15:00:11', '2019-08-20 15:00:11'),
(4, 2, 9, 7, 1, '2019-08-20 15:05:59', '2019-08-20 15:05:59'),
(5, 2, 9, 5, 1, '2019-08-20 16:43:45', '2019-08-20 16:43:45'),
(6, 2, 8, 7, 1, '2019-08-20 15:07:46', '2019-08-20 15:07:46'),
(7, 2, 8, 5, 1, '2019-08-20 16:43:57', '2019-08-20 16:43:57'),
(8, 1, 3, 5, 1, '2019-08-23 08:38:44', '2019-08-23 08:38:44'),
(9, 1, 3, 5, 1, '2019-08-23 08:51:08', '2019-08-23 08:51:08'),
(10, 1, 3, 5, 1, '2019-08-23 08:54:40', '2019-08-23 08:54:40'),
(11, 1, 3, 5, 1, '2019-08-23 08:58:12', '2019-08-23 08:58:12'),
(12, 1, 3, 6, 1, '2019-08-23 09:05:05', '2019-08-23 09:05:05'),
(15, 1, 3, 15, 1, '2019-08-23 09:38:34', '2019-08-23 09:38:34'),
(17, 1, 3, 14, 1, '2019-08-23 09:40:29', '2019-08-23 09:40:29'),
(18, 1, 3, 3, 1, '2019-08-23 10:00:59', '2019-08-23 10:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`) VALUES
(1, 'Superadmin', 1),
(2, 'Admin', 0),
(3, 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

CREATE TABLE `rounds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `is_running` tinyint(1) DEFAULT '0',
  `is_reset_vote` tinyint(1) DEFAULT '0',
  `user_select_count` int(11) DEFAULT NULL,
  `visible_menu` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rounds`
--

INSERT INTO `rounds` (`id`, `name`, `description`, `slug`, `from_date`, `to_date`, `is_running`, `is_reset_vote`, `user_select_count`, `visible_menu`, `created_at`, `updated_at`) VALUES
(1, 'Vòng 1', NULL, 'vong-1', '2019-08-18 15:22:41', '2019-08-30 15:22:44', 1, 0, 30, 0, '2019-08-23 08:38:03', '2019-08-23 08:38:03'),
(2, 'Vòng 2', NULL, 'vong-2', '2019-08-18 10:18:57', '2019-09-29 10:19:01', 0, 0, 30, 0, '2019-08-23 08:38:07', '2019-08-23 08:38:07'),
(3, 'Vòng kết quả', NULL, 'vong-ket-qua', '2019-09-10 10:19:48', '2019-09-20 10:20:01', 0, 0, 15, 0, '2019-08-20 03:20:08', '2019-08-19 20:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `image_home_page` varchar(500) DEFAULT NULL,
  `content_home_page` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `slogan`, `email`, `mobile`, `address`, `work_time`, `logo`, `image_home_page`, `content_home_page`, `created_at`, `updated_at`) VALUES
(1, 'Vincom Retail', NULL, NULL, NULL, NULL, NULL, '/backend/uploads/images/logo.png', '/backend/uploads/images/bg-home.png', '<h3>TIÊU CHÍ ĐÁNH GIÁ</h3><h4>1. LÀ TẤM GƯƠNG TIÊU BIỂU TRONG CÔNG VIỆC</h4><ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi</li><li>- Kết quả đánh giá Quý đạt 80% trở lên</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc</li></ul><h4>2. LÀ TẤM GƯƠNG TIÊU BIỂU CỦA TINH THẦN DỊCH VỤ VINCOM</h4><p>Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</p><h4>3. ƯU TIÊN CÁC TRƯỜNG HỢP ĐƯỢC VINH DANH TRÊN TRUYỀN THÔNG</h4><p>Các trường hợp được vinh danh trên truyền thông sẽ được ưu tiên (VD: Vinh danh trên báo chí, Vinclub, quyết định khen thưởng như: Cứu người gặp nạn, nhặt được của rơi trả lại người mất, giúp đỡ khách hàng, phát hiện và ngăn chặn kịp thời các rủi ro xảy ra, phát hiện, báo cáo, đấu tranh, ngăn chặn các hành vi sai phạm, tiêu cực, hành vi vi phạm pháp luật, ...)<br>​​​​​​​</p><h3>THỂ THỨC THAM GIA</h3><ul><li>- Thời gian tham gia bình chọn: 1/9/2019 - 30/9/2019</li><li>- Đối tượng: Toàn thể CBNV công ty</li><li>- Hình thức dự thi: Bình chọn online trên hệ thống</li><li>- Cách thức tổ chức: Thi đấu bình chọn của CBNV theo vòng từ cấp bộ phận, cơ sở, vùng và toàn công ty.</li><li>Đến cấp vùng/công ty, mỗi ứng viên sẽ có các clip giới thiệu bản thân để CBNV toàn quốc có thể bình chọn dễ dàng.</li></ul>', '2019-08-23 05:20:27', '2019-08-22 22:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `content` text,
  `avatar` varchar(100) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `total_vote` int(11) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `cat_id`, `username`, `full_name`, `email`, `intro`, `content`, `avatar`, `video`, `total_vote`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'admin', 'Nguyễn Át Min', 'admin@admin.com', '', NULL, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, '5F8UmI2EGsTqzXFOl9ZkykdDilouRpK6GTc5pIPbqiI22Ktvr8kJgBMtCyRZ', '2018-04-08 03:19:28', '2018-07-01 21:01:35'),
(3, 3, 2, '', 'Hoàng Văn Hải', '', 'Lập trình viên cấp cao', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 69697, '', 1, 1, '', '2019-04-23 02:28:28', '2019-08-22 22:01:41'),
(5, 3, 3, '', 'Đinh Trung', '', 'Chuyên viên thiết kế animation', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 23236, '', 1, 1, '', '2019-04-23 21:21:40', '2019-08-18 21:56:43'),
(6, 3, 6, NULL, 'Mạnh Hiển', NULL, 'Designer', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 56566, NULL, 1, 1, NULL, '2019-08-19 11:14:36', '2019-08-22 21:37:36'),
(7, 3, 8, NULL, 'Dương Hoàng', NULL, 'Tester', '', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 12345, NULL, 1, 1, NULL, '2019-08-19 11:15:05', '2019-08-22 21:37:48'),
(8, 2, 2, 'namnt', 'Nguyễn Thành Nam', 'nam@gmail.com', NULL, NULL, '', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, 'ORaeAel7nNmhrvi9INvkBMyrNlaLq8I2nqxvc10SAYwQu08NcAdAKbNW6y3y', '2019-08-20 14:55:57', '2019-08-20 14:55:57'),
(9, 3, 1, 'thuynv', 'Nguyễn Văn Thủy', 'thuy@gmail.com', NULL, NULL, '', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, NULL, '2019-08-20 14:56:19', '2019-08-20 14:56:19'),
(10, NULL, NULL, 'newton', 'newton', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-22 16:14:40', '2019-08-22 16:14:40'),
(11, NULL, NULL, 'einstein', 'einstein', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-22 16:16:18', '2019-08-22 16:16:18'),
(13, 3, 0, 'galieleo', 'galieleo', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-23 08:23:25', '2019-08-23 08:23:25'),
(14, 3, 2, NULL, 'Nguyễn Hương Ly', NULL, 'Account', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', '/backend/uploads/images/68496060_2070629729707894_3707300931071639552_n.jpg', NULL, 2, NULL, 1, 1, NULL, '2019-08-23 02:08:07', '2019-08-23 02:08:07'),
(15, 3, 3, NULL, 'Trang Mít', NULL, 'Account', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', '/backend/uploads/images/68496060_2070629729707894_3707300931071639552_n.jpg', NULL, 3, NULL, 1, 1, NULL, '2019-08-23 02:22:54', '2019-08-23 02:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_round`
--

CREATE TABLE `user_round` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `round_id` int(11) DEFAULT NULL,
  `vote` int(11) DEFAULT '0',
  `is_selected` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_round`
--

INSERT INTO `user_round` (`id`, `user_id`, `round_id`, `vote`, `is_selected`, `created_at`, `updated_at`) VALUES
(9, 3, 1, 2, 1, '2019-08-23 10:00:59', '2019-08-23 10:00:59'),
(10, 5, 1, 5, 1, '2019-08-23 08:58:12', '2019-08-23 08:58:12'),
(11, 6, 1, 2, 0, '2019-08-23 09:05:05', '2019-08-23 09:05:05'),
(12, 7, 1, 0, 1, '2019-08-20 16:47:08', '2019-08-20 16:47:08'),
(21, 3, 2, 0, 0, '2019-08-20 01:04:00', '2019-08-20 01:04:00'),
(22, 5, 2, 2, 0, '2019-08-20 16:45:08', '2019-08-20 16:45:08'),
(23, 7, 2, 2, 0, '2019-08-20 16:46:20', '2019-08-20 16:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_round`
--
ALTER TABLE `user_round`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rounds`
--
ALTER TABLE `rounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_round`
--
ALTER TABLE `user_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

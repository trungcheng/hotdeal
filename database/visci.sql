/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50727
Source Host           : localhost:3306
Source Database       : visci

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2020-06-25 21:38:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `intro` text,
  `fulltext` text,
  `image` varchar(255) DEFAULT NULL,
  `photos` text,
  `video` varchar(255) DEFAULT NULL,
  `is_about` tinyint(1) DEFAULT '0',
  `is_feature` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', 'Terms & Policies', 'term-policy', null, null, null, null, null, '0', '0', '1', '0', 'page', null, null, null, '2020-06-25 18:46:13', '2020-06-25 19:03:48');
INSERT INTO `articles` VALUES ('2', '1', 'FAQs', 'faqs', null, null, null, null, null, '0', '0', '1', '0', 'page', null, null, null, '2020-06-25 18:46:27', '2020-06-25 18:46:27');

-- ----------------------------
-- Table structure for article_translations
-- ----------------------------
DROP TABLE IF EXISTS `article_translations`;
CREATE TABLE `article_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `title` varchar(191) NOT NULL,
  `intro` text NOT NULL,
  `fulltext` text NOT NULL,
  `locale` varchar(191) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `article_translations_article_id_locale_unique` (`article_id`,`locale`) USING BTREE,
  KEY `article_translations_locale_index` (`locale`) USING BTREE,
  CONSTRAINT `article_translations_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of article_translations
-- ----------------------------
INSERT INTO `article_translations` VALUES ('1', '1', 'Terms & Policies', '.', 'Updating...', 'en');
INSERT INTO `article_translations` VALUES ('2', '1', 'Điều khoản & Chính sách', '.', 'Đang cập nhật...', 'vi');
INSERT INTO `article_translations` VALUES ('3', '2', 'FAQs', '.', 'Updating...', 'en');
INSERT INTO `article_translations` VALUES ('4', '2', 'Các câu hỏi thường gặp', '.', 'Đang cập nhật...', 'vi');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  `is_home` tinyint(1) DEFAULT '1',
  `layout` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for category_translations
-- ----------------------------
DROP TABLE IF EXISTS `category_translations`;
CREATE TABLE `category_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `locale` varchar(191) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`) USING BTREE,
  KEY `category_translations_locale_index` (`locale`) USING BTREE,
  CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of category_translations
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2019_12_05_110228_create_category_translations_table', '1');
INSERT INTO `migrations` VALUES ('2', '2019_12_05_110303_create_article_translations_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_12_06_203404_create_setting_translations_table', '2');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Superadmin', '1');
INSERT INTO `roles` VALUES ('2', 'Admin', '0');
INSERT INTO `roles` VALUES ('3', 'User', '0');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `google_map_url` text,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `partner_logos` text,
  `bg_slogan_slide` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'CÔNG TY CỔ PHẦN UTICO', 'CÔNG TY CỔ PHẦN UTICO', 'www.visci.org', 'https://www.facebook.com', 'https://maps.google.com/maps?q=s%E1%BB%91%201%20nguy%E1%BB%85n%20huy%20t%C6%B0%E1%BB%9Fng&t=&z=17&ie=UTF8&iwloc=&output=embed', 'info@visci.org', '0246.666.6966', '+84. 24 3767 5169', 'Số 31, Ngách 27, Ngõ 16 Huỳnh Thúc Kháng, Láng Hạ, Đống Đa, Hà Nội', null, '/backend/uploads/images/logo.png', '[{\"image\":\"\\/frontend\\/images\\/logo-w-university2x.png\",\"link\":\"https:\\/\\/www.washington.edu\"},{\"image\":\"\\/frontend\\/images\\/logo-nasa2x.png\",\"link\":\"https:\\/\\/www.nasa.gov\"},{\"image\":\"\\/frontend\\/images\\/logo-adpc2x.png\",\"link\":\"http:\\/\\/www.adpc.net\\/\"},{\"image\":\"\\/frontend\\/images\\/logo-nawapi2x.png\",\"link\":\"https:\\/\\/nawapi.gov.vn\"},{\"image\":\"\\/frontend\\/images\\/logo-sevirmekong2x.png\",\"link\":\"https:\\/\\/servir.adpc.net\"},{\"image\":\"\\/frontend\\/images\\/logo-usaid2x.png\",\"link\":\"https:\\/\\/www.usaid.gov\"}]', '/backend/uploads/images/bg.jpg', 'VISCI', 'VISCI is a group that bringing about changes towards more substainable and smarter cities.', 'VISCI', '2020-06-25 21:32:11', '2020-06-25 21:32:11');

-- ----------------------------
-- Table structure for setting_translations
-- ----------------------------
DROP TABLE IF EXISTS `setting_translations`;
CREATE TABLE `setting_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting_id` int(10) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `slogan` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `locale` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  KEY `setting_translations_locale_index` (`locale`),
  CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `setting` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting_translations
-- ----------------------------
INSERT INTO `setting_translations` VALUES ('1', '1', 'VISCI', 'VISCI là 1 nhóm mang lại hướng thay đổi nhiều hơn về thành phố thông minh', 'National University of Civil Engineering (NUCE) - No. 55, Giai Phong Road, Ha Noi City, Viet Nam', 'vi');
INSERT INTO `setting_translations` VALUES ('3', '1', 'VISCI', 'VISCI is a group that bringing about changes towards more substainable and smarter cities.', 'National University of Civil Engineering (NUCE) - No. 55, Giai Phong Road, Ha Noi City, Viet Nam', 'en');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin', 'Nguyễn Át Min', 'admin@gmail.com', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', 'e6GApgIjCpOjoOnwP36tl2FYWqptzf4SNsfObACBwY41nqUT9u6FvwlJSMJ8', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('10', '3', 'newton', 'newton', 'newton@gmail.com', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', 'oN8rkq6IrM5PbNb5ktbJ1ALdPducuByOGZNWDwHuKKcom5S2iqWDxKJgnkqy', '2019-08-22 23:14:40', '2019-08-22 23:14:40');
INSERT INTO `users` VALUES ('11', '3', 'einstein', 'einstein', 'einstein@gmail.com', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', 'oN8rkq6IrM5PbNb5ktbJ1ALdPducuByOGZNWDwHuKKcom5S2iqWDxKJgnkqy', '2019-08-22 23:16:18', '2019-08-22 23:16:18');
INSERT INTO `users` VALUES ('13', '3', 'galieleo', 'galieleo', 'galieleo@gmail.com', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', 'oN8rkq6IrM5PbNb5ktbJ1ALdPducuByOGZNWDwHuKKcom5S2iqWDxKJgnkqy', '2019-08-23 15:23:25', '2019-08-23 15:23:25');

-- ----------------------------
-- Table structure for user_onlines
-- ----------------------------
DROP TABLE IF EXISTS `user_onlines`;
CREATE TABLE `user_onlines` (
  `uo_id` int(11) NOT NULL AUTO_INCREMENT,
  `uo_session` varchar(100) DEFAULT NULL,
  `uo_time` int(11) DEFAULT NULL,
  `uo_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`uo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_onlines
-- ----------------------------
INSERT INTO `user_onlines` VALUES ('1', 'sp9jt8hpt06bpht9hr5pceo2j6', '1575656092', '1');
INSERT INTO `user_onlines` VALUES ('2', 'uj7qr81okkkhr0ji6n6qh6r4rg', '1575804962', '1');
INSERT INTO `user_onlines` VALUES ('3', 'eq2f8rus5ristb4jtnqbkik735', '1575782409', '1');
INSERT INTO `user_onlines` VALUES ('4', 'gg1mne4ll000psr362g57do8du', '1575781496', '1');
INSERT INTO `user_onlines` VALUES ('5', 'ideui2t48dhomsrtalupdqt0ih', '1575781496', '1');
INSERT INTO `user_onlines` VALUES ('6', 'bb4fehur0u4id7fkdeb5dat7m3', '1575781498', '1');
INSERT INTO `user_onlines` VALUES ('7', '9nc9n5tq8knsdtjccnsv157lm0', '1575781500', '1');
INSERT INTO `user_onlines` VALUES ('8', '1tnc9oi0s88mvh4ebablvvm2nl', '1575781500', '1');
INSERT INTO `user_onlines` VALUES ('9', 'futdn30jjaq51jtbg15pcce8vv', '1575781501', '1');
INSERT INTO `user_onlines` VALUES ('10', 'ad2tshfnk027i2fmmndim407ph', '1575800887', '1');
INSERT INTO `user_onlines` VALUES ('11', 'nlffac2nhdscqggit3k6pcujgn', '1575784727', '1');
INSERT INTO `user_onlines` VALUES ('12', '5rtt1e0du6i1fe2ptvsa708t7b', '1575787961', '1');
INSERT INTO `user_onlines` VALUES ('13', 'g22na198orbao0b7ichp3atvmh', '1575791139', '1');
INSERT INTO `user_onlines` VALUES ('14', '5re9p7pb2kt5kln5p8hu1p7bkk', '1575789821', '1');
INSERT INTO `user_onlines` VALUES ('15', '7g59m0pbjtcf9jrkr8rn221j1p', '1575791043', '1');
INSERT INTO `user_onlines` VALUES ('16', '6m0hi5s3vmddj3tgjs7bq7v522', '1575804977', '1');
INSERT INTO `user_onlines` VALUES ('17', 'pp73jefc3gj2id965j9b236b9n', '1575805503', '1');
INSERT INTO `user_onlines` VALUES ('18', 'oeekfhsgfdelhf15bofc1851un', '1575805631', '1');
INSERT INTO `user_onlines` VALUES ('19', '43deraldnma6i1sc40eqd4tsv1', '1575824250', '1');
INSERT INTO `user_onlines` VALUES ('20', 'b8tijoiafhacht8gglvra0k5tl', '1575994311', '1');
INSERT INTO `user_onlines` VALUES ('21', 'nig5t62sjmouuv37jlbns5cnmh', '1593019752', '1');
INSERT INTO `user_onlines` VALUES ('22', 'b3iijudapmegtb14vbfrt2785q', '1593095797', '0');

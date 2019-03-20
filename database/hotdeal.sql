/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : hotdeal

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-20 17:23:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for advertises
-- ----------------------------
DROP TABLE IF EXISTS `advertises`;
CREATE TABLE `advertises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `order` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of advertises
-- ----------------------------

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', '123', '123', '123', '123', 'http://chauruabat.net/wp-content/uploads/2016/07/chau-rua-chen-don-300x300.jpg', 'hihi,haha', '1', '26', '2019-03-19 10:53:31', '2019-03-19 10:53:31');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_filter_city` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '0', 'Đồ tập gym - yoga', 'do-tap-gym-yoga', '2', '1', '0', '1', '2018-04-08 18:00:21', '2018-04-08 18:00:21');
INSERT INTO `categories` VALUES ('3', '0', 'Bể bơi', 'be-boi', '3', '1', '0', '1', '2018-04-08 18:01:23', '2018-04-08 18:01:23');
INSERT INTO `categories` VALUES ('4', '0', 'Khu vui chơi - giải trí', 'khu-vui-choi-giai-tri', '4', '1', '0', '1', '2018-04-08 18:01:23', '2018-04-08 18:01:23');
INSERT INTO `categories` VALUES ('5', '0', 'Thực phẩm giảm cân', 'thuc-pham-giam-can', '5', '1', '0', '1', '2018-04-08 18:02:39', '2018-04-08 18:02:39');
INSERT INTO `categories` VALUES ('6', '0', 'Khóa học online', 'khoa-hoc-online', '6', '1', '0', '1', '2018-04-08 18:02:39', '2018-04-08 18:02:39');
INSERT INTO `categories` VALUES ('7', '0', 'Mỹ phẩm & Làm đẹp', 'my-pham-lam-dep', '7', '1', '0', '1', '2018-04-08 18:03:50', '2018-04-08 18:03:50');
INSERT INTO `categories` VALUES ('9', '1', 'Tập gym', 'tap-gym', '1', '1', '0', '1', '2018-04-08 18:05:19', '2018-04-08 18:05:19');
INSERT INTO `categories` VALUES ('10', '1', 'Tập yoga', 'tap-yoga', '2', '1', '0', '1', '2018-04-08 18:05:19', '2018-04-08 18:05:19');
INSERT INTO `categories` VALUES ('11', '1', 'Zumba', 'zumba', '3', '1', '0', '1', '2018-04-08 18:06:24', '2018-04-08 18:06:24');
INSERT INTO `categories` VALUES ('12', '1', 'Sexy dance', 'sexy-dance', '4', '1', '0', '1', '2018-04-08 18:06:24', '2018-04-08 18:06:24');
INSERT INTO `categories` VALUES ('13', '1', 'Kpop dance', 'kpop-dance', '5', '1', '0', '1', '2018-04-08 18:06:51', '2018-04-08 18:06:51');
INSERT INTO `categories` VALUES ('14', '3', 'Quần áo & Phụ kiện gym', 'quan-ao-phu-kien-gym', '1', '1', '0', '1', '2018-04-08 18:08:36', '2018-04-08 18:08:36');
INSERT INTO `categories` VALUES ('15', '3', 'Quần áo yoga - zumba', 'quan-ao-yoga-zumba', '2', '1', '0', '1', '2018-04-08 18:08:36', '2018-04-08 18:08:36');
INSERT INTO `categories` VALUES ('16', '3', 'Vé bơi', 've-boi', '1', '1', '0', '1', '2018-04-08 18:12:12', '2018-04-08 18:12:12');
INSERT INTO `categories` VALUES ('17', '3', 'Học bơi', 'hoc-boi', '2', '1', '0', '1', '2018-04-08 18:12:12', '2018-04-08 18:12:12');
INSERT INTO `categories` VALUES ('18', '3', 'Đồ tập bơi', 'do-tap-boi', '3', '1', '0', '1', '2018-04-08 18:12:30', '2018-04-08 18:12:30');
INSERT INTO `categories` VALUES ('19', '4', 'Thỏa thích vui chơi', 'thoa-thich-vui-choi', '1', '1', '0', '1', '2018-04-08 18:15:46', '2018-04-08 18:15:46');
INSERT INTO `categories` VALUES ('20', '4', 'Trọn gói quay phim - chụp ảnh', 'tron-goi-quay-phim-chup-anh', '2', '1', '0', '1', '2018-04-08 18:15:46', '2018-04-08 18:15:46');
INSERT INTO `categories` VALUES ('21', '5', 'Thảo dược giẩm cân', 'thao-duoc-giam-can', '1', '1', '0', '1', '2018-04-08 18:16:42', '2018-04-08 18:16:42');
INSERT INTO `categories` VALUES ('22', '5', 'Dinh dưỡng tập luyện', 'dinh-duong-tap-luyen', '2', '1', '0', '1', '2018-04-08 18:16:42', '2018-04-08 18:16:42');
INSERT INTO `categories` VALUES ('23', '6', 'Khóa học yoga', 'khoa-hoc-yoga', '1', '1', '0', '1', '2018-04-08 18:17:29', '2018-04-08 18:17:29');
INSERT INTO `categories` VALUES ('24', '6', 'Khóa học zumba', 'khoa-hoc-zumba', '2', '1', '0', '1', '2018-04-08 18:17:29', '2018-04-08 18:17:29');
INSERT INTO `categories` VALUES ('25', '7', 'Trang điểm', 'trang-diem', '1', '1', '0', '1', '2018-04-08 18:18:02', '2018-04-08 18:18:02');
INSERT INTO `categories` VALUES ('26', '7', 'Dưỡng da', 'duong-da', '1', '1', '0', '1', '2018-04-08 18:18:02', '2019-03-20 10:17:33');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `logo` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `time_work` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for general_info
-- ----------------------------
DROP TABLE IF EXISTS `general_info`;
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

-- ----------------------------
-- Records of general_info
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `order` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sku_id` varchar(20) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_desc` text,
  `full_desc` text,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_list` text,
  `price` decimal(15,4) DEFAULT '0.0000',
  `discount` int(10) NOT NULL DEFAULT '0',
  `price_sale` decimal(15,4) DEFAULT '0.0000',
  `promo1` varchar(255) DEFAULT NULL,
  `promo2` varchar(255) DEFAULT NULL,
  `view` int(10) NOT NULL DEFAULT '0',
  `is_feature` tinyint(1) NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(10) DEFAULT NULL,
  `size` varchar(5) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '4568578', '1', '1', 'Chậu rửa bát inox 1 hộc - Model 5844', null, 'Bồn rửa chén Inox 1 hộc không có cánh bằng chất liệu Inox 201 – Chậu rửa chén Inox đơn. Thường dùng làm bồn rửa phụ, phù hợp cho các quán ăn và nhà hàng.', 'chau-rua-bat-inox-1-hoc-model-5844', 'http://chauruabat.net/wp-content/uploads/2016/07/chau-rua-chen-don-300x300.jpg', null, '1000000.0000', '8', '920000.0000', null, null, '0', '0', '0', null, null, '1', '2019-03-09 10:30:52', '2019-03-09 10:30:52');

-- ----------------------------
-- Table structure for product_city
-- ----------------------------
DROP TABLE IF EXISTS `product_city`;
CREATE TABLE `product_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_city
-- ----------------------------

-- ----------------------------
-- Table structure for product_seo
-- ----------------------------
DROP TABLE IF EXISTS `product_seo`;
CREATE TABLE `product_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_seo
-- ----------------------------

-- ----------------------------
-- Table structure for product_tag
-- ----------------------------
DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE `product_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_tag
-- ----------------------------

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of provinces
-- ----------------------------

-- ----------------------------
-- Table structure for province_city
-- ----------------------------
DROP TABLE IF EXISTS `province_city`;
CREATE TABLE `province_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of province_city
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Superadmin', '1');
INSERT INTO `roles` VALUES ('2', 'Admin', '0');
INSERT INTO `roles` VALUES ('3', 'User', '0');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'superadmin', 'SuperAdmin', 'admin@admin.com', null, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', null, null, null, null, '1', null, '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9ob3RkZWFsLnh5ei9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTUzMDUwNDA5NSwiZXhwIjoxNzE3MTI4MDk1LCJuYmYiOjE1MzA1MDQwOTUsImp0aSI6InVoY08zVlBEV1hBSkpNMGkifQ.AftccxTKMGrTAOxgcx1bWQfUYKHlRyFqMYQXHUdMs44', 's4ANjT3QNO4GG43uPBDfSL6J5wWtrXAmn328APzRLSuO5oB3o6lKLWEFCuiE', '2018-04-08 10:19:28', '2018-07-02 04:01:35');

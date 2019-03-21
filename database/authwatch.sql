/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : authwatch

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-21 21:18:33
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'OMEGA', 'omega', '/frontend/images/ex/brands/omega.png', '2018-04-08 18:00:21', '2018-04-08 18:00:21');
INSERT INTO `categories` VALUES ('2', 'CASIO', 'casio', '/frontend/images/ex/brands/casio.png', '2018-04-08 18:01:23', '2018-04-08 18:01:23');
INSERT INTO `categories` VALUES ('3', 'SEAMASTER', 'seamaster', '/frontend/images/ex/brands/seamaster.png', '2018-04-08 18:01:23', '2018-04-08 18:01:23');

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
  `between_lug` varchar(50) DEFAULT NULL,
  `bracelet` varchar(50) DEFAULT NULL,
  `case` varchar(50) DEFAULT '1',
  `case_diameter` varchar(50) DEFAULT NULL,
  `dial_color` varchar(50) DEFAULT NULL,
  `crystal` varchar(255) DEFAULT NULL,
  `water_resistance` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `wire_material` int(11) DEFAULT NULL,
  `glass_material` int(11) DEFAULT NULL,
  `energy_type` int(11) DEFAULT NULL,
  `version` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '4568578', '1', '1', 'Speedmaster Triple Date Chronograph Yellow Gold 18k', '<p>Steel on leather strap<br></p>', '<p>Since 1993, the Seamaster Professional Diver 300M has enjoyed a legendary following. Today’s modern collection has embraced that famous ocean heritage and updated it with OMEGA’s best innovation and design. This 42 mm model is crafted from stainless steel and includes a black ceramic bezel with a white enamel diving scale.</p><p>The skeleton hands and raised indexes are rhodium-plated and are filled with white Super-LumiNova, while the helium escape valve has been given a conical design. The watch is presented on a stainless steel bracelet and is driven by the OMEGA Master Chronometer Calibre 8800, which can be seen through the sapphire-crystal on the wave-edged caseback.<br></p>', 'speedmaster-triple-date-chronograph-yellow-gold-18k-15531755.html', '/backend/uploads/images/product-1.jpg', '[\"/backend/uploads/images/slider-2.jpg\",\"/backend/uploads/images/slider-3.jpg\",\"/backend/uploads/images/slider-4.jpg\"]', '360000000.0000', '20', '288000000.0000', null, null, '0', '1', '0', '20', 'steel', 'Steel', '42', 'Black', 'Domed scratch‑resistant sapphire crystal with anti‑reflective treatment on both sides.', '30 bar (300 metres / 1000 feet)', 'm', '1', '2', '3', '1', '1', '2019-03-21 20:53:11', '2019-03-21 20:53:11');

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

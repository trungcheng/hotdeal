/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : lindo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-17 22:28:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_services
-- ----------------------------
DROP TABLE IF EXISTS `data_services`;
CREATE TABLE `data_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `package_service_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `domain` varchar(50) DEFAULT NULL,
  `domain_type` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `price` decimal(15,4) DEFAULT NULL,
  `vat_price` decimal(15,4) DEFAULT NULL,
  `total_price` decimal(15,4) DEFAULT NULL,
  `paid_price` decimal(15,4) DEFAULT NULL,
  `date_actived` datetime DEFAULT NULL,
  `date_expired` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_services
-- ----------------------------

-- ----------------------------
-- Table structure for package_services
-- ----------------------------
DROP TABLE IF EXISTS `package_services`;
CREATE TABLE `package_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of package_services
-- ----------------------------
INSERT INTO `package_services` VALUES ('1', '1', 'Thiết kế web', '2020-03-17 22:11:35', '2020-03-17 22:11:35');
INSERT INTO `package_services` VALUES ('2', '1', 'Nâng cấp web', '2020-03-17 22:11:57', '2020-03-17 22:11:57');
INSERT INTO `package_services` VALUES ('3', '1', 'Mua giao diện có sẵn', '2020-03-17 22:12:05', '2020-03-17 22:12:05');
INSERT INTO `package_services` VALUES ('4', '2', 'Chỉ mua tên miền', '2020-03-17 22:12:20', '2020-03-17 22:12:20');
INSERT INTO `package_services` VALUES ('5', '2', 'Thiết kế web', '2020-03-17 22:12:30', '2020-03-17 22:12:30');
INSERT INTO `package_services` VALUES ('6', '2', 'Mua giao diện có sẵn', '2020-03-17 22:12:42', '2020-03-17 22:12:42');
INSERT INTO `package_services` VALUES ('7', '2', 'Nâng cấp website', '2020-03-17 22:12:50', '2020-03-17 22:12:50');
INSERT INTO `package_services` VALUES ('8', '2', 'Mua kèm hosting', '2020-03-17 22:13:00', '2020-03-17 22:13:00');
INSERT INTO `package_services` VALUES ('9', '3', '500MB', '2020-03-17 22:13:22', '2020-03-17 22:13:22');
INSERT INTO `package_services` VALUES ('10', '3', '1G', '2020-03-17 22:13:27', '2020-03-17 22:13:27');
INSERT INTO `package_services` VALUES ('11', '3', '2G', '2020-03-17 22:13:33', '2020-03-17 22:13:33');
INSERT INTO `package_services` VALUES ('12', '3', '3G', '2020-03-17 22:13:38', '2020-03-17 22:13:38');
INSERT INTO `package_services` VALUES ('13', '3', '4G', '2020-03-17 22:13:42', '2020-03-17 22:13:42');
INSERT INTO `package_services` VALUES ('14', '3', '5G', '2020-03-17 22:13:50', '2020-03-17 22:13:50');
INSERT INTO `package_services` VALUES ('15', '3', 'Không giới hạn', '2020-03-17 22:14:01', '2020-03-17 22:14:01');
INSERT INTO `package_services` VALUES ('16', '4', 'LINDO-VPS 01', '2020-03-17 22:14:20', '2020-03-17 22:14:20');
INSERT INTO `package_services` VALUES ('17', '4', 'LINDO-VPS 02', '2020-03-17 22:14:27', '2020-03-17 22:14:27');
INSERT INTO `package_services` VALUES ('18', '4', 'LINDO-VPS 03', '2020-03-17 22:14:35', '2020-03-17 22:14:35');
INSERT INTO `package_services` VALUES ('19', '4', 'LINDO-VPS 04', '2020-03-17 22:14:54', '2020-03-17 22:14:54');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Superadmin', 'Superadmin', '1');
INSERT INTO `roles` VALUES ('2', 'Admin', 'Nhân viên kinh doanh', '0');
INSERT INTO `roles` VALUES ('3', 'User', 'Đại lý', '0');
INSERT INTO `roles` VALUES ('4', 'Subuser', 'Khách hàng', '0');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', 'Thiết kế web', '2020-03-16 20:39:29', '2020-03-16 20:39:29');
INSERT INTO `services` VALUES ('2', 'Tên miền', '2020-03-16 20:39:53', '2020-03-16 20:39:53');
INSERT INTO `services` VALUES ('3', 'Hosting', '2020-03-16 20:39:57', '2020-03-16 20:39:57');
INSERT INTO `services` VALUES ('4', 'VPS', '2020-03-16 20:40:00', '2020-03-16 20:40:00');
INSERT INTO `services` VALUES ('5', 'Khác', '2020-03-16 20:40:03', '2020-03-16 20:40:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'superadmin', 'Super Admin', 'superadmin@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', 'Ha Noi', null, null, null, '1', null, '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9ob3RkZWFsLnh5ei9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTUzMDUwNDA5NSwiZXhwIjoxNzE3MTI4MDk1LCJuYmYiOjE1MzA1MDQwOTUsImp0aSI6InVoY08zVlBEV1hBSkpNMGkifQ.AftccxTKMGrTAOxgcx1bWQfUYKHlRyFqMYQXHUdMs44', 'mbQKWE1Vk4tZtLrMbYB3GoeKuPNTnlrRRlTiiU193aAAmZzsYM9LbGecJyeZ', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('2', '2', 'admin', 'Admin', 'admin@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$VMxBri/qLDxAEq6rGo12Yef2.md..3AqfjSuHnk0q2tbzTQLu5Lp6', '0975123644', 'Ha Noi', null, null, null, '1', null, '1', null, null, '2019-04-23 09:28:28', '2019-04-23 09:31:06');
INSERT INTO `users` VALUES ('3', '3', 'user', 'User', 'user@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$YBm9bIA.RaFUyDiXYFazNeJ72dwtF072Pieyth2BOFE43KDOdZhsy', '0975123645', 'Ha Noi', null, null, null, '1', '', '1', null, 'Afv5L7EZILNQbdVSdZwct6DPbNkUIx4OCYyA8FR2w8DNkQp9bLEK8PxF9fEB', '2019-04-24 04:21:40', '2019-04-24 04:26:28');
INSERT INTO `users` VALUES ('4', '4', 'subuser', 'Sub User', 'subuser@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$YBm9bIA.RaFUyDiXYFazNeJ72dwtF072Pieyth2BOFE43KDOdZhsy', '0975123646', 'Ha Noi', null, null, null, '1', null, '1', null, null, '2020-03-16 20:36:16', '2020-03-16 20:36:16');

/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : lindo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-16 23:44:29
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'superadmin', 'Super Admin', 'superadmin@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', 'Ha Noi', null, null, null, '1', null, '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9ob3RkZWFsLnh5ei9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTUzMDUwNDA5NSwiZXhwIjoxNzE3MTI4MDk1LCJuYmYiOjE1MzA1MDQwOTUsImp0aSI6InVoY08zVlBEV1hBSkpNMGkifQ.AftccxTKMGrTAOxgcx1bWQfUYKHlRyFqMYQXHUdMs44', 'mbQKWE1Vk4tZtLrMbYB3GoeKuPNTnlrRRlTiiU193aAAmZzsYM9LbGecJyeZ', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('2', '2', 'admin', 'Admin', 'admin@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$VMxBri/qLDxAEq6rGo12Yef2.md..3AqfjSuHnk0q2tbzTQLu5Lp6', '0975123644', 'Ha Noi', null, null, null, '1', null, '1', null, null, '2019-04-23 09:28:28', '2019-04-23 09:31:06');
INSERT INTO `users` VALUES ('3', '3', 'user', 'User', 'user@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$YBm9bIA.RaFUyDiXYFazNeJ72dwtF072Pieyth2BOFE43KDOdZhsy', '0975123645', 'Ha Noi', null, null, null, '1', '', '1', null, 'Afv5L7EZILNQbdVSdZwct6DPbNkUIx4OCYyA8FR2w8DNkQp9bLEK8PxF9fEB', '2019-04-24 04:21:40', '2019-04-24 04:26:28');
INSERT INTO `users` VALUES ('4', '4', 'subuser', 'Sub User', 'subuser@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$YBm9bIA.RaFUyDiXYFazNeJ72dwtF072Pieyth2BOFE43KDOdZhsy', '0975123646', 'Ha Noi', null, null, null, '1', null, '1', null, null, '2020-03-16 20:36:16', '2020-03-16 20:36:16');

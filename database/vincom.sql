/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : vincom

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-16 23:30:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '0', 'Vận hành', null, 'van-hanh', null, '1', '2019-04-01 09:21:04', '2019-04-01 09:21:04');
INSERT INTO `categories` VALUES ('2', '1', 'Miền Bắc 1', null, 'mien-bac-1', null, '1', '2019-04-02 05:02:08', '2019-04-02 05:02:08');
INSERT INTO `categories` VALUES ('3', '1', 'Miền Bắc 2', null, 'mien-bac-2', null, '1', '2019-04-18 16:02:05', '2019-04-18 16:02:05');
INSERT INTO `categories` VALUES ('4', '0', 'Xây dựng', null, 'xay-dung', null, '1', '2019-04-23 10:32:59', '2019-04-23 10:32:59');
INSERT INTO `categories` VALUES ('5', '0', 'Nhân sự & Đào tạo', null, 'nhan-su-dao-tao', null, '1', '2019-08-16 01:04:37', '2019-08-16 01:04:37');

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `round_id` int(11) DEFAULT NULL,
  `user_vote` int(11) DEFAULT NULL,
  `vote_for` int(11) DEFAULT NULL,
  `vote_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of history
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
-- Table structure for rounds
-- ----------------------------
DROP TABLE IF EXISTS `rounds`;
CREATE TABLE `rounds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rounds
-- ----------------------------
INSERT INTO `rounds` VALUES ('1', 'Vòng 1', null, 'vong-1', null, null, '0', '0', '30', '0', '2019-08-16 01:14:43', '2019-08-16 01:14:43');
INSERT INTO `rounds` VALUES ('2', 'Vòng 2', null, 'vong-2', null, null, '0', '0', '30', '0', '2019-08-16 01:15:24', '2019-08-16 01:15:24');
INSERT INTO `rounds` VALUES ('3', 'Vòng kết quả', null, 'vong-ket-qua', null, null, '0', '0', '15', '0', '2019-08-16 01:15:57', '2019-08-16 01:15:57');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'Vincom Retail', null, null, null, null, null, null, '2019-08-16 01:09:21', '2019-08-16 01:09:21');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `content` text,
  `avatar` varchar(100) DEFAULT NULL,
  `total_vote` int(11) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', '0', 'admin', 'Nguyễn Át Min', 'admin@admin.com', '', null, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '0', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', '0UZASRQ6qmaAau4oBE73eB0Xs32X3xAf1mLgLZ9LkB1iQ4akzDpO0N8ZwKe3', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('3', '3', '2', '', 'Hoàng Văn Hải', '', 'Lập trình viên cấp cao', null, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '0', '', '1', '1', '', '2019-04-23 09:28:28', '2019-04-23 09:31:06');
INSERT INTO `users` VALUES ('5', '3', '3', '', 'Đinh Trung', '', 'Chuyên viên thiết kế animation', null, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', '0', '', '1', '1', '', '2019-04-24 04:21:40', '2019-04-24 04:26:28');

-- ----------------------------
-- Table structure for user_round
-- ----------------------------
DROP TABLE IF EXISTS `user_round`;
CREATE TABLE `user_round` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `round_id` int(11) DEFAULT NULL,
  `vote` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_round
-- ----------------------------

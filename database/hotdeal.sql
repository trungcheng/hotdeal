/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : hotdeal

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-18 16:31:39
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
  `intro` text,
  `fulltext` text,
  `image` varchar(255) DEFAULT NULL,
  `is_about` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '2', 'Donghoxachtay.store - Kho Đồng hồ chính hãng xách tay!', 'donghoxachtay.store-kho-dong-ho-chinh-hang-xach-tay-15542641', 'Với mong muốn đem đến người dùng những sản phẩm từ các thương hiệu Đồng hồ chính hãng nổi tiếng trên thế giới như: Rolex, Omega, Zenith, Longines, Montblanc, Maurice Lacroix, Frederique Constant, Oris,....Donghoxachtay.store sẽ là kho hàng lớn để quý khách lựa chọn cho mình những chiếc đồng hồ chính hãng ứng ý nhất và giá tốt nhất<br>', 'Với triết lý kinh doanh luôn đem đến người chơi đồng hồ 1 giá trị <strong>\"CHẤT LƯỢNG - UY TÍN NHẤT\"</strong> đồng nghĩa chúng tôi phải luôn cố gắng săn tìm và giới thiệu đến người dùng những mẫu đồng hồ đẹp nhất, chất lượng nhất và luôn có <strong>\"GIÁ BÁN\"</strong> tốt nhất thị trường đồng hồ xách tay!<br>Chúng tôi cung cấp qua 3 kênh phân phối chính bán hàng:<br><br><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"4\" role=\"region\" aria-label=\" ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22%2Fbackend%2Fuploads%2Fimages%2Fslider-1.jpg%22%2C%22alt%22%3A%22%22%2C%22width%22%3A%22600%22%2C%22height%22%3A%22250%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img alt=\"\" src=\"/backend/uploads/images/slider-1.jpg\" data-cke-saved-src=\"/backend/uploads/images/slider-1.jpg\" width=\"600\" height=\"250\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://startup.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><br>&nbsp;<br><br>', '/backend/uploads/images/omega.png', '1', '1', '0', '2019-04-03 04:02:34', '2019-04-03 04:02:34');
INSERT INTO `articles` VALUES ('2', '2', 'XỬ LÝ KHI THẾ NÀO KHI ĐỒNG HỒ CƠ CHẠY NHANH HOẶC CHẠY CHẬM ?', 'xu-ly-khi-the-nao-khi-dong-ho-co-chay-nhanh-hoac-chay-cham-15542669', 'Đã có bao giờ bạn phát bực vì chiếc đồng hồ cơ đắt tiền đầy nghệ thuật mua về chạy nhanh/chậm quá con số được nhà sản xuất cam kết và mang đi bảo hành sửa chữa mãi vẫn không xong? Đã có cách chỉnh đồng hồ cơ chạy nhanh và chậm tại nhà cho bạn, đơn giản vài bước, độ chính xác có thể còn cao hơn đem ra tiệm đấy nhé.​​​​​​​<br>', '<p><strong>Giới thiệu về đồng hồ cơ:</strong></p><p>Đồng hồ cơ là cách gọi chung của tất cả đồng hồ hoạt động bằng bộ máy cơ khí gồm đồng hồ Automatic (tự động), đồng hồ lên dây cót. Trung bình sai số của đồng hồ cơ đến từ thương hiệu uy tín được cam kết nằm trong khoảng -25 đến +40 giây/ngày (chậm không quá 25 giây hoặc nhanh không quá 40 giây một ngày).</p><p>Độ chính xác này áp dụng với điều kiện sử dụng bình thường gồm nhiệt độ 5-35 độ C, không sốc, không từ trường, bảo dưỡng tốt. Trong trường hợp sử dụng đúng quy định nhưng lại chậm hơn 25 giây ngày hoặc nhanh hơn 40 giây ngày thì cần đem đồng hồ đi kiểm tra để bảo hành/sửa chữa.<br>​​​​​​​<br>Nhưng tưởng nếu sai số như vậy thì 1 tháng có 30 ngày sẽ lệch đến vài chục phút là không phải nhé!&nbsp;Vì cơ cấu cơ khí ảnh hưởng bởi từ trường, nhiệt độ nóng, lạnh nên sẽ có thời điểm đồng hồ chạy nhanh, có thời điểm đồng hồ chạy chậm.Thông thường mỗi tháng&nbsp;<a data-cke-saved-href=\"https://watchshopvietnam.com/collections/dong-ho-automatic\" href=\"https://watchshopvietnam.com/collections/dong-ho-automatic\" target=\"_blank\" rel=\"noopener noreferrer\">đồng hồ cơ</a>&nbsp;chỉ sai lệch vài phút, và điều này có thể chấp nhận được vì giờ giấc chính xác đến từng phút mỗi tháng giờ đây không còn quá quan trọng nữa. Mà quan trọng chính là vẻ đẹp không thể cưỡng lại của những đồng hồ cơ tự động.</p><p><strong>Có một số điều chỉnh nhỏ để giúp bạn cải thiện độ chính xác của đồng hồ cơ như sau:</strong></p><p>- Nếu đồng hồ chạy chậm: Khi đi ngủ, tháo đồng hồ ra và đặt đồng hồ nằm ngửa (mặt kính hướng lên trên) qua đêm sẽ giúp chạy nhanh hơn.<br>- Nếu đồng hồ chạy nhanh (ít): Đặt đồng hồ nằm nghiêng sao cho nút chỉnh giờ hướng&nbsp;xuống.<br>- Nếu đồng hồ chạy nhanh (nhiều): Đặt đồng hồ nằm nghiêng với nút chỉnh giờ&nbsp;hướng lên.<br><strong>Chú ý:</strong>&nbsp;&nbsp;Khi tháo đồng hồ khi đi ngủ và để qua đêm, nên đặt đồng hồ&nbsp;xa các thiết bị từ tính như laptop, loa, ti vi...để tránh ảnh hưởng đến chi tiết máy cơ khí bên trong. Nếu có điều kiện kinh tế, bạn có thể sắm một bộ nuôi cơ (Winding) khi để đồng hồ qua đêm với chi phí khoảng 1-2 triệu đồng.</p>', '/backend/uploads/images/longines.png', '0', '1', '0', '2019-04-03 04:49:08', '2019-04-03 04:49:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Chậu rửa bát đá nhân tạo', 'chau-rua-bat-da-nhan-tao', '', '2019-04-01 09:21:04', '2019-04-01 09:21:04');
INSERT INTO `categories` VALUES ('2', 'Chậu rửa bát inox 201', 'chau-rua-bat-inox-201', '', '2019-04-02 05:02:08', '2019-04-02 05:02:08');
INSERT INTO `categories` VALUES ('3', 'Kệ tủ bếp', 'ke-tu-bep', null, '2019-04-18 16:01:26', '2019-04-18 16:01:26');
INSERT INTO `categories` VALUES ('4', 'Tủ lavabo', 'tu-lavabo', null, '2019-04-18 16:01:55', '2019-04-18 16:01:55');
INSERT INTO `categories` VALUES ('5', 'Vòi hoa sen', 'voi-hoa-sen', null, '2019-04-18 16:02:05', '2019-04-18 16:02:05');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `time_work` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', null, 'Thạch Vũ', '87 Nguyễn Đổng Chi', '0989888999', 'support@thachvu.com', '8:00 AM -17:30 PM', '2019-04-18 14:56:05', '2019-04-18 14:56:05');

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
-- Table structure for general
-- ----------------------------
DROP TABLE IF EXISTS `general`;
CREATE TABLE `general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intro` text,
  `policy_delivery` text,
  `policy_payment` text,
  `policy_security` text,
  `shopping_guide` text,
  `term_of_use` text,
  `recruitment` text,
  `sale_new` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of general
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
  `delivery_method` varchar(255) DEFAULT NULL,
  `obj_info` text,
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
  `is_new` tinyint(1) DEFAULT '0',
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '2774861', '1', '2', 'Speedmaster Triple Date Chronograph Yellow Gold 18k', '', '', 'speedmaster-triple-date-chronograph-yellow-gold-18k-15541105.html', '/backend/uploads/products/thumbs/2019-04-01-09-22-21-slider-3.jpg', '[\"/backend/uploads/products/2019-04-01-09-22-22-slider-1.jpg\",\"/backend/uploads/products/2019-04-01-09-22-23-slider-2.jpg\",\"/backend/uploads/products/2019-04-01-09-22-23-slider-4.jpg\"]', '380000.0000', '50', '190000.0000', null, null, '0', '1', '0', '0', null, null, '1', '2019-04-18 14:49:26', '2019-04-18 14:49:26');
INSERT INTO `products` VALUES ('2', '4784732', '1', '2', 'Prof. Eunice Monahan MD1', '', '', 'prof.-eunice-monahan-md1-15541106.html', '/backend/uploads/products/thumbs/2019-04-01-09-23-26-slider-4.jpg', '[\"/backend/uploads/products/2019-04-01-09-23-26-slider-1.jpg\",\"/backend/uploads/products/2019-04-01-09-23-26-slider-2.jpg\",\"/backend/uploads/products/2019-04-01-09-23-26-slider-3.jpg\"]', '50000.0000', '50', '25000.0000', null, null, '0', '1', '0', '0', null, null, '1', '2019-04-18 14:49:28', '2019-04-18 14:49:28');
INSERT INTO `products` VALUES ('3', '7706103', '1', '2', 'Speedmaster Triple Date Chronograph Yellow Gold 18k', '', '', 'speedmaster-triple-date-chronograph-yellow-gold-18k-15541107.html', '/backend/uploads/products/thumbs/2019-04-01-09-25-37-slider-1.jpg', '[\"/backend/uploads/products/2019-04-01-09-25-37-slider-2.jpg\",\"/backend/uploads/products/2019-04-01-09-25-37-slider-3.jpg\",\"/backend/uploads/products/2019-04-01-09-25-37-slider-4.jpg\"]', '1000000.0000', '30', '700000.0000', null, null, '0', '1', '0', '0', null, null, '1', '2019-04-18 14:49:29', '2019-04-18 14:49:29');
INSERT INTO `products` VALUES ('21', '7585384', '1', '2', 'web test 1', '', '', 'web-test-1-15541107.html', '/backend/uploads/products/thumbs/2019-04-11-03-38-59-hoaty-tt4.jpg', '[\"/backend/uploads/products/2019-04-01-09-37-38-omega-de-ville-46142002-8.jpg\",\"/backend/uploads/products/2019-04-01-09-26-13-slider-4.jpg\"]', '360000000.0000', '86', '50000000.0000', null, null, '0', '1', '1', '0', null, null, '1', '2019-04-18 14:49:30', '2019-04-18 14:49:30');
INSERT INTO `products` VALUES ('22', '7585384', '1', '2', 'web test 1', '', '', 'web-test-1-15541107.html', '/backend/uploads/products/thumbs/2019-04-11-03-38-44-hoaty-tt6.jpg', '[\"/backend/uploads/products/2019-04-01-09-37-38-omega-de-ville-46142002-8.jpg\",\"/backend/uploads/products/2019-04-01-09-26-13-slider-4.jpg\"]', '360000000.0000', '86', '50000000.0000', null, null, '0', '1', '1', '0', null, null, '1', '2019-04-18 14:49:31', '2019-04-18 14:49:31');
INSERT INTO `products` VALUES ('23', '7585384', '1', '2', 'web test 1', '', '', 'web-test-1-15541107.html', '/backend/uploads/products/thumbs/2019-04-11-03-38-31-hoa-cuoi-600k.png', '[\"/backend/uploads/products/2019-04-01-09-37-38-omega-de-ville-46142002-8.jpg\",\"/backend/uploads/products/2019-04-01-09-26-13-slider-4.jpg\"]', '360000000.0000', '86', '50000000.0000', null, null, '0', '1', '1', '0', null, null, '1', '2019-04-18 14:49:32', '2019-04-18 14:49:32');
INSERT INTO `products` VALUES ('24', '7585384', '1', '2', 'web test 2', '', '', 'web-test-1-15541107.html', '/backend/uploads/products/thumbs/2019-04-11-03-41-32-hoa-khai-truong-700k.jpg', '[\"/backend/uploads/products/2019-04-01-09-37-38-omega-de-ville-46142002-8.jpg\",\"/backend/uploads/products/2019-04-01-09-26-13-slider-4.jpg\"]', '360000000.0000', '86', '50000000.0000', null, null, '0', '1', '1', '0', null, null, '1', '2019-04-18 14:49:33', '2019-04-18 14:49:33');
INSERT INTO `products` VALUES ('25', '7585384', '1', '2', 'web test 1', '', '', 'web-test-1-15541107.html', '/backend/uploads/products/thumbs/2019-04-11-03-38-10-hoa-cuoi-500k.jpg', '[\"/backend/uploads/products/2019-04-01-09-37-38-omega-de-ville-46142002-8.jpg\",\"/backend/uploads/products/2019-04-01-09-26-13-slider-4.jpg\"]', '360000000.0000', '86', '50000000.0000', null, null, '0', '1', '1', '0', null, null, '1', '2019-04-18 14:49:34', '2019-04-18 14:49:34');
INSERT INTO `products` VALUES ('26', '50170626', '2', '2', 'Prof. Eunice Monahan MD1', '', '', 'prof.-eunice-monahan-md1-15541813.html', '/backend/uploads/products/thumbs/2019-04-02-05-02-35-bg2.jpg', '[]', '50000.0000', '40', '30000.0000', null, null, '0', '1', '1', '0', null, null, '0', '2019-04-18 14:49:36', '2019-04-18 14:49:36');

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
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `target` varchar(50) DEFAULT NULL,
  `target_type` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES ('1', 'Seamaster Diver 300', '/backend/uploads/images/slider-1.jpg', '1', 'product', '1', '2019-03-22 17:03:41', '2019-03-22 10:03:41');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'superadmin', 'SuperAdmin', 'admin@admin.com', null, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', null, null, null, null, '1', null, '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9ob3RkZWFsLnh5ei9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTUzMDUwNDA5NSwiZXhwIjoxNzE3MTI4MDk1LCJuYmYiOjE1MzA1MDQwOTUsImp0aSI6InVoY08zVlBEV1hBSkpNMGkifQ.AftccxTKMGrTAOxgcx1bWQfUYKHlRyFqMYQXHUdMs44', 'i5OyH3Zj4tHdbXfSnwrhdQhB2tXkd5JhTt51uIFtZFF5xfg3RZwyRljhscMd', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('2', '3', null, 'Đinh Trung', 'trungdn.dev@gmail.com', null, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', null, null, null, null, '1', null, '1', null, null, '2019-04-18 14:47:12', '2019-04-18 14:47:12');

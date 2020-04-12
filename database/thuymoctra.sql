/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : thuymoctra

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-13 00:12:22
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
  `is_feature` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', 'cach-bo-tri-tot-nhat-khi-bep-dat-chung-voi-phong-ngu', '<p>Như chúng ta đã biết, phòng ngủ không nên đặt chung với bếp, nhưng trong trường hợp phải đặt chung thì cần có những cách bố trí hợp lý nhất để tránh những điều xấu.</p>', '<p style=\"text-align: justify;\">Bếp thuộc tính hỏa, trong quá trình nấu nướng khí hỏa sẽ bốc lên các không gian bên trên và ảnh hưởng đến người cư ngụ trong các phòng đó. Dù là nhà mái bê tông thì việc này cũng cần tránh, bởi khói và hơi nóng bốc lên cũng có thể làm phần mái này có nhiệt độ tăng cao hơn.</p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"nha-bep-va-phong-ngu ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2Fnha-bep-va-phong-ngu-e1479098609814.jpg%22%2C%22alt%22%3A%22nha-bep-va-phong-ngu%22%2C%22width%22%3A%22500%22%2C%22height%22%3A%22334%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" alt=\"nha-bep-va-phong-ngu\" width=\"500\" height=\"334\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background:rgba(220,220,220,0.5);background-image:url(http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png)\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p style=\"text-align: justify;\">Phòng ngủ luôn là nơi cần sự yên tĩnh, mát lành để chúng ta thư giản sau những giờ làm việc căng thẳng. Vì thế, khi giường ngủ kê ngay trên bếp sẽ rất khó chịu, khó ngủ. Theo các chuyên gia phong thủy, giường ngủ đặt trên bếp có thể khiến người ngủ trên đó dễ nảy sinh tâm lý nóng nảy, khó chịu hoặc hay ốm đau.</p><p style=\"text-align: justify;\">Khi gặp tình huống này, gia chủ nên thay đổi cách bố trí các phòng trong nhà. Ví dụ, nên di chuyển phòng ngủ sang một không gian khác và thay vào đó là phòng đọc, phòng sinh hoạt chung…</p><p style=\"text-align: justify;\">Đối với các trường hợp nhất thiết phòng đó phải là phòng ngủ thì gia chủ vẫn có thể linh hoạt bằng cách kê giường ngủ sao cho vị trí không trùng với bếp nấu bên dưới.</p><p style=\"text-align: justify;\">Phía tầng giường nên trùng là tủ lạnh,&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/\" href=\"https://bonruachen.com/\">chậu rửa bát</a>, bàn ăn… Tuy nhiên, các trường hợp này cần được bố trí sao cho hài hòa, tránh sắp xếp lộn xộn làm ảnh hưởng đến bố cục chung của toàn căn nhà.</p>', '/backend/uploads/images/55536514__636923825173219420.jpg', '1', '1', '0', 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', null, null, '2019-04-03 04:02:34', '2020-04-11 16:52:22');
INSERT INTO `articles` VALUES ('2', '1', 'Thông báo về việc Phân phối độc quyền Viên uống Royal - Trắng da mờ nám', 'chau-rua-chen-bang-composite', '<p style=\"text-align: justify;\">Công ty TNHH Sản xuất, dịch vụ và Thương mại Bình An thông báo phân phối độc quyền sản phẩm \"Viên uống Royal -Trắng da mờ nám\" cho công ty Tâm An từ ngày 01/04/2019.</p>', '<p style=\"text-align: justify;\">Từ xưa, ông bà&nbsp; có nói “muốn hiểu rõ người phụ nữ, hãy nhìn vào căn bếp của&nbsp;họ”.&nbsp;Vì căn bếp là để nấu ăn nướng thức ăn, là nơi thể hiện trổ tài đảm đang của người phụ nữ nói chung và người vợ nói riêng để giữ lửa cho gia đình. Và chậu rửa chén đã quá thông dụng trong cuộc sống hằng ngày, ngoài công dụng dùng để rửa chén, bát thì chúng ta còn có thể rửa các loại thực phẩm như rau củ quả hay cả thịt cá… để giúp cho các chị nội trợ chế biến thức ăn nhanh gọn, giúp ngăn bếp tiện nghi hơn, tiết kiệm thời gian dọn dẹp.<br></p>', '/backend/uploads/images/vien-uong_636935971042216248.jpg', '1', '1', '0', 'Thông báo về việc Phân phối độc quyền Viên uống Royal - Trắng da mờ nám', null, null, '2019-04-03 04:49:08', '2020-04-11 16:52:02');
INSERT INTO `articles` VALUES ('3', '1', 'Công ty Bình An kỷ niệm 2 năm thành lập và phát động chương trình Vì sức khoẻ phụ nữ Việt', 'tai-sao-nen-su-dung-chau-rua-chen-da-nhan-tao', '<p>Thành lập từ năm 2017, chỉ qua 2 năm, dưới sự lãnh đạo của Giám đốc trẻ Nguyễn Thị Thùy Linh, Công ty Bình An đã phát triển trên 5.000 đại lý trong toàn quốc.</p>', '<p>Nhìn vẻ giản dị của Nguyễn Thị Thùy Linh, không ai nghĩ cô gái 9x&nbsp;lại là Tổng Giám đốc Công ty TNHH Sản xuất Dịch vụ &amp; Thương mại Bình An (gọi tắt là Công ty Bình An). Sự giản dị, tự tin và thông minh là nền tảng giúp Thuỳ Linh&nbsp;thành công.<br><br>Nguyễn Thị Thùy Linh như “cỗ máy” làm việc. Ngoài giờ làm hành chính, khi nhân viên về gần hết, cô vẫn đăm chiêu cùng những kế hoạch phát triển, tham vọng vươn tầm thế giới. Nhiều hôm, nữ Giám đốc 9x&nbsp;làm việc đến 2 – 3 giờ sáng. Tất cả vì một đam mê với công việc và sự đau đáu đưa sản phẩm ra thị trường với chất lượng và sự phục vụ tốt nhất.<br><br>Trong một TVC nhân dịp Kỷ niệm 2 năm thành lập và lễ ra quân vì sức khoẻ phụ nữ Việt của&nbsp;Công ty Bình An, ngoài những ngôi sao hạng A trong nước, người ta thấy xuất hiện những gương mặt diễn viên của Châu Âu. Có thể chưa sánh ngang với nhiều ông lớn trong ngành Dược tại Việt Nam hiện nay, nhưng điều này khiến khoảng cách giữa Công ty Bình An và các ông lớn khác cùng ngành rút ngắn lại. Và tương lai không xa, Công ty Bình An có thể trở thành “thế lực” đáng gờm trong ngành dược phẩm.<br>Kết quả của chuỗi thời gian 2 năm phấn đấu không ngừng nghỉ đã đem lại nhiều thành tựu hơn dự kiến.<br>Ngoài 5000 đại lý, tổng đại lý trải dài từ Bắc đến Nam, phục vụ hàng triệu người tiêu dùng Việt. Sản phẩm của Công ty Bình An đã được xuất đi các nước như Hàn Quốc, Nhật Bản, Đài Loan, Pháp, Anh, Thuỵ Điển…<br>​​​​​​​<br>Có được kết quả như vậy là nhờ mỗi cá nhân của Công ty Bình An luôn phải nỗ lực hết mình, 1 người làm việc gấp 10, gấp trăm lần để vươn lên chiếm lĩnh vị thế trên thị trường.</p>', '/backend/uploads/images/linh-spa.jpg', '1', '1', '0', 'Công ty Bình An kỷ niệm 2 năm thành lập và phát động chương trình Vì sức khoẻ phụ nữ Việt', null, null, '2019-04-22 07:53:35', '2020-04-12 19:22:06');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `seo_content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Trà huyết đằng', 'tra-huyet-dang', 'product', 'Trà huyết đằng', 'Trà huyết đằng', 'Trà huyết đằng', '', '2019-04-01 09:21:04', '2019-04-01 09:21:04');
INSERT INTO `categories` VALUES ('2', 'Trà nụ hoa tam thất', 'tra-nu-hoa-tam-that', 'product', 'Trà nụ hoa tam thất', 'Trà nụ hoa tam thất', 'Trà nụ hoa tam thất', null, '2019-04-02 05:02:08', '2019-04-02 05:02:08');
INSERT INTO `categories` VALUES ('3', 'Saffon', 'saffon', 'product', 'Saffon', 'Saffon', 'Saffon', null, '2019-04-18 16:02:05', '2019-04-18 16:02:05');
INSERT INTO `categories` VALUES ('4', 'Khuyến mãi', 'khuyen-mai', 'article', null, null, null, '', '2020-04-12 18:56:19', '2020-04-12 18:59:54');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `time_work` varchar(50) DEFAULT NULL,
  `google_map_url` varchar(255) DEFAULT NULL,
  `fb_pixel_code` text,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `google_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', null, 'CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ', 'Thương hiệu trà hoa, trà thảo mộc thiên nhiên', 'Số 30, ngõ 218/2, Phạm Văn Đồng, phường Cổ Nhuế, quận Bắc Từ Liêm, TP. Hà Nội', '0981234258', 'thuymoc2020.tra@gmail.com', '8:00 AM -17:30 PM', 'https://maps.google.com/maps?q=s%E1%BB%91%201%20nguy%E1%BB%85n%20huy%20t%C6%B0%E1%BB%9Fng&t=&z=17&ie=UTF8&iwloc=&output=embed', null, 'https://facebook.com', 'https://twitter.com', 'https://www.youtube.com/embed/k4abysHdoM4', 'https://google.com', 'https://instagram.com', 'CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ', 'CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ', 'trà thảo dược, trà thiên nhiên, thủy mộc trà, trà hoa, nhụy hoa nghệ tây, trà huyết đằng', '2020-04-12 21:37:27', '2020-04-12 21:37:27');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text,
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
  `amount` decimal(15,4) DEFAULT '0.0000',
  `payment_method` varchar(255) DEFAULT NULL,
  `delivery_method` varchar(255) DEFAULT NULL,
  `obj_info` text,
  `note` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '5', '1000000.0000', 'Thanh toán tiền mặt khi nhận hàng', 'Vận chuyển miễn phí', '{\"customer_name\":\"\\u0110inh Ki\\u1ec1u Trang\",\"customer_phone\":\"0975123644\",\"customer_email\":\"trungdn.dev@gmail.com\",\"customer_address\":\"21 T\\u1ef1u Li\\u1ec7t - Thanh Tr\\u00ec - H\\u00e0 N\\u1ed9i\"}', 'hihi', '0', '2019-04-24 11:10:56', '2019-04-24 11:10:56');
INSERT INTO `orders` VALUES ('2', '1', '590000.0000', 'Thanh toán tiền mặt khi nhận hàng', 'Vận chuyển miễn phí', '{\"customer_name\":\"\\u0110inh Ki\\u1ec1u Trang\",\"customer_phone\":\"0975123644\",\"customer_email\":\"trungdn.dev@gmail.com\",\"customer_address\":\"21 T\\u1ef1u Li\\u1ec7t - Thanh Tr\\u00ec - H\\u00e0 N\\u1ed9i\"}', '123', '0', '2020-04-12 14:16:48', '2020-04-12 14:16:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('1', '1', '32', '1', '250000.0000', '2019-04-24 11:10:56', '2019-04-24 11:10:56');
INSERT INTO `order_detail` VALUES ('2', '1', '34', '1', '750000.0000', '2019-04-24 11:10:56', '2019-04-24 11:10:56');
INSERT INTO `order_detail` VALUES ('3', '2', '23', '1', '300000.0000', '2020-04-12 14:16:48', '2020-04-12 14:16:48');
INSERT INTO `order_detail` VALUES ('4', '2', '1', '1', '290000.0000', '2020-04-12 14:16:48', '2020-04-12 14:16:48');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `introduce` text,
  `policy` text,
  `certificate` text,
  `health_advice` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', '<div style=\"text-align: justify;\">Chúng tôi tin tưởng trà có một sức mạnh, sức mạnh xây dựng một lối sống hướng thượng và vị tha hơn, giao hòa và trân trọng hiện tại, hạnh phúc hơn qua nghệ thuật ẩm trà và lòng tự hào Việt nam. Mong muốn mang giá trị trà đến với nhiều người, chúng tôi đã chọn trà là niềm hãnh diện, là “cái tôi” và là sự nghiệp của mình.&nbsp;Mong muốn mang giá trị trà đến với nhiều người, chúng tôi đã chọn trà là niềm hãnh diện, là “cái tôi” và là sự nghiệp của mình.&nbsp;Mong muốn mang giá trị trà đến với nhiều người, chúng tôi đã chọn trà là niềm hãnh diện, là “cái tôi” và là sự nghiệp của mình.</div>', 'Đang cập nhật...', 'Đang cập nhật...', 'Đang cập nhật...', '2020-04-12 23:55:15', '2020-04-12 23:55:15');

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
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'TMT06', '1', '1', 'Mầm đậu nành Linh Spa Gold', 'Thực Phẩm Bảo Vệ Sức Khoẻ Mầm đậu nành linh spa gold Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội.', '<p>Thực phẩm bảo vệ sức khỏe<br><br>MẦM ĐẬU NÀNH LINH SPA GOLD</p>', 'mam-dau-nanh-linh-spa-gold', '/backend/uploads/products/thumbs/2020-04-11-15-11-30-d-13-636749817180898060-hasthumb.jpg', '[\"/backend/uploads/products/2020-04-11-15-11-31-d-13-636749817180898060-hasthumb.jpg\"]', '290000.0000', '0', '290000.0000', null, null, '0', '1', '0', '0', null, null, '1', 'Mầm đậu nành Linh Spa Gold', null, null, '2020-04-11 21:38:46', '2020-04-11 21:38:46');
INSERT INTO `products` VALUES ('2', 'TMT05', '1', '1', 'Hoàn thanh huyết', 'Thực Phẩm Bảo Vệ Sức Khoẻ Hoàn thanh huyết Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội.', '<p>Thực phẩm bảo vệ sức khỏe<br><br>HOÀN THANH HUYẾT</p>', 'hoan-thanh-huyet', '/backend/uploads/products/thumbs/2020-04-11-15-09-29-d-14-636749829161483310-hasthumb.jpg', '[\"/backend/uploads/products/2020-04-11-15-09-29-d-14-636749829161483310-hasthumb.jpg\"]', '270000.0000', '0', '270000.0000', null, null, '0', '1', '0', '0', null, null, '1', 'Hoàn thanh huyết', null, null, '2020-04-11 21:37:54', '2020-04-11 21:37:54');
INSERT INTO `products` VALUES ('3', 'TMT04', '1', '1', 'Viên nghệ sữa Ong Chúa', 'Thực Phẩm Bảo Vệ Sức Khoẻ Viên nghệ sữa ong chúa Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội<br>', '<p>Thực phẩm bảo vệ sức khỏe<br><br>VIÊN SỮA NGHỆ ONG CHÚA</p>', 'vien-nghe-sua-ong-chua', '/backend/uploads/products/thumbs/2020-04-11-15-07-16-d-11-636749829683023140-hasthumb.jpg', '[\"/backend/uploads/products/2020-04-11-15-07-16-d-11-636749829683023140-hasthumb.jpg\"]', '320000.0000', '0', '320000.0000', null, null, '0', '1', '0', '0', null, null, '1', 'Viên nghệ sữa Ong Chúa', null, null, '2020-04-11 21:37:35', '2020-04-11 21:37:35');
INSERT INTO `products` VALUES ('21', 'TMT03', '1', '1', 'Ngũ cốc dinh dưỡng I Love Baby', 'Thực Phẩm Bảo Vệ Sức Khỏe Ngũ cốc dinh dưỡng i love baby Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội', '<p>Thực phẩm bảo vệ sức khỏe<br><br>NGŨ CỐC DINH DƯỠNG I LOVE BABY</p>', 'ngu-coc-dinh-duong-i-love-baby', '/backend/uploads/products/thumbs/2020-04-11-15-03-53-ngu-coc-d-636777061647746778-hasthumb.jpg', '[\"/backend/uploads/products/2020-04-11-15-03-54-ngu-coc-d-636777061647746778-hasthumb.jpg\"]', '300000.0000', '0', '300000.0000', null, null, '0', '1', '1', '0', null, null, '1', 'Ngũ cốc dinh dưỡng I Love Baby', null, null, '2020-04-11 21:37:14', '2020-04-11 21:37:14');
INSERT INTO `products` VALUES ('22', 'TMT02', '1', '1', 'Cốm up size', 'Thực Phẩm Bảo Vệ Sức Khoẻ Cốm up size Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội', 'Thực phẩm bảo vệ sức khỏe<br>CỐM UP SIZE', 'com-up-size', '/backend/uploads/products/thumbs/2020-04-11-15-01-54-d-2-636749831916740902-hasthumb.jpg', '[\"/backend/uploads/products/2020-04-11-15-01-54-d-2-636749831916740902-hasthumb.jpg\"]', '390000.0000', '0', '390000.0000', null, null, '0', '1', '1', '0', null, null, '1', 'Cốm up size', null, null, '2020-04-11 21:36:25', '2020-04-11 21:36:25');
INSERT INTO `products` VALUES ('23', 'TMT01', '1', '1', 'Mầm đậu nành nguyên sơ Linh Spa', 'Thực Phẩm Bảo Vệ Sức Khoẻ Mầm Đậu Nành Nguyên Xơ Sản xuất tại : Công ty TNHH sản xuất, dịch vụ và thương mại Bình An Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội', '<div style=\"text-align: justify;\">Thực phẩm bảo vệ sức khỏe :<br>Mầm đậu nành nguyên xơ Linh Spa<br>Thành phần : 100% từ mầm đậu nành nguyên chất.<br>Công dụng : Hỗ trợ tăng cường nội tiết tố Estrogen cho nữ giới.<br>Hướng dẫn sử dụng :&nbsp;<br>- Dùng 8 gam - 12 gam bột mầm đậu nành pha với 200ml nước ấm<br>- Uống khi còn ấm để đạt hiệu quả cao, ngày uống 3 lần.<br>- Có thể thay nước bằng sữa tươi hoặc dùng với sữa đặc có đường.<br>Bảo quản :<br>- Nơi khô ráo , thoáng mát, tránh tiếp xúc với nước khi không sử dụng, tránh ánh sáng trực tiếp.<br>Đối tượng sử dụng:<br>Nữ từ 18 tuổi trở lên<br>Lưu ý : Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.<br>Số xác nhận công bố : 3879/2018/ATTP - XNCB<br>Hạn sử dụng :<br>18 tháng<br>khối lượng tịnh : 500 gam<br>Sản xuất tại :&nbsp;<br>Công ty TNHH sản xuất, dịch vụ và thương mại Bình An<br>Đ/c : Thôn Cốc Thôn - Xã Cam Thượng - Huyện Ba Vì - Thành Phố Hà Nội</div>', 'mam-dau-nanh-nguyen-so-linh-spa', '/backend/uploads/products/thumbs/2020-04-11-14-52-58-d-3-636749816412194092-hasthumb-thumb.jpg', '[\"/backend/uploads/products/2020-04-11-21-04-32-40337186-636749827706140069-hasthumb.jpg\"]', '300000.0000', '0', '300000.0000', null, null, '0', '1', '1', '0', null, null, '1', 'Mầm đậu nành nguyên sơ Linh Spa', null, null, '2020-04-11 21:53:37', '2020-04-11 21:53:37');

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `content` text,
  `star` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES ('1', '23', 'Nguyễn Đình Trung', 'trungdn.dev@gmail.com', '0975123644', 'Thời gian qua đi, bộn bề nhiều lần suy nghĩ, đời còn dài nhiều đôi khi. Thôi buồn làm chi!', '5', '1', '2020-04-11 23:47:07', '2020-04-11 23:47:07');
INSERT INTO `reviews` VALUES ('2', '23', 'Nguyễn Văn Nam', 'nam@gmail.com', '0989888999', 'Thời gian qua đi, bộn bề nhiều lần suy nghĩ, đời còn dài nhiều đôi khi. Thôi buồn làm chi!', '3', '1', '2020-04-11 23:46:51', '2020-04-11 23:46:51');
INSERT INTO `reviews` VALUES ('3', '23', 'Thái Bảo Hùng', 'hung@gmail.com', '0831234788', 'Thời gian qua đi, bộn bề nhiều lần suy nghĩ, đời còn dài nhiều đôi khi. Thôi buồn làm chi!', '2', '1', '2020-04-11 23:46:33', '2020-04-11 23:46:33');
INSERT INTO `reviews` VALUES ('4', '23', 'Lê Đình Cường', 'cuongld@gmail.com', '0989888999', 'Thời gian qua đi, bộn bề nhiều lần suy nghĩ, đời còn dài nhiều đôi khi. Thôi buồn làm chi!', '2', null, '2020-04-11 23:51:48', '2020-04-11 23:51:48');

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
  `type` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES ('2', 'Slide 2', '/backend/uploads/images/banner%20Tra%20Huyet%20Dang_1920x785px-02.jpg', '2', 'product', 'slide', '1', '2020-04-11 23:00:43', '2020-04-11 23:00:43');
INSERT INTO `slides` VALUES ('3', 'Slide 1', '/backend/uploads/images/banner%20Tra%20Huyet%20Dang_1920x785px-01.jpg', '3', 'product', 'slide', '1', '2020-04-11 23:00:13', '2020-04-11 23:00:13');
INSERT INTO `slides` VALUES ('6', 'Slide 3', '/backend/uploads/images/banner%20Tra%20Huyet%20Dang_1920x785px-03.jpg', '1', 'product', 'slide', '1', '2020-04-11 23:01:34', '2020-04-11 23:01:34');

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
INSERT INTO `users` VALUES ('1', '1', 'admin', 'Admin', 'admin@admin.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0987654321', 'Hà Nội', null, null, null, '1', null, '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9ob3RkZWFsLnh5ei9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTUzMDUwNDA5NSwiZXhwIjoxNzE3MTI4MDk1LCJuYmYiOjE1MzA1MDQwOTUsImp0aSI6InVoY08zVlBEV1hBSkpNMGkifQ.AftccxTKMGrTAOxgcx1bWQfUYKHlRyFqMYQXHUdMs44', 'SoB0vIEheS35FuA2BJBUV4jijIwGTJevTjQVjfzFHdKp39oiwmuWQIf8IKUq', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('3', '3', 'userone', 'User One', 'user.one@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$VMxBri/qLDxAEq6rGo12Yef2.md..3AqfjSuHnk0q2tbzTQLu5Lp6', '0978999888', 'Hà Nội', null, null, null, '1', null, '1', null, null, '2019-04-23 09:28:28', '2019-04-23 09:31:06');
INSERT INTO `users` VALUES ('5', '3', 'usertwo', 'User Two', 'user.two@gmail.com', '/components/admin-lte/dist/img/user2-160x160.jpg', '$2y$10$YBm9bIA.RaFUyDiXYFazNeJ72dwtF072Pieyth2BOFE43KDOdZhsy', '0967888999', 'Hà Nội', null, null, null, '1', '', '1', null, 'Afv5L7EZILNQbdVSdZwct6DPbNkUIx4OCYyA8FR2w8DNkQp9bLEK8PxF9fEB', '2019-04-24 04:21:40', '2019-04-24 04:26:28');

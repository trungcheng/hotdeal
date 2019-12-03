/*
 Navicat Premium Data Transfer

 Source Server         : xampp
 Source Server Type    : MySQL
 Source Server Version : 100122
 Source Host           : localhost:3306
 Source Schema         : vincom

 Target Server Type    : MySQL
 Target Server Version : 100122
 File Encoding         : 65001

 Date: 03/12/2019 17:36:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `fulltext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_about` tinyint(1) NULL DEFAULT 0,
  `is_feature` tinyint(1) NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `cat_id` int(11) NOT NULL DEFAULT 0,
  `seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, 1, 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', 'cach-bo-tri-tot-nhat-khi-bep-dat-chung-voi-phong-ngu', '<p>Như chúng ta đã biết, phòng ngủ không nên đặt chung với bếp, nhưng trong trường hợp phải đặt chung thì cần có những cách bố trí hợp lý nhất để tránh những điều xấu.</p>', '<p style=\"text-align: justify;\">Bếp thuộc tính hỏa, trong quá trình nấu nướng khí hỏa sẽ bốc lên các không gian bên trên và ảnh hưởng đến người cư ngụ trong các phòng đó. Dù là nhà mái bê tông thì việc này cũng cần tránh, bởi khói và hơi nóng bốc lên cũng có thể làm phần mái này có nhiệt độ tăng cao hơn.</p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"nha-bep-va-phong-ngu ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2Fnha-bep-va-phong-ngu-e1479098609814.jpg%22%2C%22alt%22%3A%22nha-bep-va-phong-ngu%22%2C%22width%22%3A%22500%22%2C%22height%22%3A%22334%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" alt=\"nha-bep-va-phong-ngu\" width=\"500\" height=\"334\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p style=\"text-align: justify;\">Phòng ngủ luôn là nơi cần sự yên tĩnh, mát lành để chúng ta thư giản sau những giờ làm việc căng thẳng. Vì thế, khi giường ngủ kê ngay trên bếp sẽ rất khó chịu, khó ngủ. Theo các chuyên gia phong thủy, giường ngủ đặt trên bếp có thể khiến người ngủ trên đó dễ nảy sinh tâm lý nóng nảy, khó chịu hoặc hay ốm đau.</p><p style=\"text-align: justify;\">Khi gặp tình huống này, gia chủ nên thay đổi cách bố trí các phòng trong nhà. Ví dụ, nên di chuyển phòng ngủ sang một không gian khác và thay vào đó là phòng đọc, phòng sinh hoạt chung…</p><p style=\"text-align: justify;\">Đối với các trường hợp nhất thiết phòng đó phải là phòng ngủ thì gia chủ vẫn có thể linh hoạt bằng cách kê giường ngủ sao cho vị trí không trùng với bếp nấu bên dưới.</p><p style=\"text-align: justify;\">Phía tầng giường nên trùng là tủ lạnh,&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/\" href=\"https://bonruachen.com/\">chậu rửa bát</a>, bàn ăn… Tuy nhiên, các trường hợp này cần được bố trí sao cho hài hòa, tránh sắp xếp lộn xộn làm ảnh hưởng đến bố cục chung của toàn căn nhà.</p>', '/backend/uploads/images/nha-bep-va-phong-ngu-e1479098609814.jpg', 0, 1, 1, 0, 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', NULL, NULL, '2019-04-03 04:02:34', '2019-04-22 16:09:44');
INSERT INTO `articles` VALUES (2, 1, 'Chậu rửa chén bằng composite', 'chau-rua-chen-bang-composite', '<p style=\"text-align: justify;\">Chậu rửa chén bằng composite đang dần được nhiều gia đình sử dụng bởi tính thẩm mỹ và nhiều ưu điểm của nó. Chậu rửa bát composite có nhiều màu sắc lựa chọn, hợp phong thủy, độ bền cao, không gỉ sét như bồn rửa inox.</p>', '<p style=\"text-align: justify;\">Từ xưa, ông bà&nbsp; có nói “muốn hiểu rõ người phụ nữ, hãy nhìn vào căn bếp của&nbsp;họ”.&nbsp;Vì căn bếp là để nấu ăn nướng thức ăn, là nơi thể hiện trổ tài đảm đang của người phụ nữ nói chung và người vợ nói riêng để giữ lửa cho gia đình. Và chậu rửa chén đã quá thông dụng trong cuộc sống hằng ngày, ngoài công dụng dùng để rửa chén, bát thì chúng ta còn có thể rửa các loại thực phẩm như rau củ quả hay cả thịt cá… để giúp cho các chị nội trợ chế biến thức ăn nhanh gọn, giúp ngăn bếp tiện nghi hơn, tiết kiệm thời gian dọn dẹp.</p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"Bồn rửa chén bằng composite ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2FBon-rua-chen-composite-1-e1537439967716.jpg%22%2C%22alt%22%3A%22B%E1%BB%93n%20r%E1%BB%ADa%20ch%C3%A9n%20b%E1%BA%B1ng%20composite%22%2C%22width%22%3A%22770%22%2C%22height%22%3A%22513%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/Bon-rua-chen-composite-1-e1537439967716.jpg\" src=\"https://bonruachen.com/wp-content/uploads/Bon-rua-chen-composite-1-e1537439967716.jpg\" alt=\"Bồn rửa chén bằng composite\" width=\"770\" height=\"513\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p style=\"text-align: justify;\"><em>Bồn rửa composite giả đá</em></p><p style=\"text-align: justify;\"><strong>Chậu&nbsp;rửa chén bằng composite</strong>&nbsp;không những giúp chế biến thức ăn nhanh gọn mà còn tăng cho sự hiện đại, sang trọng cho phòng bếp bởi những mẫu dáng sang trọng và màu sắc phong phú, linh hoạt.&nbsp;Với chất liệu&nbsp;composite&nbsp;mang lại cho sản phẩm ưu điểm về độ bền, thẩm mỹ cao, dễ dàng vệ sinh, lau rửa.</p><p style=\"text-align: justify;\"><strong>Chậu rửa chén composite</strong>&nbsp;được làm chế tạo từ composite có công năng ưu việt. Sản phẩm là sự lựa chọn hàng đầu nhờ những ưu điểm sau:</p><ul><li style=\"text-align: justify;\">Sản phẩm nhẹ gọn dễ lắp đặt, thiết kế đa dạng, màu sắc phong phú làm gian bếp thêm phần hiện đại sang trọng. Tiết kiệm công thi công lắp đặt, dễ dàng chuyển dời vị trí lắp đặt mới.</li><li style=\"text-align: justify;\">Với bề mặt phẳng, khó trấy xước, ít bám bẩm dễ dàng vệ sinh cho gian bếp luôn sạch sẽ.</li><li style=\"text-align: justify;\">Chống va đập cao, độ bền tốt, tuổi thọ sử dụng cao tiết kiệm chi phí đầu tư. Rất phù hợp và ưa chuộng tin dùng gắn bó lâu dài với mẫu yêu thích của gia đình bạn.</li><li style=\"text-align: justify;\">Có khả năng cách điện, cách nhiệt tốt làm gia đình bạn yên tâm sử dụng tránh được nhiều tình trạng xấu ảnh hưởng sức khỏe mọi người.</li><li style=\"text-align: justify;\">Composite có khẳ năng chống ăn mòn cao, không bị ăn mòn bởi các chất tẩy rửa mạnh, thậm chí cả axit, kiềm, muối.&nbsp;Nó&nbsp;thường được dùng cho các công ty sản xuất&nbsp;<a data-cke-saved-href=\"https://tanphatfrp.com/bon-chua-hoa-chat-bang-composite.html\" href=\"https://tanphatfrp.com/bon-chua-hoa-chat-bang-composite.html\" target=\"_blank\">Bồn chứa hóa chất bằng composite</a>. Nhờ đặc tính này mà khi sử dụng hay vệ sinh bồn rửa chén cũng không sợ bị hư tổn, gỉ sét hay phát sinh chất độc hại.</li><li style=\"text-align: justify;\">Có nhiều kích thước, hình dạng, màu sắc phù hợp với nhu cầu khách sử dụng phù hợp cho những không gian bếp lớn nhỏ khác nhau, hay phục vụ ngay cả những phụ nữ thích làm rực rỡ gian bếp thêm sinh động nhờ màu phong phú của chúng.</li><li style=\"text-align: justify;\">Có khả năng chống thấm tuyệt đối, chống rò rỉ bảo vệ gian bếp của chúng ta luôn khô thoáng, sạch sẽ.</li><li style=\"text-align: justify;\">Giá&nbsp;<a data-cke-saved-href=\"https://tanphatfrp.com/\" href=\"https://tanphatfrp.com/\" target=\"_blank\">bồn composite</a>&nbsp;rẻ chi phí đầu tư thấp, không tốn chi phí bảo tri, bảo dưỡng.</li></ul><p style=\"text-align: justify;\">Với tất cả những ưu điểm trên, chậu&nbsp;rửa chén composite đủ thuyết phục bạn tin dùng cho gian bếp đẹp, sang trọng, tiện nghi và an toàn sức khỏe cho gia đình. Vừa tiết kiệm chi phí đầu tư, lại được sử dụng lâu dài và đặc biệt không gây tác hại đến sức khỏe trong quá trình sử dụng, là sản phẩm đáng tin dùng.</p><p style=\"text-align: justify;\">Chậu&nbsp;rửa bát composite&nbsp;được thiết rộng rãi và sâu phục vụ nhu cầu rửa rau, củ quả,đồ ăn, bát đĩa chén thật thuận tiện không sợ văng nước ra ngoài.</p><p style=\"text-align: justify;\">Bồn&nbsp;rửa chén composite&nbsp;dựa theo số lượng bồn rửa sẽ có 3 loại là chậu rửa đơn, chậu rửa đôi và chậu rửa ba; có thêm cánh bên cạnh chậu để tiện đặt những vật dụng để tiện dọn rửa nhanh gọn hơn hoặc có thể đặt các thực phẩm đã rửa xong mà không sợ nước chảy ra bếp. Tùy thuộc vào không gian bếp gia đình bạn có diện tích rộng hay hẹp mà chúng ta sẽ lựa chọn số lượng chậu rửa cho phù hợp.</p><ul><li style=\"text-align: justify;\">Chậu rửa đơn:&nbsp;Có dạng hình vuông hay hình chữ nhật và sẽ thích hợp với những gia đình có không gian bếp nhỏ hẹp.</li><li style=\"text-align: justify;\">Chậu rửa đôi:&nbsp;Gồm 2 chậu có kích cỡ bằng nhau hoặc cũng có thể là một chậu to đi kèm một chậu nhỏ, đây là loại được dùng nhiều nhất hiện nay vì hầu như nó có thể phù hợp với mọi không gian bếp khác nhau.</li><li style=\"text-align: justify;\">Chậu rửa ba:&nbsp;Gồm 3 chậu có kích cỡ bằng nhau hoặc khác nhau, chậu này sẽ phù hợp hơn với những nhà hàng hay quán ăn vì đòi hỏi diện tích lắp đặt phải rất lớn. Chậu này thì ít phổ biến hơn hai loại chậu trên.</li></ul><p style=\"text-align: justify;\">Khi chọn chậu rửa chén cho gia đình bạn phải kiểm tra kích thước căn bếp để chọn mua chậu cho phù hợp, hoặc căn cứ vào kích cỡ mà đặt thiết kế chậu rửa chén cho đủ với gian bếp mỗi gia đình. Hay cân nhắc về cả chi phí gia đình để chon sản phẩm tốt, chậu&nbsp;rửa chén composite là lựa chọn tuyệt vời để tiết kiệm chi phí đầu tư cho các hộ gia đình, mà không hề thua kém các sản phẩm khác bởi công năng ưu việt và phong phú mẫu mã màu sắc.</p><p style=\"text-align: justify;\">Chúng tôi hy vọng với những thông tin chia sẻ, giúp bạn có được quyết định chọn trang bị sản phẩm mang lại sự an toàn và tiết kiệm tối ưu cho quý khách. Cảm ơn quý khách đã tin tưởng !</p><p style=\"text-align: justify;\"><a data-cke-saved-href=\"https://bonruachen.com/\" href=\"https://bonruachen.com/\"><strong>Bonruachen.com</strong></a>&nbsp;chuyên phân phối các loại&nbsp;<strong><a data-cke-saved-href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\" href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\">bồn rửa chén bằng đá</a></strong>, composite và&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/bon-rua-inox/\" href=\"https://bonruachen.com/bon-rua-inox/\"><strong>bồn rửa inox</strong></a>.</p><p style=\"text-align: justify;\"><strong>Hotline:</strong>&nbsp;<strong>0962261399</strong></p><div data-cke-hidden-sel=\"1\" data-cke-temp=\"1\" style=\"position:fixed;top:0;left:-1000px\">Bồn rửa chén bằng composite ảnh widget</div>', '/backend/uploads/images/Bon-rua-chen-composite-1-e1537439967716.jpg', 1, 1, 1, 0, 'Chậu rửa chén bằng composite', NULL, NULL, '2019-04-03 04:49:08', '2019-04-22 08:42:19');
INSERT INTO `articles` VALUES (3, 1, 'Tại sao nên sử dụng chậu rửa chén đá nhân tạo', 'tai-sao-nen-su-dung-chau-rua-chen-da-nhan-tao', '<p><b>Bồn rửa chén/&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\" href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\">chậu rửa chén&nbsp;</a></b>là xu hướng lựa chọn của hầu hết gia đình hiện đại, tuy nhiên, nếu bạn là một người mới bắt đầu tìm hiểu về bồn rửa chén, cũng muốn sắm sửa cho gia đình mình một chiếc bồn rửa phù hợp thì điều phân vân có lẽ là không biết bồn rửa này có những công dụng gì.<br></p>', '<p>Vậy thì còn chờ gì nữa! Hãy đọc hết bài viết này để biết được lý do vì sao nên sử dụng bồn rửa chén nhé!<br></p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"1\" role=\"region\" aria-label=\"chau rua chen ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2Fchau-rua-chen-da-nhan-tao.jpg%22%2C%22alt%22%3A%22chau%20rua%20chen%22%2C%22width%22%3A%22554%22%2C%22height%22%3A%22420%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg\" src=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg\" alt=\"chau rua chen\" width=\"554\" height=\"420\" srcset=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg 554w, https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao-300x227.jpg 300w\" sizes=\"(max-width: 554px) 100vw, 554px\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p><br></p><ol><li><p><b>Giúp hiệu quả công việc nội trợ tăng gấp đôi</b></p></li></ol><p>Những gia đình truyền thống thường sử dụng chậu (thau) vào việc rửa chén hoặc sử dụng cho công việc bếp núc,tuy nhiên sự bất tiện đến từ việc bếp nấu một đằng mà chậu rửa lại ở rất xa khiến cho công việc nấu nướng trở nên lâu và khó khăn.</p><p>Sự ra đời của chậu rửa chén là giải pháp giúp thao tác bếp núc trở nên nhanh gọn hơn, chậu rửa được đặt ngay trong nhà gần bếp nấu giúp thao tác dọn rửa diễn ra nhanh chóng, cùng với đó là có thể kết hợp làm nhiều việc cùng lúc mà không tốn nhiều thời gian.</p><ol start=\"2\"><li><p><b>Đảm bảo vệ sinh, dễ dàng lau chùi</b></p></li></ol><p>Chậu rửa chén thường được làm bằng chất liệu inox không rỉ trên dây chuyền công nghệ hiện đại, vì thế yếu tố vệ sinh và an toàn là yếu tố quan trọng đầu tiên được nhắc đến.</p><p>Những chậu rửa thông thường khi bám bẩn rất khó chùi rửa, khác với điều đó, chậu rửa chén có thể dễ dàng cọ rửa lau chùi khi bẩn mà không tiết ra những chất gây nguy ngại cho cơ thể.</p><ol start=\"3\"><li><p><b>Là xu hướng của cả hiện tại và tương lai</b></p></li></ol><p>Những gia đình hiện đại muốn căn bếp của mình trông sang trọng và chuyên nghiệp hơn thì ngoài việc bài trí nội thất phù hợp thì việc sắm sửa một chiếc bồn rửa là điều không thể bỏ qua.</p><p>Bồn rửa chén ngoài chức năng chuyên dụng còn giúp tô điểm cho căn bếp của bạn trông sáng sủa, đầy đủ, tạo được cảm giác tiện nghi và ấm cúng hơn.</p><p>Hy vọng bài viết đã giúp bạn hình dung được phần nào công dụng của một chiếc chậu rửa chén!</p><p>Tham khảo bài viết tương tự&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/mua-chau-rua-chen-bang-da-o-dau-re-nhat/\" href=\"https://bonruachen.com/mua-chau-rua-chen-bang-da-o-dau-re-nhat/\"><strong>Mua chậu rửa chén bằng đá ở đâu rẻ nhất</strong></a>.</p>', '/backend/uploads/images/chau-rua-chen-da-nhan-tao.jpg', 0, 1, 1, 0, 'Tại sao nên sử dụng chậu rửa chén đá nhân tạo', NULL, NULL, '2019-04-22 07:53:35', '2019-04-22 07:53:35');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 0, 'Khối Vận hành', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-van-hanh', NULL, 1, '2019-04-01 09:21:04', '2019-08-23 03:15:30');
INSERT INTO `categories` VALUES (2, 1, 'Miền Bắc 1', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-bac-1', NULL, 1, '2019-04-02 05:02:08', '2019-04-02 05:02:08');
INSERT INTO `categories` VALUES (3, 1, 'Miền Bắc 2', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-bac-2', NULL, 1, '2019-04-18 16:02:05', '2019-04-18 16:02:05');
INSERT INTO `categories` VALUES (4, 0, 'Khối Xây Dựng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-xay-dung', NULL, 1, '2019-04-23 10:32:59', '2019-08-23 03:16:00');
INSERT INTO `categories` VALUES (5, 0, 'Tài chính – Hành chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'tai-chinh-hanh-chinh', NULL, 1, '2019-08-16 01:04:37', '2019-08-23 03:16:16');
INSERT INTO `categories` VALUES (6, 4, 'BQL Xây Dựng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'bql-xay-dung', NULL, 1, '2019-08-22 16:43:02', '2019-08-23 03:18:08');
INSERT INTO `categories` VALUES (7, 4, 'Văn Phòng', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'van-phong', NULL, 1, '2019-08-22 16:43:17', '2019-08-23 03:18:23');
INSERT INTO `categories` VALUES (8, 5, 'Tài chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'tai-chinh', NULL, 1, '2019-08-22 16:43:30', '2019-08-23 03:18:39');
INSERT INTO `categories` VALUES (9, 5, 'Hành chính', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'hanh-chinh', NULL, 1, '2019-08-22 16:43:42', '2019-08-23 03:18:54');
INSERT INTO `categories` VALUES (10, 0, 'Khối phòng ban khác', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'khoi-phong-ban-khac', NULL, 1, '2019-08-23 03:16:45', '2019-08-23 03:16:45');
INSERT INTO `categories` VALUES (11, 1, 'Miền Nam 1', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-nam-1', NULL, 1, '2019-08-23 03:17:05', '2019-08-23 03:17:05');
INSERT INTO `categories` VALUES (12, 1, 'Miền Nam 2', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'mien-nam-2', NULL, 1, '2019-08-23 03:17:22', '2019-08-23 03:17:22');
INSERT INTO `categories` VALUES (13, 10, 'Nhân sự đào tạo', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'nhan-su-dao-tao', NULL, 1, '2019-08-23 03:19:15', '2019-08-23 03:19:15');
INSERT INTO `categories` VALUES (14, 10, 'An ninh an toàn', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'an-ninh-an-toan', NULL, 1, '2019-08-23 03:19:42', '2019-08-23 03:20:22');
INSERT INTO `categories` VALUES (15, 10, 'Công nghệ thông tin', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'cong-nghe-thong-tin', NULL, 1, '2019-08-23 03:20:04', '2019-08-23 03:20:04');
INSERT INTO `categories` VALUES (16, 10, 'Sales & Marketing', '15 ứng cử viên đến từ Khối Vận Hành Miền Bắc 1 đã rất nỗ lực đạt được những thành tựu nổi bật trong thời gian vừa qua. Hãy lắng nghe những câu chuyện truyền cảm hứng của họ và cũng bình chọn cho họ nhé!', 'sales-marketing', NULL, 1, '2019-08-23 03:20:41', '2019-08-23 03:20:41');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `all` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Superadmin', 1);
INSERT INTO `roles` VALUES (2, 'Admin', 0);
INSERT INTO `roles` VALUES (3, 'User', 0);

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slogan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `work_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image_home_page` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content_home_page` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'Vincom Retail', NULL, NULL, NULL, NULL, NULL, '/backend/uploads/images/logo.png', '/backend/uploads/images/bg-home.png', '<h3>TIÊU CHÍ ĐÁNH GIÁ</h3><h4>1. LÀ TẤM GƯƠNG TIÊU BIỂU TRONG CÔNG VIỆC</h4><ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi</li><li>- Kết quả đánh giá Quý đạt 80% trở lên</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc</li></ul><h4>2. LÀ TẤM GƯƠNG TIÊU BIỂU CỦA TINH THẦN DỊCH VỤ VINCOM</h4><p>Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</p><h4>3. ƯU TIÊN CÁC TRƯỜNG HỢP ĐƯỢC VINH DANH TRÊN TRUYỀN THÔNG</h4><p>Các trường hợp được vinh danh trên truyền thông sẽ được ưu tiên (VD: Vinh danh trên báo chí, Vinclub, quyết định khen thưởng như: Cứu người gặp nạn, nhặt được của rơi trả lại người mất, giúp đỡ khách hàng, phát hiện và ngăn chặn kịp thời các rủi ro xảy ra, phát hiện, báo cáo, đấu tranh, ngăn chặn các hành vi sai phạm, tiêu cực, hành vi vi phạm pháp luật, ...)<br>​​​​​​​</p><h3>THỂ THỨC THAM GIA</h3><ul><li>- Thời gian tham gia bình chọn: 1/9/2019 - 30/9/2019</li><li>- Đối tượng: Toàn thể CBNV công ty</li><li>- Hình thức dự thi: Bình chọn online trên hệ thống</li><li>- Cách thức tổ chức: Thi đấu bình chọn của CBNV theo vòng từ cấp bộ phận, cơ sở, vùng và toàn công ty.</li><li>Đến cấp vùng/công ty, mỗi ứng viên sẽ có các clip giới thiệu bản thân để CBNV toàn quốc có thể bình chọn dễ dàng.</li></ul>', '2019-08-23 12:20:27', '2019-08-23 05:20:27');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NULL DEFAULT NULL,
  `cat_id` int(11) NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `intro` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `avatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `video` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `total_vote` int(11) NULL DEFAULT 0,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` tinyint(1) NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 0, 'admin', 'Nguyễn Át Min', 'admin@admin.com', '', NULL, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, 'DhwlvdWk2DToBJoiT9IiUvpQ1dgkE9dgT2oIleAm6e1IWxfvbBwP2shkdmtI', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES (3, 3, 2, '', 'Hoàng Văn Hải', '', 'Lập trình viên cấp cao', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 69698, '', 1, 1, '', '2019-04-23 09:28:28', '2019-08-23 05:01:41');
INSERT INTO `users` VALUES (5, 3, 3, '', 'Đinh Trung', '', 'Chuyên viên thiết kế animation', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 23236, '', 1, 1, '', '2019-04-24 04:21:40', '2019-08-19 04:56:43');
INSERT INTO `users` VALUES (6, 3, 6, NULL, 'Mạnh Hiển', NULL, 'Designer', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 56567, NULL, 1, 1, NULL, '2019-08-19 18:14:36', '2019-08-23 04:37:36');
INSERT INTO `users` VALUES (7, 3, 8, NULL, 'Dương Hoàng', NULL, 'Tester', '', 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', NULL, 12345, NULL, 1, 1, NULL, '2019-08-19 18:15:05', '2019-08-23 04:37:48');
INSERT INTO `users` VALUES (8, 2, 0, 'namnt', 'Nguyễn Thành Nam', 'nam@gmail.com', NULL, NULL, '', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, 'ORaeAel7nNmhrvi9INvkBMyrNlaLq8I2nqxvc10SAYwQu08NcAdAKbNW6y3y', '2019-08-20 21:55:57', '2019-08-20 21:55:57');
INSERT INTO `users` VALUES (9, 3, 0, 'thuynv', 'Nguyễn Văn Thủy', 'thuy@gmail.com', NULL, NULL, '', NULL, 0, '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', 0, 1, NULL, '2019-08-20 21:56:19', '2019-08-20 21:56:19');
INSERT INTO `users` VALUES (10, 3, 0, 'newton', 'newton', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-22 23:14:40', '2019-08-22 23:14:40');
INSERT INTO `users` VALUES (11, 3, 0, 'einstein', 'einstein', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-22 23:16:18', '2019-08-22 23:16:18');
INSERT INTO `users` VALUES (13, 3, 0, 'galieleo', 'galieleo', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1, NULL, '2019-08-23 15:23:25', '2019-08-23 15:23:25');
INSERT INTO `users` VALUES (14, 3, 2, NULL, 'Nguyễn Hương Ly', NULL, 'Account', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', '/backend/uploads/images/68496060_2070629729707894_3707300931071639552_n.jpg', NULL, 3, NULL, 1, 1, NULL, '2019-08-23 09:08:07', '2019-08-23 09:08:07');
INSERT INTO `users` VALUES (15, 3, 3, NULL, 'Trang Mít', NULL, 'Account', '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>', '/backend/uploads/images/68496060_2070629729707894_3707300931071639552_n.jpg', NULL, 3, NULL, 1, 1, NULL, '2019-08-23 09:22:54', '2019-08-23 09:22:54');

SET FOREIGN_KEY_CHECKS = 1;

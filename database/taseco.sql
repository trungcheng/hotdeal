/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : taseco

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-03 23:49:52
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
  `intro` text,
  `fulltext` text,
  `image` varchar(255) DEFAULT NULL,
  `is_about` tinyint(1) DEFAULT '0',
  `is_feature` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', 'cach-bo-tri-tot-nhat-khi-bep-dat-chung-voi-phong-ngu', '<p>Như chúng ta đã biết, phòng ngủ không nên đặt chung với bếp, nhưng trong trường hợp phải đặt chung thì cần có những cách bố trí hợp lý nhất để tránh những điều xấu.</p>', '<p style=\"text-align: justify;\">Bếp thuộc tính hỏa, trong quá trình nấu nướng khí hỏa sẽ bốc lên các không gian bên trên và ảnh hưởng đến người cư ngụ trong các phòng đó. Dù là nhà mái bê tông thì việc này cũng cần tránh, bởi khói và hơi nóng bốc lên cũng có thể làm phần mái này có nhiệt độ tăng cao hơn.</p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"nha-bep-va-phong-ngu ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2Fnha-bep-va-phong-ngu-e1479098609814.jpg%22%2C%22alt%22%3A%22nha-bep-va-phong-ngu%22%2C%22width%22%3A%22500%22%2C%22height%22%3A%22334%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" src=\"https://bonruachen.com/wp-content/uploads/nha-bep-va-phong-ngu-e1479098609814.jpg\" alt=\"nha-bep-va-phong-ngu\" width=\"500\" height=\"334\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p style=\"text-align: justify;\">Phòng ngủ luôn là nơi cần sự yên tĩnh, mát lành để chúng ta thư giản sau những giờ làm việc căng thẳng. Vì thế, khi giường ngủ kê ngay trên bếp sẽ rất khó chịu, khó ngủ. Theo các chuyên gia phong thủy, giường ngủ đặt trên bếp có thể khiến người ngủ trên đó dễ nảy sinh tâm lý nóng nảy, khó chịu hoặc hay ốm đau.</p><p style=\"text-align: justify;\">Khi gặp tình huống này, gia chủ nên thay đổi cách bố trí các phòng trong nhà. Ví dụ, nên di chuyển phòng ngủ sang một không gian khác và thay vào đó là phòng đọc, phòng sinh hoạt chung…</p><p style=\"text-align: justify;\">Đối với các trường hợp nhất thiết phòng đó phải là phòng ngủ thì gia chủ vẫn có thể linh hoạt bằng cách kê giường ngủ sao cho vị trí không trùng với bếp nấu bên dưới.</p><p style=\"text-align: justify;\">Phía tầng giường nên trùng là tủ lạnh,&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/\" href=\"https://bonruachen.com/\">chậu rửa bát</a>, bàn ăn… Tuy nhiên, các trường hợp này cần được bố trí sao cho hài hòa, tránh sắp xếp lộn xộn làm ảnh hưởng đến bố cục chung của toàn căn nhà.</p>', '/backend/uploads/images/nha-bep-va-phong-ngu-e1479098609814.jpg', '0', '1', '1', '0', 'Cách bố trí tốt nhất khi bếp đặt chung với phòng ngủ', null, null, '2019-04-03 04:02:34', '2019-04-22 16:09:44');
INSERT INTO `articles` VALUES ('2', '1', 'Chậu rửa chén bằng composite', 'chau-rua-chen-bang-composite', '<p style=\"text-align: justify;\">Chậu rửa chén bằng composite đang dần được nhiều gia đình sử dụng bởi tính thẩm mỹ và nhiều ưu điểm của nó. Chậu rửa bát composite có nhiều màu sắc lựa chọn, hợp phong thủy, độ bền cao, không gỉ sét như bồn rửa inox.</p>', '<p style=\"text-align: justify;\">Từ xưa, ông bà&nbsp; có nói “muốn hiểu rõ người phụ nữ, hãy nhìn vào căn bếp của&nbsp;họ”.&nbsp;Vì căn bếp là để nấu ăn nướng thức ăn, là nơi thể hiện trổ tài đảm đang của người phụ nữ nói chung và người vợ nói riêng để giữ lửa cho gia đình. Và chậu rửa chén đã quá thông dụng trong cuộc sống hằng ngày, ngoài công dụng dùng để rửa chén, bát thì chúng ta còn có thể rửa các loại thực phẩm như rau củ quả hay cả thịt cá… để giúp cho các chị nội trợ chế biến thức ăn nhanh gọn, giúp ngăn bếp tiện nghi hơn, tiết kiệm thời gian dọn dẹp.</p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"Bồn rửa chén bằng composite ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2FBon-rua-chen-composite-1-e1537439967716.jpg%22%2C%22alt%22%3A%22B%E1%BB%93n%20r%E1%BB%ADa%20ch%C3%A9n%20b%E1%BA%B1ng%20composite%22%2C%22width%22%3A%22770%22%2C%22height%22%3A%22513%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/Bon-rua-chen-composite-1-e1537439967716.jpg\" src=\"https://bonruachen.com/wp-content/uploads/Bon-rua-chen-composite-1-e1537439967716.jpg\" alt=\"Bồn rửa chén bằng composite\" width=\"770\" height=\"513\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p style=\"text-align: justify;\"><em>Bồn rửa composite giả đá</em></p><p style=\"text-align: justify;\"><strong>Chậu&nbsp;rửa chén bằng composite</strong>&nbsp;không những giúp chế biến thức ăn nhanh gọn mà còn tăng cho sự hiện đại, sang trọng cho phòng bếp bởi những mẫu dáng sang trọng và màu sắc phong phú, linh hoạt.&nbsp;Với chất liệu&nbsp;composite&nbsp;mang lại cho sản phẩm ưu điểm về độ bền, thẩm mỹ cao, dễ dàng vệ sinh, lau rửa.</p><p style=\"text-align: justify;\"><strong>Chậu rửa chén composite</strong>&nbsp;được làm chế tạo từ composite có công năng ưu việt. Sản phẩm là sự lựa chọn hàng đầu nhờ những ưu điểm sau:</p><ul><li style=\"text-align: justify;\">Sản phẩm nhẹ gọn dễ lắp đặt, thiết kế đa dạng, màu sắc phong phú làm gian bếp thêm phần hiện đại sang trọng. Tiết kiệm công thi công lắp đặt, dễ dàng chuyển dời vị trí lắp đặt mới.</li><li style=\"text-align: justify;\">Với bề mặt phẳng, khó trấy xước, ít bám bẩm dễ dàng vệ sinh cho gian bếp luôn sạch sẽ.</li><li style=\"text-align: justify;\">Chống va đập cao, độ bền tốt, tuổi thọ sử dụng cao tiết kiệm chi phí đầu tư. Rất phù hợp và ưa chuộng tin dùng gắn bó lâu dài với mẫu yêu thích của gia đình bạn.</li><li style=\"text-align: justify;\">Có khả năng cách điện, cách nhiệt tốt làm gia đình bạn yên tâm sử dụng tránh được nhiều tình trạng xấu ảnh hưởng sức khỏe mọi người.</li><li style=\"text-align: justify;\">Composite có khẳ năng chống ăn mòn cao, không bị ăn mòn bởi các chất tẩy rửa mạnh, thậm chí cả axit, kiềm, muối.&nbsp;Nó&nbsp;thường được dùng cho các công ty sản xuất&nbsp;<a data-cke-saved-href=\"https://tanphatfrp.com/bon-chua-hoa-chat-bang-composite.html\" href=\"https://tanphatfrp.com/bon-chua-hoa-chat-bang-composite.html\" target=\"_blank\">Bồn chứa hóa chất bằng composite</a>. Nhờ đặc tính này mà khi sử dụng hay vệ sinh bồn rửa chén cũng không sợ bị hư tổn, gỉ sét hay phát sinh chất độc hại.</li><li style=\"text-align: justify;\">Có nhiều kích thước, hình dạng, màu sắc phù hợp với nhu cầu khách sử dụng phù hợp cho những không gian bếp lớn nhỏ khác nhau, hay phục vụ ngay cả những phụ nữ thích làm rực rỡ gian bếp thêm sinh động nhờ màu phong phú của chúng.</li><li style=\"text-align: justify;\">Có khả năng chống thấm tuyệt đối, chống rò rỉ bảo vệ gian bếp của chúng ta luôn khô thoáng, sạch sẽ.</li><li style=\"text-align: justify;\">Giá&nbsp;<a data-cke-saved-href=\"https://tanphatfrp.com/\" href=\"https://tanphatfrp.com/\" target=\"_blank\">bồn composite</a>&nbsp;rẻ chi phí đầu tư thấp, không tốn chi phí bảo tri, bảo dưỡng.</li></ul><p style=\"text-align: justify;\">Với tất cả những ưu điểm trên, chậu&nbsp;rửa chén composite đủ thuyết phục bạn tin dùng cho gian bếp đẹp, sang trọng, tiện nghi và an toàn sức khỏe cho gia đình. Vừa tiết kiệm chi phí đầu tư, lại được sử dụng lâu dài và đặc biệt không gây tác hại đến sức khỏe trong quá trình sử dụng, là sản phẩm đáng tin dùng.</p><p style=\"text-align: justify;\">Chậu&nbsp;rửa bát composite&nbsp;được thiết rộng rãi và sâu phục vụ nhu cầu rửa rau, củ quả,đồ ăn, bát đĩa chén thật thuận tiện không sợ văng nước ra ngoài.</p><p style=\"text-align: justify;\">Bồn&nbsp;rửa chén composite&nbsp;dựa theo số lượng bồn rửa sẽ có 3 loại là chậu rửa đơn, chậu rửa đôi và chậu rửa ba; có thêm cánh bên cạnh chậu để tiện đặt những vật dụng để tiện dọn rửa nhanh gọn hơn hoặc có thể đặt các thực phẩm đã rửa xong mà không sợ nước chảy ra bếp. Tùy thuộc vào không gian bếp gia đình bạn có diện tích rộng hay hẹp mà chúng ta sẽ lựa chọn số lượng chậu rửa cho phù hợp.</p><ul><li style=\"text-align: justify;\">Chậu rửa đơn:&nbsp;Có dạng hình vuông hay hình chữ nhật và sẽ thích hợp với những gia đình có không gian bếp nhỏ hẹp.</li><li style=\"text-align: justify;\">Chậu rửa đôi:&nbsp;Gồm 2 chậu có kích cỡ bằng nhau hoặc cũng có thể là một chậu to đi kèm một chậu nhỏ, đây là loại được dùng nhiều nhất hiện nay vì hầu như nó có thể phù hợp với mọi không gian bếp khác nhau.</li><li style=\"text-align: justify;\">Chậu rửa ba:&nbsp;Gồm 3 chậu có kích cỡ bằng nhau hoặc khác nhau, chậu này sẽ phù hợp hơn với những nhà hàng hay quán ăn vì đòi hỏi diện tích lắp đặt phải rất lớn. Chậu này thì ít phổ biến hơn hai loại chậu trên.</li></ul><p style=\"text-align: justify;\">Khi chọn chậu rửa chén cho gia đình bạn phải kiểm tra kích thước căn bếp để chọn mua chậu cho phù hợp, hoặc căn cứ vào kích cỡ mà đặt thiết kế chậu rửa chén cho đủ với gian bếp mỗi gia đình. Hay cân nhắc về cả chi phí gia đình để chon sản phẩm tốt, chậu&nbsp;rửa chén composite là lựa chọn tuyệt vời để tiết kiệm chi phí đầu tư cho các hộ gia đình, mà không hề thua kém các sản phẩm khác bởi công năng ưu việt và phong phú mẫu mã màu sắc.</p><p style=\"text-align: justify;\">Chúng tôi hy vọng với những thông tin chia sẻ, giúp bạn có được quyết định chọn trang bị sản phẩm mang lại sự an toàn và tiết kiệm tối ưu cho quý khách. Cảm ơn quý khách đã tin tưởng !</p><p style=\"text-align: justify;\"><a data-cke-saved-href=\"https://bonruachen.com/\" href=\"https://bonruachen.com/\"><strong>Bonruachen.com</strong></a>&nbsp;chuyên phân phối các loại&nbsp;<strong><a data-cke-saved-href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\" href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\">bồn rửa chén bằng đá</a></strong>, composite và&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/bon-rua-inox/\" href=\"https://bonruachen.com/bon-rua-inox/\"><strong>bồn rửa inox</strong></a>.</p><p style=\"text-align: justify;\"><strong>Hotline:</strong>&nbsp;<strong>0962261399</strong></p><div data-cke-hidden-sel=\"1\" data-cke-temp=\"1\" style=\"position:fixed;top:0;left:-1000px\">Bồn rửa chén bằng composite ảnh widget</div>', '/backend/uploads/images/Bon-rua-chen-composite-1-e1537439967716.jpg', '1', '1', '1', '0', 'Chậu rửa chén bằng composite', null, null, '2019-04-03 04:49:08', '2019-04-22 08:42:19');
INSERT INTO `articles` VALUES ('3', '1', 'Tại sao nên sử dụng chậu rửa chén đá nhân tạo', 'tai-sao-nen-su-dung-chau-rua-chen-da-nhan-tao', '<p><b>Bồn rửa chén/&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\" href=\"https://bonruachen.com/chau-rua-bat-da-nhan-tao/\">chậu rửa chén&nbsp;</a></b>là xu hướng lựa chọn của hầu hết gia đình hiện đại, tuy nhiên, nếu bạn là một người mới bắt đầu tìm hiểu về bồn rửa chén, cũng muốn sắm sửa cho gia đình mình một chiếc bồn rửa phù hợp thì điều phân vân có lẽ là không biết bồn rửa này có những công dụng gì.<br></p>', '<p>Vậy thì còn chờ gì nữa! Hãy đọc hết bài viết này để biết được lý do vì sao nên sử dụng bồn rửa chén nhé!<br></p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_image cke_image_nocaption\" data-cke-display-name=\"ảnh\" data-cke-widget-id=\"1\" role=\"region\" aria-label=\"chau rua chen ảnh widget\"><div data-cke-widget-keep-attr=\"0\" data-widget=\"image\" class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fbonruachen.com%2Fwp-content%2Fuploads%2Fchau-rua-chen-da-nhan-tao.jpg%22%2C%22alt%22%3A%22chau%20rua%20chen%22%2C%22width%22%3A%22554%22%2C%22height%22%3A%22420%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22center%22%2C%22classes%22%3Anull%7D\" style=\"text-align: center;\"><span class=\"cke_image_resizer_wrapper\"><img data-cke-saved-src=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg\" src=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg\" alt=\"chau rua chen\" width=\"554\" height=\"420\" srcset=\"https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao.jpg 554w, https://bonruachen.com/wp-content/uploads/chau-rua-chen-da-nhan-tao-300x227.jpg 300w\" sizes=\"(max-width: 554px) 100vw, 554px\" data-cke-widget-upcasted=\"1\"><span class=\"cke_image_resizer\" title=\"Kéo rê để thay đổi kích cỡ\">​</span></span></div><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://thachvu.xyz/backend/plugins/ckeditor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px; display: block;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Nhấp chuột và kéo để di chuyển\" height=\"15\" role=\"presentation\"></span></div><p><br></p><ol><li><p><b>Giúp hiệu quả công việc nội trợ tăng gấp đôi</b></p></li></ol><p>Những gia đình truyền thống thường sử dụng chậu (thau) vào việc rửa chén hoặc sử dụng cho công việc bếp núc,tuy nhiên sự bất tiện đến từ việc bếp nấu một đằng mà chậu rửa lại ở rất xa khiến cho công việc nấu nướng trở nên lâu và khó khăn.</p><p>Sự ra đời của chậu rửa chén là giải pháp giúp thao tác bếp núc trở nên nhanh gọn hơn, chậu rửa được đặt ngay trong nhà gần bếp nấu giúp thao tác dọn rửa diễn ra nhanh chóng, cùng với đó là có thể kết hợp làm nhiều việc cùng lúc mà không tốn nhiều thời gian.</p><ol start=\"2\"><li><p><b>Đảm bảo vệ sinh, dễ dàng lau chùi</b></p></li></ol><p>Chậu rửa chén thường được làm bằng chất liệu inox không rỉ trên dây chuyền công nghệ hiện đại, vì thế yếu tố vệ sinh và an toàn là yếu tố quan trọng đầu tiên được nhắc đến.</p><p>Những chậu rửa thông thường khi bám bẩn rất khó chùi rửa, khác với điều đó, chậu rửa chén có thể dễ dàng cọ rửa lau chùi khi bẩn mà không tiết ra những chất gây nguy ngại cho cơ thể.</p><ol start=\"3\"><li><p><b>Là xu hướng của cả hiện tại và tương lai</b></p></li></ol><p>Những gia đình hiện đại muốn căn bếp của mình trông sang trọng và chuyên nghiệp hơn thì ngoài việc bài trí nội thất phù hợp thì việc sắm sửa một chiếc bồn rửa là điều không thể bỏ qua.</p><p>Bồn rửa chén ngoài chức năng chuyên dụng còn giúp tô điểm cho căn bếp của bạn trông sáng sủa, đầy đủ, tạo được cảm giác tiện nghi và ấm cúng hơn.</p><p>Hy vọng bài viết đã giúp bạn hình dung được phần nào công dụng của một chiếc chậu rửa chén!</p><p>Tham khảo bài viết tương tự&nbsp;<a data-cke-saved-href=\"https://bonruachen.com/mua-chau-rua-chen-bang-da-o-dau-re-nhat/\" href=\"https://bonruachen.com/mua-chau-rua-chen-bang-da-o-dau-re-nhat/\"><strong>Mua chậu rửa chén bằng đá ở đâu rẻ nhất</strong></a>.</p>', '/backend/uploads/images/chau-rua-chen-da-nhan-tao.jpg', '0', '1', '1', '0', 'Tại sao nên sử dụng chậu rửa chén đá nhân tạo', null, null, '2019-04-22 07:53:35', '2019-04-22 07:53:35');

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
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '3', 'Triết lý kinh doanh', null, 'triet-ly-kinh-doanh', null, '1', '2', '2019-04-01 09:21:04', '2019-12-03 21:00:09');
INSERT INTO `categories` VALUES ('2', '3', 'Tổng quan', null, 'tong-quan', null, '1', '1', '2019-04-02 05:02:08', '2019-12-03 20:59:43');
INSERT INTO `categories` VALUES ('3', '0', 'Giới thiệu', null, 'gioi-thieu', null, '1', '1', '2019-04-18 16:02:05', '2019-12-03 20:53:05');
INSERT INTO `categories` VALUES ('4', '6', 'Nộp hồ sơ trực tuyến', null, 'nop-ho-so-truc-tuyen', null, '1', '2', '2019-04-23 10:32:59', '2019-12-03 20:45:42');
INSERT INTO `categories` VALUES ('5', '6', 'Thông tin tuyển dụng', null, 'thong-tin-tuyen-dung', null, '1', '1', '2019-08-16 01:04:37', '2019-12-03 20:45:14');
INSERT INTO `categories` VALUES ('6', '0', 'Tuyển dụng', null, 'tuyen-dung', null, '1', '4', '2019-08-22 16:43:02', '2019-12-03 20:44:50');
INSERT INTO `categories` VALUES ('7', '12', 'Đầu tư tài chính', null, 'dau-tu-tai-chinh', null, '1', '3', '2019-08-22 16:43:17', '2019-12-03 20:44:07');
INSERT INTO `categories` VALUES ('8', '12', 'DV phi hàng không, khách sạn', null, 'dv-phi-hang-khong-khach-san', null, '1', '2', '2019-08-22 16:43:30', '2019-12-03 20:43:37');
INSERT INTO `categories` VALUES ('9', '11', 'Quản lý sau đầu tư', null, 'quan-ly-sau-dau-tu', null, '1', '2', '2019-08-22 16:43:42', '2019-12-03 20:43:09');
INSERT INTO `categories` VALUES ('10', '11', 'Các dự án đầu tư', null, 'cac-du-an-dau-tu', null, '1', '1', '2019-08-23 03:16:45', '2019-12-03 20:41:25');
INSERT INTO `categories` VALUES ('11', '12', 'Kinh doanh Bất động sản', null, 'kinh-doanh-bat-dong-san', null, '1', '1', '2019-08-23 03:17:05', '2019-12-03 20:40:49');
INSERT INTO `categories` VALUES ('12', '0', 'Lĩnh vực đầu tư', null, 'linh-vuc-dau-tu', null, '1', '3', '2019-08-23 03:17:22', '2019-12-03 20:40:04');
INSERT INTO `categories` VALUES ('13', '16', 'Tin liên quan', null, 'tin-lien-quan', null, '1', '3', '2019-08-23 03:19:15', '2019-12-03 20:38:11');
INSERT INTO `categories` VALUES ('14', '16', 'Báo chí và Taseco', null, 'bao-chi-va-taseco', null, '1', '2', '2019-08-23 03:19:42', '2019-12-03 20:37:41');
INSERT INTO `categories` VALUES ('15', '16', 'Tin Taseco', null, 'tin-taseco', null, '1', '1', '2019-08-23 03:20:04', '2019-12-03 20:36:36');
INSERT INTO `categories` VALUES ('16', '0', 'Tin tức - Sự kiện', null, 'tin-tuc-su-kien', null, '1', '2', '2019-08-23 03:20:41', '2019-12-03 20:34:08');
INSERT INTO `categories` VALUES ('17', '3', 'Cơ cấu tổ chức', null, 'co-cau-to-chuc', null, '1', '3', '2019-12-03 21:00:32', '2019-12-03 21:00:32');
INSERT INTO `categories` VALUES ('18', '3', 'Thành tích và giải thưởng', null, 'thanh-tich-va-giai-thuong', null, '1', '4', '2019-12-03 21:00:50', '2019-12-03 21:00:50');
INSERT INTO `categories` VALUES ('19', '3', 'Thư viện hình ảnh', null, 'thu-vien-hinh-anh', null, '1', '5', '2019-12-03 21:01:11', '2019-12-03 21:01:11');
INSERT INTO `categories` VALUES ('20', '3', 'Video', null, 'video', null, '1', '6', '2019-12-03 21:01:28', '2019-12-03 21:01:28');
INSERT INTO `categories` VALUES ('21', '8', 'Dịch vụ phi hàng không tại các sân bay', null, 'dich-vu-phi-hang-khong-tai-cac-san-bay', null, '1', '1', '2019-12-03 21:13:23', '2019-12-03 21:13:23');
INSERT INTO `categories` VALUES ('22', '8', 'Kinh doanh suất ăn hàng không', null, 'kinh-doanh-suat-an-hang-khong', null, '1', '2', '2019-12-03 21:13:43', '2019-12-03 21:13:43');
INSERT INTO `categories` VALUES ('23', '8', 'Kinh doanh dịch vụ khách sạn', null, 'kinh-doanh-dich-vu-khach-san', null, '1', '3', '2019-12-03 21:14:05', '2019-12-03 21:14:05');
INSERT INTO `categories` VALUES ('24', '7', 'Đầu tư hạ tầng sân bay', null, 'dau-tu-ha-tang-san-bay', null, '1', '1', '2019-12-03 21:14:44', '2019-12-03 21:14:44');
INSERT INTO `categories` VALUES ('25', '7', 'Các dịch vụ phụ trợ cho kinh doanh bất động sản', null, 'cac-dich-vu-phu-tro-cho-kinh-doanh-bat-dong-san', '/backend/uploads/images/66283606_2325988534183678_130893844219691008_n.jpg', '1', '2', '2019-12-03 21:15:03', '2019-12-03 22:27:36');

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'Taseco', null, null, null, null, null, '/backend/uploads/images/logo.png', '/backend/uploads/images/bg-home.png', '<h3>TIÊU CHÍ ĐÁNH GIÁ</h3><h4>1. LÀ TẤM GƯƠNG TIÊU BIỂU TRONG CÔNG VIỆC</h4><ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi</li><li>- Kết quả đánh giá Quý đạt 80% trở lên</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc</li></ul><h4>2. LÀ TẤM GƯƠNG TIÊU BIỂU CỦA TINH THẦN DỊCH VỤ VINCOM</h4><p>Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</p><h4>3. ƯU TIÊN CÁC TRƯỜNG HỢP ĐƯỢC VINH DANH TRÊN TRUYỀN THÔNG</h4><p>Các trường hợp được vinh danh trên truyền thông sẽ được ưu tiên (VD: Vinh danh trên báo chí, Vinclub, quyết định khen thưởng như: Cứu người gặp nạn, nhặt được của rơi trả lại người mất, giúp đỡ khách hàng, phát hiện và ngăn chặn kịp thời các rủi ro xảy ra, phát hiện, báo cáo, đấu tranh, ngăn chặn các hành vi sai phạm, tiêu cực, hành vi vi phạm pháp luật, ...)<br>​​​​​​​</p><h3>THỂ THỨC THAM GIA</h3><ul><li>- Thời gian tham gia bình chọn: 1/9/2019 - 30/9/2019</li><li>- Đối tượng: Toàn thể CBNV công ty</li><li>- Hình thức dự thi: Bình chọn online trên hệ thống</li><li>- Cách thức tổ chức: Thi đấu bình chọn của CBNV theo vòng từ cấp bộ phận, cơ sở, vùng và toàn công ty.</li><li>Đến cấp vùng/công ty, mỗi ứng viên sẽ có các clip giới thiệu bản thân để CBNV toàn quốc có thể bình chọn dễ dàng.</li></ul>', '2019-12-03 21:21:08', '2019-12-03 21:21:08');

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
  `video` varchar(500) DEFAULT NULL,
  `total_vote` int(11) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', '0', 'admin', 'Nguyễn Át Min', 'admin@admin.com', '', null, 'http://images.vietid.net/avatars/1524213894304avatar-165885822.png', null, '0', '$2y$10$dZvjTWSKgd.Zsm68ZK7O2unYS9JzHbv7JwYBYdrPD3x.Iad.cDzIS', '0', '1', 'DhwlvdWk2DToBJoiT9IiUvpQ1dgkE9dgT2oIleAm6e1IWxfvbBwP2shkdmtI', '2018-04-08 10:19:28', '2018-07-02 04:01:35');
INSERT INTO `users` VALUES ('10', '3', '0', 'newton', 'newton', null, null, null, null, null, '0', null, '0', '1', null, '2019-08-22 23:14:40', '2019-08-22 23:14:40');
INSERT INTO `users` VALUES ('11', '3', '0', 'einstein', 'einstein', null, null, null, null, null, '0', null, '0', '1', null, '2019-08-22 23:16:18', '2019-08-22 23:16:18');
INSERT INTO `users` VALUES ('13', '3', '0', 'galieleo', 'galieleo', null, null, null, null, null, '0', null, '0', '1', null, '2019-08-23 15:23:25', '2019-08-23 15:23:25');

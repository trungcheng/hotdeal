var countTextRate = 0;

$(function () {
	$(".ips .iconstar")
	    .bind('mouseover', function() {
	    	var idx = $(this).index();
	    	var text = $(this).data('txt');
	    	$(".iconstar").removeClass('iconcom-star');
	    	$(".iconstar").addClass('iconcom-unstar');
	        $(".rsStar").removeClass('hide');
	        $(".rsStar").text(text);

	        for (var i = 0; i <= idx; i++) {
	    		$(".iconstar").eq(i).removeClass('iconcom-unstar');
	        	$(".iconstar").eq(i).addClass('iconcom-star');
	    	}
	    })
	    .bind('mouseleave', function() {
	    	$(".iconstar").removeClass('iconcom-star');
	    	$(".iconstar").addClass('iconcom-unstar');

	    	if (!$(this).hasClass('chosen')) {
	        	$(this).removeClass('iconcom-star');
	        	$(this).addClass('iconcom-unstar');
	    		$(".rsStar").addClass('hide');
	    	}

	    	var chosenClass = $("i[class*='chosen']");
	    	var idx = chosenClass.index();
	    	if (chosenClass.length > 0) {
	    		$(".rsStar").removeClass('hide');
	    		$(".rsStar").text(chosenClass.data('txt'));
	    		
	    		for (var i = 0; i <= idx; i++) {
		    		$(".iconstar").eq(i).removeClass('iconcom-unstar');
		        	$(".iconstar").eq(i).addClass('iconcom-star');
		    	}
	    	} else {
	    		$(".rsStar").addClass('hide');
	    	}
	    })
	    .bind('click', function () {
	    	var idx = $(this).index();
	    	var text = $(this).data('txt');
	    	$(".iconstar").removeClass('chosen');
	    	$(this).addClass('chosen');
	        $(".rsStar").removeClass('hide');
	        $(".rsStar").text(text);
	        $("#hdfStar").val($(this).data('star'));

	        for (var i = 0; i <= idx; i++) {
	    		$(".iconstar").eq(i).removeClass('iconcom-unstar');
	        	$(".iconstar").eq(i).addClass('iconcom-star');
	    	}
	    });
});

function showInputRating() {
	$('#fRatingComment').toggleClass('hide');
	if (!$('#fRatingComment').hasClass('hide')) {
		$('.bcrt a').addClass('close-btt');
		$('.bcrt a').text('Đóng lại');
	} else {
		$('.bcrt a').removeClass('close-btt');
		$('.bcrt a').text('Gửi đánh giá của bạn');
	}
}

function countTxtRating(ele) {
	var leng = countTextRate = ele.value.length;
    if (leng < 80 && leng > 0) {
      	$('.extCt').removeClass('hide');
      	$('.ckt').text(leng + ' ký tự (tối thiểu 80)')
    } else {
      	$('.extCt').addClass('hide');
      	$('.ipt .ct').removeClass('borderWn');
    }
}

function submitRatingComment() {
	if ($("i[class*='chosen']").length == 0) {
		$('.lbMsgRt').text('Bạn chưa đánh giá sao');
		return false;
	}

	if (countTextRate < 80) {
		$('.ipt .ct').addClass('borderWn');
		if (countTextRate == 0) {
			$('.lbMsgRt').text('Vui lòng nhập nội dung đánh giá về sản phẩm');
		} else {
			$('.lbMsgRt').text('Nội dung đánh giá quá ít. Vui lòng nhập thêm nội dung đánh giá về sản phẩm.');
		}
		return false;
	} else {
		$('.ipt .ct').removeClass('borderWn');
	}

	if ($('#fRName').val() == '') {
		$('#fRName').addClass('borderWn');
		$('.lbMsgRt').text('Vui lòng nhập họ tên');
		return false;
	} else {
		$('#fRName').removeClass('borderWn');
	}

	if ($('#fREmail').val() == '') {
		$('#fREmail').addClass('borderWn');
		$('.lbMsgRt').text('Vui lòng nhập email');
		return false;
	} else {
		$('#fREmail').removeClass('borderWn');
	}

	if ($('#fRPhone').val() == '') {
		$('#fRPhone').addClass('borderWn');
		$('.lbMsgRt').text('Vui lòng nhập số điện thoại');
		return false;
	} else {
		var filter =  /^\d{3}-?\d{3}-?\d{4}$/;
        if (filter.test($('#fRPhone').val())) {
			$('#fRPhone').removeClass('borderWn');
        } else {
            $('#fRPhone').addClass('borderWn');
			$('.lbMsgRt').text('Số điện thoại ko hợp lệ');
			return false;
        }
	}

	var formData = new FormData($('#fRatingComment')[0]); 
	$.ajax({
		type: "POST",
		url: "/rating/post",
		data: formData,
		processData: false,
		contentType: false,
		error: function (jqXHR, textStatus, errorMessage) {
			console.log(errorMessage);
		},
		success: function (data) {
			if (data.status) {
				alert('Đánh giá của bạn đã được gửi đi và chờ phê duyệt!');
				$('#fRatingComment')[0].reset();
			}
		} 
	});
}
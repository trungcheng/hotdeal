<!DOCTYPE html>
<html>
<head>
	<title>Xác nhận đăng ký | Thachvu.com</title>
	<meta charset="utf-8" />
</head>
<body>
	<p>Chào <strong>{{ $email }}</strong>!</p>
	<p>Bạn đã đăng ký tài khoản thành công trên hệ thống <strong>thachvu.com</strong>!</p>
	<p>
		Vui lòng click vào đường link bên dưới để xác nhận thay quá trình đăng ký!<br>
		<a href="{{ $link }}">{{ $link }}</a>
	</p>
	<p>Cảm ơn vì sự hợp tác của bạn!<br>
	<strong>Thạch Vũ</strong></p>
</body>
</html>
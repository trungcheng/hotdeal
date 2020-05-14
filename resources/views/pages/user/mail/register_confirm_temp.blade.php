<!DOCTYPE html>
<html>
<head>
	<title>Xác nhận đăng ký - {{ config('mail.from.name') }}</title>
	<meta charset="utf-8" />
	<meta name="robots" content="noodp,noindex,nofollow" />
</head>
<body>
	<p>Chào <strong>{{ $email }}</strong>!</p>
	<p>Bạn đã đăng ký tài khoản thành công trên hệ thống <strong>{{ config('mail.from.name') }}</strong>!</p>
	<p>
		Vui lòng click vào đường link bên dưới để xác nhận thay quá trình đăng ký!<br>
		<a href="{{ $link }}">{{ $link }}</a>
	</p>
	<p>Cảm ơn vì sự hợp tác của bạn!<br>
	<strong>{{ config('mail.from.name') }}</strong></p>
</body>
</html>
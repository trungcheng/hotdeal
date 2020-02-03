<!DOCTYPE html>
<html>
<head>
	<title>Xác nhận đơn hàng #{{ $order->id }} | Thachvu.com</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1 style="font-size:17px;font-weight:bold;">Cảm ơn quý khách {{ $name }} đã đặt hàng tại Thạch Vũ!</h1>
	<p>Thạch Vũ rất vui thông báo đơn hàng #{{ $order->id }} của quý khách đã được tiếp nhận và đang trong quá trình xử lý. Thạch Vũ sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao.</p>
	<table>
	<tr>
		<td>
			<h2 style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#0088cc">CHI TIẾT ĐƠN HÀNG</h2>
			<table border="0" cellpadding="0" cellspacing="0" style="background:#f5f5f5" width="100%">
				<thead style="background:#0088cc">
					<tr>
						<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
						<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Đơn giá</th>
						<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
						<th align="right" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th>
					</tr>
				</thead>
				<tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">										
					@foreach ($cartInfo as $key => $item)
					<tr>
						<td align="left" style="padding:3px 9px">
							<span class="m_7889669101929006590name">{{ $item->name }}</span><br>
						</td>
						<td align="left" style="padding:3px 9px"><span>{{ number_format($item->price, 0, 0, '.') }} ₫</span></td>
						<td align="left" style="padding:3px 9px">{{ $item->qty }}</td>
						<td align="right" style="padding:3px 9px"><span>{{ number_format($item->subtotal, 0, 0, '.') }} ₫</span></td>
					</tr>
					@endforeach
				</tbody>
				<tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
					<tr bgcolor="#eee">
						<td align="right" colspan="3" style="padding:7px 9px"><strong><big>Tổng giá trị đơn hàng</big> </strong></td>
						<td align="right" style="padding:7px 9px"><strong><big><span>{{ $total }} ₫</span> </big> </strong></td>
					</tr>
				</tfoot>
			</table>
		</td>
	</tr>
	</table>

	<p>Cảm ơn vì sự hợp tác của bạn!<br>
	<strong>Thạch Vũ</strong></p>
</body>
</html>
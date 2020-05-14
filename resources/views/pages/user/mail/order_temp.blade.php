<!DOCTYPE html>
<html>
<head>
	<title>Xác nhận đơn hàng #{{ $order->id }} - {{ config('mail.from.name') }}</title>
	<meta charset="utf-8" />
	<meta name="robots" content="noodp,noindex,nofollow" />
</head>
<body>
	<h1 style="font-size:17px;font-weight:bold;">Cảm ơn quý khách {{ $objectInfo['customer_name'] }} đã đặt hàng tại {{ config('mail.from.name') }}!</h1>
	<p>{{ config('mail.from.name') }} rất vui thông báo đơn hàng #{{ $order->id }} của quý khách đã được tiếp nhận và đang trong quá trình xử lý. {{ config('mail.from.name') }} sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao. Mọi thắc mắc xin quý khách vui lòng liên hệ hotline <strong>{{ $setting->phone }}</strong></p>
	<h2 style="width:60%;text-align:left;margin: 30px 0px 10px 0px;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#0088cc">CHI TIẾT ĐƠN HÀNG</h2>
	<table border="0" cellpadding="0" cellspacing="0" style="background:#f5f5f5" width="60%">
		<thead style="background:#0088cc">
			<tr>
				<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
				<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Đơn giá</th>
				<th align="left" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
				<th align="right" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng</th>
			</tr>
		</thead>
		<tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">										
			@foreach ($cartInfo as $key => $item)
			<tr>
				<td align="left" style="padding:5px 9px">
					<span class="m_7889669101929006590name">{{ $item->name }}</span><br>
				</td>
				<td align="left" style="padding:5px 9px"><span>{{ number_format($item->price, 0, 0, '.') }} ₫</span></td>
				<td align="left" style="padding:5px 9px">{{ $item->qty }}</td>
				<td align="right" style="padding:5px 9px"><span>{{ number_format($item->subtotal, 0, 0, '.') }} ₫</span></td>
			</tr>
			@endforeach
		</tbody>
		<tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
			<tr bgcolor="#eee">
				<td align="right" colspan="3" style="padding:5px 9px"><big>Tổng tạm</big></td>
				<td align="right" style="padding:5px 9px"><big><span>{{ $total }} ₫</span></big></td>
			</tr>
			<tr bgcolor="#eee">
				<td align="right" colspan="3" style="padding:5px 9px"><big>Phí vận chuyển</big></td>
				<td align="right" style="padding:5px 9px"><big><span>
					{{ $shipFee == 'Vận chuyển nhanh' ? '25.000 ₫' : '0 ₫' }}
				</span></big></td>
			</tr>
			<tr bgcolor="#eee">
				<td align="right" colspan="3" style="padding:7px 9px"><strong><big>Tổng giá trị đơn hàng</big> </strong></td>
				<td align="right" style="padding:7px 9px"><strong><big><span>
					<?php
                        $newtotal = ($shipFee == 'Vận chuyển nhanh') ? 25000 : 0;
                        foreach ($cartInfo as $item) {
                            $newtotal += ($item->price * $item->qty);
                        }
                    ?>
                    {{ number_format($newtotal, 0, 0,'.') }} ₫
				</span> </big> </strong></td>
			</tr>
		</tfoot>
	</table>

	<h2 style="width:60%;text-align:left;margin: 30px 0px 10px 0px;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#0088cc">THÔNG TIN KHÁCH HÀNG</h2>
	<table border="0" cellpadding="0" cellspacing="0" style="background:#f5f5f5" width="60%">
		<tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">										
			<tr>
				<td align="left" style="padding:5px 9px">Họ và tên</td>
				<td align="left" style="padding:5px 9px"><span>{{ $objectInfo['customer_name'] }}</span></td>
			</tr>
			<tr>
				<td align="left" style="padding:5px 9px">Email</td>
				<td align="left" style="padding:5px 9px"><span>{{ $objectInfo['customer_email'] }}</span></td>
			</tr>
			<tr>
				<td align="left" style="padding:5px 9px">Số điện thoại</td>
				<td align="left" style="padding:5px 9px"><span>{{ $objectInfo['customer_phone'] }}</span></td>
			</tr>
			<tr>
				<td align="left" style="padding:5px 9px">Địa chỉ giao hàng</td>
				<td align="left" style="padding:5px 9px"><span>{{ $objectInfo['customer_address'] }}</span></td>
			</tr>
			<tr>
				<td align="left" style="padding:5px 9px">Ghi chú đơn hàng</td>
				<td align="left" style="padding:5px 9px"><span>{{ $objectInfo['note'] }}</span></td>
			</tr>
		</tbody>
	</table>

	<p style="margin-top:50px">Cảm ơn vì sự hợp tác của bạn!<br>
	<strong>{{ config('mail.from.name') }}</strong></p>
</body>
</html>
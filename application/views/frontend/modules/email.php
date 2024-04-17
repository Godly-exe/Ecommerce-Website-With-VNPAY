<html>
<body>
	<div style="color: #000;">
		<p>Xin chào <?php echo $customer['fullname']?>,</p>
		<p>Cảm ơn Quý khách đã đặt hàng tại <strong>Phong Cách Đỏ</strong>!</p>
		<p>Đơn hàng của Quý khách đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Quý khách.</p>
		<div>
			<div style="font-size:18px;padding-top:10px"><strong>Thông tin Khách hàng</strong></div>
			<table style="width:100%;">
				<tbody>
					<tr>
						<td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
							<table style="width:100%">
								<tbody>
									<tr>
										<td>Họ tên:</td>
										<td><?php echo $order['fullname'] ?></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><?php echo $customer['email'] ?></td>
									</tr>
									<tr>
										<td>Điện thoại:</td>
										<td><?php echo $order['phone'] ?></td>
									</tr>
									<tr>
										<td>Địa chỉ:</td>
										<td>
											<?php echo $order['address'] ?>, <?php echo $district; ?>, <?php echo $province; ?> 
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<div style="font-size:18px;padding-top:10px"><strong>Thông tin đơn hàng</strong></div>
			<table>
				<tbody>
					<tr>
						<td>Mã đơn hàng: <strong>#<?php echo $order['orderCode'] ?></strong></td>
						<td style="padding-left:40px">Ngày tạo: <?php echo $order['orderdate'] ?></td>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;border-collapse:collapse">
				<thead>
					<tr style="border:1px solid #d7d7d7;background-color:#f8f8f8">
						<th style="text-align:left;padding:5px 10px"><strong>Sản phẩm</strong></th>
						<th style="text-align:center;padding:5px 10px"><strong>Số lượng</strong></th>
						<th style="text-align:center;padding:5px 10px"><strong>Đơn giá</strong></th>
						<th style="text-align:right;padding:5px 10px"><strong>Tổng</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$total = 0;
					foreach ($orderDetail as $value) :?>
						<tr style="border:1px solid #d7d7d7">
							<td><?php echo $value['name']; ?></td>
							<td style="text-align:center;padding:5px 10px"><?php echo $value['count'] ?></td>
							<td style="padding:5px 10px;text-align:center;"><?php echo number_format($value['priceorder']) ?> VNĐ</td>
							<td style="padding:5px 10px;text-align:right">
								<?php 
								$price = $value['priceorder'] * $value['count'];
								echo number_format($price);
								$total += $price;
								?>
							VNĐ</td>
						</tr>

					<?php endforeach; ?>
					<tr style="border:1px solid #d7d7d7">
						<td colspan="2">&nbsp;</td>
						<td colspan="2">
							<table style="width:100%">
								<tbody>
									<tr>
										<td><strong>Tổng cộng:</strong></td>
										<td style="text-align:right"><?php echo  number_format($total) ?> VNĐ</td>
									</tr>
									<tr>
										<td><strong>Phí vận chuyển:</strong></td>
										<td style="text-align:right"><?php echo  number_format($priceShip) ?> VNĐ</td>
									</tr>
									<tr>
										<td><strong>Voucher :</strong></td>
										<td style="text-align:right">- <?php echo  number_format($coupon) ?> VNĐ</td>
									</tr>
									<tr>
										<td><strong>Tổng thành tiền</strong></td>
										<td style="text-align:right color: red; font-size: 19px;"><?php echo number_format($order['money']) ?> VNĐ</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p><strong>Hình thức thanh toán: </strong>Thanh toán khi giao hàng (COD)</p>
	</div>
</div>
</body>
</html>
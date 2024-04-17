<div class="container order-page">
	<div class="general__title">
		<h2>Chi tiết đơn hàng</h2>
	</div>
	<div class="table-responsive">
		<fieldset>
			<table class="table table-bordered tb-detail-or">
				<thead>
					<tr class="">
						<th>Sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($row as $value) :?>
						<tr>
							<td><a href="<?php echo $value['alias'] ?>"><?php echo $value['name'] ?></a></td>
							<td><?php echo number_format($value['priceorder']) ?> VNĐ</td>
							<td><?php echo $value['count'] ?></td>
							<td><?php echo number_format($value['priceorder']*$value['count']) ?> VNĐ</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
	</div>
	<div class="or-detail-c">
		<div class="col-sm-8">
			<div class="general__title">
				<h3>Thông tin thanh toán</h3>
			</div>
			<div class="content-order">
				<p> Mã Đơn hàng: <?php echo $info['orderCode'] ?></p>
				<p> Khách hàng: <?php echo $info['fullname'] ?></p>
				<p> Số điện thoại: <?php echo $info['phone'] ?></p>
				<p> Thời gian đặt hàng: <?php echo $info['orderdate'] ?></p>
				<p> Địa chỉ giao hàng: <?php echo $info['address'] ?>, <?php echo $this->Mdistrict->district_name($info['district']); ?>, <?php echo $this->Mprovince->province_name($info['province']);?></p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="general__title">
				<h3>Tổng tiền hóa đơn</h3>
			</div>
			<div class="content-order">
				<table class="table">
					<tbody>
						<tr>
							<?php  
							$priceShip = $info['price_ship'];
							$total=$info['money'] - $info['price_ship'];
							?>
							<td> Tổng tiền đơn hàng </td>
							<td class="text-right"><span><?php echo number_format($total)?> VNĐ</span></td>
						</tr>
						
						<tr>
							<td>Phí giao hàng:</td>
							<td class="text-right"><?php echo number_format($priceShip) ?> VNĐ</span></td>
						</tr>
						<?php
						if($info['coupon'] != 0 ){
							echo '<tr>
							<td>Voucher :</td>
							<td class="text-right">-'.number_format($info['coupon']).' VNĐ</span></td>
						</tr>';
						}

						?>
						<tr>
							<td> Tổng thanh toán:</td>
							<td class="text-right"><span style="color: red; font-size: 23px;"><?php echo number_format($info['money']) ?> VNĐ</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-xs-12">
			<button class="btn"><a href="javascript:;" onclick="window.history.go(-1);" class="viewMore pull-left" style="font-size: 15px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Trở về trang trước</a></button>
		</div>
	</div>
</div>
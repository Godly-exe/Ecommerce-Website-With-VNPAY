<?php echo 	('admin/coupon/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/coupon/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Thêm mã giảm giá mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/coupon" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box" id="view">
						<div class="box-body">
							<div class="col-md-6">
								<div class="form-group">
									<label>Mã giảm giá</label>
									<input type="text" class="form-control" name="code" style="width:100%" placeholder="Mã giảm giá">
									<div class="error" id="password_error"><?php echo form_error('code')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền giảm giá</label>
									<input type="number" class="form-control" name="discount" style="width:100%" placeholder="Số tiền giảm giá">
									<div class="error" id="password_error"><?php echo form_error('discount')?></div>
								</div>
								<div class="form-group">
									<label>Số lần giới hạn nhập</label>
									<input type="number" class="form-control" name="limit_number" style="width:100%" placeholder="Số lần giới hạn nhập">
									<div class="error" id="password_error"><?php echo form_error('limit_number')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền đơn hàng tối thiểu được áp dụng</label>
									<input type="number" class="form-control" name="payment_limit" style="width:100%" placeholder="Đơn hàng tối thiểu được áp dụng">
									<div class="error" id="password_error"><?php echo form_error('payment_limit')?></div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Ngày giới hạn nhập</label>
									<div class="form-group">
										<input type="date"  style="width:100%" name="expiration_date" required>
									</div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="description" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:235px">
										<option value="1">Có hiệu lực</option>
										<option value="0">Không có hiệu lực</option>
									</select>
								</div>

							</div>
						</div>
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
	</form>
	<!-- /.coupon -->
</div><!-- /.coupon-wrapper -->

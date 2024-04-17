<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-text-background"></i> Thùng rác mã giảm giá</h1>
		<div class="breadcrumb">
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
					<div class="box-header with-border">
						<!-- /.box-header -->
						<div class="box-body">
							<?php  if($this->session->flashdata('success')):?>
								<div class="row">
									<div class="alert alert-success">
										<?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									</div>
								</div>
							<?php  endif;?>
							<div class="row" style='padding:0px; margin:0px;'>
								<!--ND-->
								<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<thead>
										<tr>
											<th class="text-center">ID</th>
											<th class="text-center">Mã giảm giá</th>
											<th class="text-center">Số tiền giảm</th>
											<th class="text-center"">Số lần giới hạn nhập</th>
											<th class="text-center"">Hạn nhập</th>
											<th class="text-center"">Trạng thái</th>
											<th class="text-center" colspan="2">Thao tác</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $row):?>
										<tr>
											<td class="text-center"><?php echo $row['id'] ?></td>
											<td><?php echo $row['code']?></td>
											<td><?php echo $row['discount']?></td>
											<td><?php echo $row['limit_number']?></td>
											<td><?php echo $row['expiration_date']?></td>
											<td class="text-center">
												<a href="<?php echo base_url() ?>admin/coupon/status/<?php echo $row['id'] ?>">
													<?php if($row['status']==1):?>
														<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
													<?php else: ?>
														<span class="glyphicon glyphicon-remove-circle maudo"></span>
													<?php endif; ?>
												</a>
											</td>
											<td class="text-center">
														<a class="btn btn-success btn-xs" href="admin/coupon/restore/<?php echo $row['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-edit"></span>Khôi phục
														</a>
													</td>
													<?php  
													$quyen='';
													if($user['role']==1){
														$quyen.='
														<td class="text-center">
														<a class="btn btn-danger btn-xs" href="admin/coupon/delete/'.$row['id'].'" role = "button">
														<span class="glyphicon glyphicon-trash"></span>Xóa VV
														</a>
														</td>
														';

													}else{
														$quyen.='
														<td class="text-center">
														<p class="fa fa-lock" style="color:red"> Không đủ quyền</p>
														</td>';
													}
													echo $quyen;
													?>
												</tr>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<ul class="pagination">
											<?php echo $strphantrang ?>
										</ul>
									</div>
								</div>
								<!-- /.ND -->
							</div>
						</div><!-- ./box-body -->
					</div><!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
</div><!-- /.content-wrapper -->
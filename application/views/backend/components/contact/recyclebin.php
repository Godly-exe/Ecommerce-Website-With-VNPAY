<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-text-background"></i> Thùng rác Liên hệ</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="admin/contact" role="button">
				<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
			</a>
		</div>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
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
											<th class="text-center" style="width:20px">ID</th>
											<th>Tên khách hàng</th>
											<th>Email</th>
											<th>Tiêu đề</th>
											<th>Nội dung</th>
											<th colspan="2" class="text-center" style="width:90px">Thao tác</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($list as $row): ?>
											<tr>
												<td class="text-center"><?php echo $row['id'] ?></td>
												<td class="text-center"><?php echo $row['fullname'] ?></td>
												<td>
													<?php echo $row['email'] ?>
												</td>
												<td>
													<?php echo $row['title'] ?>	
												</td>
												<td><?php echo $row['content'] ?></td>
												<td class="text-center">
													<a class="btn btn-success btn-xs" href="admin/contact/restore/<?php echo $row['id'] ?>" role = "button">
														<span class="glyphicon glyphicon-edit"></span>Khôi phục
													</a>
												</td>
												<?php  
												$quyen='';
												if($user['role']==1){
													$quyen.='
													<td class="text-center">
													<a class="btn btn-danger btn-xs" href="admin/contact/delete/'.$row['id'].'" role = "button">
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
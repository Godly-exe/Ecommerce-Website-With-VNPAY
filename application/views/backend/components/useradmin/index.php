<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-cd"></i> Danh sách tài khoản cửa hàng</h1>
		<div class="breadcrumb">
			<?php  
				$QuyenThem='';
				if($user['role']==1){
					$QuyenThem.="
						<a class='btn btn-primary btn-sm' href='".base_url()."admin/useradmin/insert' role='button'>
							<span class='fa fa-user-plus'></span> Thêm mới
						</a>";
				}
				echo $QuyenThem;
			?>
			<a class="btn btn-primary btn-sm" href="admin/useradmin/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Thùng rác (<?php $total=$this->Muser->user_trash_count(); echo $total; ?>)
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
	                    <?php  if($this->session->flashdata('error')):?>
	                        <div class="row">
	                            <div class="alert alert-error">
	                                <?php echo $this->session->flashdata('error'); ?>
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
											<th class="text-center"">ID</th>
											<th>Hình ảnh</th>
											<th>Họ và tên</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Địa chỉ</th>
											<th class="text-center">Trạng thái</th>
											<th class="text-center" colspan="2">Thao tác</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $row):?>
										<tr>
											<td class="text-center"><?php echo $row['id'] ?></td>
											<td style="width:100px">
												<img src="public/images/admin/<?php echo $row['img'] ?>"class="img-responsive">
											</td>
											<td><?php echo $row['fullname'] ?></td>
											<td><?php echo $row['email'] ?></td>
											<td><?php echo $row['phone'] ?></td>
											<td><?php echo $row['address'] ?></td>
											<td class="text-center">
												<a href="<?php echo base_url() ?>admin/useradmin/status/<?php echo $row['id'] ?>">
													<?php if($row['status']==1):?>
														<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
													<?php else: ?>
														<span class="glyphicon glyphicon-remove-circle maudo"></span>
													<?php endif; ?>
												</a>
											</td>
											<?php  
												$quyen='';
												if($user['role']==1){
													$quyen.='
														<td class="text-center">
															<a class="btn btn-success btn-xs" href='.base_url().'admin/useradmin/update/'.$row['id'].' role = "button">
																<span class="glyphicon glyphicon-edit"></span> Sửa
															</a>
														</td>
														<td class="text-center">
															<a class="btn btn-danger btn-xs" href="admin/useradmin/trash/'.$row['id'].'" role = "button">
																<span class="glyphicon glyphicon-trash"></span> Xóa
															</a>
														</td>
													';

												}else{
													$quyen.='
														<td class="text-center" colspan="2">
															<p class="fa fa-lock" style="color:red"> Không thể thao tác</p>
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
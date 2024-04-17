
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-cd"></i> Danh sách sản phẩm</h1>
		<div class="breadcrumb">
			
			<?php
			if($user['role']==1){
				echo '<a class="btn btn-primary btn-sm" href="'.base_url().'admin/product/insert" role="button">
				<span class="glyphicon glyphicon-plus"></span> Thêm mới
				</a>';
			}
			?>
			<a class="btn btn-primary btn-sm" href="<?php echo base_url()?>admin/product/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Thùng rác(<?php $total=$this->Mproduct->product_trash_count(); echo $total; ?>)
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
								<div class="table-responsive" >
									<input type="text" class="form-control timkiem" placeholder="Nhập tên sản phẩm cần tìm...">
									<br>
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th class="text-center" style="width:20px">ID</th>
												<th>Hình</th>
												<th>Tên sản phẩm</th>
												<th>Số lượng trong kho</th>
												<th>Loại sản phẩm</th>
												<th class="text-center">Trạng thái</th>
												<th class="text-center">Người bán</th>
												<th class="text-center">Nhập hàng</th>
												<th class="text-center" colspan="2">Thao tác</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list as $row):?>
												<tr>
													<td class="text-center"><?php echo $row['id'] ?></td>
													<td style="width:70px">
														<img src="public/images/products/<?php echo $row['avatar'] ?>" alt="<?php echo $row['name'] ?>" class="img-responsive">
													</td>
													<td style="font-size: 16px;"><?php echo $row['name'] ?></td>
													<td class="text-center"> <?php echo $row['number'] - $row['number_buy'] ?></td>
													<?php 
													$namecat = $this->Mcategory->category_name($row['catid']);
													?>
													<td><?php echo $namecat ?></td>
													<td class="text-center">
														<a href="<?php echo base_url() ?>admin/product/status/<?php echo $row['id'] ?>">
														<?php if($row['status']==1):?>
															<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
															<br>
															<span>Đang giao bán</span>
															<?php else: ?>
																<span class="glyphicon glyphicon-remove-circle maudo"></span>
																<br>
																<span>Chưa được bán</span>
															<?php endif; ?>
														</a>
													</td>
													<td class="text-center">
														<?php 
															if(empty($row['idcustomer']) || $row['idcustomer'] == NULL){
																echo "Cửa Hàng";
															}else{
																echo "MKH: ".$row['cId']." - ".$row['fullname']; 
															}
															
														?>
													</td>
														<?php  
														$quyen='';
														if($user['role']==1){
															$quyen.='
															<td class="text-center"><a class="btn btn-info btn-xs" href="admin/product/import/'.$row['id'].'" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Nhập hàng
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
														<?php
														if($user['role']==1){ ?>
															<td class="text-center">
																<a class="btn btn-success btn-xs" href="<?php echo base_url('admin/product/update/'.$row['id']); ?>" role = "button">
																<span class="glyphicon glyphicon-edit"></span> Sửa
																</a>
															</td>
														<?php } ?>
														
														<td class="text-center">
															<a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/product/trash/'.$row['id']); ?>" onclick="return confirm('Xác nhận xóa sản phẩm này ?')" role = "button">
																<span class="glyphicon glyphicon-trash"></span> Xóa
															</a>
														</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
	var base_url =  window.location.origin == "http://localhost" ? window.location.origin + "/phongcachdo" : window.location.origin
	$(document).ready(function() {
		$('.timkiem').keyup(function(event) {
            var tenSanPham = $('.timkiem').val()
            $.post(base_url+"/admin/product/search",{
                tenSanPham: tenSanPham
            },
            function(data){
                var dataSearch = JSON.parse(data)
                console.log(dataSearch)
                $('tbody').empty()
                for(var i = 0; i < dataSearch.length; i++){
                	var stt = '<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>'
                	if(dataSearch[i].status == 0){
                		stt = '<span class="glyphicon glyphicon-remove-circle maudo"></span>'
                	}

                    $('tbody').append('<tr> <td class="text-center">'+dataSearch[i].id+'</td> <td style="width:70px"> <img src="'+base_url+'/public/images/products/'+dataSearch[i].avatar+'" alt="'+dataSearch[i].name+'" class="img-responsive"> </td> <td style="font-size: 16px;">'+dataSearch[i].name+'</td> <td class="text-center"> '+dataSearch[i].number+'</td> <td>'+dataSearch[i].catname+'</td> <td class="text-center"> <a href="'+base_url+'/admin/product/status/'+dataSearch[i].id+'">'+stt+'</a> </td> <td class="text-center"><a class="btn btn-info btn-xs" href="'+base_url+'/admin/product/import/'+dataSearch[i].id+'" role="button"> <span class="glyphicon glyphicon-trash"></span>Nhập hàng </a> </td> <td class="text-center"> <a class="btn btn-success btn-xs" href="'+base_url+'/admin/product/update/'+dataSearch[i].id+'" role="button"> <span class="glyphicon glyphicon-edit"></span> Sửa </a> </td> <td class="text-center"> <a class="btn btn-danger btn-xs" href="'+base_url+'/admin/product/trash/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận xóa sản phẩm này ?")" role="button"> <span class="glyphicon glyphicon-trash"></span> Xóa </a> </td> </tr>')
                }
            });
        })

	});
</script>
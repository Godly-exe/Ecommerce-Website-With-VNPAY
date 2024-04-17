<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-list-alt"></i> Danh sách đơn hàng</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="admin/orders/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Đơn hàng đã lưu (<?php $total=$this->Morders->orders_trash_count(); echo $total; ?>)
			</a>
		</div>
	</section>
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
									<input type="text" class="form-control timkiem" placeholder="Tìm kiếm đơn hàng theo Code hoặc SDT...">
									<br>
									<table class="table table-hover table-bordered" style="font-size: 0.9em;">
										<thead>
											<tr>
												<th class="text-center" style="width:20px">Code</th>
												<th>Khách hàng</th>
												<th>Điện thoại</th>
												<th>Tổng tiền</th>
												<th>Ngày tạo hóa đơn</th>
												<th class="text-center">Trạng thái</th>
												<th class="text-center" colspan="2">Xử lý đơn</th>
												<th class="text-center" colspan="2">Thao tác</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list as $val):
												$name = $this->Mcustomer->customer_detail($val['customerid']);
												?>
												<tr>
													<td class="text-center"><?php echo $val['orderCode'] ?></td>
													<td><?php echo $val['fullname']; ?></td>
													<td><?php echo $val['phone']; ?></td>
													<td><?php echo number_format($val['money']); ?>₫</td>
													<td><?php echo $val['orderdate']; ?></td>
													<td style="text-align: center;">
														<?php
														switch ($val['status']) {
															case '0':
															echo 'Đang chờ duyệt';
															break;
															case '1':
															echo 'Đang giao hàng';
															break;
															case '2':
															echo 'Đã giao';
															break;
															case '3':
															echo 'Khách hàng đã hủy';
															break;
															case '4':
															echo 'Nhân viên đã hủy';
															break;
														}
														?>
													</td>
													<td style="text-align: center;">
														<?php if($val['status']==1):?>
															<a class="btn btn-success btn-xs" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận đơn hàng đã giao và thanh toán thành công ?')" role = "button">
																<i class="fa  fa-thumbs-o-up"></i> Xác nhận thanh toán
															</a>
														</div>
														<?php  elseif ($val['status']==0):?>
															<a class="btn btn-default btn-xs" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận gói hàng và chuẩn bị giao hàng ?')" role = "button">
																<i class="fa fa-check-square-o"></i> Duyệt đơn đặt hàng
															</a>
														<?php endif; ?>
														<td>
															<?php if($val['status'] ==0 || $val['status'] ==1): ?>
																<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/orders/cancelorder/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận hủy đơn hàng này ?')" role = "button">
																	<i class="fa fa-save"></i> Hủy đơn
																</a>
															<?php endif;?>
														</td>
													</td>
													<td class="text-center">
														<!-- /Xem -->
														<a class="btn btn-info btn-xs" href="<?php echo base_url() ?>admin/orders/detail/<?php echo $val['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-eye-open"></span> Xem 
														</a>
														<!-- /Xóa -->
														<a class="btn bg-olive btn-xs" href="<?php echo base_url() ?>admin/orders/trash/<?php echo $val['id'] ?>"  onclick="return confirm('Xác nhận lưu đơn hàng này ?')" role = "button">
															<i class="fa fa-save"></i> Lưu đơn
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
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
	var base_url =  window.location.origin == "http://localhost" ? window.location.origin + "/phongcachdo" : window.location.origin
	function formatCash(str) {
	 	return str.split('').reverse().reduce((prev, next, index) => {
	 		return ((index % 3) ? next : (next + ',')) + prev
	 	})
	}
	$(document).ready(function() {
		$('.timkiem').keyup(function(event) {
            var timkiem = $('.timkiem').val()
            $.post(base_url+"/admin/orders/search",{
                timkiem: timkiem
            },
            function(data){
                var dataSearch = JSON.parse(data)
                console.log(dataSearch)
                $('tbody').empty()
                for(var i = 0; i < dataSearch.length; i++){
                	var stt = '<a class="btn btn-default btn-xs" href="'+base_url+'/admin/orders/status/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận gói hàng và chuẩn bị giao hàng ?")" role="button"> <i class="fa fa-check-square-o"></i> Duyệt đơn đặt hàng </a>'

                	var trangThai = "Đang chờ duyệt"
                	var huyDon = '<a class="btn btn-danger btn-xs" href="'+base_url+'/admin/orders/cancelorder/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận hủy đơn hàng này ?")" role="button"> <i class="fa fa-save"></i> Hủy đơn </a>'
                	if(dataSearch[i].status == 1){
                		var stt = '<a class="btn btn-success btn-xs" href="'+base_url+'/admin/orders/status/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận đơn hàng đã giao và thanh toán thành công ?")" role="button"> <i class="fa  fa-thumbs-o-up"></i> Xác nhận thanh toán </a>'
                		var huyDon = '<a class="btn btn-danger btn-xs" href="'+base_url+'/admin/orders/cancelorder/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận hủy đơn hàng này ?")" role="button"> <i class="fa fa-save"></i> Hủy đơn </a>'
                		var trangThai = "Đang giao hàng"
                	}else if(dataSearch[i].status == 2){
                		var stt = ''
                		var trangThai = "Đã giao"
                		var huyDon = ''
                	}else if (dataSearch[i].status == 3) {
                		var stt = ''
                		var trangThai = "Khách hàng đã hủy"
                		var huyDon = ''
                	}else if(dataSearch[i].status == 4){
                		var stt = ''
                		var trangThai = "Nhân viên đã hủy"
                		var huyDon = ''
                	}

                	var money = formatCash(dataSearch[i].money)

                    $('tbody').append('<tr> <td class="text-center">'+dataSearch[i].orderCode+'</td> <td>'+dataSearch[i].fullname+'</td> <td>'+dataSearch[i].phone+'</td> <td>'+money+'₫</td> <td>'+dataSearch[i].orderdate+'</td> <td style="text-align: center;"> '+trangThai+' </td> <td style="text-align: center;">'+stt+'</td><td>'+huyDon+'</td> <td class="text-center"> <!-- /Xem --> <a class="btn btn-info btn-xs" href="'+base_url+'/admin/orders/detail/'+dataSearch[i].id+'" role="button"> <span class="glyphicon glyphicon-eye-open"></span> Xem </a> <!-- /Xóa --> <a class="btn bg-olive btn-xs" href="'+base_url+'/admin/orders/trash/'+dataSearch[i].id+'" onclick="return confirm("Xác nhận lưu đơn hàng này ?")" role="button"> <i class="fa fa-save"></i> Lưu đơn </a> </td> </tr>')
                }
            });
        })

	});
</script>
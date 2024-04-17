<?php echo form_open_multipart('admin/category/update/'.$row['id']); ?>
<?php
	$list=$this->Mcategory->category_list();
	$option_parentid="";
	foreach ($list as $r) 
	{
		if($r['id'] == $row['parentid'] )
		{
			$option_parentid.="<option selected value='".$r['id']."'>".$r['name']."</option>";
		}
		else
		{
			$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
		}
	}

	$option_orders="";
	$listtype=$this->Mcategory->category_list();
	foreach ($listtype as $val) 
	{
		if($val['orders'] == ($row['orders'] - 1))
		{
			$option_orders.="<option selected value='".($val['orders']+1)."'>Sau - ".$val['name']."</option>";
		}
		else
		{
			$option_orders.="<option value='".($val['orders']+1)."'>Sau - ".$val['name']."</option>";
		}
	}
?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/product/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Cập nhật loại sản phẩm</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Cập nhật]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/category" role="button">
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
							<div class="col-md-7">
								<div class="form-group">
									<label>Tên loại sản phẩm <span class = "maudo">(*)</span></label>
									<input type="text" class="form-control" name="name" style="width:300px;" placeholder="Tên loại sản phẩm" value="<?php echo $row['name'] ?>">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Chủ đề cha</label>
									<select name="parentid" class="form-control" style="width:300px">
										<option value = "0">[--Chọn chủ đề cha--]</option>
										<?php echo $option_parentid;?>
									</select>
								</div>
								<div class="form-group">
									<label>Sắp xếp</label>
									<select name="orders" class="form-control" style="width:300px">
										<option value = "0">Đứng đầu</option>
											<?php  
												echo $option_orders;
											?>
									</select>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:300px">
										<option value = "">[--Chọn trạng thái--]</option>
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Đang kinh doanh</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ngưng kinh doanh</option>
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
<!-- /.content -->
</div><!-- /.content-wrapper -->
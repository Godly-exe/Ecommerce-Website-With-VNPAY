<?php echo 	('admin/content/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/content/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Thêm bài viết mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/content" role="button">
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
							<div class="col-md-8">
								<div class="form-group">
									<label>Tiêu đề bài viết</label>
									<input type="text" class="form-control" name="name" style="width:100%" placeholder="Tên bài viết">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="introtext" class="form-control" ></textarea>
								</div>
								<div class="form-group">
									<label>Chi tiết bài viết</label>
									<textarea name="fulltext" id="fulltext" class="form-control" ></textarea>
      								<script>CKEDITOR.replace('fulltext');</script>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
                                    <label>Hình đại diện</label>
                                    <input type="file" id="image_list" name="img" style="width: 100%" required>
                                </div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:235px">
										<option value="1">Đăng</option>
										<option value="0">Chưa đăng</option>
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
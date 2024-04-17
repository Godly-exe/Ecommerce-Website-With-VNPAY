<?php echo form_open_multipart('admin/contact/detail/'.$row['id']); ?>
<?php 
	$user = $this->session->userdata('sessionadmin');
 ?>
<style>
	.error p {
	    color: rgb(89, 17, 17);;
	    font-style: italic;
	    font-size: 0.9em;
	    margin-top: 10px;
	}
</style>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/content/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-text-background"></i> Chi tiết </h1>
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
						<?php  if($this->session->flashdata('success')):?>
							<div class="row">
								<div class="alert alert-success">
									<?php echo $this->session->flashdata('success'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								</div>
							</div>
						<?php  endif;?>
						<div class="box-body">
							<div class="col-md-6">
							<?php echo validation_errors(); ?>
							<div class="form-group">
									<label>Họ và tên <span class = "maudo" ></span></label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['fullname'] ?></output>
									
								</div>
								
								<div class="form-group">
									<label>SDT <span class = "maudo"></span></label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['phone'] ?></output>
									
								</div>
								<div class="form-group">
									<label>Email <span class = "maudo"></span></label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['email'] ?></output>
									
								</div>
								<div class="form-group">
									<label>Tiêu đề</label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['title'] ?></output>

								</div>
								<div class="form-group">
									<label>Nội dung mail<span class = "maudo"></span></label>
									<textarea rows="10" cols="20" name="content" style="width:100% height:100%"  id="content" class="form-control"><?php echo $row['content'] ?></textarea>
      								
								</div>
								
							
						</div>
						<div class="col-md-6">
							<form method="POST">
								<div class="form-group">
									<label>Người phản hồi <span class = "maudo" ></span></label>
									<output type="text" class="form-control" style="width:100%"><?php echo $user["fullname"]; ?> - <?php echo $user["username"]; ?></output>
								</div>
								<div class="form-group">
									<label>Tiêu đề phản hồi</label>
									<?php if(isset($titlePH)){ ?>
										<input type="text" class="form-control tieuDePH" name="tieuDePH" style="width:100%" placeholder="Nhập tiêu đề phản hồi" value="<?php echo $titlePH; ?>"/>
									<?php }else{ ?>
										<input type="text" class="form-control tieuDePH" name="tieuDePH" style="width:100%" placeholder="Nhập tiêu đề phản hồi" value="Thông tin phản hồi với khách hàng <?php echo $row['fullname'] ?>"/>
									<?php } ?>
									
									<div class="error" id="title_error"></div>
								</div>
								<input type="hidden" name="emailKH" value="<?php echo $row['email'] ?>">
								<input type="hidden" name="emailAdmin" value="<?php echo $user['email'] ?>">
								<input type="hidden" name="nameAdmin" value="<?php echo $user["fullname"]; ?>">
								<div class="form-group">
									<label>Nội dung phản hồi<span class = "maudo"></span></label>
									<?php if(isset($content)){ ?>
										<textarea rows="10" cols="20" name="noiDungPH" style="width:100% height:100%"  id="content" class="form-control noiDungPH" value="<?php echo $content; ?>" ><?php echo $content; ?></textarea>
									<?php }else{ ?>
										<textarea rows="10" cols="20" name="noiDungPH" style="width:100% height:100%"  id="content" class="form-control noiDungPH" value="" ></textarea>
									<?php } ?>
									
									<div class="error" id="content_error"></div>
								</div>
								<input type="submit" class="btn btn-primary phanhoi" value="Phản Hồi" />
							</form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$(".phanhoi").click(function(e){
			var content = $(".noiDungPH").val()
			var title = $(".tieuDePH").val()
			console.log(title)
			if(title == "" && content == ""){
				e.preventDefault()
				$("#title_error").html('<p>Vui lòng không bỏ trống tiêu đề!</p>')
				$("#content_error").html('<p>Vui lòng không bỏ trống nội dung!</p>')
				var VALIDATE = false
				return
			}

			if(title == ""){
				e.preventDefault()
				$("#title_error").html('<p>Vui lòng không bỏ trống tiêu đề!</p>')
				var VALIDATE = false
			}

			if(content == ""){
				e.preventDefault()
				$("#content_error").html('<p>Vui lòng không bỏ trống nội dung!</p>')
				var VALIDATE = false
			}
		})
	});
</script>

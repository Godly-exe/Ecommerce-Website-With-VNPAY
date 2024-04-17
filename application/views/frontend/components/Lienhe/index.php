<?php 
	$user = $this->session->userdata('sessionKhachHang');
?>
<?php echo form_open( base_url()."lien-he"); ?>
<style>
	.btn-update-order{
		background: rgb(89, 17, 17);; 
		color: white;
	}
	.btn-update-order:hover{
		background: #00b5ff;
	}
</style>
<section>
	<div class="container">
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h1 style="color: black">Liên hệ với chúng tôi</h1>				
					<hr style="border-top: 1px solid #eeeeee;">
					<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="name"><em> Họ tên</em><span class="required">*</span></label>
									<?php if($this->session->userdata('sessionKhachHang')){ ?>
										<input id="name" name="fullname" type="text" value="<?php echo $user['fullname']; ?>" class="form-control">
									<?php }else{  ?>
										<input id="name" name="fullname" type="text" value="" class="form-control">
									<?php } ?>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="email"><em> Email</em><span class="required">*</span></label>
									<?php if($this->session->userdata('sessionKhachHang')){ ?>
										<input id="email" name="email" class="form-control" type="email" value="<?php echo $user['email']; ?>">
									<?php }else{  ?>
										<input id="email" name="email" class="form-control" type="email" value="">
									<?php } ?>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="phone"><em> Số điện thoại</em><span class="required">*</span></label>
									<?php if($this->session->userdata('sessionKhachHang')){ ?>
										<input type="number" id="phone" class="form-control" name="phone" value="<?php echo $user['phone']; ?>">
									<?php }else{  ?>
										<input type="number" id="phone" class="form-control" name="phone">
									<?php } ?>
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
							<textarea id="message" name="title" class="form-control custom-control tieude" rows="2"></textarea>
							<div class="error" id="error_tieude"></div>
						</div>
						<div class="form-group">
							<label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
							<textarea id="message" name="content" class="form-control custom-control loinhan" rows="5"></textarea>
							<div class="error" id="error_loinhan"></div>
						</div>
						<button type="submit" class="btn-update-order">Gửi nhận xét</button>

					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="f-contact" style="
			padding-left: 32px;
			">
			<h1 style="color: black">Thông tin liên hệ</h1>
			<hr style="border-top: 1px solid #eeeeee;">
			<ul class="list-unstyled">
				<li class="clearfix">
					<i class="fa fa-map-marker fa-1x" style="color:rgb(89, 17, 17);; padding: 20px; "></i>
					<a href="https://maps.app.goo.gl/j1R6gkPwNGhMp2qz5"><span style="color: black"> VQ4P+249, Phường Tân Phú, Quận 9, TP.HCM</span><br></a>
				</li>
				<li class="clearfix">
					<i class="fa fa-phone fa-1x" style="color:rgb(89, 17, 17);;padding: 20px;  "></i>
					<span style="color: black">0935154301</span>
				</li>
				<li class="clearfix">
					<i class="fa fa-envelope fa-1x " style="color:rgb(89, 17, 17);; padding: 20px; "></i>
					<span style="color: black"><a href="">yuhgamesing102@gmail.com</a></span>
				</li>
			</ul>
		</div>

	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-update-order").click(function(e){
			var TieuDe = $(".tieude").val()
			var LoiNhan = $(".loinhan").val()

			if(TieuDe == "" && LoiNhan == ""){
				e.preventDefault()
				$("#error_tieude").html('<p>Tiêu đề không được để trống !</p>')
				$("#error_loinhan").html('<p>Lời nhắn không được để trống !</p>')
				return
			}

			if(TieuDe == ""){
				e.preventDefault()
				$("#error_tieude").html('<p>Tiêu đề không được để trống !</p>')
			}

			if(LoiNhan == ""){
				e.preventDefault()
				$("#error_loinhan").html('<p>Lời nhắn không được để trống !</p>')
			}

			if (TieuDe.split(' ').length > 100){
				e.preventDefault()
				$("#error_tieude").html('<p>Tiêu đề không quá 100 từ!</p>')
			}

			if (LoiNhan.split(' ').length > 300){
				e.preventDefault()
				$("#error_loinhan").html('<p>Lời nhắn không quá 300 từ!</p>')
			}
		})
	});
</script>
</section>
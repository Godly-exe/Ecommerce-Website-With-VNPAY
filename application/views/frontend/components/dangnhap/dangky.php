<?php echo form_open('dang-ky'); ?>
<section id="product-detail">
	<div class="container">
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="products-wrap">
				<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
					<div id="register">
						<br>
						<div class="acctitle acctitlec">Đăng ký tài khoản</div>
						<?php 
						if(isset($success))
							echo '<h5 style="color: rgb(89, 17, 17);; line-height: 25px; padding-left: 30px;">'.$success.'</h5>';
						?>
						<div class="acc_content clearfix" style="display: block;">
							<form accept-charset="UTF-8" action="" id="customer_register" method="post">
								
								<input name="FormType" type="hidden" value="customer_register">
								<input name="utf8" type="hidden" value="true"> 
								<div class="col_full">
									<label for="first_name">Tên đăng nhập:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="username" value="" class="form-control" placeholder="Tên đăng nhập">
									<div class="error" id="username_error"><?php echo form_error('username')?></div>
								</div> 
								<div class="col_full">
									<label for="register-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
									<input type="password" id="register-form-password" name="password" placeholder="Mật khẩu" class="form-control">
									<div class="error" id="password_error"><?php echo form_error('password')?></div>
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
									<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Nhập lại mật khẩu">
									<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="name" placeholder="Họ tên" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('name')?></div>
								</div>              
								<div class="col_full">
									<label for="register-form-email">Email:<span class="require_symbol">*</span></label>
									<input type="text" id="register-form-email" name="email" class="form-control" placeholder="Nhập email">
									<div class="error" id="email_error"><?php echo form_error('email')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Số điện thoại:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="phone" placeholder="Số điện thoại" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('phone')?></div>
								</div>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit" style="margin-bottom: 20px">Đăng ký</button>
									<ul>
										<li class="right" style="font-size: 18px;">Nếu đã có tài khoản, hãy <a href="<?php echo base_url()?>dang-nhap" style="font-size: 19px; color: rgb(89, 17, 17);;">Đăng nhập</a></li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
	</div>
</section>

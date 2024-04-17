<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<form action="" accept-charset="UTF-8" action="" id="reset_password" method="post">
				<div id="login">
					<div class="acctitle acctitlec">Đổi mật khẩu</div>
					<?php 
					if(isset($success))
						echo '<h4 style="color:green;">Đổi mật khẩu thành công</h4>';
					?>
					<div class="acc_content clearfix" style="display: block;">
						<div class="col_full">
							<label for="login-form-password">Mật khẩu hiện tại:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="password_old" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password_old')?></div>
						</div>
						<div class="col_full">
							<label for="login-form-password">Mật khẩu mới:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="password" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>
						<div class="col_full">
							<label for="login-form-password">Nhập lại mật khẩu mới:<span class="require_symbol">* </span></label>
							<input type="password" id="login-form-password" name="re_password" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('re_password')?></div>
						</div>
						<div class="col_full" style="text-align: center;">
							<button class="button button-3d button-black" id="login-form-submit" name="login-form-submit" type="submit" value="login">Lưu thay đổi</button>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>
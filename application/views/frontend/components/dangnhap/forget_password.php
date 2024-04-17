<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<form action="" accept-charset="UTF-8" action="" id="reset_password" method="post">
				<div id="login">
					<div class="acctitle acctitlec">Quên mật khẩu</div>
					<?php 
					if(isset($success))
						echo '<h4 style="color:green;">'.$success.'</h4>';
					?>
					<div class="acc_content clearfix" style="display: block;">
						<div class="col_full">
							<label for="login-form-password">Email :<span class="require_symbol">* </span></label>
							<input type="email" id="login-form-password" name="email" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('email')?></div>
						</div>
						<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login">Tiếp tục</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
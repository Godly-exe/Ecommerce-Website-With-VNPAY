<div class="row content-cart">
		<div class="container" style="width: 50%; margin-top: 100px; margin-bottom: 100px; box-shadow: 0 0em 0.5em rgb(15 15 15 / 25%); padding: 50px 10px;">
			
			<?php if($ketqua == '00'){ ?>

	            <div class="table-responsive" style="text-align: center;">
	            	<div style="width: 100%; margin: 0 auto; margin-bottom: 30px;">
						<img src="<?php echo base_url('public/images/check.png') ?>" alt="" width="100" height="100" >
					</div>
	                <h3>Thông Tin Đơn Hàng</h3>
	                <div class="form-group">
	                    <label>Mã đơn hàng:</label>

	                    <label><?php echo $madonhang; ?></label>
	                </div>    
	                <div class="form-group">

	                    <label>Số tiền:</label>
	                    <label><?php echo number_format($sotien) . ' VND'; ?>                    

	                    </label>
	                </div>  
	                <div class="form-group">
	                    <label>Nội dung thanh toán:</label>
	                    <label><?php echo $noidung; ?></label>
	                </div>
	                <div class="form-group">
	                    <label>Mã GD Tại VNPAY:</label>
	                    <label><?php echo $magiaodichvnpay; ?></label>
	                </div> 
	                <div class="form-group">
	                    <label>Mã Ngân hàng:</label>
	                    <label><?php echo $nganhang; ?></label>
	                </div> 
	                <div class="form-group">
	                    <label>Thời gian thanh toán:</label>
	                    <label>
	                    <?php echo $ngaytao; ?></label>
	                </div> 
	                <div class="form-group">
	                    <label>Kết quả:</label>
	                    <?php if ($ketqua == '00'): ?>
	                    	<label>
		                        <span style="color:blue">GD Thành Công</span>
		                    </label>
	                    <?php endif ?>
	                </div> 
	                <button class="btn" onclick="window.location.href='san-pham'"> <a href="http://localhost/phongcachdo/san-pham">Tiếp tục mua hàng</a></button>
	            </div>

	        <?php }else{ ?>
	        	<div class="table-responsive" style="text-align: center;">
	            	<div style="width: 100%; margin: 0 auto; margin-bottom: 30px;">
						<img src="<?php echo base_url('public/images/remove.png') ?>" alt="" width="100" height="100" >
					</div>
	                <h3>Giao dịch thất bại!</h3>
	                <br>
	                <button class="btn" onclick="window.location.href='san-pham'"> <a href="http://localhost/phongcachdo/san-pham">Tiếp tục mua hàng</a></button>
	            </div>
	        <?php } ?>
        </div>
</div>

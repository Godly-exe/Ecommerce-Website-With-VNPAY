<script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>

<section id="content">
    <div class="container account">
        <aside class="col-right sidebar col-md-3 col-xs-12">
            <div class="block block-account">
                <div class="general__title">
                    <h2 style="font-size: 20px; border-bottom: 3px solid rgb(89, 17, 17);; padding-bottom: 10px; width: fit-content; margin-bottom: 20px;"><span>Cá nhân</span></h2>
                </div>
                <div class="block-content">
                    <p>Tài khoản: <strong><?php echo $info['username'] ?></strong></p>
                    <p>Họ và tên: <strong><?php echo $info['fullname'] ?></strong></p>
                    <p>Email: <strong><?php echo $info['email'] ?></strong></p>
                    <p>Số điện thoại: <strong><?php echo $info['phone'] ?></strong></p>
                </div>
                <div class="general__title">
                    <h2 style="font-size: 20px; border-bottom: 3px solid rgb(89, 17, 17);; padding-bottom: 10px; width: fit-content; margin-bottom: 20px;"><span>Chức năng</span></h2>
                </div>    
                <div> 
                    <button class="btn"><a href="<?php echo base_url('khach-hang/ban-san-pham/'); ?>">Đăng sản phẩm</a></button>
                    <button class="btn"><a href="<?php echo base_url('khach-hang/san-pham/'); ?>">Quản lý sản phẩm</a></button>
                </div>
                <br>
                <div>
                    <button class="btn"><a href="reset_password">Đổi mật khẩu</a></button>
                    <button class="btn"><a href="<?php echo base_url('dang-xuat/'); ?>">Đăng xuất</a></button>
                </div>    
                
            </div>
        </aside>
        <div class="col-main col-md-9 col-sm-12">
            <div class="my-account">
                <div class="general__title">
                    <h2 style="text-align: center; font-size: 20px;"><span>Thông Tin Sản Phẩm</span></h2>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                      <?php if(isset($error)){ ?>
                        <span><?php echo $error; ?></span>
                      <?php } ?>
                      <?php if(isset($success)){ ?>
                        <span style="color: rgb(89, 17, 17);"><?php echo $success; ?></span>
                        <br>
                      <?php } ?>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tsp" class="form-label">Tên sản phẩm </label>
                        <input type="text" class="form-control" id="tsp" name="name" value="<?php echo $product[0]['name']; ?>" required disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lsp" class="form-label">Loại sản phẩm </label>
                        <select class="form-select form-control" id="lsp" name="catid" disabled>
                          <option value="<?php echo $product[0]['id']; ?>"><?php echo $product[0]['catename']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gg" class="form-label">Tổng số lượng đã nhập</label>
                        <input type="number" class="form-control" value="<?php echo $product[0]['number']; ?>" required disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gg" class="form-label">Số lượng đã bán</label>
                        <input type="number" class="form-control" value="<?php echo $product[0]['number_buy']; ?>" required disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gg" class="form-label">Số lượng còn hàng</label>
                        <input type="number" class="form-control" value="<?php echo $product[0]['number'] - $product[0]['number_buy']; ?>" required disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gg" class="form-label">Nhập số lượng nhập thêm <span>(*)</span></label>
                        <input type="number" class="form-control" min="1" value="1" name="importNumber" required>
                    </div>

                    <div class="text-right">
                      <a href="<?php echo base_url('khach-hang/san-pham/'); ?>" class="btn btn-secondary">Quay Lại</a>
                      <button type="submit" class="btn btn-primary">Nhập Hàng</button>
                    </div>
                  </form>
            </div>
        </div>
</section>
<style type="text/css">
  .form-control:focus {
    box-shadow: none;
  }

  .form-control:disabled{
    background: #eeeeee;
  }

  .form-control{
    border-radius: 0px;
    font-size: 15px;
  }

  label{
    font-size: 14px;
  }

  span{
    color: red;
  }

  h2 span{
    color: black;
  }

  li span{
    color: black;
  }

  .d-flex{
    display: flex;
  }

  .justify-content-between{
    justify-content: space-between;
  }

  .mb-3{
    margin-bottom: 16px;
  }

  .pb-5{
    padding-bottom: 48px;
  }

  .mt-5{
    margin-top: 48px;
  }

  .btn-secondary{
    background: #6c757d;
    color: white;
  }

  .btn-secondary:hover{
    color: white;
  }

  strong{
    color: black;
  }

  h2{
    color: black;
  }
</style>
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
                    <h2 style="font-size: 20px; border-bottom: 3px solid rgb(89, 17, 17); padding-bottom: 10px; width: fit-content; margin-bottom: 20px;"><span>Chức năng</span></h2>
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
                    <h2 style="text-align: center; font-size: 20px;"><span>Cập Nhật Thông Tin Sản Phẩm</span></h2>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                      <?php if(isset($error)){ ?>
                        <span><?php echo $error; ?></span>
                        <br>
                        <br>
                      <?php } ?>
                      <?php if(isset($success)){ ?>
                        <span style="color: rgb(89, 17, 17);"><?php echo $success; ?></span>
                        <br>
                        <br>
                      <?php } ?>
                    </div>
                    <div class="row d-flex justify-content-between mb-3 ">
                      <div class="col-md-7">
                        <label for="tsp" class="form-label">Tên sản phẩm <span>(*)</span> </label>
                        <input type="text" class="form-control" id="tsp" name="name" required value="<?php echo $product[0]['name']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="gg" class="form-label">Giá gốc <span>(*)</span></label>
                        <input type="number" class="form-control" id="gg" min="0" name="price_root" required value="<?php echo $product[0]['price']; ?>">
                      </div>
                    </div>

                    <div class="row d-flex justify-content-between mb-3 ">
                      <div class="col-md-7">
                        <div class="col-12 d-flex justify-content-between">
                          <div class="col-md-6">
                            <label for="lsp" class="form-label">Loại sản phẩm <span>(*)</span> </label>
                            <select class="form-select form-control" id="lsp" name="catid">
                              <?php foreach ($category as $key => $value): ?>
                                <?php if($value['id'] == $product[0]['catid']){ ?>
                                  <option value="<?php echo $value['id']; ?>" selected><?php echo $value['name']; ?></option>
                                <?php }else{ ?>
                                  <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                <?php } ?>
                              <?php endforeach ?>
                            </select>
                          </div>
                          <div class="col-md-5">
                            <label for="sl" class="form-label">Số lượng<span>(*)</span> </label>
                            <input type="number" min="1" value="<?php echo $product[0]['number']; ?>" class="form-control" id="sl" name="number" required>
                          </div>
                        </div>  
                      </div>
                      <div class="col-md-4">
                        <label for="gb" class="form-label">Giá bán <span>(*)</span></label>
                        <input type="number" class="form-control" id="gb" min="0" value="<?php echo $product[0]['price_sale']; ?>" name="price_buy" required>
                      </div>
                    </div>

                    <div class="row d-flex justify-content-between mb-3 ">
                      <div class="col-md-7">
                        <label for="tsp" class="form-label">Mô tả ngắn <span>(*)</span> </label>
                        <textarea class="form-control" rows="3" name="sortDesc" required><?php echo $product[0]['sortDesc']; ?></textarea>
                      </div>
                      <div class="col-md-4">
                        <label for="km" class="form-label">Khuyến mãi <span>(*)</span></label>
                        <input type="text" class="form-control" id="km" value="<?php echo $product[0]['sale']; ?>%" disabled required>
                      </div>
                    </div>

                    <div class="row d-flex justify-content-between mb-3 ">
                      <div class="col-md-8">
                        <label for="detail" class="form-label">Mô tả chi tiết <span>(*)</span></label>
                        <textarea id="detail" class="form-control" name="detail" required><?php echo $product[0]['detail']; ?></textarea>
                        <script> CKEDITOR.replace('detail', { height: '500px' }); </script>
                      </div>
                      <div class="col-md-3">
                          <div class="col-md-12 mb-3">
                              <label for="slt" class="form-label">Số lượng tồn kho</label>
                              <input type="text" id="slt" class="form-control" value="<?php echo $product[0]['number']; ?> sản phẩm" disabled>
                          </div>

                          <div class="col-md-12 mb-3">
                              <label for="slb" class="form-label">Số lượng đã bán</label>
                              <input type="text" id="slb" class="form-control" disabled value="<?php echo $product[0]['number_buy']; ?> sản phẩm">
                          </div>

                          <div class="col-md-12">
                              <label for="slb" class="form-label">Trạng Thái</label>
                              <?php if($product[0]['status'] == 1){ ?>
                                <input type="text" id="slb" class="form-control" disabled value="Đang giao bán">
                              <?php }else{ ?>
                                <input type="text" id="slb" class="form-control" disabled value="Chưa giao bán">
                              <?php } ?>
                          </div>
                      </div>
                    </div>
                    <div class="text-right">
                      <a href="<?php echo base_url('khach-hang/san-pham/'); ?>" class="btn btn-secondary">Quay Lại</a>
                      <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
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
    background: white;
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

  li span{
    color: black;
  }
  .form-control:disabled{
    background: #eeeeee;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#gb').on('input',function(e){
      let gg = $("#gg").val()
      if(gg != 0 && $(this).val() != '' && $(this).val() != 0 && parseInt(gg) >= parseInt($(this).val())){
        let km = parseInt(((parseInt(gg) - parseInt($(this).val())) / parseInt(gg)) * 100);
        $('#km').val(km + "%")
      }else{
        $('#km').val("0%")
      }
    });
  });
</script>